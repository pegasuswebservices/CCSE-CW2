


<?php

    //Cart Amount Tracker and DB Initilisation

    //Start user session
    session_start();
    
    $current_page=basename($_SERVER['PHP_SELF']);
    require_once('php/CreateDB.php');
    require_once('php/component.php');

    //Create instance of CreateDB Class
    $database = new CreateDB($dbname='if0_37577160_newdb', $tablename='producttb');

    //return product ID when click on add to cart button
    if(isset($_POST['add'])){
        ///print_r($_POST['product_id']);

        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'],'product_id');
           
            
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product has already been added to cart.')</script>";
                echo"<script>window.location='$current_page'</script>";
            }else{
                
                //$count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id'=>$_POST['product_id']
                );

                $_SESSION['cart'][] = $item_array;
                //print_r($_SESSION['cart']);
                echo"<script>alert('Product Added To Cart')</script>";
    
            }

        }else{

            $item_array = array(
                'product_id'=>$_POST['product_id']
            );


            //Create new session variable

            $_SESSION['cart'] = array($item_array);
            //print_r($_SESSION['cart']);
        }
    }


?>