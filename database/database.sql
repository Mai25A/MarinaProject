-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 04:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
CREATE DATABASE `marina` IF NOT EXISTS;
USE `marina`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `roles` (
    `id` int serial NOT NULL PRIMARY KEY,
    `name` varchar(100) NOT NULL,
);

--
-- Dumping data for table `posts`
--

INSERT INTO `roles` (`id`, `name`) VALUES
    (1, 'ADMIN'),
    (2, 'CLIENT');

CREATE TABLE `users` (
                         `id` int serial NOT NULL PRIMARY KEY,
                         `name_of_user` varchar(100) NOT NULL,
    );

CREATE TABLE `tables` (
                         `id` int serial NOT NULL PRIMARY KEY,
                         `name` varchar(100) NOT NULL,
    );