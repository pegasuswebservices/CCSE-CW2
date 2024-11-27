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



    <section id="privacyhero" class="herobanner">
        <h1>#Privacy Policy</h1>
        <p><b>Your Data Is Secure With Us</b></p>
    </section>

    <section id="Privacy" class="contentsection">
        <div class="PrivacyText">
            <h3>Our Privacy Policy</h3><br>
            <p>At Secure Cart, we prioritize your privacy and are committed to protecting your personal information. This Privacy Policy outlines how we collect, use, share, and protect your data when you use our website and services.</p><br>
            <h3>1. Information We Collect</h3><br>
            <p>We collect the following information to provide our services.</p>
            <br><ul>
                <li><b>Personal Information:</b> When you create an account, make a purchase, or contact us, we may collect personal details, including your name, email address, phone number, shipping address, and payment information.</li>
                <li><b>Device Information:</b> We collect technical information about the device you use to access our website, including IP address, browser type, operating system, and other diagnostic data.</li>
                <li><b>Usage Data:</b> We may collect information on how you navigate and use our website, including pages visited, time spent on each page, and other usage patterns.</li>
            </ul><br>
            <h3>2. How We Use Your Information</h3><br>
            <p>Your data helps us enhance your experience with Secure Cart.</p>
            <br><ul>
                <li><b>Order Processing: </b>We use your information to process and fulfill your orders, provide updates, and manage payments.</li>
                <li><b>Customer Support: </b>We may use your data to respond to inquiries, resolve issues, and offer customer support.</li>
                <li><b>Peronsalization: </b>Your data enables us to personalize your experience, suggesting relevant products based on your preferences.</li>
                <li><b>Marketing Communication: </b>With your consent, we may send newsletters, promotions, and other marketing materials. You can opt out of these at any time.</li>
                <li><b>Improving Our Services: </b>We use your data to understand how our services are used and to make improvements to our website and offerings.</li>
            </ul><br>
            <h3>3. Data Sharing and Disclosure</h3><br>
            <p>We may share your data with third parties only as necessary for specific purposes:</p>
            <br><ul>
                <li><b>Service Providers: </b>We work with third-party companies for payment processing, order fulfillment, and website hosting. These partners only access your information to perform tasks on our behalf and are obligated not to disclose or use it for any other purpose.</li>
                <li><b>Legal Compliance: </b>We may disclose your information if required by law, such as to comply with a subpoena or other legal process, or to protect our rights or the rights of others.</li>
                <li><b>Business Transfers: </b>If Secure Cart is involved in a merger, acquisition, or sale of assets, your data may be transferred as part of the business transaction. We will notify you before any such transfer occurs.</li>
            </ul><br>
            <h3>4. Data Security</h3><br>
            <p>We take the security of your data seriously. Secure Cart uses industry-standard measures to protect your personal information, including:</p>
            <br><ul>
                <li><b>Encryption: </b>We employ SSL encryption to protect your data during transmission.</li>
                <li><b>Access Controls: </b>Access to personal data is restricted to authorized personnel only.</li>
                <li><b>Regular Security Reviews: </b>We conduct regular security audits and assessments to maintain the highest level of protection.</li>
            </ul><br>
            <h3>5. Changes To This Policy</h3><br>
            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page, and we will notify you via email or a prominent notice on our website if the changes are significant. Your continued use of our services after these changes constitutes your acceptance of the new Privacy Policy.</p>
        
        
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