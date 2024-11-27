
<?php
    require_once('php/CartAmountTracker.php');
?>



<!DOCTYPE  html>
<html lang="en">

<head>

    <?php require_once('php/headerscripts.php');?>

</head>


<body>

    <?php require_once('php/header.php');
    headeractive($welcome_text);
    ?>

        <!--Main Container--------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!-- SignUP Container---------------->
    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <!-- Left box ------------------------->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:#38b6ff;" id="loginbox">
            <div class="featured-image">
                <img src="img/createaccount.png" alt="" class="img-fluid" style="width:250px;">
            </div>
            <p><b>Create Your Secure Cart Account</b></p>
            <small class="secondary-text" style="color:white;">We Are Excited To Welcome You!</small>
        </div>

        <!-- Right Box ---------------------->
        <div class="col-md-6">
            <div class="row align-items-center justify-content-center d-flex right-box">
                <div class="header-text mb-2">
                    <p><b>Thank Your For Choosing Secure Cart</b></p>
                    <p>Please Fill In Your Details Below to Create an Account:</p>
                </div>

                <form action='php/process_signup.php' method='POST'>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Name" name="name" id="name">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Email" name="email" id="email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Your Passsword" name="password" id="password">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirm Your Password" name="password_confirmation" id="password_confirmation">
                </div>

                <div class="input-group mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck" name="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Agree to our Terms and Conditions</small>
                    </div>
                </div>
                <div class="input-group mb-1">
                    <button class="rounded-4 py-2 signinbutton" style="background:#ff8b38;" type="submit">Create Account</button>
                </div>
                <div class="signup mt-3">
                    <small><span>Already Have an Account? <b><a href="account.php">Sign In</a></b></span></small>
                </div>

                </form>

            </div>
        </div>

    </div>
    </div>










<?php
    require_once('php/footer.php');
    footeractive($dashboard_redirect, $wishlist_redirect);
?>



</body>