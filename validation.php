<?php
    session_start();
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'themidastouch');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username0"];
        $password = $_POST["password0"];
    }
    $getUser = mysqli_query($con, "SELECT * from users where Username = '$username' and Password = '$password'");
    $row = mysqli_fetch_array($getUser);
    if (is_array($row)) {
        header('location:myaccount.php');
        $_SESSION["currentUsername"] = $username;
        $_SESSION["currentPassword"] = $password;
        $_SESSION["currentEmail"] = $row['Email'];
        $_SESSION["currentName"] = $row['Name'];
    } else {
        echo "<script>alert('Invalid username or password.')</script>";
    }
?>