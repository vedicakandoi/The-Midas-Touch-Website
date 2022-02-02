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
                        <li><a href="about.php">About</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="events.php">Events</a></li>
                        <li><a href="contact.php" class="active">Contact</a></li>
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

    <div class="small-container contact-us">
        <div class="row">
            <div class="col-2">
                <h2>Contact Us</h2><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.8413513139253!2d72.88190541490174!3d19.114614587065763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8117de0c5eb%3A0x4cec07552e07ec8!2sVasant%20Oasis!5e0!3m2!1sen!2sin!4v1634217251799!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <br><br><span>Ways to Get in Touch</span>
                <ul class="get-in-touch">
                    <li>Instagram: @themidastouchhhh</li>
                    <li>Facebook: The Midas Touch</li>
                    <li>Call or Whatsapp: +919773833422</li>
                    <li>Mail: vedica.kandoi39@nmims.edu.in</li>
                </ul>
            </div>
            <div class="col-2">
                <h2>FAQs</h2><br>
                <ul class="faqs">
                    <li>
                        <span>How long does it take to deliver the item?</span><br>
                        <p>If the shipping address is in Mumbai, the item will be delivered in 4 days after we confirm the order. If any other place in India, the item will be delivered in 7 days after we confirm the order. If outside India, the item will be delivered in 14 days after we confirm the order.</p>
                    </li>
                    <li>
                        <span>Do you provide event services other than decoration?</span>
                        <p>Yes, we provide staff for fun activities on events. Send us a request for event decoration to know more.</p>
                    </li>
                    <li>
                        <span>Are the product costs inclusive of taxes and shipping?</span>
                        <p>They are inclusive of taxes. Shipping cost will be added when you confirm the shipping address while placing the order.</p>
                    </li>
                </ul>
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