
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 07:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsys`
--


DROP TABLE IF EXISTS bookings;
DROP TABLE IF EXISTS Customers;
DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS category;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `RegNo` varchar(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `BookingStatus` varchar(3) NOT NULL DEFAULT 'OUT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BookingID`, `CustomerID`, `RegNo`, `StartDate`, `EndDate`, `BookingStatus`) VALUES
(1, 1, '182-KY-1235', '2018-10-31', '2018-11-02', 'RET'),
(2, 2, '182-KY-1234', '2018-10-31', '2018-11-03', 'RET'),
(3, 3, '182-KY-1134', '2018-10-31', '2018-11-02', 'RET'),
(4, 4, '182-KY-2234', '2018-10-31', '2018-11-02', 'RET'),
(5, 5, '182-KY-2267', '2018-10-31', '2018-11-02', 'RET'),
(6, 6, '182-KY-2567', '2018-10-31', '2018-11-02', 'RET'),
(7, 7, '182-KY-2967', '2018-10-31', '2018-11-02', 'RET');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `RegNo` varchar(11) NOT NULL,
  `CatID` varchar(4) NOT NULL,
  `Make` varchar(15) NOT NULL,
  `Model` varchar(8) NOT NULL,
  `CarType` varchar(12) NOT NULL,
  `Milage` mediumint(9) NOT NULL DEFAULT '0',
  `Availability` varchar(3) NOT NULL DEFAULT 'A',
  `A/C` varchar(3) NOT NULL,
  `NumSeats` smallint(6) NOT NULL,
  `Transmission` varchar(7) NOT NULL,
  `Fuel` varchar(10) NOT NULL,
  `Image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`RegNo`, `CatID`, `Make`, `Model`, `CarType`, `Milage`, `Availability`, `A/C`, `NumSeats`, `Transmission`, `Fuel`, `Image`) VALUES
('182-KY-1134', '3MS', 'Ford', 'Focus', 'Mid-size ', 0, 'A', 'Yes', 5, 'Manual', 'Diesel', 'car-4.jpg'),
('182-KY-1234', '1EC', 'Ford', 'Fiesta', 'Economy', 0, 'A', 'Yes', 5, 'Manual', 'Diesel', 'car-3.jpg'),
('182-KY-1235', '2CO', 'Toyota', 'Yaris', 'Compact', 0, 'A', 'No', 5, 'Manual', 'Petrol', 'car-9.jpg'),
('182-KY-2234', '4FS', 'Ford', 'Mondeo', 'Full-sized', 0, 'A', 'Yes', 5, 'Auto', 'Diesel', 'car-5.jpg'),
('182-KY-2264', '5PM', 'Audi', 'A4', 'Premium', 0, 'A', 'Yes', 5, 'Manual', 'Diesel', 'car-1.jpg'),
('182-KY-2267', '6LY', 'Audi', 'A8', 'Luxury', 0, 'A', 'Yes', 5, 'Manual', 'Diesel', 'car-2.jpg'),
('182-KY-2567', '7ST', 'Ford', 'Mustang', 'Sports', 0, 'A', 'Yes', 2, 'Manual', 'Petrol', 'car-7.jpg'),
('182-KY-2967', '8CE', 'Mazda', 'MX-5', 'Convertible', 0, 'A', 'Yes', 2, 'Manual', 'Petrol', 'car-8.jpg'),
('182-KY-3467', '9SUV', 'Tesla', 'Model X', 'SUV', 0, 'A', 'Yes', 7, 'Auto', 'Electric', 'car-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatID` varchar(4) NOT NULL,
  `Cost` smallint(6) NOT NULL,
  `Description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `Cost`, `Description`) VALUES
('1EC', 45, 'Rent an economy car for driving in crowded, downtown areas with busy traffic and tight parking spaces. Economy car rentals typically offer the best fuel efficiency.'),
('2CO', 50, 'Compact cars offer great mileage and the ease of driving and parking in high traffic areas.'),
('3MS', 55, 'A mid-sized car rental provides some more room for passengers and luggage than most smaller cars. '),
('4FS', 55, 'A Full-Size car rental is helpful when needing more passenger room and luggage space than a smaller car offers. '),
('5PM', 60, 'A premium car rental offers comfortable seating with plenty of room in the boot for luggage. A premium rental car is a great choice for a business travel or leisure.'),
('6LY', 65, 'Relax on the road with a luxury rental car from Express Car Rental. Luxury car rentals include leather seats, performance and plenty of room for passengers and luggage.'),
('7ST', 60, 'You have earned a break! Get away from the daily routine of repetitive tasks and break out to a new travel experience. '),
('8CE', 60, 'Rent a convertible and enjoy your next trip in style.'),
('9SUV', 70, 'Renowned for their increased passenger carrying abilities, which makes life for larger families so much easier ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Email` varchar(254) UNIQUE NOT NULL,
  `LicenceNum` varchar(10) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(56) NOT NULL,
  `Postcode` varchar(18) NOT NULL,
  `PhoneNum` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Email`, `LicenceNum`, `Name`, `Address`, `Country`, `Postcode`, `PhoneNum`) VALUES
(1, 'joeblake@gmail.com', '122145678', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A123', '891234567'),
(2, 'amysmith@gmail.com', '122245679', 'Amy Smith', 'Cork', 'Ireland', 'V12 A192', '851636587'),
(3, 'joeblake23@gmail.com', '122345671', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A123', '851234561'),
(4, 'joeblake1@gmail.com', '122545678', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A156', '851234537'),
(5, 'joeblake2@gmail.com', '122365678', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A153', '851334567'),
(6, 'joeblake3@gmail.com', '122375678', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A124', '851234367'),
(7, 'joeblake5@gmail.com', '122341678', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A121', '851234537'),
(8, 'joeblake6@gmail.com', '122345178', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A823', '851234527'),
(9, 'joeblake7@gmail.com', '122345671', 'Joe Blake', 'Tralee', 'Ireland', 'V12 A103', '85123452');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `fk_CustomerID` (`CustomerID`),
  ADD KEY `fk_RegNo` (`RegNo`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`RegNo`),
  ADD KEY `fk_CatID` (`CatID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_CustomerID` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `fk_RegNo` FOREIGN KEY (`RegNo`) REFERENCES `cars` (`RegNo`);

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_CatID` FOREIGN KEY (`CatID`) REFERENCES `category` (`CatID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
