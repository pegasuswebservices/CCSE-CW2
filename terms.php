
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


    <section id="termshero" class="herobanner">
        <h1>#Terms and Conditions</h1>
        <p><b>Please Read Our Terms Below</b></p>
    </section>

    <section id="Terms" class="contentsection">
        <div class="TermsText">
            <h3>Terms and Conditions</h3>

            <p>Welcome to Secure Cart! By using our website and purchasing our products, you agree to comply with and be bound by the following terms and conditions. Please read them carefully.</p>
            
            <h3>1. Acceptance of Terms</h3>
            <p>By accessing our website and purchasing products from Secure Cart, you agree to these Terms and Conditions. If you do not agree to these terms, please refrain from using our website.</p>
            
            <h3>2. Products and Pricing</h3>
            <ul>
                <li><strong>Availability:</strong> All products listed on our website are subject to availability. We reserve the right to limit the quantity of any product we supply or discontinue any product at any time.</li>
                <li><strong>Pricing:</strong> We strive to ensure all prices listed on our website are accurate. However, in case of any errors, we reserve the right to correct them. Prices are subject to change without notice.</li>
                <li><strong>Payment:</strong> By placing an order, you agree to provide current, complete, and accurate purchase information. We accept various payment methods, and all payments are subject to authorization and verification.</li>
            </ul>
            
            <h3>3. Orders and Cancellations</h3>
            <ul>
                <li><strong>Order Confirmation:</strong> After placing an order, you will receive an order confirmation via email. This confirmation does not signify our acceptance of your order. We reserve the right to accept or reject your order at any time.</li>
                <li><strong>Cancellations:</strong> You may cancel your order before it has been shipped. Once the order has been shipped, you may refer to our return policy.</li>
            </ul>
            
            <h3>4. Shipping and Delivery</h3>
            <p>We aim to provide timely delivery of all orders. However, we are not responsible for delays caused by carriers or unforeseen circumstances. For more information, please refer to our <a href="shipping.php">Shipping Policy</a>.</p>
            
            <h3>5. Returns and Refunds</h3>
            <p>If you are not satisfied with your purchase, please refer to our <a href="shipping.php">Shipping Policy</a> for details on eligibility and process. Refunds are only issued after the returned item has been received and inspected.</p>
            
            <h3>6. Intellectual Property</h3>
            <p>All content on the Secure Cart website, including text, graphics, logos, and images, is the property of Secure Cart and is protected by copyright laws. You may not reproduce, distribute, or use any content without our express written permission.</p>
            
            <h3>7. User Conduct</h3>
            <p>When using our website, you agree not to:</p>
            <ul>
                <li>Violate any laws or regulations.</li>
                <li>Post or transmit harmful, threatening, or abusive content.</li>
                <li>Interfere with the website’s functionality or compromise its security.</li>
                <li>Use our website for unauthorized purposes or unauthorized access to systems.</li>
            </ul>
            
            <h3>8. Limitation of Liability</h3>
            <p>Secure Cart is not liable for any direct, indirect, incidental, or consequential damages resulting from the use of our website or products. This limitation applies to all damages of any kind, including loss of profits, data, or business interruptions.</p>
            
            <h3>9. Indemnification</h3>
            <p>You agree to indemnify and hold Secure Cart harmless from any claims, damages, losses, liabilities, and expenses (including legal fees) arising out of your use of our website, breach of these Terms and Conditions, or violation of any law or rights of a third party.</p>
            
            <h3>10. Privacy Policy</h3>
            <p>Your privacy is important to us. Please review our <a href="privacy.php">Privacy Policy</a> to understand how we collect, use, and safeguard your personal information.</p>
            
            <h3>11. Changes to Terms and Conditions</h3>
            <p>We reserve the right to modify these Terms and Conditions at any time. Any changes will be posted on this page, and continued use of our website after the changes constitute your acceptance of the new terms.</p>
            
            <h3>12. Governing Law</h3>
            <p>These Terms and Conditions are governed by the laws of [Your Country/Region], without regard to its conflict of law provisions.</p>
            
        
        
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