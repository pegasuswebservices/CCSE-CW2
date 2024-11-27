
<?php

    $is_invalid = false;


    //Code to ensure items added to cart stay consistent on this page
    require_once('php/CartAmountTracker.php');


    //to check if information has been submitted or not, we can check the server method. When the login page is first loaded the method will be GET
    //But when the form is submitted, the method will be POST

    if($_SERVER['REQUEST_METHOD']==='POST'){
        
        //----------we need to check that the email, and password hash submitted in the form, match that of a record in teh database

        //So first include the logindb php file so we can interact with it
        require_once('php/logindbconnect.php');


        //here we use sprintf  to substitute the email value into the SQL statement. But to be secure we need to escape the value from teh form to avoid SQLi attack.
        $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST['email']));
        
        //call the sql object
        $result = $mysqli->query($sql);

        //Get the data from the $result object
        $user = $result->fetch_assoc();

        //If the result of the user search exists
        //Now we hash the password and compare it with the password in the database.
        if($user){
            //we can use the password_verify() function to do this
                                                    // $user['password_hash']  locates the value of the password_hash column, for the given user
            if(password_verify($_POST['password'], $user['password_hash'])){

                //stores the unique ID of the USER from the USER TABLE, for the logged in user.
                $_SESSION['user_id'] = $user['id'];

                echo('Login Succesfull');

                //Set the session variable to logged in as true.
                $_SESSION['logged_in'] = true;

                //Catch pull the user's name from the $user table and assign it to global variable so can display it across store when logged in
                $_SESSION['user_name'] = $user['name'];
                header('Refresh: 3; url=index.php');
                exit;


            }else{
                //If the pairing cannont be found in the database, then set "$is_invalid" to true.
                //In the HTML for the page, we will use some php to display login invalid on the frontend
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




<!--Main Container--------------------->
<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!-- Login Container---------------->
    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <!-- Left box ------------------------->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:#38b6ff;" id="loginbox">
            <div class="featured-image">
                <img src="img/1.png" alt="" class="img-fluid" style="width:250px;">
            </div>
            <p><b>Login To Your Secure Cart Account</b></p>
            <small class="secondary-text" style="color:white;">Please Enter Your Email and Password</small>
        </div>

        <!-- Right Box ---------------------->
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
                    <small> <a href="forgot.php" class="secondary-text text-decoration-none">Forgot Password?</a></small>
                </div>
                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small>
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


