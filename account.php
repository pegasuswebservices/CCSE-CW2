<?php

    $is_invalid = false;

    require_once('php/CartAmountTracker.php');

    if($_SERVER['REQUEST_METHOD']==='POST'){
        require_once('php/logindbconnect.php');

        $stmt = $mysqli->prepare("SELECT * FROM user WHERE email = ?");
        $stmt->bind_param("s", $_POST['email']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if($user){
            if(password_verify($_POST['password'], $user['password_hash'])){
                $_SESSION['user_id'] = $user['id'];
                echo('Login Succesfull');
                $_SESSION['logged_in'] = true;
                $_SESSION['user_name'] = $user['name'];
                header('Refresh: 3; url=index.php');
                exit;
            } else {
                $is_invalid = true;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once('php/headerscripts.php');
?>
</head>

<body>
<?php
    require_once('php/header.php');
    headeractive($welcome_text);
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:#38b6ff;" id="loginbox">
            <div class="featured-image">
                <img src="img/1.png" alt="" class="img-fluid" style="width:250px;">
            </div>
            <p><b>Login To Your Secure Cart Account</b></p>
            <small class="secondary-text" style="color:white;">Please Enter Your Email and Password</small>
        </div>

        <div class="col-md-6">
            <div class="row align-items-center justify-content-center d-flex right-box">
                <div class="header-text mb-2">
                    <p><b>Hello Again</b></p>
                    <p>We are happy to have you back with us at Secure Cart.</p>
                </div>
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? "") ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" name="password">
                    </div>
                    <div class="forgotpassword mb-2">
                        <small><a href="forgot.php" class="secondary-text text-decoration-none">Forgot Password?</a></small>
                    </div>
                    <div class="input-group mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <button class="rounded-4 py-2 signinbutton" type="submit" style="background:#ff8b38;">Sign In</button>
                    </div>
                    <div class="signup mt-3">
                        <small><span>Don't Have an Account? <b><a href="signup.php">Sign Up</a></b></span></small>
                    </div>
                </form>

                <?php if($is_invalid):?>    
                    <small style="color:red; font-weight:bold;">Login Details Invalid</small>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

</body>

<?php
    require_once('php/footer.php');
    footeractive($dashboard_redirect, $wishlist_redirect);
?>
