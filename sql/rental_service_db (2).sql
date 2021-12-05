-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 02:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_service_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `BILL_ID` char(6) NOT NULL,
  `BILL_DATE` date NOT NULL,
  `BILL_STATUS` char(1) NOT NULL,
  `DISCOUNT_AMOUNT` float(10,2) NOT NULL,
  `TOTAL_AMOUNT` float(10,2) NOT NULL,
  `TAX_AMOUNT` float(10,2) NOT NULL,
  `BOOKING_ID` char(5) NOT NULL,
  `TOTAL_LATE_FEE` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`BILL_ID`, `BILL_DATE`, `BILL_STATUS`, `DISCOUNT_AMOUNT`, `TOTAL_AMOUNT`, `TAX_AMOUNT`, `BOOKING_ID`, `TOTAL_LATE_FEE`) VALUES
('BL1001', '2016-01-25', 'P', 24.36, 138.03, 12.38, 'B1001', 0.00),
('BL1002', '2016-01-15', 'P', 0.00, 487.13, 12.38, 'B1003', 0.00),
('BL1003', '2016-04-24', 'P', 10.39, 41.57, 3.96, 'B1004', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `BOOKING_ID` char(5) NOT NULL,
  `FROM_DT_TIME` date NOT NULL,
  `RET_DT_TIME` date NOT NULL,
  `AMOUNT` float(10,2) NOT NULL,
  `BOOKING_STATUS` char(1) NOT NULL,
  `PICKUP_LOC` char(4) NOT NULL,
  `REG_NUM` char(10) NOT NULL,
  `DL_NUM` char(13) NOT NULL,
  `ACT_RET_DT_TIME` date DEFAULT NULL,
  `DISCOUNT_CODE` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`BOOKING_ID`, `FROM_DT_TIME`, `RET_DT_TIME`, `AMOUNT`, `BOOKING_STATUS`, `PICKUP_LOC`, `REG_NUM`, `DL_NUM`, `ACT_RET_DT_TIME`, `DISCOUNT_CODE`) VALUES
('B1001', '2021-12-20', '2021-12-25', 150.00, 'B', 'L101', 'ABX1234', 'F0001234', '2016-01-25', 'D756'),
('B1002', '2022-01-01', '2022-01-04', 90.00, 'B', 'L102', 'SDF4567', 'T0000981', NULL, NULL),
('B1003', '2021-12-10', '2021-12-15', 450.00, 'R', 'L101', 'QSC8709', 'R0008763', '2016-01-15', NULL),
('B1004', '2021-12-24', '2021-12-25', 48.00, 'R', 'L106', 'WLZ8955', 'F0000091', '2016-04-23', 'D234'),
('B1005', '2022-01-18', '2022-01-25', 266.00, 'B', 'L106', 'POI7281', 'P0001234', NULL, 'D972'),
('B1006', '2022-01-21', '2022-01-25', 168.00, 'B', 'L107', 'HNX1890', 'V0005690', NULL, 'D234'),
('B1007', '2021-11-16', '2021-11-25', 405.00, 'B', 'L102', 'SDF4567', 'I0003478', NULL, 'D756'),
('B1008', '2022-01-11', '2022-01-25', 630.00, 'B', 'L102', 'HJK1234', 'T0000981', NULL, 'D756'),
('B1009', '2021-12-04', '2021-12-06', 864.00, 'R', 'L101', 'LDJ7719', 'kkaapp0099881', NULL, NULL),
('B1010', '2021-12-05', '2021-12-10', 1944.00, 'R', 'L102', 'EDM8610', 'kkaapp0099881', NULL, NULL),
('B1011', '2021-12-04', '2021-12-05', 378.00, 'R', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1012', '2021-12-03', '2021-12-04', 410.40, 'R', 'L101', 'VBN6283', 'kkaapp0099881', NULL, NULL),
('B1013', '2021-12-03', '2021-12-04', 378.00, 'R', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1014', '2021-12-03', '2021-12-04', 378.00, 'B', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1015', '2021-12-03', '2021-12-04', 378.00, 'B', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1016', '2021-12-03', '2021-12-04', 378.00, 'R', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1017', '2021-12-03', '2021-12-04', 378.00, 'R', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1018', '2021-12-03', '2021-12-04', 378.00, 'R', 'L101', 'QWE4562', 'kkaapp0099881', NULL, NULL),
('B1019', '2021-12-03', '2021-12-04', 378.00, 'R', 'L102', 'OTY7293', 'kkaapp0099881', NULL, NULL),
('B1020', '2021-12-04', '2021-12-05', 388.80, 'R', 'L101', 'YSN1927', 'kkaapp0099881', NULL, NULL),
('B1021', '2021-12-04', '2021-12-05', 810.00, 'R', 'L103', 'MKU0172', 'pak1209913004', NULL, NULL),
('B1022', '2021-12-04', '2021-12-05', 810.00, 'B', 'L102', 'TGB8961', 'pak1209913004', NULL, NULL),
('B1023', '2021-12-05', '2021-12-09', 1512.00, 'R', 'L102', 'CXZ2356', 'kkaapp0099881', NULL, NULL),
('B1024', '2021-12-05', '2021-12-06', 432.00, 'R', 'L101', 'LDJ7719', 'kkaapp0099881', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `REGISTRATION_NUMBER` char(10) NOT NULL,
  `MODEL_NAME` varchar(25) NOT NULL,
  `MAKE` varchar(25) NOT NULL,
  `MODEL_YEAR` int(4) NOT NULL,
  `MILEAGE` int(11) NOT NULL,
  `CAR_CATEGORY_NAME` varchar(25) NOT NULL,
  `LOC_ID` char(4) NOT NULL,
  `AVAILABILITY_FLAG` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`REGISTRATION_NUMBER`, `MODEL_NAME`, `MAKE`, `MODEL_YEAR`, `MILEAGE`, `CAR_CATEGORY_NAME`, `LOC_ID`, `AVAILABILITY_FLAG`) VALUES
('ABX1234', 'CIVIC', 'HONDA', 2014, 10000, 'ECONOMY', 'L101', 'A'),
('AHK7325', 'RAV4', 'TOYOTA', 2016, 3400, 'MID SIZE SUV', 'L103', 'A'),
('ASD9090', 'ACCORD', 'HONDA', 2016, 200, 'MID SIZE', 'L103', 'A'),
('CFT1908', '328I', 'BMW', 2015, 10800, 'LUXURY CAR', 'L104', 'A'),
('CXZ2356', 'AVENGER', 'DODGE', 2015, 5000, 'MID SIZE', 'L102', 'A'),
('EDM8610', 'GLA', 'MERCEDEZ BENZ', 2015, 12900, 'MID SIZE SUV', 'L102', 'A'),
('EFB5427', 'WAYFARER', 'FORD', 2014, 14350, 'FULL SIZE', 'L105', 'A'),
('FKD8202', 'GOLF', 'VOLKSWAGAN', 2016, 9000, 'COMPACT', 'L106', 'A'),
('GLS7625', 'FOCUS', 'FORD', 2014, 12000, 'COMPACT', 'L107', 'A'),
('GLZ2376', 'COROLLA', 'TOYOTA', 2016, 5000, 'ECONOMY', 'L104', 'A'),
('HGF5628', 'TAURUS', 'FORD', 2013, 15540, 'STANDARD', 'L106', 'A'),
('HJK1234', 'CIVIC', 'HONDA', 2015, 20145, 'ECONOMY', 'L102', 'N'),
('HNX1890', 'PRIUS', 'TOYOTA', 2015, 15690, 'COMPACT', 'L105', 'N'),
('JLS1097', 'SUBURBAN', 'CHEVROLET', 2014, 13290, 'FULL SIZE SUV', 'L104', 'A'),
('JSL7920', 'ODYSSEY', 'HONDA', 2013, 19320, 'MINI VAN', 'L106', 'A'),
('KJS1983', 'PRIUS', 'TOYOTA', 2014, 20900, 'COMPACT', 'L104', 'A'),
('LDJ7719', 'EDGE', 'FORD', 2016, 5690, 'STANDARD SUV', 'L101', 'A'),
('LKJ7253', '200', 'CHRYSTLER', 2014, 16300, 'STANDARD', 'L107', 'A'),
('MKU0172', 'TLX', 'ACURA', 2014, 12345, 'LUXURY CAR', 'L103', 'A'),
('MNB8654', 'FALCON', 'FORD', 2012, 10900, 'FULL SIZE', 'L103', 'A'),
('MWO9296', 'ODYSSEY', 'HONDA', 2016, 2300, 'MINI VAN', 'L103', 'A'),
('OHZ0976', 'EDGE', 'FORD', 2012, 27890, 'STANDARD SUV', 'L104', 'A'),
('OTY7293', 'CRUZE', 'CHEVROLET', 2016, 17800, 'MID SIZE', 'L102', 'A'),
('PAJ5289', 'GRAND CARAVAN', 'DODGE', 2014, 23478, 'MINI VAN', 'L105', 'A'),
('PLM9873', 'IMPALA', 'CHEVROLET', 2015, 18900, 'FULL SIZE', 'L106', 'A'),
('POI7281', '200', 'CHRYSTLER', 2016, 18830, 'STANDARD', 'L102', 'N'),
('QIO7621', 'EQUINOX', 'CHEVROLET', 2013, 17560, 'MID SIZE SUV', 'L107', 'A'),
('QSC8709', 'MKZ', 'LINCOLN', 2012, 18700, 'LUXURY CAR', 'L101', 'A'),
('QWE4562', 'LEGACY', 'SUBARU', 2012, 13420, 'MID SIZE', 'L101', 'A'),
('RKS9862', 'TAHOE', 'CHEVROLET', 2013, 20390, 'STANDARD SUV', 'L105', 'A'),
('SDF4567', 'FIESTA', 'FORD', 2015, 15000, 'ECONOMY', 'L102', 'N'),
('SDL9356', 'FOCUS', 'FORD', 2016, 10009, 'COMPACT', 'L103', 'A'),
('SHK7767', 'QUEST', 'NISSAN', 2012, 23478, 'MINI VAN', 'L107', 'A'),
('TGB8961', 'GENESIS', 'HYUNDAI', 2013, 17620, 'LUXURY CAR', 'L102', 'A'),
('TRE9726', '200', 'CHRYSTLER', 2012, 14320, 'STANDARD', 'L105', 'A'),
('TSJ6290', 'QUEST', 'NISSAN', 2015, 13200, 'MINI VAN', 'L104', 'A'),
('UHJ6782', 'EXPEDITION', 'FORD', 2015, 11750, 'FULL SIZE SUV', 'L105', 'A'),
('UHV9786', 'IMPALA', 'CHEVROLET', 2013, 11500, 'FULL SIZE', 'L104', 'A'),
('UIA8709', 'EXPEDITION', 'FORD', 2012, 19870, 'FULL SIZE SUV', 'L102', 'A'),
('UYT3981', 'LEGACY', 'SUBARU', 2013, 16750, 'MID SIZE', 'L104', 'A'),
('VBN6283', 'TAURUS', 'FORD', 2015, 17500, 'STANDARD', 'L101', 'A'),
('WDV2458', 'FALCON', 'FORD', 2016, 5600, 'FULL SIZE', 'L107', 'A'),
('WER3245', 'ACCENT', 'HYUNDAI', 2014, 12356, 'ECONOMY', 'L103', 'A'),
('WHM7619', 'AVALON', 'TOYOTA', 2016, 7800, 'LUXURY CAR', 'L105', 'A'),
('WIJ6190', 'EDGE', 'FORD', 2014, 18700, 'STANDARD SUV', 'L106', 'A'),
('WKJ7972', 'SEQUOIA', 'TOYOTA', 2013, 14500, 'FULL SIZE SUV', 'L103', 'A'),
('WLZ8955', 'ESCAPE', 'FORD', 2012, 19800, 'MID SIZE SUV', 'L106', 'A'),
('XBM6822', 'SUBURBAN', 'CHEVROLET', 2016, 3400, 'FULL SIZE SUV', 'L106', 'A'),
('YSN1927', 'PATHFINDER', 'NISSAN', 2014, 14390, 'MID SIZE SUV', 'L101', 'A'),
('ZDT8612', 'TAHOE', 'CHEVROLET', 2015, 14300, 'STANDARD SUV', 'L107', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `car_category`
--

CREATE TABLE `car_category` (
  `CATEGORY_NAME` varchar(25) NOT NULL,
  `NO_OF_PERSON` int(11) NOT NULL,
  `COST_PER_DAY` float(5,2) NOT NULL,
  `LATE_FEE_PER_HOUR` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_category`
--

INSERT INTO `car_category` (`CATEGORY_NAME`, `NO_OF_PERSON`, `COST_PER_DAY`, `LATE_FEE_PER_HOUR`) VALUES
('COMPACT', 5, 320.00, 30.96),
('ECONOMY', 5, 300.00, 30.90),
('FULL SIZE', 5, 400.00, 31.20),
('FULL SIZE SUV', 8, 600.00, 31.80),
('LUXURY CAR', 5, 750.00, 32.25),
('MID SIZE', 5, 350.00, 31.05),
('MID SIZE SUV', 5, 360.00, 31.08),
('MINI VAN', 7, 700.00, 32.10),
('STANDARD', 5, 380.00, 31.14),
('STANDARD SUV', 5, 400.00, 31.20);

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `DL_NUMBER` char(13) NOT NULL,
  `FNAME` varchar(25) NOT NULL,
  `MNAME` varchar(15) DEFAULT NULL,
  `LNAME` varchar(25) DEFAULT NULL,
  `PHONE_NUMBER` varchar(10) NOT NULL,
  `EMAIL_ID` varchar(30) NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE_NAME` varchar(20) NOT NULL,
  `ZIPCODE` int(5) NOT NULL,
  `MEMBERSHIP_TYPE` char(1) NOT NULL DEFAULT 'N',
  `MEMBERSHIP_ID` char(5) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`DL_NUMBER`, `FNAME`, `MNAME`, `LNAME`, `PHONE_NUMBER`, `EMAIL_ID`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`, `MEMBERSHIP_TYPE`, `MEMBERSHIP_ID`, `PASSWORD`) VALUES
('1234567891234', 'rohit', NULL, '', '8877669955', 'abf22c@xyz.com', 'west-side', 'karolbhagh', 'Delhi', 110034, 'N', NULL, '00000000'),
('E000752109700', 'MITA', NULL, 'RANA', '2147483647', 'mitarana@gmail.com', '367 MEANDERING WAY', 'HOUSTON', 'Delhi', 76245, 'N', NULL, '12345678'),
('F000009126600', 'MIKE', NULL, 'BOYEAR', '2147483647', 'mikeboy@gmail.com', '1007 KAROL BHAG PARKWAY', 'KAROL BHAG', 'Delhi', 72212, 'N', NULL, '12345678'),
('F000123455400', 'NAVEEN', NULL, 'RAJ', '2147483647', 'naveen@gmail.com', '700 CAMPBELL RD', 'Delhi', 'Delhi', 110053, 'M', 'M1001', '12345678'),
('F000234561100', 'SURESH', 'KUMAR', 'GOPALAKRISHNAN', '2147483647', 'suresh2234@gmail.com', '6547 CANOGA AVE', 'ANDHERI', 'MUMBAI', 91303, 'N', NULL, '12345678'),
('F000976452100', 'NIVEDITHA', NULL, 'VARADHA CHANDRASEKARAN', '2147483647', 'nivi07@gmail.com', '800 RENNER RD', 'Delhi', 'Delhi', 110053, 'M', 'M1002', '12345678'),
('I000347895300', 'MARK', 'S', 'TOWNSEND', '2147483647', 'markstown@gmail.com', '7825 MCCALLUM BLVD', 'KAROL BHAG', 'Delhi', 75252, 'M', 'M1003', '12345678'),
('kkaapp0099881', 'Rohit', NULL, 'Sharma', '8800990099', 'rohit108180@gmail.com', 'C 62/3 3rd floor Gali no 4 ', 'Mohanpuri, Maujpur', 'Delhi', 110053, 'N', NULL, '00000000'),
('P000123456700', 'CHRIS', NULL, 'ALEXANDER', '9902489', 'chrisalex@gmail.com', '2256 WALL STREET', 'NEWARK', 'NEW JERSEY', 65289, 'M', 'M1005', '12345678'),
('pak1209913004', 'Mokshi ', NULL, 'Sharma', '9988997766', 'mokshi@gmail.com', 'street no 4', 'Delhi', 'Delhi', 110056, 'N', NULL, 'lkjhgfdsa'),
('pak1209913005', 'rohit', NULL, '', '8877669955', 'abc@xyz.com', 'west-side', 'karolbhagh', 'Delhi', 110034, 'N', NULL, '12345678'),
('ppkkppkkppkk3', 'rohit', NULL, '', '8877669955', 'abfc@xyz.com', 'west-side', 'karolbhagh', 'Delhi', 110034, 'N', NULL, '00000000'),
('R000876357800', 'MARK', NULL, 'HUFF', '2147483647', 'markhuff@gmail.com', '1445 ROSS AVE', 'KAROL BHAG', 'Delhi', 75202, 'N', NULL, '12345678'),
('T000098123700', 'DANISH', NULL, 'HASSAN', '2147483647', 'danishhasan@gmail.com', '888 PRESTON ROAD', 'DULLES', 'VIRGINIA', 92367, 'M', 'M1004', '12345678'),
('V000569024500', 'VELA', 'R', 'REYNALDO', '2147483647', 'reyvela@gmail.com', '0099 ALMA ROAD', 'DULLES', 'VIRGINIA', 97325, 'N', NULL, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `discount_details`
--

CREATE TABLE `discount_details` (
  `DISCOUNT_CODE` char(4) NOT NULL,
  `DISCOUNT_NAME` varchar(25) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `DISCOUNT_PERCENTAGE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_details`
--

INSERT INTO `discount_details` (`DISCOUNT_CODE`, `DISCOUNT_NAME`, `EXPIRY_DATE`, `DISCOUNT_PERCENTAGE`) VALUES
('D109', 'WEEKLY RENTALS', '2020-11-09', 25),
('D234', 'CTS CORPORATE', '2019-09-02', 20),
('D297', 'UPGRADE SPECIAL', '2018-02-18', 20),
('D678', 'IBM CORPORATE', '2018-01-25', 25),
('D756', 'HOLIDAY SPECIAL', '2017-10-29', 10),
('D972', 'ONE WAY SPECIAL', '2016-12-15', 20);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LOCATION_ID` char(5) NOT NULL,
  `LOCATION_NAME` varchar(50) NOT NULL,
  `STREET` varchar(30) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE_NAME` varchar(20) NOT NULL,
  `ZIPCODE` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LOCATION_ID`, `LOCATION_NAME`, `STREET`, `CITY`, `STATE_NAME`, `ZIPCODE`) VALUES
('L101', 'KAROL BHAG LOVE FIELD AIRPORT', 'Herb Kelleher Way', 'KAROL BHAG', 'Delhi', 75235),
('L102', 'LOS ANGELES INTL AIRPORT', 'World Way', 'Los Angeles', 'MUMBAI', 90045),
('L103', 'KAROL BHAG/ FORT WORTH INTL AIRPORT', 'International Pkwy', 'DFW Airport', 'Delhi', 75261),
('L104', 'WEST HOUSTON AIRPORT', 'Groschke Rd', 'Houston', 'Delhi', 77094),
('L105', 'WASHINGTON DULLES INTL AIRPORT', 'Saarinen Cir', 'Dulles', 'Virginia', 20166),
('L106', 'NEWARK LIBERTY INTL AIRPORT', 'Brewster Rd', 'Newark', 'New Jersey', 7114),
('L107', 'SALT LAKE CITY INTL AIRPORT', 'N Terminal Dr', 'Salt Lake City', 'Utah', 84122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`BILL_ID`),
  ADD KEY `BOOKING_ID` (`BOOKING_ID`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`BOOKING_ID`),
  ADD KEY `PICKUP_LOC` (`PICKUP_LOC`),
  ADD KEY `REG_NUM` (`REG_NUM`),
  ADD KEY `DL_NUM` (`DL_NUM`),
  ADD KEY `DISCOUNT_CODE` (`DISCOUNT_CODE`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`REGISTRATION_NUMBER`),
  ADD KEY `CAR_CATEGORY_NAME` (`CAR_CATEGORY_NAME`),
  ADD KEY `LOC_ID` (`LOC_ID`);

--
-- Indexes for table `car_category`
--
ALTER TABLE `car_category`
  ADD PRIMARY KEY (`CATEGORY_NAME`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`DL_NUMBER`);

--
-- Indexes for table `discount_details`
--
ALTER TABLE `discount_details`
  ADD PRIMARY KEY (`DISCOUNT_CODE`),
  ADD UNIQUE KEY `DISCOUNT_NAME` (`DISCOUNT_NAME`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD CONSTRAINT `billing_details_ibfk_1` FOREIGN KEY (`BOOKING_ID`) REFERENCES `booking_details` (`BOOKING_ID`);

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`PICKUP_LOC`) REFERENCES `location_details` (`LOCATION_ID`),
  ADD CONSTRAINT `booking_details_ibfk_2` FOREIGN KEY (`REG_NUM`) REFERENCES `car` (`REGISTRATION_NUMBER`),
  ADD CONSTRAINT `booking_details_ibfk_3` FOREIGN KEY (`DL_NUM`) REFERENCES `customer_details` (`DL_NUMBER`),
  ADD CONSTRAINT `booking_details_ibfk_4` FOREIGN KEY (`DISCOUNT_CODE`) REFERENCES `discount_details` (`DISCOUNT_CODE`);

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`CAR_CATEGORY_NAME`) REFERENCES `car_category` (`CATEGORY_NAME`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`LOC_ID`) REFERENCES `location` (`LOCATION_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
