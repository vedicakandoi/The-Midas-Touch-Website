<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | The Midas Touch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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
                    <a href="account.php" class="iconbtn"><span class="material-icons">person</span></a>
                    <a href="cart.php" class="iconbtn active-icon"><span class="material-icons-outlined">shopping_cart</span></a>
                    <span class="material-icons-outlined menu-icon" onclick="menutoggle()">menu</span>
                </div>               
            </div>
        </div>
    </div>
    
    <!-- ---------Cart items----------- -->

    <div class="small-container cart-page">
        <h2>Your Cart</h2><br>
    <?php
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'themidastouch');
        if (isset($_SESSION['currentUsername'])) {
            $currentUsername = $_SESSION['currentUsername'];
            $getCartItems = mysqli_query($con, "SELECT productID, customization FROM cart where Username = '$currentUsername'");
            $num = mysqli_num_rows($getCartItems);
            $subtotal = 0;
            if ($num>0) {
                ?>
                
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Customization</th>
                            <th>Amount</th>
                        </tr>
                        <?php
                        while ($product = mysqli_fetch_array($getCartItems)) {
                            $ID = $product['productID'];
                            $getProduct = mysqli_query($con, "SELECT * FROM products where productID = $ID");
                            $row = mysqli_fetch_array($getProduct);
                            if(is_array($row)) {
                                $Image = $row['image'];
                                $Name = $row['productName'];
                                $Price = $row['price'];
                            }
                            ?>
                            <tr>
                                <td> 
                                    <div class="cart-info">
                                        <a href="product-details.php?selectedProduct=<?php echo $ID;?>">
                                        <img src="images/products/<?php echo $Image;?>"> </a>
                                        <div>
                                            <p><?php echo $Name;?></p>
                                            <a href="remove.php?removeItem=<?php echo $ID;?>&custom=<?php echo $product['customization'];?>">Remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $product['customization'];?>
                                </td>
                                <td>₹<?php echo $Price;?></td>
                            </tr>
                        <?php 
                        $subtotal += $Price;
                        }
                        ?>
                        </table>
                        <div class="total-price">
                            <table>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>₹<?php echo $subtotal;?></td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>₹<?php $tax = 0.1*$subtotal; echo $tax;?></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>₹<?php echo $subtotal+$tax;?></td>
                                </tr>
                                <tr>
                                    <td><a href="order.php"><div class="btn" style="cursor:pointer;">Place Order</div></a></td>
                                </tr>
                            </table>
                        </div>
                    <?php    
                    } else {
                        echo "Your cart is empty! :(<br><br><br><br><br>";
                    }
        } else {
            echo "Please login to view your cart.<br><br><br><br><br>";
        }
        ?>
        </div>
        
    
    <!-- ---------Footer----------- -->
    <?php include 'footer.php'; ?>

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