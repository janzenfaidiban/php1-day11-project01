<?php

include('connection.php');

// CREATE TABLE PRODUCT
$sql = "CREATE TABLE product(
    id INT(11) AUTO_INCREMENT PRIMARY KEY, 
    product_name VARCHAR(50) NOT NULL)";

// CREATE TABLE USER
$sqlUsers = "CREATE TABLE users(
    id INT(11) AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    gender varchar(10) NOT NULL)";

$connectDB->query($sqlUsers);
$connectDB->close();
