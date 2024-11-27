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



    <section id="abouthero" class="herobanner">
        <h1>#ABOUT US</h1>
        <p><b>Learn Our Story!</b></p>
    </section>

    <section id="About" class="contentsection">
        <div class="AboutText">
            <h3>Welcome to Secure Cart - Your Trusted Source</h3><br>
            <p>At Secure Cart, we're more than just an online store we are a community of wellness enthusiasts who understand the powerful benefits of cold therapy. Whether you’re an athlete, a biohacker, or someone looking for a rejuvenating health solution, our premium cold plunges are designed to meet your needs and elevate your wellness journey.</p><br>
            <h3>Our Mission</h3><br>
            <p>We believe in the healing power of cold therapy and its profound impact on mental and physical health. Our mission is to provide high-quality, secure, and convenient access to the best cold plunges on the market, all while ensuring that your shopping experience is as smooth and safe as possible. We take pride in offering products that help you embrace discomfort to improve overall well-being.</p><br>
            <h3>Why Choose Secure Cart?</h3><br>
            <ul>
                <li><b>Uncompromising Security</b> Your safety is our top priority. With advanced encryption technology and SSL-secure transactions, you can rest assured that your personal and payment information is protected. We uphold strict standards to ensure that your data remains private and secure.</li>
                <li><b>Premium Cold Plunges</b> We offer a curated selection of the best cold plunges available. Each product is chosen for its durability, effectiveness, and performance, so you can experience the many benefits of cold therapy from the comfort of your own home. From entry-level models to professional-grade plunges, we have something for everyone.</li>
                <li><b>Satisfaction Guarantee</b> At Secure Cart, we are not happy unless you are. That’s why we offer a 30-day satisfaction guarantee on all our products. If you have any questions or concerns, our dedicated customer support team is here to help you every step of the way.</li>
                <li><b>Expert Guidance</b> We are passionate about wellness and want to empower you with the knowledge and tools to get the most out of your cold therapy experience. Our blog features expert tips, guides, and success stories to inspire and support you on your health journey.</li>
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