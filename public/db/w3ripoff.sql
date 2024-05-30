-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 11:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w3ripoff`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `body`) VALUES
(1, 'Data Type', 'A data type, in programming, is a classification that specifies which type of value a variable has and what type of mathematical, relational or logical operations can be applied to it without causing an error.\r\n\r\nPHP supports the following data types:\r\n\r\nString\r\nInteger\r\nFloat (also called double)\r\nBoolean\r\nArray\r\nObject\r\nNULL\r\nResource\r\nBut in this page, we\'re learning only four of it (integer, float, char, and string).\r\n\r\n*Just a kindly reminder that the statements in the examples here are the most basic one, so don\'t get too attached to it. Thank you!\r\n\r\n1. Integer\r\n\r\nAn integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.\r\nRules for integers:\r\n\r\nAn integer must have at least one digit.\r\nAn integer must not have a decimal point.\r\nAn integer can be either positive or negative.\r\nIntegers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation.\r\n\r\n2. Float\r\n\r\nA float (floating point number) is a number with a decimal point or a number in exponential form.\r\n\r\n3. String\r\n\r\nA string is a sequence of characters, for example, the sentence \"Hello world!\".\r\nA string can be any text inside quotes. You can use single or double quotes.\r\n\r\n4. Char\r\n\r\nUnfortunately, PHP doesn\'t support the char data type, but we can use the string data type, assign just one letter into it, and use single quote to make it look more \"char\".'),
(2, 'Conditional Statement', 'a conditional statement is a set of rules performed if a certain condition is met.\r\nThere are four conditional statement in PHP:\r\n\r\nIf\r\nIf else\r\nIf elseif else\r\nSwitch\r\n\r\n*Just a kindly reminder that the statements in the examples here are the most basic one, so don\'t get too attached to it. Thank you!\r\n\r\n1. If\r\n\r\nif statement executes some code if one condition is true.\r\n\r\n2. If else\r\n\r\nif else statement executes some code if a condition is true and another code if that condition is false.\r\n\r\n3. If elseif else\r\n\r\nif elseif else statement executes different codes for more than two conditions.\r\n\r\n4. Switch\r\n\r\nswitch statement switchs the value of a variable and executes one of many blocks of code depends on the value.'),
(3, 'Looping', 'Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.\r\nLoops are used to execute the same block of code again and again, as long as a certain condition is true.\r\nThere are four loop types in PHP:\r\n\r\nFor\r\nWhile\r\nDo while\r\nForeach\r\n\r\n*Just a kindly reminder that the statements in the examples here are the most basic one, so don\'t get too attached to it. Thank you!\r\n\r\n1. For\r\n\r\nFor type loops through a block of code a specified number of times.\r\n\r\n2. While\r\n\r\nWhile type loops through a block of code as long as the specified condition is true.\r\n\r\n3. Do while\r\n\r\nDo while loops through a block of code once, and then repeats the loop as long as the specified condition is true.\r\n\r\n4. Foreach\r\n\r\nForeach type loops through a block of code for each element in an array.'),
(4, 'Array', 'An array is a special data type, which can hold more than one value at a time.\r\nThere are three types of arrays in PHP:\r\n\r\nIndexed arrays\r\nAssociative array\r\nMultidimensional Array\r\n\r\n*Just a kindly reminder that the statements in the examples here are the most basic one, so don\'t get too attached to it. Thank you!\r\n\r\n1. Indexed Array\r\n\r\nIndexed array is an array with a numeric index and the most basic array.\r\n\r\n2. Associative Array\r\n\r\nAssociative array is an array with named keys.\r\n\r\n3. Multidimensional Array\r\n\r\nMultidimensional array is an array containing one or more array.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `learn_history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `rank`, `learn_history`) VALUES
(1, 'admin', 'admin1@gmail.com', 'ef775988943825d2871e1cfa75473ec0', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
