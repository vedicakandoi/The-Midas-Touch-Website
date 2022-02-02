<?php
    session_start();
    if (isset($_SESSION['currentUsername'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customization = $_POST["custom"];
            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con,'themidastouch');
            $selectedProduct = $_SESSION['selectedProduct'];
            $Username = $_SESSION['currentUsername'];
            $addToCart = mysqli_query($con, "INSERT INTO cart (productID, Username, customization) VALUES ('$selectedProduct', '$Username','$customization')");
        } else {
            echo "<script>alert('Facing some issue. Try again later.')</script>";
        }
    }
    header('location:cart.php');
?>