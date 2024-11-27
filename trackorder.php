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


    <section id="trackinghero" class="herobanner">
        <script type="text/javascript" src="//www.17track.net/externalcall.js"></script>
        <script type="text/javascript">
            //17Track order Tracking
            function doTrack() {
                var num = document.getElementById=("YQNum").value;
                if (num=""){
                    alert("Enter Your Order Number:")
                    return;
                }
            
                YQV5.trackSingle({
                    YQ_ContainerId:"YQContainer",
                    YQ_Height:560,
                    YQ_Fc:"0",
                    YQ_Lang:"en",
                    YQ_Num:num
            
                });
            }
        </script>


        <h1>#Track Your Order</h1>
        <p><b>Track Your Order Below</b></p>
    </section>

    <section id="Tracking" class="contentsection">
        <div class="TrackingText">
            <h3>Enter Your Order Number</h3>

            <p>Thank You For Your Order, Please Enter Your Number Below:</p>
            
            <input type="text" id="YQNum" maxlength="50">
            <input type="button" value="TRACK" onclick="doTrack()">
            <div id="YQContainer"></div>
        
        
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