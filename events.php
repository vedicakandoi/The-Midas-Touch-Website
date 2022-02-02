<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | The Midas Touch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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
                        <li><a href="events.php" class="active">Events</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="icons">
                    <a href="account.php" class="iconbtn"><span class="material-icons">person</span></a>
                    <a href="cart.php" class="iconbtn"><span class="material-icons-outlined">shopping_cart</span></a>
                    <span class="material-icons-outlined menu-icon" onclick="menutoggle()">menu</span>
                </div>               
            </div>
            <div class="events-page">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/homeimg.png" width=100%>
                        </div>
                        <div class="col-2">
                            <div class="events-form">
                                <span>Request Event Decoration</span>
                                <form action="sendrequest.php" method="post">
                                    <input type="text" name="occasion" placeholder="Occasion" required><br>
                                    <input type="date" name="date" id="" required><br>
                                    <input type="text" name="location" placeholder="Location" required><br>
                                    <input type="text" name="theme" placeholder="Theme preferences"><br>
                                    <textarea name="specifics" id="specifics" cols="30" rows="10" placeholder="Any specific requirements"></textarea>
                                    <button type="submit" class="btn">Send request</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

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

</body>
</html>