-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 11:07 PM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`) VALUES
(1, 'Chimamanda Ngozi Adichie'),
(2, 'Chinua Achebe'),
(6, 'Efo Kodjo Mawugbe'),
(7, 'Yaw Asare'),
(8, 'Peggy Oppong'),
(10, 'Kiru Taye'),
(11, 'Tahar Ben Jelloun'),
(12, 'Yaa Gyasi'),
(13, 'Tomi Ayedemi'),
(14, 'Joe Odiboh'),
(15, 'Nnedi Okorafor'),
(16, 'Amina Thula');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` int(11) NOT NULL,
  `book_genre` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `book_title` varchar(200) NOT NULL,
  `book_price` double NOT NULL,
  `book_desc` varchar(500) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `published_year` varchar(10) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `book_genre`, `author_id`, `book_title`, `book_price`, `book_desc`, `book_image`, `publisher`, `published_year`, `stock`) VALUES
(3, 1, 1, 'Half of a Yellow Sun', 100, 'Half of a Yellow Sun is a novel by Nigerian author Chimamanda Ngozi Adichie. Published in 2006 by Knopf/Anchor, the novel tells the story of the Biafran War through the perspective of the characters Olanna, Ugwu, and asdf.', 'images/products/Half-of-a-Yellow-Sun-fx.jpg', 'Knopf/Anchor', '2006', 47),
(4, 1, 2, 'Things Fall Apart', 300, 'skskkssk', 'images/products/81IRd5I5BGL.jpg', 'Knopf/Anchor', '1952', 18),
(5, 1, 6, 'In The Chest Of A Woman', 50, 'sksksksk', 'images/products/22479552.jpg', 'Isaac Books & Stationery services', '2008', 15),
(6, 1, 7, 'Ananse In The Land Of The Idiots', 25, 'skskskksks', 'images/products/Ananse-in-the-land-of-idiots.jpg', 'StudyGhana Foundation', '2006', 49),
(7, 4, 8, 'The Adventures Of Cleopas', 35, 'skskskskksksk cleo', 'images/products/Adventures-of-Cleopas.jpg', 'Peggy Oppong Books', '2011', 9),
(8, 3, 1, 'half ', 12, 'asdfa', 'images/products/42646222._SY475_.jpg', 'Peggy Oppong Books', '123', 123),
(9, 4, 8, 'The Lemon Suitcase', 100, 'Her brow was beaded with sweat and her heart was thumping furiously with fear as she watched the gunman standing in front of her, with only a desk separating them. Mabena felt trapped and her night caller knew it.\r\nâ€œFemale tiger,â€ he spat out the words, â€œyouâ€™ve overstepped your boundary this time around.\r\nBang! Bang!', 'images/products/The-Lemon-Suitcase.jpg', 'Peggy Oppong Books', '2010', 50),
(10, 3, 10, 'His Treasure (Men of Valor, # 1)', 250, 'A historical romance set in pre-colonial West Africa. A first of its kind. In a time when men ruled their households with firm hands, can a quiet man tame his rebellious wife with persevering love', 'images/products/kiru1.jpg', 'Breathless Press', '2011', 94),
(11, 4, 2, 'No Longer at ease', 320, 'The outstanding African novel about a young man in Lagos, torn between the old ways and the new.', 'images/products/nlae.jpg', 'AfriLove', '1984', 40),
(12, 3, 11, 'Happy Marriage', 240, 'A painter tells the story how his marriage collapsed as he is recovering from a stroke that he blames his wife for provoking; when his wife reads his account of these events, she gives her own side of the story.', 'images/products/happymar.jpg', 'Lit hub', '2012', 22),
(13, 4, 12, 'Homegoing', 120, 'A child returns to her long lost parents', 'images/products/homegoing.jpg', 'Penguin-Viking', '2016', 20),
(14, 6, 13, 'Children of Blood and Bone ', 200, 'ZÃ©lie Adebola remembers when the soil of OrÃ¯sha hummed with magic. Burners ignited flames, Tiders beckoned waves, and ZÃ©lieâ€™s Reaper mother summoned forth souls.', 'images/products/cobab.jpg', 'Henry Holt Company', '2018', 29),
(15, 6, 14, 'African Witches and Wizards', 200, 'It is about how witches fly about at night and attend their meetings in the coven to cause misfortunes, destruction and deaths. It explains everything with terrible and horrible stories of how they operate and the terrible things they do in our houses of horrors.', 'images/products/hoh.jpg', 'Agents', '2018', 10),
(17, 6, 12, 'Lets Play white', 200, 'Letâ€™s Play White is a horror anthology that explores how privilege, race, and power dictates Black peopleâ€™s ability to survive.', 'images/products/lpw.jpg', 'Atom Accra', '2018', 25),
(18, 6, 15, ' Who fears death', 95, 'A child manifests the beginnings of a remarkable and unique magic.', 'images/products/fears.jpeg', 'Lagos Publishing ', '2014', 20),
(19, 3, 16, 'Love next door', 80, 'Love Next Door is a cute story about Abongile (or Abby) and Kopano in Johannesburg, South Africa who fall in love.', 'images/products/nextdoor.jpg', 'Ankara Press', '2016', 22);

-- --------------------------------------------------------

--
-- Table structure for table `book_review`
--

CREATE TABLE `book_review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `review` varchar(300) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_review`
--

INSERT INTO `book_review` (`review_id`, `user_id`, `isbn`, `review`, `title`, `date`) VALUES
(6, 4, 15, 'I loved the content. Felt very realistic', 'Amazing read', '2020-11-23'),
(7, 6, 3, 'Chimamanda does so well with drama. It even has a lot of comedy as well.', 'DRAMATIC!!!', '2020-11-23'),
(8, 6, 4, 'Things truly fall apart!!', '#myreview', '2020-11-23'),
(9, 6, 5, 'A life lesson. What an amazing read. Its a good thing a lot of schools read this', 'Educative', '2020-11-23'),
(10, 6, 6, 'This was more of comedy to me.', 'HAAHAHA', '2020-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `isbn` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`isbn`, `ip_add`, `user_id`, `qty`) VALUES
(9, '41.66.203.12', NULL, 1),
(11, '41.66.203.12', NULL, 1),
(13, '41.66.203.12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaint_title` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `complaint_title`, `comment`, `status`) VALUES
(1, 4, 'test 1', 'Hellow  ', 'Unresolved'),
(2, 4, 'tgih isagh i;os;adhbgjhwgajh;fauogofhg;lkahg;basjlfn;jvaflbjah;vnjl asb;vfuoAH DFUOAHDGUWQ DGPUOQW A', '  ASDF', 'Unresolved'),
(3, 4, 'tgih isagh i;os;adhbgjhwgajh;fauogofhg;lkahg;asdfasdfasfdasfdasdfabasjlfn;jvaflbjah;vnjl asb;vfuoAH ', '  ASDF', 'Unresolved'),
(4, 4, 'asdf', '  asdf ', 'Unresolved');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Drama'),
(3, 'Love'),
(4, 'Fiction'),
(6, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(1, 5, 324, '0000-00-00', 'unfulfilled'),
(2, 5, 324, '2020-11-16', 'unfulfilled'),
(3, 4, 4690, '2020-11-16', 'unfulfilled'),
(4, 4, 4675, '2020-11-16', 'unfulfilled'),
(5, 4, 973, '2020-11-16', 'unfulfilled'),
(6, 4, 4971, '2020-11-16', 'unfulfilled'),
(7, 4, 732, '2020-11-16', 'unfulfilled'),
(8, 4, 3791, '2020-11-16', 'unfulfilled'),
(9, 4, 2312, '2020-11-16', 'unfulfilled'),
(10, 4, 1736, '2020-11-17', 'unfulfilled'),
(11, 4, 2465, '2020-11-17', 'unfulfilled'),
(12, 5, 2294, '2020-11-18', 'unfulfilled'),
(13, 5, 4167, '2020-11-18', 'unfulfilled'),
(14, 4, 4105, '2020-11-19', 'unfulfilled'),
(15, 4, 906, '2020-11-19', 'unfulfilled'),
(16, 4, 2838, '2020-11-23', 'unfulfilled'),
(17, 5, 2084, '2020-11-23', 'unfulfilled'),
(18, 4, 1826, '2020-11-23', 'unfulfilled'),
(19, 6, 3244, '2020-11-23', 'unfulfilled');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `isbn`, `qty`, `book_price`) VALUES
(9, 5, 1, 50),
(9, 4, 1, 300),
(9, 6, 1, 25),
(10, 5, 1, 50),
(10, 4, 1, 300),
(10, 6, 1, 25),
(11, 4, 1, 300),
(12, 4, 6, 300),
(12, 5, 1, 50),
(13, 5, 2, 50),
(14, 5, 1, 50),
(15, 4, 1, 300),
(15, 5, 1, 50),
(16, 3, 1, 100),
(17, 6, 1, 25),
(18, 14, 1, 200),
(18, 7, 1, 35),
(18, 3, 1, 100),
(18, 4, 1, 300),
(19, 3, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amt`, `user_id`, `order_id`, `currency`, `payment_date`) VALUES
(1, 375, 4, 10, 'USD', '2020-11-17'),
(2, 300, 4, 11, 'USD', '2020-11-17'),
(3, 1850, 5, 12, 'USD', '2020-11-18'),
(4, 100, 5, 13, 'USD', '2020-11-18'),
(5, 50, 4, 14, 'USD', '2020-11-19'),
(6, 350, 4, 15, 'USD', '2020-11-19'),
(7, 100, 4, 16, 'USD', '2020-11-23'),
(8, 25, 5, 17, 'USD', '2020-11-23'),
(9, 635, 4, 18, 'USD', '2020-11-23'),
(10, 100, 6, 19, 'USD', '2020-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(150) NOT NULL,
  `user_country` varchar(30) NOT NULL,
  `user_city` varchar(30) NOT NULL,
  `user_street` varchar(30) NOT NULL,
  `zip_code` varchar(30) DEFAULT NULL,
  `user_contact` varchar(15) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_country`, `user_city`, `user_street`, `zip_code`, `user_contact`, `user_role`) VALUES
(1, 'allotei', 'alo@gmail.com', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', 0),
(2, 'Allotei', 'allotei5@gmail.com', 'asdf', 'Ghana', 'accra', 'adj', '1123', '124124', 2),
(3, 'mbn', 'mbn@gmail.com', 'asdf', 'ghana', 'Accra', 'adj', '134', '12345', 2),
(4, 'Allotei Pappoe', 'admin@gmail.com', '7c8b10694698f0188542acdd38313d9d', 'Ghana', 'Accra', 'Accra', '00233', '0557335', 1),
(5, 'test user', 'test@gmail.com', '7c8b10694698f0188542acdd38313d9d', 'Ghana', 'Accra', 'Shida Lane', '00233', '0557335284', 2),
(6, 'Marian-Bernice Haligah', 'hmarnice@yahoo.com', '1b0abb6bfd97f12429be64c2cc4375e9', 'Ghana', 'Tema', '021', '102', '0207120661', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `book_genre` (`book_genre`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book_review`
--
ALTER TABLE `book_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `isbn` (`isbn`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `isbn` (`isbn`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `book_review`
--
ALTER TABLE `book_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`book_genre`) REFERENCES `genres` (`genre_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `book_review`
--
ALTER TABLE `book_review`
  ADD CONSTRAINT `book_review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `book_review_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
