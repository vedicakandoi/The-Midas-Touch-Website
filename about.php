<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | The Midas Touch</title>
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
                        <li><a href="about.php" class="active">About</a></li>
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

    <div class="small-container">
        <div class="about-us">
            <div class="heading">
                <h2>About Us</h2>
                <span>The Midas Touch started in 2017, with their first event being a baby shower. Ever since, they have taken around 1500 orders, none with a bad review! With more than 700 happy customers, The Midas Touch has proven each time that they are the best at what they do. Their motto, "turning events into memories" is something they actually do.</span>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-img card-img1"></div>
                    <div class="card-body">
                        <h3>Bethany Phillips</h3>
                        <span>Founder</span>
                        <p>Being the creative one, Bethany is the entire mastermind behind all the designs. She doesn't do it for money, she does it for passion.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img card-img2"></div>
                    <div class="card-body">
                        <h3>Kathleen Dudley</h3>
                        <span>CEO</span>
                        <p>Kathleen handles the administration work, the finances, and she's the ultimate customer helpline. Everyone loves talking to her.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img card-img3"></div>
                    <div class="card-body">
                        <h3>Evelyn Turner</h3>
                        <span>Designer</span>
                        <p>Evelyn joined the company in 2020 to help make the digital designs even better. Now, without her, work doesn't seem to be done.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery">
            <h2>Gallery</h2>
            <div class="gallery-row">
                <div class="gallery-column">
                    <img src="images/gallery/img (21).JPG">
                    <img src="images/gallery/img (13).jpg">
                    <img src="images/gallery/img (1).JPG">
                    <img src="images/gallery/img (16).JPG">
                    <img src="images/gallery/img (17).JPG">
                </div>
                <div class="gallery-column">
                    <img src="images/gallery/img (4).JPG">
                    <img src="images/gallery/img (9).jpg">
                    <img src="images/gallery/img (12).JPG">
                    <img src="images/gallery/img (15).JPG">
                    <img src="images/gallery/img (22).JPG">
                </div>
                <div class="gallery-column">
                    <img src="images/gallery/img (19).JPG">
                    <img src="images/gallery/img (2).JPG">
                    <img src="images/gallery/img (5).jpg">
                    <img src="images/gallery/img (7).JPG">
                    <img src="images/gallery/img (14).JPG">
                </div>
                <div class="gallery-column">
                    <img src="images/gallery/img (3).jpg">
                    <img src="images/gallery/img (11).JPG">
                    <img src="images/gallery/img (10).JPG">
                    <img src="images/gallery/img (6).JPG">
                    <img src="images/gallery/img (20).JPG">
                </div>
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
</body>
</html>