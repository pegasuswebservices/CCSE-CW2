<?php

//Redirects for the Account and Wishlisht pages, if users are logged in, and if they are not.
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    $dashboard_redirect = 'userdashboard.php';
    $wishlist_redirect = 'wishlist.php';
}else{
    //If the user login varibale is not set, then when clicks on "My Account" will get redirected to the sign up page.
    $dashboard_redirect = 'account.php';
    $wishlist_redirect = 'account.php';
}







function footeractive($dashboard_redirect, $wishlist_redirect){

    $current_page = basename($_SERVER['PHP_SELF']);

    $element = "
    
    <section class='fullfooter'>
<footer class='section-p1'>
    <div class='col_1'>
        <h4>Contact</h4>
        <p><b>Address:</b> 123 Fakestreet, San Francisco, Bermuda Triangle</p>
        <p><b>Phone:</b> +012345678</p>
        <p><b>Availability:</b> 9:00 - 18:00. Mon - Sat</p>
        <br>
        <p><b>Follow Us</b></p>
        <span><i class='fa-brands fa-instagram'></i><i class='fa-brands fa-facebook'></i><i class='fa-brands fa-pinterest'></i></span>
    </div>

    <div class='col_2'>
        <h4>About</h4>
        <ul id='footermenu1'>
            <li><a href='about.php' " . ($current_page=='about.php' ? "class='active'" : "") . ">About</a></li>
            <li><a href='shipping.php' " . ($current_page=='shipping.php'? "class='active'" : ""). ">Delivery Information</a></li>
            <li><a href='privacy.php' " .($current_page=='privacy.php'? "class='active'" : ""). ">Privacy Policy</a></li>
            <li><a href='terms.php' ". ($current_page=='terms.php' ? "class='active'" : ""). ">Terms & Conditions</a></li>
            <li><a href='contact.php' " .($current_page=='contact.php'?"class='active'" :"").">Contact Us</a></li>
        </ul>
    </div>

    <div class='col_3'>
        <h4>Account</h4>
        <ul id='footermenu2'>
            <li><a href='" . $dashboard_redirect ."'" . ($current_page=='userdashboard.php'?"class='active'":"").">My Account</a></li>
            <li><a href='cart.php'" . ($current_page=='cart.php'?"class='active'":"").">View Cart</a></li>
            <li><a href='". $wishlist_redirect ."'" . ($current_page=='wishlist.php'?"class='active'":"").">Wishlist</a></li>
            <li><a href='trackorder.php'".($current_page=='trackorder.php'?"class='active'":"").">Track My Order</a></li>
        </ul>
    </div>

    <div class='col_4'>
        <h4>Our Mission</h4>
        <p>SecureCart is the #1 cold plunge supplier globally. We have supplied to both B2C and B2B customers for over 20 years. We would be delighted to meet your cold plunge and wellness needs.</p>
        <h5>Secure Payment Gateways</h5>
        
        <div class='paymenticons'>
            <img src='img/mastercard.png'>
            <img src='img/visa.png'>
            <img src='img/amex.png'>
        </div>

    </div>
    

</footer>
<div class='copyright'>
    <p><b>© Big Hus LLC, 2024</b></p>
</div>
</section>
    

    ";


    echo $element;


}

