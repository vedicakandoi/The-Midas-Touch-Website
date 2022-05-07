-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql210.epizy.com
-- Generation Time: Mar 31, 2022 at 09:21 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31123646_themidastouch`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `customization` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`, `Username`, `customization`) VALUES
(7, 'vedicak', 'blue'),
(8, 'chris', 'none'),
(11, 'chris', 'song: happy birthday'),
(10, 'chris', '5th birthday, unicorn theme'),
(5, 'joeyy', 'Write \"Happy 10th birthday\", blue colour'),
(6, 'kanangupta', 'Write \"KG\"'),
(12, 'kanangupta', 'Pink theme birthday'),
(1, 'vvv', '6 Mihika');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(255) NOT NULL,
  `productID` int(255) NOT NULL,
  `customization` text NOT NULL,
  `dateOfPurchase` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `productID`, `customization`, `dateOfPurchase`, `username`) VALUES
(1, 5, 'Happy birthday Vihaan', '2021-10-21', 'joeyy'),
(2, 2, 'Bride: A Groom: D', '2021-10-21', 'joeyy'),
(3, 8, 'none', '2021-10-22', 'vedicakandoi'),
(4, 4, 'diwali', '2021-10-22', 'vedicakandoi'),
(5, 1, 'Kanan 2', '2021-10-22', 'kanangupta'),
(6, 11, 'Mann Bharya', '2021-10-22', 'kanangupta'),
(7, 9, 'name - kanan; theme - science', '2021-10-23', 'vedicakandoi'),
(11, 6, 'letter V', '2021-10-27', 'vedicakandoi'),
(12, 2, 'DA', '2022-02-02', 'vk'),
(13, 1, '6 mihika', '2022-02-21', 'vk'),
(14, 3, ',m,', '2022-02-22', 'hola'),
(15, 12, 'birthday, blue theme', '2022-02-23', 'vk'),
(16, 1, '21, vedica', '2022-02-23', 'vk'),
(17, 3, 'None', '2022-02-23', 'vk');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `details` text NOT NULL,
  `required` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `image`, `rating`, `price`, `details`, `required`) VALUES
(1, 'Age Cake Topper', 'age_cake_topper.JPG', 4, 250, 'Attach this on the surface of the cake to give it a more personalized look! Just provide us with the details required, and get this beautiful cake topper delivered at your doorstep!', 'Provide the name, age and colour for customization.'),
(2, 'Ring Platter', 'ring_platter.jpg', 4, 1500, 'It\'s a platter for two rings, consisting of cute floral decoration, a heart shaped picture of the couple and their initials carved on hanging rings. If you place the order, mail or send us the couple\'s image on whatsapp.', 'Provide the initials of the couple.'),
(3, 'Coffee Coasters', 'coffee_coaster.JPG', 2, 300, 'The pack consists of two square shaped coasters. It can be customized according to your needs or theme.', 'Mention all the details here if you want any customizations in this or in any theme. If not, write \'none\'.'),
(4, 'Table Decor Box', 'diwali_table_decor.jpg', 3, 4000, 'The standard box (for 4 people) consists of table mats, table runner, stirrers, napkin, centerpiece, photos, quotes, candles, fairy lights, menu, and more decorative items. This entire DIY kit will be customized according to your theme and requirements. Once you place the order. mail or send us a few pictures on whatsapp. If you want for more than 4 people, visit the \'Contact\' section and reach out to us.', 'Tell us your preferred theme, and other specific requirements, if any.'),
(5, 'Balloon Bouquet', 'balloon_bouquet.JPG', 5, 1500, 'This is the basic balloon bouquet in the theme of your choice. If you wish to buy a more extravagant one, visit the \'Contact\' section and reach out to us.', 'Tell us your preferred theme, and other specific requirements, if any.'),
(6, 'Coffee Mug', 'mug.jpg', 4, 250, 'The mug can be customized in any theme and any design. If you want multiple mugs for different people, give us the details for each mug clearly. (For example, the initials of each person you give it to)', 'Tell us the theme or design preferred, and the customization details.'),
(7, 'Baby Hamper', 'hamper.JPG', 5, 1000, 'This cute blue hamper consists of provision for little baby t-shirts hanging and a swinging teddy bear. You can put your preferred products after we send you the hamper, or you can send us the products. (Products cost not included in the mentioned price)', 'Pink, blue or yellow? Mention any other specific requirements, if any.'),
(8, 'Canopy Decor', 'canopy.JPG', 4, 2000, 'The kit consists of the canopy, balloons, and more decorative items. Very easy to assemble and very elegant to look at.', 'Mention any specific requirements, if any. If not, write \'none\'.'),
(9, 'Party Box', 'partybox.JPG', 4, 5000, 'This basic DIY party box consists of balloons, welcome banner, buntings, posters, props, thank you cards and a lot more decorative items, all in the theme of your choice. It\'s very easy to assemble.', 'Tell us your preferred theme, occasion, name and age of the person it is for and any other details you can give for customization.'),
(10, 'Party Props', 'props.JPG', 3, 700, 'Very good quality, customized props that will add some fun to your party pictures!', 'Mention the occasion, and theme/other requirements, if any. '),
(11, 'Spotify Keychain', 'spotify_keychain.JPG', 3, 300, 'Tell us your favorite song, send us your favorite photo, and get them in this cute keychain. Scan the keychain to play the song on spotify anytime. ', 'Details of the song to be put.'),
(12, 'Teepee Tent', 'teepee.jpg', 4, 1500, 'This beautiful tent goes with kids as well as adults occasions. It makes any place look great!', 'Tell us the occasion and any specific requirements, if any.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Username`, `Email`, `Password`) VALUES
('Vedica', 'artquakebyvedica', 'vedicaart@gmail.com', 'v'),
('Christie', 'chris', 'christie@gmail.com', 'chris1'),
('hola', 'hola', 'hola@gmail', '123'),
('Joe', 'joeyy', 'joe@gmail.com', '123joe'),
('Kanan', 'kanangupta', 'kanan30082002@gmail.com', 'k123'),
('Rupesh', 'Rup1', 'Rup1@smail.com', '1234'),
('Vedica Kandoi', 'vedicakandoi', 'vedica01@gmail.com', 'v123'),
('vedica', 'vk', 'vedica01@gmail.com', 'v'),
('Vedant', 'vkandoi', 'vedant@gmail.com', 'vedant'),
('Vedica', 'vvv', 'vedica01@gmail.com', 'vvv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
