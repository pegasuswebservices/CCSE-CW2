<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
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



    <section id="hero">
        <h4>2024 Anniversary Sale</h4>
        <h2>The #1 Cold Plunge Store</h2>
        <h1>Over 500+ USA Brands</h1>
        <p>Get $300 Off Your First Order With Coupon Code "BIGHUS"</p>
        <a href="shop.php"><button>Shop Now</button></a>

    </section>

    <section id="features" class="section-p1">
        <div class="fe-box">
            <i class="fa-solid fa-truck" id="featureicon"></i>
            <h6>Free Shipping on All Orders</h6>
        </div>
        <div class="fe-box">
            <i class="fa-solid fa-shield" id="featureicon"></i>
            <h6>Manufacturer Warranty</h6>
        </div>
        <div class="fe-box">
            <i class="fa-solid fa-flag-usa" id="featureicon"></i>
            <h6>Large Collection of USA Brands</h6>
        </div>
        <div class="fe-box">
            <i class="fa-solid fa-piggy-bank" id="featureicon"></i>
            <h6>Price Match Guarantee</h6>
        </div>
        <div class="fe-box" id="hideonmobile">
            <i class="fa-solid fa-users" id="featureicon"></i>
            <h6>24/7 Customer Support</h6>
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

    <section id="product1" class="section-p1" >
        <h2>Our Products</h2>
        <p>View Our Wide Range of Products<br></br></p>

        <div class="centercontainer">

        <?php
            //Pull products from database
            $result=$database->getDataFirst4();
            while($row=mysqli_fetch_assoc($result)){
                component($row['brand'],$row['producttitle'], $row['productimage'], $row['price'], $row['id']);
            }
        ?>
        

        </div>

        </div>

    </section>

    <section id="banner">
        <h2>Explore Our <u>NEW</u> Water Chillers</h2>
        <h4>Up To 70% Off On Selected Models</h4>
        <a href="shop.php"><button>Discover The Range</button></a>
    </section>

    <section id="product1" class="section-p1" >
        <h2>Our Bestsellers</h2>
        <p>View Our Bestsellers<br></br></p>

        <div class="centercontainer">

        <?php
            //Pull products from database
            $result=$database->getDataLast4();
            while($row=mysqli_fetch_assoc($result)){
                component($row['brand'],$row['producttitle'], $row['productimage'], $row['price'], $row['id']);
            }
        ?>
        

        </div>

        </div>

    </section>


<section class="sidepadding">
<section id="sm-banner">
    <div class="banner-box">
        <h4>Anniversary Sale</h4>
        <h2>Buy 1 Tub Get 1 Free</h2>
        <span>Our Tubs Are Rated #1 on Amazon</span>
        <a href="shop.php"><button>View Tubs</button></a>
    </div>

    <div class="banner-box banner-box2">
        <h4>70% Off Sauna SALE!</h4>
        <h2>Save Up To $3,000!</h2>
        <span>All Saunas Include Free Warranty</span>
        <a href="shop.php"><button>View Saunas</button></a>
    </div>
</section>


<section id="banner3">

    <div class="banner-box banner31">
        <h3>Water Chillers</h3>
        <span>Cool Your Tubs To 50F</span>
    </div>

    <div class="banner-box banner32">
        <h3>New Red Light Therapy</h3>
        <span>Sale Ending In 10 Days</span>
    </div>

    <div class="banner-box banner33">
        <h3>Steam Showers</h3>
        <span>Spa Experience In Your Home</span>
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