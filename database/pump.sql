-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 09:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pump`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `mobile`, `address`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('85ee32b9-d0e1-8722-30f5-5887b58f9d9f', 'Neeraj Kumar', '8443868777', 'Kolkata, West Bengal', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-24 21:12:37', '2017-01-24 21:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE `commission` (
  `id` char(36) NOT NULL,
  `product_type` char(36) NOT NULL,
  `amount` varchar(16) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`id`, `product_type`, `amount`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('1487f786-c825-ca8b-5cbe-589b73b7c43b', '9fc1e394-bb30-d8ed-9ae6-588901791070', '1.00', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 20:37:30', '2017-02-08 20:37:30'),
('c4155d2c-cf6e-5c84-d4f0-589b73455468', '1fe133e6-7c77-0021-aefd-5889018162a5', '0.60', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 20:37:53', '2017-02-08 20:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` char(36) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `amount` varchar(16) NOT NULL,
  `expense_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `detail`, `amount`, `expense_date`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('708c1931-0598-e13d-df0b-589b71a149a9', 'Lorem Ipsum is a dummy text', '5000', '2017-02-09', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 20:31:05', '2017-02-08 20:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nozzle`
--

CREATE TABLE `nozzle` (
  `id` char(36) NOT NULL,
  `product_type` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nozzle`
--

INSERT INTO `nozzle` (`id`, `product_type`, `name`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('32c9028c-aa3e-a890-e328-588902f5c590', '1fe133e6-7c77-0021-aefd-5889018162a5', 'Nozzle 2', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:54:21', '2017-01-25 20:54:21'),
('5335c36e-d472-2f06-bfc9-588902aed275', '1fe133e6-7c77-0021-aefd-5889018162a5', 'Nozzle 3', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:54:30', '2017-01-25 20:54:30'),
('5e809481-6ba4-9d66-da46-5889029f5dfb', '9fc1e394-bb30-d8ed-9ae6-588901791070', 'Nozzle 2', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:53:49', '2017-01-25 20:53:49'),
('a7c1a1b0-6630-c2fb-639a-588902f65376', '9fc1e394-bb30-d8ed-9ae6-588901791070', 'Nozzle 3', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:54:01', '2017-01-25 20:54:01'),
('c3b37444-e2ad-e8e8-e4e5-5889025c78c0', '9fc1e394-bb30-d8ed-9ae6-588901791070', 'Nozzle 1', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:53:34', '2017-01-25 20:53:34'),
('cd58021c-22e0-176c-146b-5889027a9486', '1fe133e6-7c77-0021-aefd-5889018162a5', 'Nozzle 1', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:54:12', '2017-01-25 20:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `oil_price`
--

CREATE TABLE `oil_price` (
  `id` char(36) NOT NULL,
  `product_type` char(36) NOT NULL,
  `price` varchar(16) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oil_price`
--

INSERT INTO `oil_price` (`id`, `product_type`, `price`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('1626c47d-3fa3-a778-e1e6-589b720de883', '9fc1e394-bb30-d8ed-9ae6-588901791070', '72.59', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 20:35:08', '2017-02-08 20:35:08'),
('44fb0e78-ce12-5adf-5712-589b73848e0b', '1fe133e6-7c77-0021-aefd-5889018162a5', '59.60', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 20:36:50', '2017-02-08 20:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('1fe133e6-7c77-0021-aefd-5889018162a5', 'Diesel', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:52:19', '2017-01-25 20:52:19'),
('6084c819-5c09-fa13-62f7-5889034fb8c5', 'Mobil', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:58:38', '2017-01-25 20:58:38'),
('9fc1e394-bb30-d8ed-9ae6-588901791070', 'Petrol', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:52:09', '2017-01-25 20:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified_by` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `deleted`, `created_by`, `modified_by`, `date_entered`, `date_modified`) VALUES
('4eee73be-fb69-11e5-91d7-3c07717072c4', 'admin', 1, 0, '7e567f4c-fb69-11e5-91d7-3c07717072c4', '7e567f4c-fb69-11e5-91d7-3c07717072c4', '2016-04-06 00:00:00', '2016-04-06 00:00:00'),
('fc1965dc-fc39-11e5-bac4-3c07717072c4', 'manager', 1, 0, '1', '1', '2016-04-07 00:00:00', '2016-04-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` char(36) NOT NULL,
  `product_type` char(36) NOT NULL,
  `nozzle` char(36) NOT NULL,
  `mobil` char(36) NOT NULL,
  `opening_meter` varchar(11) NOT NULL,
  `closing_meter` varchar(11) NOT NULL,
  `sale_quantity` varchar(11) NOT NULL,
  `sale_price` varchar(11) NOT NULL,
  `sale_amount` varchar(11) NOT NULL,
  `remarks` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `product_type`, `nozzle`, `mobil`, `opening_meter`, `closing_meter`, `sale_quantity`, `sale_price`, `sale_amount`, `remarks`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('727e5845-9b8d-ce83-da98-5889205b0a56', '9fc1e394-bb30-d8ed-9ae6-588901791070', 'c3b37444-e2ad-e8e8-e4e5-5889025c78c0', '', '65000', '70000', '5000', '64.86', '64.86', 'Sale for 26/01/2017', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 23:03:06', '2017-01-25 23:03:06'),
('9f66cd7d-1e2f-8267-0088-589b7820a385', '9fc1e394-bb30-d8ed-9ae6-588901791070', 'c3b37444-e2ad-e8e8-e4e5-5889025c78c0', '', '152489', '160021', '7532', '72.59', '72.59', 'Lorem Ipsum', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 20:59:44', '2017-02-08 20:59:44'),
('d2c6190f-83e1-e655-30fa-589b79b59d38', '1fe133e6-7c77-0021-aefd-5889018162a5', 'cd58021c-22e0-176c-146b-5889027a9486', '', '12489', '15669', '3180', '59.60', '59.60', 'Lorem Ipsum', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-02-08 21:04:43', '2017-02-08 21:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` char(36) NOT NULL,
  `client` char(36) NOT NULL,
  `vehicle` char(36) NOT NULL,
  `product_type` char(36) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `rate` varchar(32) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `type` enum('c','d') NOT NULL,
  `remarks` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reset_code` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_reset_code`, `first_name`, `last_name`, `address`, `email`, `phone`, `is_admin`, `role_id`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('1ddd73be-fb69-11e5-91d7-3c07717075d9', 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Admin', 'Admin', NULL, 'neeraj24a@gmail.com', '', 1, '4eee73be-fb69-11e5-91d7-3c07717072c4', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-21 00:00:00', '2017-02-08 21:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` char(36) NOT NULL,
  `client` char(36) NOT NULL,
  `name` varchar(128) NOT NULL,
  `number` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` char(36) NOT NULL,
  `updated_by` char(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `client`, `name`, `number`, `status`, `deleted`, `created_by`, `updated_by`, `date_entered`, `date_modified`) VALUES
('4dfaa0ca-7989-efea-0ac4-5889014f06ba', '85ee32b9-d0e1-8722-30f5-5887b58f9d9f', 'TATA', 'JH 12 F 2901', 1, 0, '1ddd73be-fb69-11e5-91d7-3c07717075d9', '1ddd73be-fb69-11e5-91d7-3c07717075d9', '2017-01-25 20:50:41', '2017-01-25 20:50:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission`
--
ALTER TABLE `commission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nozzle`
--
ALTER TABLE `nozzle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oil_price`
--
ALTER TABLE `oil_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
