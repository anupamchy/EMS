-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2021 at 08:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyed_leave`
--

CREATE TABLE `applyed_leave` (
  `id` int(11) NOT NULL,
  `l_form` varchar(1000) NOT NULL,
  `l_to` varchar(1000) NOT NULL,
  `e_leave` int(255) NOT NULL,
  `m_leave` int(255) NOT NULL,
  `c_leave` int(255) NOT NULL,
  `apply_by` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applyed_leave`
--

INSERT INTO `applyed_leave` (`id`, `l_form`, `l_to`, `e_leave`, `m_leave`, `c_leave`, `apply_by`, `status`, `comment`, `applied_date`) VALUES
(1, '2021-03-13', '2021-03-17', 4, 2, 2, 22, 'Approved', 'approved.', '2021-03-22 11:35:26'),
(2, '2021-03-11', '2021-03-18', 1, 2, 5, 24, 'Approved', '', '2021-03-22 16:25:49'),
(3, '2021-03-23', '2021-03-24', 1, 1, 1, 25, 'Rejected', 'Do all task margin 40 pc', '2021-03-22 16:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(255) NOT NULL,
  `v_from` varchar(1000) NOT NULL,
  `v_to` varchar(1000) NOT NULL,
  `e_leave` varchar(1000) NOT NULL,
  `m_leave` varchar(1000) NOT NULL,
  `c_leave` varchar(1000) NOT NULL,
  `assign_to` int(255) NOT NULL,
  `assign_by` varchar(1000) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_leave`
--

INSERT INTO `assign_leave` (`id`, `v_from`, `v_to`, `e_leave`, `m_leave`, `c_leave`, `assign_to`, `assign_by`, `modified_date`) VALUES
(3, '2021-03-13', '2021-03-27', '6', '6', '6', 22, '18', '2021-03-21 11:44:23'),
(4, '2021-03-13', '2021-03-27', '6', '6', '6', 19, '18', '2021-03-21 11:44:23'),
(5, '2021-03-12', '2021-03-18', '6', '2', '1', 19, '18', '2021-03-21 11:44:59'),
(6, '2021-03-23', '2021-03-24', '6', '2', '6', 22, '18', '2021-03-22 14:08:31'),
(7, '2021-03-11', '2021-03-25', '10', '15', '20', 20, '16', '2021-03-22 14:27:42'),
(8, '2021-03-08', '2021-04-01', '6', '3', '5', 19, '16', '2021-03-22 15:16:41'),
(9, '2021-03-01', '2021-03-23', '10', '6', '1', 24, '16', '2021-03-22 15:20:17'),
(10, '2021-03-23', '2021-03-27', '1', '1', '1', 25, '16', '2021-03-22 16:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_id` int(255) NOT NULL,
  `task` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `assigend_by` int(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_id`, `task`, `user_id`, `assigend_by`, `date_time`) VALUES
(1, 'gchh', 22, 16, '2021-03-20 14:17:03'),
(2, 'hvhgjm', 22, 16, '2021-03-20 14:17:11'),
(3, 'msg testing', 22, 16, '2021-03-20 14:22:43'),
(4, 'msg testing', 19, 16, '2021-03-20 14:22:43'),
(5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 19, 16, '2021-03-20 14:23:18'),
(6, '  <?php include \'header.php\'; ?>\r\n<div class=\"container\"> \r\n  <?php if(isset($_SESSION[\'success\']))\r\n     {\r\n      echo $_SESSION[\'success\'];\r\n      unset($_SESSION[\'success\']);\r\n     }\r\n    ?>\r\n', 19, 16, '2021-03-20 14:25:03'),
(7, 'cggfhk', 22, 16, '2021-03-20 16:17:54'),
(8, 'do your taaaaaaaaaaaaaaaaaaaaaaaaaaaaaskkkkkkk', 22, 18, '2021-03-22 14:11:28'),
(9, 'hbhjuhkiu', 22, 18, '2021-03-22 14:12:17'),
(10, 'plenty of RAM and you fully understand how web server processes consume memory. You could easily bring a server to its knees if there are many concurrent processes running, each using a high amount of memory. I would never, ever recommend setting the memory limit to -1 (unlimited) in a production environment. That\'s a recipe for disaster. Don\'t make that newbie mistake.', 20, 16, '2021-03-22 14:28:09'),
(11, 'Do all design  top margin 40 px', 25, 16, '2021-03-22 16:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `task_reply`
--

CREATE TABLE `task_reply` (
  `r_id` int(255) NOT NULL,
  `reply` text NOT NULL,
  `m_id` int(11) NOT NULL,
  `reply_by` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_reply`
--

INSERT INTO `task_reply` (`r_id`, `reply`, `m_id`, `reply_by`, `date_time`) VALUES
(1, '', 3, 22, '2021-03-21 05:15:08'),
(2, '', 3, 22, '2021-03-21 05:15:11'),
(3, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:15:46'),
(4, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:28:20'),
(5, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:29:16'),
(6, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:29:20'),
(7, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:29:52'),
(8, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:32:19'),
(9, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:32:46'),
(10, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:33:14'),
(11, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:33:19'),
(12, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:33:52'),
(13, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:36:23'),
(14, 'vfhg\r\norem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 3, 22, '2021-03-21 05:37:27'),
(15, 'ghdf\r\nhvujgbj', 3, 22, '2021-03-21 05:37:34'),
(16, '', 3, 22, '2021-03-21 05:37:36'),
(17, '', 3, 22, '2021-03-21 05:37:39'),
(18, 'vh', 3, 22, '2021-03-21 05:37:46'),
(19, ' m m    ,mk', 3, 22, '2021-03-21 05:39:00'),
(20, ' m m    ,mk', 3, 22, '2021-03-21 05:40:54'),
(21, ' m m    ,mk', 3, 22, '2021-03-21 05:42:17'),
(22, 'm knk', 3, 22, '2021-03-21 05:42:25'),
(23, 'm knk', 3, 22, '2021-03-21 05:51:28'),
(24, 'nfnkjfe', 3, 22, '2021-03-21 05:51:34'),
(25, '', 3, 22, '2021-03-21 05:51:38'),
(26, '', 3, 22, '2021-03-21 05:51:57'),
(27, '', 3, 22, '2021-03-21 05:54:42'),
(28, '', 3, 22, '2021-03-21 05:55:02'),
(29, '', 3, 22, '2021-03-21 06:03:20'),
(30, 'ok.', 3, 18, '2021-03-21 06:58:11'),
(31, '', 3, 18, '2021-03-21 06:58:23'),
(32, 'ok\r\n', 3, 18, '2021-03-21 06:58:31'),
(33, 'ok\r\n', 3, 18, '2021-03-21 07:06:26'),
(34, 'ok\r\n', 3, 18, '2021-03-21 07:07:16'),
(35, 'ok\r\n', 3, 18, '2021-03-21 07:07:56'),
(36, 'ok\r\n', 3, 18, '2021-03-21 07:08:15'),
(37, 'ok\r\n', 3, 18, '2021-03-21 07:09:02'),
(38, 'ok\r\n', 3, 18, '2021-03-21 07:16:47'),
(39, 'ok', 8, 18, '2021-03-22 14:11:53'),
(40, '', 8, 18, '2021-03-22 14:11:55'),
(41, 'No , its not posibble', 11, 25, '2021-03-22 16:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_on` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `name`, `email`, `password`, `department`, `role`, `created_on`) VALUES
(16, 'anupam', 'anu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Web Devlopment', 'admin', '2021-03-18 17:47:00.25926'),
(18, 'sanu', 'sanu@gmail1.com', 'e10adc3949ba59abbe56e057f20f883e', 'SEO', 'admin', '2021-03-20 07:14:29.37563'),
(19, 'Rakesh1', 'test1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'SEO', 'employee', '2021-03-20 10:51:20.19764'),
(20, 'sanukumar', 'sanu1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'SEO', 'employee', '2021-03-20 11:30:24.07165'),
(21, 'sanukumar1', '1test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Web Devlopment', 'admin', '2021-03-20 11:30:41.41827'),
(22, 'Demo', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'SEO', 'employee', '2021-03-20 11:31:01.22075'),
(24, 'ptanhi', 'ptanhi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'SEO', 'employee', '2021-03-22 15:19:49.96108'),
(25, 'manas', 'manas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Web Devlopment', 'employee', '2021-03-22 16:21:01.01673');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyed_leave`
--
ALTER TABLE `applyed_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `task_reply`
--
ALTER TABLE `task_reply`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyed_leave`
--
ALTER TABLE `applyed_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `task_reply`
--
ALTER TABLE `task_reply`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
