<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | The Midas Touch</title>
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
                        <li><a href="products.php" class="active">Products</a></li>
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

    <!-- ---------Products----------- -->
    <div class="small-container">
        <div class="row row-2">
            <h2>All Products</h2>
            <div class="sortby">
                <form action="#" method="post">
                    Sort by:
                    <select name="sortby" onChange="this.form.submit()">
                        <option value="default" selected hidden disabled>Default</option>
                        <option value="new">What's New</option>
                        <option value="low2high">Price: Low to High</option>
                        <option value="high2low">Price: High to Low</option>
                        <option value="popularity">Popularity</option>
                    </select>
                </form>
            </div>
        </div>


        <div class="row">
        <?php

            $con = mysqli_connect('localhost','root','');
            mysqli_select_db($con, 'themidastouch');

            $getProducts = "SELECT productID,productName,image,rating,price FROM products order by productID ASC";
            if(isset($_POST["sortby"])){
                if ($_POST['sortby'] == "low2high") {
                    $getProducts = "SELECT productID,productName,image,rating,price FROM products order by price ASC";
                } else if ($_POST['sortby'] == "high2low") {
                    $getProducts = "SELECT productID,productName,image,rating,price FROM products order by price DESC";
                } else if ($_POST['sortby'] == "new") {
                    $getProducts = "SELECT productID,productName,image,rating,price FROM products order by productID DESC";
                } else if ($_POST['sortby'] == "popularity") {
                    $getProducts = "SELECT productID,productName,image,rating,price FROM products order by rating DESC";
                }
            }

            $gotProducts = mysqli_query($con, $getProducts);
            $num = mysqli_num_rows($gotProducts);
            if ($num>0) {
                $counter = 0;
                while ($product = mysqli_fetch_array($gotProducts)) {
                ?>
                    <div class="col-4">
                        <a href="product-details.php?selectedProduct=<?php echo $product['productID'];?>">
                            <img src="images/products/<?php echo $product['image'];?>">
                            <h4><?php echo $product['productName'];?></h4>
                        </a>
                        <div class="rating">
                            <?php
                            $rating = $product['rating'];
                            while ($rating!=0) { ?>
                                <span class="material-icons-outlined">star</span>
                            <?php
                                $rating -= 1;
                            }
                            $rating = 5 - $product['rating'];
                            while ($rating!=0) { ?>
                                <span class="material-icons-outlined">star_border</span>
                            <?php
                                $rating -= 1;
                            } ?>
                        </div>
                        <p>₹<?php echo $product['price'];?></p>
                    </div>
                    <?php 
                        $counter = $counter + 1;
                        if ($counter%4 == 0) {
                        ?>
                        </div>
                        <div class="row">
                        <?php
                        }
                }
            }
            ?>
        </div>

        
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
</body>
</html>