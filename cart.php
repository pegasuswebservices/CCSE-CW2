<?php
    require_once('php/CartAmountTracker.php');

    if(isset($_POST['remove'])){
        if($_GET['action']=='remove'){
            foreach($_SESSION['cart'] as $key=>$value){
                if($value['product_id']==$_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo"<script>alert('Product has been removed')</script>";
                    if(empty($_SESSION['cart'])){
                        echo"<script>window.location='index.php'</script>";
                    }else{
                        echo"<script>window.location='cart.php'</script>";
                    }
                }
            }
        }

    }
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




<section id="carthero" class="herobanner">
    <h1>#Shopping Cart</h1>
    <p><b>We Have Processed Over 1500+ Orders</b></p>
</section>







<div class = "container-fluid">
    <div class="row px5">
        <div class="col-md-7">
            <div class="shopp-cart">
                <br>
                <br>
                <h4>My Cart</h4>
                <hr>

                <?php
                $total = 0;
                    if(isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], $column='product_id');

                        $result = $database->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach($product_id as $id){
                                if($row['id']==$id){
                                    CartElement($row['productimage'], $row['producttitle'], $row['brand'], $row['price'], $row['id']);
                                    $total = $total + (int)$row['price'];
                                }   
                            }
                        }
                    }else{
                        echo('<br><br><h1>Your Cart Is Empty</h1>');
                    }

                ?>
                

                <form action="cart.php"  method="get" class="cart-items">
                    <div class="border rounded">
                        <div class="row bg-white">
                            <div class="col-md-3"></div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>Price Details</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">

                        <?php
                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo"<h6>Price ($count items)</h6>";
                            }else{
                                echo"<h6>Price (0 items)</h6>";
                                die('You have no items in your cart');

                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                        <hr>
                        <!--checkout button form-->
                        <form method="POST" action="<?php echo ($count > 0) ? 'checkout.php' : 'cart.php'?>">
                        <button type="submit" class=""><i class="fa-solid fa-lock"></i>Proceed to Checkout</button>                  
                        </form>

                    </div>
                    <div class="col-md-6">
                        <h6>$<?php echo $total;?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php echo $total;?></h6>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>







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








<?php

    require_once('php/footer.php');
    footeractive($dashboard_redirect, $wishlist_redirect);

?>



<script src="script.js"></script>
</body>

</html>