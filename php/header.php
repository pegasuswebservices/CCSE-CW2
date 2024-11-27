
<?php

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    $welcome_text = "Welcome back, " .$_SESSION['user_name'];
}else{
    $welcome_text="";
}

function headeractive($welcome_text){

    $current_page = basename($_SERVER['PHP_SELF']);

    $element = "

<header id='header'>
        <a href='#'><img src='img/headerlogo.png' class='logo' style='width: 150px;' alt=''></a>

        <div>
            <ul id='navbar'>
                <span>".$welcome_text ."</span>
                <li><a href='index.php' ".($current_page=='index.php' ? "class='active'" : "") .">Home</a></li>
                <li><a href='shop.php' " .($current_page=='shop.php' ? "class='active'" : "") .">Shop</a></li>
                <li><a href='blog.php' ".($current_page=='blog.php' ? "class='active'" : "") . ">Blog</a></li>
                <li><a href='about.php' " .($current_page=='about.php' ? "class='active'" : "") .">About</a></li>
                <li><a href='contact.php' " .($current_page=='contact.php' ? "class='active'" : "") .">Contact</a></li>
                <li id ='lg-bag'><a href='cart.php' ".($current_page=='cart.php' ? "class='active'" : "") ."><i class='fa-solid fa-bag-shopping'></i>";

                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);

                        $element .= "<span id='cart_count' class='text-warning'>$count</span>";
                    }else{
                       $element .= "<span id='cart_count' class='text-warning'>0</span>";
                    }


        $element .= "
                </a></li>
                <a href='#' id='close'><i class='fa-solid fa-x'></i></a>
            </ul>
        </div>
        <div id='mobile'>
            <a href='cart.php'><i class='fa-solid fa-bag-shopping'></i>0</a>
            <i id='bar' class='fas fa-outdent'></i>
        </div>



</header>

    ";

    echo $element;
}
?>


