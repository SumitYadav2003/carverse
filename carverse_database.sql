-- Carverse database, rebuilt from the project's PHP code (the original .sql was lost).
-- Import in phpMyAdmin: Import tab -> choose this file -> Import.
-- It creates the database `project`, which is the name connect.php and configure.php expect.

CREATE DATABASE IF NOT EXISTS `project` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- Website users (user_register.php, user_login.php, update_user.php, users_accounts.php)
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Admin accounts (admin_login.php, register_admin.php, admin_accounts.php, update_profile.php)
CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Car listings added from the admin panel (cars.php, update_car.php, Mainpage.php, search.php, quick_view2.php)
-- Image columns hold file names; the files themselves live in the uploaded_img folder.
CREATE TABLE IF NOT EXISTS `cars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `details` VARCHAR(500) NOT NULL,
  `price` BIGINT NOT NULL,
  `image_01` VARCHAR(255) NOT NULL,
  `image_02` VARCHAR(255) NOT NULL,
  `image_03` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Test-drive appointments (appointment.html -> appointment.php, shown in appt.php)
CREATE TABLE IF NOT EXISTS `appointment` (
  `name` VARCHAR(100),
  `city` VARCHAR(100),
  `state` VARCHAR(100),
  `day` VARCHAR(50),
  `date` VARCHAR(50),
  `time` VARCHAR(50)
);

-- Service appointments (serviceappoint.html -> serapt.php, shown in service.php)
-- serapt.php inserts by position, so these six columns must stay in this order with no extra columns.
-- The 4th column is called `type` because service.php reads it by that name.
CREATE TABLE IF NOT EXISTS `servapt` (
  `name` VARCHAR(100),
  `city` VARCHAR(100),
  `state` VARCHAR(100),
  `type` VARCHAR(50),
  `date` VARCHAR(50),
  `time` VARCHAR(50)
);

-- Contact-us messages (contactus.html -> cnt.php, shown in messages.php)
-- Inserted by position: keep exactly these three columns.
CREATE TABLE IF NOT EXISTS `cnt` (
  `userid` VARCHAR(100),
  `email` VARCHAR(100),
  `text` TEXT
);

-- Reviews (review.html -> rev.php, shown in review1.php)
-- Inserted by position: keep exactly these four columns.
CREATE TABLE IF NOT EXISTS `review1` (
  `name` VARCHAR(100),
  `email` VARCHAR(100),
  `phone` VARCHAR(20),
  `review` TEXT
);

-- Older registration table, only read by adminreg.php
CREATE TABLE IF NOT EXISTS `reg` (
  `username` VARCHAR(100),
  `email` VARCHAR(100),
  `password` VARCHAR(100)
);

-- Starter admin so you can log in to the admin panel.
-- Login: admin / admin123  (change it after logging in, via update profile)
INSERT INTO `admins` (`name`, `password`) VALUES ('admin', SHA1('admin123'));
