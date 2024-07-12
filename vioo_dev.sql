-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2024 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vioo_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_accounts`
--

CREATE TABLE `business_accounts` (
  `hotel_id` int(11) NOT NULL,
  `business_account` int(11) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `hotel_state` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `added_date` varchar(22) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password_key` varchar(222) DEFAULT NULL,
  `sec_key` varchar(222) DEFAULT NULL,
  `agent_id` varchar(33) DEFAULT NULL,
  `activation` varchar(10) NOT NULL DEFAULT 'no',
  `year_built` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_accounts`
--

INSERT INTO `business_accounts` (`hotel_id`, `business_account`, `business_name`, `address`, `phone`, `email_address`, `longitude`, `latitude`, `rooms`, `country`, `hotel_state`, `description`, `added_date`, `username`, `password_key`, `sec_key`, `agent_id`, `activation`, `year_built`) VALUES
(86, 96321687, 'Hotel Sunshine', '123 Beach Ave', '090339499333', 'info@sunshine.com', 1212.2, 12212.2, NULL, 'Nigeria', 'lagos', 'Set in Lagos, less than 1 km from Central Mosque of Lagos, THRIVEMAX HOTEL AND SUITE offers air-conditioned rooms and a bar. Among the facilities of this property are a restaurant, room service and a 24-hour front desk, along with free WiFi throughout the property. The property is non-smoking and is situated 200 metres from The Cathedral Church of Christ.\r\n\r\nAt the hotel, rooms are fitted with a wardrobe. With a private bathroom equipped with a shower and free toiletries, rooms at THRIVEMAX HOTEL AND SUITE also provide guests with a city view. At the accommodation every room includes a desk and a flat-screen TV.\r\n\r\nPopular points of interest near THRIVEMAX HOTEL AND SUITE include Freedom Park Lagos, Iga Idungaran-OBA Of Lagos Palace and National Museum Lagos. The nearest airport is Murtala Muhammed International Airport, 17 km from the hotel.', '2024-07-11 03:14:22', '32323232', NULL, NULL, '34934434', 'no', NULL),
(87, 55108407, 'hevwcjevwv', 'jewcbekjebjk823738239', '73223923232323', 'dwcdwcwecdc@dweew.e', 323, 322, NULL, 'Albania', 'adamawa', 'qwddsacsd', '2024-07-12 11:39:19', '2323233', NULL, NULL, '34934434', 'no', NULL),
(88, 54559836, 'hevwcjevwv', 'jewcbekjebjk823738239', '73223923232323', 'dwcdwcwecdc@dweew.e', 323, 322, NULL, 'Albania', 'adamawa', 'qwddsacsd', '2024-07-12 11:39:27', '2323233', NULL, NULL, '34934434', 'no', NULL),
(89, 96222259, 'hevwcjevwv', 'jewcbekjebjk823738239', '73223923232323', 'dwcdwcwecdc@dweew.e', 323, 322, NULL, 'Albania', 'adamawa', 'qwddsacsd', '2024-07-12 11:39:30', '2323233', NULL, NULL, '34934434', 'no', NULL),
(90, 63593666, 'hevwcjevwv', 'jewcbekjebjk823738239', '73223923232323', 'dwcdwcwecdc@dweew.e', 323, 322, NULL, 'Albania', 'adamawa', 'qwddsacsd', '2024-07-12 11:39:33', '2323233', NULL, NULL, '34934434', 'no', NULL),
(91, 42647442, 'hevwcjevwv', 'jewcbekjebjk823738239', '73223923232323', 'dwcdwcwecdc@dweew.e', 323, 322, NULL, 'Albania', 'adamawa', 'qwddsacsd', '2024-07-12 11:39:36', '2323233', NULL, NULL, '34934434', 'no', NULL),
(92, 46981532, 'hevwcjevwv', 'jewcbekjebjk823738239', '73223923232323', 'dwcdwcwecdc@dweew.e', 323, 322, NULL, 'Albania', 'adamawa', 'qwddsacsd', '2024-07-12 11:40:43', '2323233', NULL, NULL, '34934434', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `emp_account` varchar(33) DEFAULT '0',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `hiredate` date NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `email_address` varchar(150) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalcode` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `login_sec` varchar(255) DEFAULT NULL,
  `access_level_id` int(11) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT 'profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `emp_account`, `firstname`, `lastname`, `dateofbirth`, `gender`, `hiredate`, `position`, `department`, `salary`, `email_address`, `phonenumber`, `address`, `city`, `state`, `postalcode`, `country`, `password`, `login_sec`, `access_level_id`, `username`, `photo`) VALUES
(1, '0', 'Mark', 'Doe', '1980-01-15', 'M', '2020-05-10', 'Manager', 'Sales', 75000.00, 'john.doe@example.com', '555-1234', '123 Elm St', 'Somewhere', 'CA', '90210', 'USA', '12345', NULL, NULL, NULL, NULL),
(2, '0', 'Jane', 'Smith', '1985-02-20', 'F', '2019-03-15', 'Developer', 'IT', 90000.00, 'jane.smith@example.com', '555-5678', '456 Oak St', 'Anywhere', 'TX', '75001', 'USA', '12345', NULL, NULL, NULL, NULL),
(3, '0', 'Alice', 'Johnson', '1990-07-30', 'F', '2021-09-01', 'Analyst', 'Finance', 65000.00, 'alice.johnson@example.com', '555-9876', '789 Pine St', 'Everywhere', 'NY', '10001', 'USA', '12345', NULL, NULL, NULL, NULL),
(4, '0', 'Michael', 'Brown', '1978-03-22', 'M', '2018-04-15', 'Designer', 'Marketing', 70000.00, 'michael.brown@example.com', '555-2345', '101 Maple St', 'Springfield', 'IL', '62704', 'USA', '12345', NULL, NULL, NULL, NULL),
(5, '0', 'Emily', 'Davis', '1982-05-30', 'F', '2017-11-10', 'HR Specialist', 'HR', 65000.00, 'emily.davis@example.com', '555-6789', '202 Birch St', 'Austin', 'TX', '73301', 'USA', '12345', NULL, NULL, NULL, NULL),
(6, '0', 'David', 'Wilson', '1992-08-14', 'M', '2019-01-20', 'Sales Associate', 'Sales', 60000.00, 'david.wilson@example.com', '555-8765', '303 Cedar St', 'Denver', 'CO', '80201', 'USA', '12345', NULL, NULL, NULL, NULL),
(7, '0', 'Sarah', 'Miller', '1987-10-05', 'F', '2021-07-18', 'Marketing Coordinator', 'Marketing', 62000.00, 'sarah.miller@example.com', '555-4321', '404 Spruce St', 'Miami', 'FL', '33101', 'USA', '12345', NULL, NULL, NULL, NULL),
(8, '0', 'James', 'Taylor', '1975-12-25', 'M', '2016-03-25', 'Finance Manager', 'Finance', 95000.00, 'james.taylor@example.com', '555-1235', '505 Willow St', 'Seattle', 'WA', '98101', 'USA', '12345', NULL, NULL, NULL, NULL),
(9, '0', 'Laura', 'Anderson', '1989-02-19', 'F', '2020-10-09', 'IT Support', 'IT', 68000.00, 'laura.anderson@example.com', '555-9875', '606 Fir St', 'Boston', 'MA', '02101', 'USA', '12345', NULL, NULL, NULL, NULL),
(10, '0', 'Robert', 'Thomas', '1984-07-07', 'M', '2018-08-25', 'Logistics Coordinator', 'Logistics', 62000.00, 'robert.thomas@example.com', '555-3456', '707 Redwood St', 'San Francisco', 'CA', '94101', 'USA', '12345', NULL, NULL, NULL, NULL),
(11, '0', 'Olivia', 'Jackson', '1991-11-11', 'F', '2022-01-15', 'Content Writer', 'Content', 60000.00, 'olivia.jackson@example.com', '555-6543', '808 Chestnut St', 'New York', 'NY', '10001', 'USA', '12345', NULL, NULL, NULL, NULL),
(12, '0', 'Daniel', 'White', '1983-04-23', 'M', '2017-05-30', 'Project Manager', 'Operations', 85000.00, 'daniel.white@example.com', '555-7654', '909 Aspen St', 'Los Angeles', 'CA', '90001', 'USA', '12345', NULL, NULL, NULL, NULL),
(13, '0', 'Sophia', 'Harris', '1995-09-01', 'F', '2019-12-22', 'Customer Service Rep', 'Customer Service', 58000.00, 'sophia.harris@example.com', '555-4567', '1010 Pine St', 'Chicago', 'IL', '60601', 'USA', '12345', NULL, NULL, NULL, NULL),
(14, '34934434', 'John', 'Doe', '1980-01-15', 'M', '2020-05-10', 'Manager', 'Sales', 75000.00, 'johndoe@example.com', '555-1234', '123 Elm St', 'Somewhere', 'CA', '90210', 'USA', '$2y$10$P9Jn0F9eZV/0KqA1ytDUF.YTsYznwX8tt1hnrgea4pVN6S51SNHFS', '7072002f95c5ee019d81dcd6ea9131c3acbaec9efb7c0c33102a540034679ecd', 1, 'john_doe', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilities`
--

CREATE TABLE `hotel_facilities` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_facilities`
--

INSERT INTO `hotel_facilities` (`facility_id`, `facility_name`, `description`, `hotel_id`) VALUES
(1, 'WiFi', 'Wireless internet access', NULL),
(2, 'TV', 'Television with cable channels', NULL),
(3, 'Air Conditioning (AC)', 'Air conditioning in rooms', NULL),
(4, 'Mini Bar', 'Mini bar with assorted drinks and snacks', NULL),
(5, 'Jacuzzi', 'Private jacuzzi', NULL),
(6, 'Swimming Pool', 'Indoor or outdoor swimming pool', NULL),
(7, 'Fitness Center / Gym', 'Gym with exercise equipment', NULL),
(8, 'Spa', 'Full-service spa with treatments', NULL),
(9, 'Restaurant', 'On-site restaurant serving meals', NULL),
(10, 'Bar', 'On-site bar serving drinks', NULL),
(11, 'Room Service', 'In-room dining service', NULL),
(12, 'Laundry Service', 'Laundry and dry cleaning services', NULL),
(13, 'Parking', 'On-site parking facilities', NULL),
(14, 'Conference Room', 'Meeting and conference facilities', NULL),
(15, 'Business Center', 'Business services and equipment', NULL),
(16, 'Airport Shuttle', 'Shuttle service to and from the airport', NULL),
(17, '24-Hour Front Desk', 'Reception available 24/7', NULL),
(18, 'Concierge Service', 'Personalized concierge services', NULL),
(19, 'Elevator', 'Elevator access to all floors', NULL),
(20, 'Luggage Storage', 'Luggage storage service', NULL),
(21, 'Non-Smoking Rooms', 'Rooms designated as non-smoking', NULL),
(22, 'Pets Allowed', 'Pet-friendly rooms and areas', NULL),
(23, 'Breakfast Included', 'Complimentary breakfast included', NULL),
(24, 'Wheelchair Accessible', 'Facilities accessible to wheelchair users', NULL),
(25, 'Safety Deposit Box', 'Secure safe for valuables', NULL),
(26, 'Children\'s Playground', 'Playground area for children', NULL),
(27, 'Babysitting Service', 'Babysitting and childcare services', NULL),
(28, 'Library', 'On-site library with books', NULL),
(29, 'Gift Shop', 'Shop selling souvenirs and essentials', NULL),
(30, 'Tennis Court', 'Tennis court for guests', NULL),
(31, 'Golf Course', 'Golf course access', NULL),
(32, 'Bicycle Rental', 'Bicycles available for rent', NULL),
(33, 'Car Rental', 'On-site car rental service', NULL),
(34, 'Sauna', 'Sauna for relaxation', NULL),
(35, 'Hot Tub', 'Hot tub available for use', NULL),
(36, 'Beach Access', 'Direct access to the beach', NULL),
(37, 'Private Beach Area', 'Exclusive beach area for guests', NULL),
(38, 'Garden', 'Garden area for relaxation', NULL),
(39, 'Terrace', 'Outdoor terrace area', NULL),
(40, 'BBQ Facilities', 'Barbecue facilities available', NULL),
(41, 'Pet-Friendly Areas', 'Designated areas for pets', NULL),
(42, 'Game Room', 'Room with games and entertainment', NULL),
(43, 'Casino', 'On-site casino', NULL),
(44, 'Nightclub / DJ', 'Nightclub with DJ and dancing', NULL),
(45, 'Cooking Classes', 'Classes for cooking and culinary skills', NULL),
(46, 'Yoga Classes', 'Yoga and wellness classes', NULL),
(47, 'Cultural Tours', 'Tours highlighting local culture', NULL),
(48, 'Live Music / Performances', 'Live entertainment and performances', NULL),
(49, 'Hiking Trails', 'Access to hiking trails', NULL),
(50, 'Ski Equipment Hire', 'Ski equipment rental service', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `room_id` int(11) NOT NULL,
  `room_pass` int(11) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `room_number` varchar(10) DEFAULT NULL,
  `room_type` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `amenities` varchar(255) DEFAULT NULL,
  `max_occupancy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_categories`
--

CREATE TABLE `hotel_room_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `special_requests` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_accounts`
--
ALTER TABLE `business_accounts`
  ADD PRIMARY KEY (`hotel_id`),
  ADD UNIQUE KEY `hotel_account` (`business_account`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `hotel_room_categories`
--
ALTER TABLE `hotel_room_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_accounts`
--
ALTER TABLE `business_accounts`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotel_facilities`
--
ALTER TABLE `hotel_facilities`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_room_categories`
--
ALTER TABLE `hotel_room_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
