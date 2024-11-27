<?php
    require_once('php/CartAmountTracker.php');
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



    <section id="contacthero" class="herobanner">
        <h1>#CONTACT US</h1>
        <p><b>9:00 - 18:00 . Mon - Sat</b></p>
    </section>

    <section id="Contact" class="contentsection">
        <div class="ContactText">
            <h3>We’re Here to Help You – Get in Touch with Secure Cart</h3><br>
            <p>At Secure Cart, your satisfaction is our priority. Whether you have questions about our cold plunge products, need help with your order, or want to learn more about cold therapy, our team is here to assist you. We’re dedicated to providing a secure, friendly, and responsive customer service experience.</p><br>
            <h3>How to Reach Us</h3><br>
            <ul>
                <li><b>Email Support: </b>Reach out to us anytime via <a href="mailto:support@securecart.com">support@securecart.com</a>. We aim to respond to any inquiries within 24 hours.</li>
                <li><b>Phone Support: </b>Give us a call at <a href="tel:+0123456780">+012345678</a></li>
                <li><b>Fill In Our Contact Form Below </b>We respond to all inquiries within 1 business day.</li>
            </ul><br><br>

            <h3>Contact Us</h3><br>
            <form action="submit" method="POST" class="ContactForm">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Name" required>


                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter Email" required>

                <label for="message">Your Message</label>
                <input type="text" id="message" name="message" placeholder="Enter Message" required>

                <button action="submit" class="defaultbtn"><b>Send Messaage</b></button>
            </form><br><br>


            <h3>Our Commitment to You</h3><br>
            <p>We are committed to delivering not just high-quality products, but also <b>peace of mind</b>. Our seamless, secure shopping platform ensures that your cold plunge purchase is handled with the utmost care and security. From browsing our website to the moment your plunge arrives at your door, we guarantee a worry-free experience.</p><br>
            <br><h3>Our Address:</h3><br>
            <ul class="AddressLines">
                <li>123 Fakestreet</li>
                <li>San Francisco</li>
                <li>Bermuda Triangle</li>
            </ul>
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