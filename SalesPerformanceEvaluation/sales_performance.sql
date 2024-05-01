-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 10:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `sales_performance`

-- Table structure for table `branch`

CREATE TABLE `branch` (
  `br_Id` varchar(20) NOT NULL,
  `br_Name` varchar(20) NOT NULL,
  `br_Address` varchar(20) NOT NULL,
  `br_Tp` varchar(20) NOT NULL,
  `br_Email` varchar(20) NOT NULL,
  `e_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Insert data for table `branch`
--

INSERT INTO `branch` (`br_Id`, `br_Name`, `br_Address`, `br_Tp`, `br_Email`, `e_id`) VALUES
(01, 'Rathnapura', 'New Town,Rathnapura', '0456768096', 'rathnapura@lifebackup.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_Id` varchar(20) NOT NULL,
  `cashier_Name` varchar(20) NOT NULL,
  `cashier_Address` varchar(20) NOT NULL,
  `cashier_TP` varchar(20) NOT NULL,
  `emp_Emaill` varchar(20) NOT NULL,
  `br_Id` varchar(20) NOT NULL,
  `emp_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_Id` varchar(20) NOT NULL,
  `br_Id` varchar(20) NOT NULL,
  `emp_Role` varchar(20) NOT NULL,
  `emp_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Insert data for table `employee`
--

INSERT INTO `employee` (`empId`, `br_Id`, `empRole`, `empPassword`) VALUES
('00001', '01', 'SalesAgent', 'Agent@123'),
('00002', '01', 'InsurenceAdvisor', 'Advisor@123'),
('00003', '01', 'TeamLead', 'Lead@123'),
('00004', '01', 'Supervisor', 'Supervisor@123'),
('00005', '01', 'BranchManager', 'Manager@123');
('00006', '01', 'Cashier', 'Cashier@123');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `per_Id` varchar(20) NOT NULL,
  `status` int(20) NOT NULL,
  `emp_Id` varchar(20) NOT NULL,
  `br_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `tr_Id` varchar(20) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `assigned_By` varchar(20) NOT NULL,
  `start_Time` date NOT NULL,
  `end_Time` date NOT NULL,
  `status` varchar(5) NOT NULL,
  `br_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `totalsales`
--

CREATE TABLE `totalsales` (
  `sale_id` varchar(20) NOT NULL,
  `sale_Name` varchar(30) NOT NULL,
  `emp_Id` varchar(20) NOT NULL,
  `br_Id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`br_Id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_Id`),
  ADD KEY `fk_branch` (`br_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_Id`),
  ADD KEY `fk_branch_employee` (`br_Id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`per_Id`);

--
-- Indexes for table `totalsales`
--
ALTER TABLE `totalsales`
  ADD KEY `emp_sales` (`emp_Id`),
  ADD KEY `fk_sales-br` (`br_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cashier`
--
ALTER TABLE `cashier`
  ADD CONSTRAINT `fk_branch` FOREIGN KEY (`br_Id`) REFERENCES `branch` (`br_Id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_branch_employee` FOREIGN KEY (`br_Id`) REFERENCES `branch` (`br_Id`);

--
-- Constraints for table `totalsales`
--
ALTER TABLE `totalsales`
  ADD CONSTRAINT `emp_sales` FOREIGN KEY (`emp_Id`) REFERENCES `employee` (`emp_Id`),
  ADD CONSTRAINT `fk_sales-br` FOREIGN KEY (`br_Id`) REFERENCES `branch` (`br_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
