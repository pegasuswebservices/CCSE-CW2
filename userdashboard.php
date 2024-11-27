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




<!-----------------------MAIN CONTAINER (GREEN)---------------------------->
<div class="container-fluid row border border-success rounded-5 p-3 bg-white shadow box-area maincontainer d-flex justify-content-center align-items-center min-vh-50 min-vw-50">
    

    <!-----------LEFT BOX (BLUE)---------------------------------------------->
    <div class="col-md-4 left-box border border-primary rounded-3 p-4 row">
        <span class="welcometext"><?php echo"<b><span>".$welcome_text."</span></b>";?>

    

        <form action="php/logout.php" class="logoutform_dashboard">
            <button type="submit" class="btn btn-warning btn-small btn-block"><i class="fa-solid fa-hand-middle-finger"></i> Log Out</button>
        </form>
    </div>
    <!------------------------------------------------------------------->





    <!-------------RIGHT BOX (RED)---------------------------------------------->

    <div class="col-md-4 right-box border border-danger rounded-3 p-4">



    </div>
    <!---------------------------------------------------------------------->


</div>


















<?php   
    require_once('php/footer.php');
    footeractive($dashboard_redirect, $wishlist_redirect);

?>

</body>