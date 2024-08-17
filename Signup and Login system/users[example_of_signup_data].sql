-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 09:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'root', 'asdsad@sadasd', '$2y$12$rBqq9R2NLtw64g04Oejz7uMt1HGOAPIBPq8EVuibe.xJ9YFVGMjgC', '2024-08-11 12:25:06'),
(2, 'mohamedsharshar', 'sadasdas@sadusagusagdasdbsa', '$2y$12$TAnNQuGL0ep2Tf72jAqbZ.6aqxiUkHcdXsOKknEv2eyHKWuJHYnfi', '2024-08-11 12:30:44'),
(3, 'mohamedsharshar2', 'mmshsh05@gmail.com', '$2y$12$pXRTsAxxswTWRDaDl/E5Ruqq5DChSYGXW8NYPVlTmeiyIMvEQb.Km', '2024-08-11 12:32:10'),
(4, 'amr', 'hdgsaudy@gmail.com', '$2y$12$Ik093fFKTgjfgSAhOyfU9O2kY4CStLSsn1AHvG8t/fVwicoC4ii/y', '2024-08-12 10:49:14'),
(5, 'khaled', 'lksadsa@gmail.com', '$2y$12$.BrQEBq//iWu4rCU2DkwKOcGmO5POa884QTwOujON/ayv65AsSDIq', '2024-08-12 18:41:37'),
(6, 'mohamedsharshar23', 'asas@gmail.com', '$2y$12$fKz7EgrQOLLKeJAf6ymsWeuSroeNisJzh3vMwDguojr4KiaSVrCdG', '2024-08-17 13:43:05'),
(7, 'mm', 'mm@gmail.com', '$2y$12$q/5lqFJd5WMvjUKPS/w2BeIz.qeGTGSjmaOv6y.uuPXhFMrGJDwuC', '2024-08-17 15:56:43'),
(8, 'ahmed', 'aj@gmail.com', '$2y$12$UWaX4O3RbNbu3c7uhcXeu.XgGa7RjUB3O9df/QUAHN90wBmb5b61C', '2024-08-17 16:52:45'),
(9, 'mm1', '12E#@gmail.com', '$2y$12$eUASS8xHX0HOnayvBAvuUuSWhLqSgT94n90dOdfTtnlMJlczTByDS', '2024-08-17 18:49:53'),
(10, 'mmq', 'qq@gmail.com', '$2y$12$khCuWJvujkfYkWZRH4zzYeLCff6HCcdSOW.xpqaiGIdvxUuDindFe', '2024-08-17 19:33:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
