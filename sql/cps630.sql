
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `cps630`
--
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `users` (
    `user_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(50), 
    `email` VARCHAR(50), 
    `password` VARCHAR(50),
    `login_id` CHAR(36) NOT NULL DEFAULT UUID(),
    `tel_no` INT(50), 
    `address` VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `users` (`name`, `tel_no`, `email`, `address`, `password`) VALUES 
( 'Finn', 2147483647, 'finn@gmail.com', '81 Queen Street W, Toronto, ON M6Y 2J1', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `items` (
  `item_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `cart_id` INT, 
  `name` VARCHAR(255), 
  `price` FLOAT, 
  `quantity` INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
    `stock_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255),
    `price` FLOAT,
    `quantity` INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock`(`name`, `price`, `quantity`) VALUES
('Dishwasher', '599.99', 1),
('Toaster', '29.99', 10),
('Blender', '59.99', 5),
('Microwave', '99.99', 3),
('Coffee Maker', '39.99', 7),
('Waffle Maker', '49.99', 4),
('Air Fryer', '79.99', 2),
('Food Processor', '89.99', 1),
('Slow Cooker', '49.99', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `trip_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch` VARCHAR(255) NOT NULL,
  `date_issued` datetime NOT NULL DEFAULT current_timestamp(),
  `date_recieved` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `trip_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `truck_id` int(11) NOT NULL,
  `distance` FLOAT,
  `branch` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `truck_id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `truck_code` int(11) NOT NULL,
  `available` VARCHAR(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`truck_code`, `available`) VALUES
(100, 'yes'),
(101, 'yes'),
(102, 'yes'),
(103, 'yes'),
(104, 'yes'),
(105, 'yes'),
(106, 'yes'),
(107, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
CREATE TABLE `payment` (
    `user_id` INT(6),
    `cc_num` INT (16), 
    `cvv` INT(3)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;