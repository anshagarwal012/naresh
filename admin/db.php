<?php
$servername = "151.106.117.102";
$username = "u338280037_naresh";
$password = "Naresh@123";
$database = "u338280037_naresh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql1 = "CREATE TABLE IF NOT EXISTS `contacts` (
	`id` INT(50) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`email` VARCHAR(255),
	`phone` VARCHAR(255),
	`message` LONGTEXT,
	PRIMARY KEY (`id`)
)";
mysqli_query($conn, $sql1);

// $sql1 = "CREATE TABLE IF NOT EXISTS `membership` (
// 	`id` INT(50) NOT NULL AUTO_INCREMENT,
// 	`name` VARCHAR(255),
// 	`email` VARCHAR(255),
// 	`phone` VARCHAR(255),
// 	`message` LONGTEXT,
// 	PRIMARY KEY (`id`)
// )";
// mysqli_query($conn, $sql1);

$sql1 = "CREATE TABLE IF NOT EXISTS `lp` (
	`id` INT(50) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`email` VARCHAR(255),
	`phone` VARCHAR(255),
	`city` VARCHAR(255),
	`state` VARCHAR(255),
	`country` VARCHAR(255),
	`linkedin_url` VARCHAR(255),
	`company_name` VARCHAR(255),
	`referral` VARCHAR(255),
	`active_investor` VARCHAR(255),
	`invest_as` VARCHAR(255),
	`radio` VARCHAR(255),
	`declaration` VARCHAR(255),
	PRIMARY KEY (`id`)
)";
mysqli_query($conn, $sql1);
