
<?php
    session_start();
    include("connect.php");
        //check if product is already in the cart
        if(!in_array($_GET['id'], $_SESSION['cart'])){
        array_push($_SESSION['cart'], $_GET['id']);
    }
    else{
        $_SESSION['message'] = 'Product already in cart';
    }
 
    header('location: womensproducts.php');
    
?>