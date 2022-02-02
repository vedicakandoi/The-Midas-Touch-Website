<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account | The Midas Touch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    if (isset($_SESSION['currentUsername'])) { ?>

        <!-- ---------Header----------- -->
    <div class="header">
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
                    <a href="account.php" class="iconbtn" class=active-icon><span class="material-icons">person</span></a>
                    <a href="cart.php" class="iconbtn"><span class="material-icons-outlined">shopping_cart</span></a>
                    <span class="material-icons-outlined menu-icon" onclick="menutoggle()">menu</span>
                </div>               
            </div>
        </div>
    </div>

    <div class="small-container cart-page myaccount">
            <h2 class="title">Hello,  <?php echo $_SESSION["currentName"]?>!</h2>
            <h2>Order History</h2><br>

            <?php
                $con = mysqli_connect('localhost','root','');
                mysqli_select_db($con, 'themidastouch');
                $currentUsername = $_SESSION['currentUsername'];
                $getOrderItems = mysqli_query($con, "SELECT * FROM orders WHERE username='$currentUsername'");
                $num = mysqli_num_rows($getOrderItems);
                if ($num>0) {
                    ?>
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Customization</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        while ($product = mysqli_fetch_array($getOrderItems)) {
                            $ID = $product['productID'];
                            $getProduct = mysqli_query($con, "SELECT * FROM products where productID = $ID");
                            $row = mysqli_fetch_array($getProduct);
                            if(is_array($row)) {
                                $Name = $row['productName'];
                                $Price = $row['price'];
                            }
                        ?>
                        <tr>
                            <td><?php echo $product['orderID'];?></td>
                            <td><?php echo $product['dateOfPurchase'];?></td>
                            <td><?php echo $row['productName'];?></td>
                            <td><?php echo $product['customization'];?></td>
                            <td>₹<?php echo 1.1*$row['price'];?></td>
                        </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                } else {
                    echo "No orders yet! :(<br><br><br><br><br>";
                }
            ?>
        <a href="logout.php" class="btn">Logout</a>
    </div>

    

    <!-- ---------Footer----------- -->
    <?php include 'footer.php';

    } else {
        header('location:account.php');
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
</body>
</html>