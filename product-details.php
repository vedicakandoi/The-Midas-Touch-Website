<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details | The Midas Touch</title>
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
                    <a href="cart.php" class="iconbtn"><span class="material-icons-outlined">shopping_cart</span></a>
                    <span class="material-icons-outlined menu-icon" onclick="menutoggle()">menu</span>
                </div>               
            </div>
        </div>
    </div>

    <!-- ---------Single Product Details----------- -->
    <?php

        if(isset($_GET["selectedProduct"])){
            $selectedProduct = $_GET["selectedProduct"];
        }
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'themidastouch');
        $getProduct = mysqli_query($con, "SELECT * FROM products where productID = '$selectedProduct'");
        $row = mysqli_fetch_array($getProduct);
        if(is_array($row)) {
            $_SESSION['selectedProduct'] = $row['productID'];
            $selectedImage = $row['image'];
            $selectedName = $row['productName'];
            $selectedPrice = $row['price'];
            $selectedRequired = $row['required'];
            $selectedDetails = $row['details'];
            $selectedRating = $row['rating'];
        }

    ?>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/products/<?php echo $selectedImage; ?>">
            </div>
            <div class="col-2">
                <span><?php echo $selectedName; ?></span>
                <div class="rating">
                        <?php
                            $rating = $selectedRating;
                            while ($rating!=0) { ?>
                                <span class="material-icons-outlined">star</span>
                            <?php
                                $rating -= 1;
                            }
                            $rating = 5 - $selectedRating;
                            while ($rating!=0) { ?>
                                <span class="material-icons-outlined">star_border</span>
                            <?php
                                $rating -= 1;
                            } 
                        ?>
                </div>
                <h4>₹<?php echo $selectedPrice;?></h4>
                <form action="addtocart.php" method="post">
                    <textarea id="customization" name="custom" cols="30" rows="10" placeholder="<?php echo $selectedRequired;?>" required></textarea>
                    <input type="submit" class="btn" value="Add to Cart">
                </form>
                <br><h3>Product Details</h3>
                <p><?php echo $selectedDetails;?></p>
            </div>
        </div>
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

    <!-- -------------JS for Textarea------------ -->
    <script>
        const ele = document.getElementById('customization');
        ele.addEventListener('keydown', function (e) {
            const keyCode = e.which || e.keyCode;
            if (keyCode === 13) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>