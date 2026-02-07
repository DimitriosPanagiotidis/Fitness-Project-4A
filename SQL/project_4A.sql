-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Feb 07, 2026 at 10:10 PM
-- Server version: 10.4.34-MariaDB-1:10.4.34+maria~ubu2004
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_4A`
--

-- --------------------------------------------------------

--
-- Table structure for table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `street` varchar(60) NOT NULL,
  `house_number` varchar(10) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `mobile` varchar(9) NOT NULL,
  `phone` varchar(9) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('member','employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `role`) VALUES
(1, 'Dimitris', 'Panagiotidis', 'example@example.com', 'dimitris', '123456789', 'member'),
(2, 'Dimitris', 'Panagiotidis', '203156@novacollege.nl', 'dimitris', '123456789', 'member'),
(3, 'Dimitris', 'Panagiotidis', 'example@example.com', 'dimitris', '123456789', 'employee'),
(4, 'Dimitris', 'Panagiotidis', 'asfd@gmail.com', 'Apostolis', '123456789', 'member'),
(5, 'Dimitris', 'Panagiotidis', 'example@example.com', 'dimitris', '12345678945', 'member'),
(6, 'Dimitris', 'Panagiotidis', 'example@example.com', 'dimitris', '12345678945111', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE `workouts` (
  `id` int(200) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(200) NOT NULL,
  `difficulty` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `added_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `title`, `description`, `duration`, `difficulty`, `note`, `image`, `added_at`) VALUES
(1, 'Full Body HIIT Circuit', 'A high-intensity interval routine targeting the entire body with short bursts of effort followed by brief rest.', '20', 'Intermediate', 'Great for fat-burning; modify intensity as needed.', 'images/Full_body.jpeg', '2025-12-01'),
(2, 'Upper Body Strength', 'Focused strength training session including push-ups, rows, and shoulder presses.', '30', 'Intermediate', 'Use adjustable weights to scale difficulty.', 'images/Upper_body.jpeg', '2025-12-01'),
(3, 'Beginner Yoga Flow', 'A gentle series of foundational yoga poses to improve flexibility and mindfulness.', '25', 'Beginner', 'Perfect for warm-ups or recovery days.', 'images/beginner_yoga_flow.jpeg', '2025-12-01'),
(4, 'Core Crusher', 'Targeted ab and core training including planks, crunches, and leg raises.', '15', 'Intermediate', 'Maintain proper form to protect your lower back.', 'images/core_crusher.jpeg', '2025-12-01'),
(5, 'Leg Day Power', 'Lower body workout including squats, lunges, glute bridges, and calf raises.', '35', 'Advanced', 'Expect muscle fatigue; warm up thoroughly.', 'images/leg_day.jpeg', '2025-12-01'),
(6, 'Morning Stretch Routine', 'A slow, relaxing stretch sequence to wake up the body and improve mobility.', '10', 'Beginner', 'Best done right after waking up.', 'images/morning_strech_routine.jpeg', '2025-12-01'),
(7, 'Back & Shoulders Sculpt', 'Isolation exercises targeting the back and shoulder muscles for improved posture and strength.', '28', 'Intermediate', 'Focus on controlled movements.', 'images/back_sculpt.jpeg', '2025-12-01'),
(8, 'Cardio Endurance Run', 'Steady-state running session aimed at improving cardiovascular stamina.', '40', 'Advanced', 'Keep a consistent pace; hydrate well.', 'images/cardio_run.jpg', '2025-12-01'),
(9, 'Bodyweight Basics', 'Foundational routine using only bodyweight exercises like squats, push-ups, and dips.', '18', 'Beginner', 'Ideal for at-home training.', 'images/bodyweight_basics.jpg', '2025-12-01'),
(10, 'Kettlebell Burn Session', 'Full-body workout using kettlebell swings, cleans, and presses for strength and conditioning.', '22', 'Advanced', 'Ensure proper kettlebell form to avoid injury.', 'images/kettlebell_burn.jpg', '2025-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
