-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 11:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elec_comp`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'What hours do you open', 'We normally open at 5pm'),
(2, 'Another question is this', 'The answer to this quiz is this'),
(3, 'What hours do you open', 'We normally open at 5pm'),
(4, 'What hours do you open', 'We normally open at 5pm'),
(5, 'What hours do you open', 'We normally open at 5pm');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'nsnnndndd', 'bursar@josnemacademy.ac.ke', 'snsndjsdjsdbs', 'dknsdsdskjdskjfds', '2020-12-02 09:23:35'),
(2, 'nsnnndndd', 'bursar@josnemacademy.ac.ke', 'snsndjsdjsdbs', 'dknsdsdskjdskjfds', '2020-12-02 09:23:35'),
(3, 'nsnnndndd', 'bursar@josnemacademy.ac.ke', 'snsndjsdjsdbs', 'dknsdsdskjdskjfds', '2020-12-02 09:23:35'),
(4, 'nsnnndndd', 'bursar@josnemacademy.ac.ke', 'snsndjsdjsdbs', 'dknsdsdskjdskjfds', '2020-12-02 09:23:35'),
(5, 'Joseph Njenga', 'kariuki.j.njenga2210@gmail.com', 'Additional information about the website', 'Please help me with some additional information about the website so that we may finish it in good time. I will greatly appreciate if you do this to me. Kindly let me have your response before the end of the day.\\\r\nRegards,\r\nJoseph Njenga(Developer)', '2020-12-02 09:23:35'),
(6, 'Joseph Njenga', 'kariuki.j.njenga2210@gmail.com', 'Additional information about the website', 'Please help me with some additional information about the website so that we may finish it in good time. I will greatly appreciate if you do this to me. Kindly let me have your response before the end of the day.\\\r\nRegards,\r\nJoseph Njenga(Developer)', '2020-12-02 09:23:35'),
(7, 'Joseph Njenga', '0758826552', 'Additional information about the website', 'Please help me with some additional information about the website so that we may finish it in good time. I will greatly appreciate if you do this to me. Kindly let me have your response before the end of the day.\\\r\nRegards,\r\nJoseph Njenga(Developer)', '2020-12-02 09:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`) VALUES
(1, '', 'We do offer electrical wiring at an affordable price. Please visit us at any nearest office to get this offer'),
(2, 'Electical solar installation', 'We are also here to offer electical installation at an afffordable price'),
(3, 'Water pipes fixation', 'We are also offering to be fixing broken pipes, so in case you have any broken pipes, feel free to let us know and we will deliver it to you at your doorstep');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `title`, `description`, `image`) VALUES
(2, 'Title', 'Description', 'assets/img/DSC_0443.JPG'),
(3, 'Complaint on mobile friendliness', 'Description of the second image  goes here', 'assets/img/DSC_0453.JPG'),
(4, 'At Masing dam', 'Our work at a construction site in Masinga dam. The project was contracted by H.E. Governor Mwangi Wa Iria. ', 'assets/img/IMG_20160729_171200.jpg'),
(5, 'Software Development', 'Let us make the best softwares you need from our hardworking team......', 'assets/img/NFT-300x242.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'joseph_njenga', 'kariuki.j.njenga2210@gmail.com', 758826552, '1368ba1ab6ed38bb1f26f36673739d54'),
(2, 'joseph_njenga', 'kariuki.j.njenga2210@gmail.com', 758826552, '3323fe11e9595c09af38fe67567a9394');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
