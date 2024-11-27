<?php

function component($brand, $producttitle, $productimage, $price, $productid){
    $element="
    
        <div class='product-container'>
            <div class='product'>
                <img src='$productimage' alt='' width='200px'>
                <div class='description'>
                    <span>$brand</span>
                    <h5>$producttitle</h5>
                    <div class='star'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                    </div>
                    <h4>$$price</h4>
                </div>

                <!-- For button submit to work, it needs to be wrapped in a form-->
                <form action='' method='POST'>
                    <button type='submit' class='addtocartbtn' name='add'>
                        <span><b>Add To Cart</b><a href='#'><i class='fa-solid fa-cart-shopping' style='color:white;'></i></a></span>
                    
                    </button>
                    <input type='hidden' name='product_id' value='$productid'>
                </form>
            </div>
        </div>
    ";

    echo $element;

}

function CartElement($productimage, $brand, $producttitle, $price, $productid){
    $element = "
    <form action='cart.php?action=remove&id=$productid' method='POST' class='cart-items'>
            <div class='border-rounded'>
                <div class='row bg-white'>
                    <div class='col-md-3'>
                        <img src='$productimage' alt='Image1' class='img-fluid' >
                    </div>

                    <div class='col-md-6'>
                        <h5 class='pt-2'>$producttitle</h5>
                        <small class='text-secondary'>Brand: $brand</small>
                        <h5 class='pt-2'>$$price</h5>
                        <button type='submit' class='btn btn-warning'>Save for later</button>
                        <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
                    </div>

                    <div class='col-md-3 py-5'>
                        
                    </div>

                </div>
            </div>
        </form>
    
    
    
    ";
    echo $element;
}


function OrderSummaryElement($productimage,$producttitle, $price){
    $element = "
    <tbody>
        <tr>
            <th scope='row'>1</th>
            <td><img src='$productimage' style='width:3em;'></td>
            <td>$producttitle</td>
            <td>$price</td>
        </tr>
    </tbody>
    
    ";
    echo $element;
}