<?php
    session_start();

    if(isset($_GET["removeItem"])){
        $removeItem = $_GET["removeItem"];
        $custom = $_GET["custom"];
        $currentUser = $_SESSION["currentUsername"];
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'themidastouch');
        $removeFromCart = mysqli_query($con, "DELETE FROM cart WHERE Username = '$currentUser' AND productID = '$removeItem' AND customization = '$custom'");
        header('location:cart.php');
    }
    
?>