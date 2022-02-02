<?php
    session_start();
    $currentUser = $_SESSION["currentUsername"];
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'themidastouch');
    $getCartItems = mysqli_query($con, "SELECT productID,customization FROM cart WHERE Username = '$currentUser'");
    while ($product = mysqli_fetch_array($getCartItems)) {
        $productID = $product['productID'];
        $custom = $product['customization'];
        $placeOrder = mysqli_query($con, "INSERT INTO orders (productID,customization,username) VALUES ('$productID','$custom','$currentUser')");
    }
    $removeFromCart = mysqli_query($con, "DELETE FROM cart WHERE Username = '$currentUser'");
    header('location:cart.php');
    echo "<script>alert('Order Placed! Thank you for buying!')</script>";
?>