<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | The Midas Touch</title>
    <link rel="stylesheet" href="mainstyle.css">
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
                        <li><a href="index.php" class="active">Home</a></li>
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
            <div class="row">
                <div class="col-2">
                    <h1>Turning Events Into<br>Memories!</h1>
                    <p>Memories that you can cherish forever! We put in our best into every single order, making it as close to your heart as possible.</p>
                    <a href="#bestsellers" class="btn explore">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/homeimg.png">
                </div>
            </div>
        </div>
    </div>
    
    <!-- ---------Bestsellers----------- -->
    <div class="small-container" id="bestsellers">
        <?php
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'themidastouch');
        $getProducts = mysqli_query($con, "SELECT productID,productName,image,rating,price FROM products where rating=4 or rating=5 order by rating DESC");
        $num = mysqli_num_rows($getProducts);
        if ($num>0) {
            ?>
            <h2 class="title">Our Bestsellers</h2>
            <div class="row">
            <?php
            $counter = 0;
            while ($product = mysqli_fetch_array($getProducts)) {
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
        </div>

    <!-- ---------Exclusive----------- -->
    <div class="exclusive">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/festivehamper.png" class="exclusive-img">
                </div>
                <div class="col-2">
                    <p>Exclusive for the festive season!</p>
                    <h1>Diwali Gift Hamper</h1>
                    <small>This exclusive hamper can be ordered by giving us a call. Tell us your requirements, who it is for, the gift items you want to put in it. Can't figure that out? No worries, give us a call and we'll consult you. You can place bulk orders to gift all your relatives, or corporate purposes as well. Again, just give us a call and it's done!</small><br>
                    <a href="tel:9773833422" class="btn">Call To Place an Order</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------Top Categories----------- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/top categories/candy party box.JPG">
                </div>
                <div class="col-3">
                    <img src="images/top categories/coin hamper.JPG">
                </div>
                <div class="col-3">
                    <img src="images/top categories/floral balloon bouquet.JPG">
                </div>
            </div>
        </div>
    </div>

    <!-- ---------Testimonials----------- -->
    <div class="testimonials">
        <div class="small-container">
            <h2 class="title">Testimonials</h2>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>The Midas Touch did an incredible, incredible job on my engagement ceremony decorations. My most favourite were the centre pieces with our bitmojis.</p>
                    <div class="rating">
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                    </div>
                    <img src="images/users/christie-campbell.jpg">
                    <h3>Christie Campbell</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Thank you Midas Touch for making my wife's birthday more special than what was expected. Very classy and lovely arrangements! It made her day.</p>
                    <div class="rating">
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star_half</span>
                    </div>
                    <img src="images/users/abdullah-ali.jpg">
                    <h3>Abdullah Ali</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Ordered a party box for my friend. Not only was it pretty, but if you are running short on time and have to get something very beautiful, this is the place to go!</p>
                    <div class="rating">
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star</span>
                        <span class="material-icons-outlined">star_border</span>
                    </div>
                    <img src="images/users/seth-doyle.jpg">
                    <h3>Seth Doyle</h3>
                </div>
            </div>
        </div>
    </div>

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