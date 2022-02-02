<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | The Midas Touch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    if (!isset($_SESSION['currentUsername'])) { ?>
        <!-- ---------Header----------- -->
    <div class="header account-bg">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" width="100px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="icons">
                    <a href="account.php" class="iconbtn active-icon"><span class="material-icons">person</span></a>
                    <a href="cart.php" class="iconbtn"><span class="material-icons-outlined">shopping_cart</span></a>
                    <span class="material-icons-outlined menu-icon" onclick="menutoggle()">menu</span>
                </div>               
            </div>
            <div class="form-container">
                <div class="form-btn">
                    <span onclick="view_login()">Login</span>
                    <span onclick="view_register()">Register</span>
                    <hr id="indicator">
                </div>
                <form id="loginform" action="validation.php" method="post">
                    <input type="text" placeholder="Username" name="username0" required>
                    <input type="password" placeholder="Password" name="password0" required>
                    <input type="submit" class="btn" value="Login">
                    <a href="">Forgot Password</a>
                </form>
                <form id="regform" method="post" action="registration.php">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" class="btn" value="Register">
                </form>
            </div>
        </div>
    </div>
    <?php
    } else {
        header('location:myaccount.php');
    }
    ?>

    

    <!-- -------------JS for Toggle Menu------------ -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- -------------JS for Toggle Form------------ -->
    <script>
        var loginForm = document.getElementById("loginform");
        var regForm = document.getElementById("regform");
        var indicator = document.getElementById("indicator");
        function view_login() {
            regForm.style.transform = "translateX(300px)";
            loginForm.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0)";
        }
        function view_register() {
            regForm.style.transform = "translateX(0)";
            loginForm.style.transform = "translateX(0)";
            indicator.style.transform = "translateX(110px)";
        }
    </script>
</body>
</html>