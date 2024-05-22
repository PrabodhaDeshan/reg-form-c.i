-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 01:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation_tor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_about_us_settings`
--

CREATE TABLE `admin_about_us_settings` (
  `about_us_id` int(11) NOT NULL,
  `about_us_tittle` varchar(255) NOT NULL,
  `about_us_image` text DEFAULT NULL,
  `about_us_details` varchar(255) DEFAULT NULL,
  `about_us_add_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_activity_log`
--

CREATE TABLE `admin_activity_log` (
  `admin_activity_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_activity_type` int(5) DEFAULT NULL COMMENT 'login=1\r\npayment=2\r\naccount=3',
  `admin_activity_date` date DEFAULT NULL,
  `admin_activity_time` text DEFAULT NULL,
  `admin_activity_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_banner_settings`
--

CREATE TABLE `admin_banner_settings` (
  `banner_id` int(11) NOT NULL,
  `banner_tittle` varchar(255) DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `banner_add_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_gallery_settings`
--

CREATE TABLE `admin_gallery_settings` (
  `admin_gallery_id` int(11) NOT NULL,
  `admin_gallery_tittle` varchar(255) DEFAULT NULL,
  `admin_gallery_image_o1` text DEFAULT NULL,
  `admin_gallery_image_tittle_01` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_fullname` varchar(255) DEFAULT NULL,
  `admin_reg_date` date DEFAULT NULL,
  `admin_last_login` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE `app_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_full_name` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_tel` int(20) DEFAULT NULL,
  `user_reg_date` date DEFAULT NULL,
  `user_last_login` date DEFAULT NULL,
  `user_status` int(20) NOT NULL DEFAULT 1 COMMENT 'active=1\r\ninactive=2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_user_activity`
--

CREATE TABLE `app_user_activity` (
  `user_activity_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_activity_type` varchar(255) NOT NULL,
  `user_activity_date` date DEFAULT NULL,
  `user_activity_time` text DEFAULT NULL,
  `user_activity_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_user_donation_history`
--

CREATE TABLE `app_user_donation_history` (
  `user_donation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `user_payment_id` int(11) NOT NULL,
  `user_donation_date` date DEFAULT NULL,
  `user_donation_amount` decimal(10,2) DEFAULT 0.00,
  `user_donation_remark` varchar(255) DEFAULT NULL,
  `user_donation_status` int(11) NOT NULL DEFAULT 1 COMMENT 'active =1\r\ninactive=2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_user_payment`
--

CREATE TABLE `app_user_payment` (
  `user_payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_bank` varchar(255) DEFAULT NULL,
  `user_branch` varchar(255) DEFAULT NULL,
  `user_acc_number` int(11) NOT NULL,
  `user_remark` varchar(255) DEFAULT NULL,
  `user_card_number` int(20) NOT NULL,
  `user_card_expiary` date NOT NULL,
  `user_card_csv` int(5) NOT NULL,
  `user_card_name` varchar(255) NOT NULL,
  `user_payment_status` int(11) NOT NULL DEFAULT 1 COMMENT 'active =1\r\ninactive=2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_active_status`
--

CREATE TABLE `campaign_active_status` (
  `status_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `status_date` date DEFAULT NULL,
  `status_command` int(11) NOT NULL DEFAULT 1 COMMENT 'active =1\r\ninactive=2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_category`
--

CREATE TABLE `campaign_category` (
  `campaign_category_id` int(11) NOT NULL,
  `campaign_category_name` varchar(255) DEFAULT NULL,
  `campaign_category_remark` varchar(255) DEFAULT NULL,
  `campaign_category_status` int(11) NOT NULL DEFAULT 1 COMMENT 'active =1\r\ninactive=2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_payment_achive`
--

CREATE TABLE `campaign_payment_achive` (
  `campaign_payment_achive_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `campaign_payment_amount` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_view_count`
--

CREATE TABLE `campaign_view_count` (
  `campaign_view_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `view_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_activity_log`
--

CREATE TABLE `merchant_activity_log` (
  `merchant_activity_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `merchant_activity_type` varchar(255) DEFAULT NULL,
  `merchant_activity_date` date DEFAULT NULL,
  `merchant_activity_time` text DEFAULT NULL,
  `merchant_activity_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_campaign`
--

CREATE TABLE `merchant_campaign` (
  `campaign_id` int(11) NOT NULL,
  `campaign_category_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `campaign_name` varchar(255) NOT NULL,
  `campaign_image` text DEFAULT NULL,
  `campaign_amount` int(11) DEFAULT NULL,
  `campaign_achive_amount` int(11) DEFAULT NULL,
  `campaign_create_date` date DEFAULT NULL,
  `campaign_approve_date` date DEFAULT NULL,
  `campaign_end_date` date DEFAULT NULL,
  `campaign_short_description` varchar(255) DEFAULT NULL,
  `campaign_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_payout_details`
--

CREATE TABLE `merchant_payout_details` (
  `merchant_payout_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `merchant_bank` varchar(255) DEFAULT NULL,
  `merchant_branch` varchar(255) DEFAULT NULL,
  `merchant_acc_number` int(11) DEFAULT NULL,
  `merchant_remark` varchar(255) DEFAULT NULL,
  `merchant_payment_status` int(11) NOT NULL DEFAULT 1 COMMENT 'active =1\r\ninactive=2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_payout_history`
--

CREATE TABLE `merchant_payout_history` (
  `merchant_payout_id_history` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `merchant_payout_id` int(11) NOT NULL,
  `merchant_pay_data` varchar(255) DEFAULT NULL,
  `merchant_pay_amount` decimal(10,2) DEFAULT 0.00,
  `merchant_pay_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_user`
--

CREATE TABLE `merchant_user` (
  `merchant_id` int(11) NOT NULL,
  `merchant_username` varchar(255) NOT NULL,
  `merchant_password` varchar(255) NOT NULL,
  `merchant_full_name` varchar(255) DEFAULT NULL,
  `merchant_address` varchar(255) DEFAULT NULL,
  `merchant_tel_no` int(11) DEFAULT NULL,
  `merchant_reg_date` date DEFAULT NULL,
  `merchant_nic` int(11) DEFAULT NULL,
  `merchant_passport` varchar(255) DEFAULT NULL,
  `merchant_last_login` date DEFAULT NULL,
  `merchant_status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active = 1 \r\nInactive = 2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organization_settings`
--

CREATE TABLE `organization_settings` (
  `organization_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `organization_reg_no` int(11) DEFAULT NULL,
  `organization_address` varchar(255) DEFAULT NULL,
  `organization_tel` int(11) DEFAULT NULL,
  `organization_status` int(11) DEFAULT NULL,
  `organization_details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_about_us_settings`
--
ALTER TABLE `admin_about_us_settings`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD PRIMARY KEY (`admin_activity_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `admin_banner_settings`
--
ALTER TABLE `admin_banner_settings`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `admin_gallery_settings`
--
ALTER TABLE `admin_gallery_settings`
  ADD PRIMARY KEY (`admin_gallery_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `app_user_activity`
--
ALTER TABLE `app_user_activity`
  ADD PRIMARY KEY (`user_activity_id`),
  ADD KEY `test` (`user_id`);

--
-- Indexes for table `app_user_donation_history`
--
ALTER TABLE `app_user_donation_history`
  ADD PRIMARY KEY (`user_donation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `app_user_donation_history_ibfk_1` (`campaign_id`),
  ADD KEY `user_payment_id` (`user_payment_id`);

--
-- Indexes for table `app_user_payment`
--
ALTER TABLE `app_user_payment`
  ADD PRIMARY KEY (`user_payment_id`),
  ADD KEY `app_user_payment_ibfk_1` (`user_id`);

--
-- Indexes for table `campaign_active_status`
--
ALTER TABLE `campaign_active_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `campaign_category`
--
ALTER TABLE `campaign_category`
  ADD PRIMARY KEY (`campaign_category_id`);

--
-- Indexes for table `campaign_payment_achive`
--
ALTER TABLE `campaign_payment_achive`
  ADD PRIMARY KEY (`campaign_payment_achive_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `campaign_view_count`
--
ALTER TABLE `campaign_view_count`
  ADD PRIMARY KEY (`campaign_view_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `merchant_activity_log`
--
ALTER TABLE `merchant_activity_log`
  ADD PRIMARY KEY (`merchant_activity_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `merchant_campaign`
--
ALTER TABLE `merchant_campaign`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `campaign_category_id` (`campaign_category_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `merchant_payout_details`
--
ALTER TABLE `merchant_payout_details`
  ADD PRIMARY KEY (`merchant_payout_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `merchant_payout_history`
--
ALTER TABLE `merchant_payout_history`
  ADD PRIMARY KEY (`merchant_payout_id_history`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `merchant_payment_history_count_ibfk_1` (`merchant_payout_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `merchant_user`
--
ALTER TABLE `merchant_user`
  ADD PRIMARY KEY (`merchant_id`);

--
-- Indexes for table `organization_settings`
--
ALTER TABLE `organization_settings`
  ADD PRIMARY KEY (`organization_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_about_us_settings`
--
ALTER TABLE `admin_about_us_settings`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  MODIFY `admin_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_banner_settings`
--
ALTER TABLE `admin_banner_settings`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_gallery_settings`
--
ALTER TABLE `admin_gallery_settings`
  MODIFY `admin_gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_user_activity`
--
ALTER TABLE `app_user_activity`
  MODIFY `user_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_user_donation_history`
--
ALTER TABLE `app_user_donation_history`
  MODIFY `user_donation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_user_payment`
--
ALTER TABLE `app_user_payment`
  MODIFY `user_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_active_status`
--
ALTER TABLE `campaign_active_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_category`
--
ALTER TABLE `campaign_category`
  MODIFY `campaign_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_payment_achive`
--
ALTER TABLE `campaign_payment_achive`
  MODIFY `campaign_payment_achive_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_view_count`
--
ALTER TABLE `campaign_view_count`
  MODIFY `campaign_view_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_activity_log`
--
ALTER TABLE `merchant_activity_log`
  MODIFY `merchant_activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_campaign`
--
ALTER TABLE `merchant_campaign`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_payout_details`
--
ALTER TABLE `merchant_payout_details`
  MODIFY `merchant_payout_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_payout_history`
--
ALTER TABLE `merchant_payout_history`
  MODIFY `merchant_payout_id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_user`
--
ALTER TABLE `merchant_user`
  MODIFY `merchant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization_settings`
--
ALTER TABLE `organization_settings`
  MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD CONSTRAINT `admin_activity_log_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin_user` (`admin_id`);

--
-- Constraints for table `app_user_activity`
--
ALTER TABLE `app_user_activity`
  ADD CONSTRAINT `test` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`user_id`);

--
-- Constraints for table `app_user_donation_history`
--
ALTER TABLE `app_user_donation_history`
  ADD CONSTRAINT `app_user_donation_history_ibfk_1` FOREIGN KEY (`user_payment_id`) REFERENCES `app_user_payment` (`user_payment_id`);

--
-- Constraints for table `app_user_payment`
--
ALTER TABLE `app_user_payment`
  ADD CONSTRAINT `app_user_payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`user_id`);

--
-- Constraints for table `campaign_active_status`
--
ALTER TABLE `campaign_active_status`
  ADD CONSTRAINT `campaign_active_status_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `merchant_campaign` (`campaign_id`);

--
-- Constraints for table `campaign_payment_achive`
--
ALTER TABLE `campaign_payment_achive`
  ADD CONSTRAINT `campaign_payment_achive_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `merchant_campaign` (`campaign_id`);

--
-- Constraints for table `campaign_view_count`
--
ALTER TABLE `campaign_view_count`
  ADD CONSTRAINT `campaign_view_count_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `merchant_campaign` (`campaign_id`);

--
-- Constraints for table `merchant_activity_log`
--
ALTER TABLE `merchant_activity_log`
  ADD CONSTRAINT `merchant_activity_log_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchant_user` (`merchant_id`);

--
-- Constraints for table `merchant_campaign`
--
ALTER TABLE `merchant_campaign`
  ADD CONSTRAINT `merchant_campaign_ibfk_1` FOREIGN KEY (`campaign_category_id`) REFERENCES `campaign_category` (`campaign_category_id`),
  ADD CONSTRAINT `merchant_campaign_ibfk_2` FOREIGN KEY (`merchant_id`) REFERENCES `merchant_user` (`merchant_id`),
  ADD CONSTRAINT `merchant_campaign_ibfk_3` FOREIGN KEY (`organization_id`) REFERENCES `organization_settings` (`organization_id`);

--
-- Constraints for table `merchant_payout_details`
--
ALTER TABLE `merchant_payout_details`
  ADD CONSTRAINT `merchant_payout_details_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchant_user` (`merchant_id`);

--
-- Constraints for table `merchant_payout_history`
--
ALTER TABLE `merchant_payout_history`
  ADD CONSTRAINT `merchant_payout_history_ibfk_1` FOREIGN KEY (`merchant_payout_id`) REFERENCES `merchant_payout_details` (`merchant_payout_id`),
  ADD CONSTRAINT `merchant_payout_history_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin_user` (`admin_id`);

--
-- Constraints for table `organization_settings`
--
ALTER TABLE `organization_settings`
  ADD CONSTRAINT `organization_settings_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchant_user` (`merchant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
