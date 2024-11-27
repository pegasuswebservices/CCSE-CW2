<?php
    require_once('php/CartAmountTracker.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('php/headerscripts.php');?>

</head>



<body>


<?php

    require_once('php/header.php');
    headeractive($welcome_text);
?>


    <section id="shippinghero" class="herobanner">
        <h1>#Delivery Information</h1>
        <p><b>5 - 8 Day Delivery!</b></p>
    </section>

    <section id="Delivery" class="contentsection">
        <div class="DeliveryText">
            <h3>Our Shipping Policy</h3><br>
            <p>We are dedicated to making sure your order reaches you on time and in perfect condition. Here’s what you can expect from our shipping process:</p><br>
            <h3>Why Choose Secure Cart Shipping?</h3><br>
            <ul>
                <li><b>Fast and Reliable Delivery:</b> We partner with trusted carriers to ensure that your order is shipped promptly and reliably. Depending on your location, you can choose from various shipping options that fit your needs and timeframe.</li>
                <li><b>Secure Packaging: </b> Every product is packaged with care to protect it during transit. Our cold plunges and wellness products are carefully wrapped and secured, so they arrive in top-notch condition.</li>
                <li><b>Order Tracking:</b> Once your order is shipped, we’ll send you a tracking link so you can monitor its journey from our warehouse to your home. You’ll always know where your package is and when to expect it.</li>
                <li><b>Worldwide Shipping:</b> Wherever you are, we aim to deliver! We offer international shipping to bring our products to wellness enthusiasts around the world. Please note that shipping times may vary depending on the destination.</li>
            </ul><br>
            <h3>Our Commitment to You</h3><br>
            <p>We are committed to delivering not just high-quality products, but also <b>peace of mind</b>. Our seamless, secure shopping platform ensures that your cold plunge purchase is handled with the utmost care and security. From browsing our website to the moment your plunge arrives at your door, we guarantee a worry-free experience.</p>
        </div>
    </section>

    <section id="AuthorizedDealer">

        <div class="DealerText">
            <h3>Authorized Retailer</h3>
            <p>We Are Authorized Retailers For Every Brand We Offer.</p>
        </div>


        <section id="brandimages">
        <div class="logos">

            <div class="logos-slide">
                <img src="img/plungelogo.png" alt="" width="100px">
                <img src="img/icebarrel.png" alt="" width="100px">
                <img src="img/cdiplogo.png" alt="" width="100px">
                <img src="img/coldplungelogo.png" alt="" width="100px">
                <img src="img/icedesigns.png" alt="" width="100px">
                <img src="img/nordicspirit.png" alt="" width="100px">
                <img src="img/icetherapy.png" alt="" width="100px">
                <img src="img/recoverypro.png" alt="" width="100px">
                <img src="img/fastrecharge.png" alt="" width="100px">
                <img src="img/athleteschoice.png" alt="" width="100px">
            </div>
            <div class="logos-slide">
                <img src="img/plungelogo.png" alt="" width="100px">
                <img src="img/icebarrel.png" alt="" width="100px">
                <img src="img/cdiplogo.png" alt="" width="100px">
                <img src="img/coldplungelogo.png" alt="" width="100px">
                <img src="img/icedesigns.png" alt="" width="100px">
                <img src="img/nordicspirit.png" alt="" width="100px">
                <img src="img/icetherapy.png" alt="" width="100px">
                <img src="img/recoverypro.png" alt="" width="100px">
                <img src="img/fastrecharge.png" alt="" width="100px">
                <img src="img/athleteschoice.png" alt="" width="100px">
            </div>
     
        </div>
        

        </section>


    </section>

<section id="newsletter">

    <div class="newstext">
        <h4>Sign Up For Our Newsletter</h4>
        <p>Get E-mail updates about our latest discounts</p>
        <p>Your personal data is stored in accordance with GDPR regulations.</p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button>Sign Up!</button>
    </div>

</section>




<?php

    require_once('php/footer.php');
    footeractive($dashboard_redirect, $wishlist_redirect);
?>



    <script src="script.js"></script>
</body>

</html>