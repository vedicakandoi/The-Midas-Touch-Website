<?php
    session_start();
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'themidastouch');

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET["name"];
        $username = $_GET["username"];
        $email = $_GET["email"];
        $password = $_GET["password"];
    } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    $s = "SELECT * from users where Username = '$username'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if ($num==1) {
        echo "<script>alert('Username Already Taken :(')</script>";
    } else {
        $reg = "INSERT INTO users (Name, Username, Email, Password) values ('$name', '$username', '$email', '$password')";
        mysqli_query($con, $reg);
        $_SESSION["currentUsername"] = $username;
        $_SESSION["currentPassword"] = $password;
        $_SESSION["currentEmail"] = $email;
        $_SESSION["currentName"] = $name;
        header('location:myaccount.php');
    }
?>