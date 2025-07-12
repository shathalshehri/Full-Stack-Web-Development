<?php
$servername = "localhost";
$username = "your_username_here";
$password = "your_password_here";

// Create connection
$conn = new mysqli($servername, $username, $password , 'DB_NAME');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/*
// Create database
$sql = "CREATE DATABASE DB_NAME";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
*/
//----------------------------------------------------------
// sql to create table
/*$sql = "CREATE TABLE sign_up (
username VARCHAR(30) NOT NULL PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phone INT NOT NULL  ,
email VARCHAR(50) NOT NULL ,
password VARCHAR(50) NOT NULL
)";*/
//----------------------------------------------------------
/*$sql = "CREATE TABLE rentCar (
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phone INT NOT NULL PRIMARY KEY  ,
TypeCar VARCHAR(50) NOT NULL ,
Familymember VARCHAR(50) NOT NULL ,
price INT NOT NULL
)";*/
//------------------------------------------------------------
/*$sql = "CREATE TABLE rentroom (
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phone INT NOT NULL PRIMARY KEY  ,
TypeRoom VARCHAR(50) NOT NULL ,
HotelName VARCHAR(50) NOT NULL ,
Familymember VARCHAR(50) NOT NULL ,
childmember VARCHAR(50)  ,
price INT NOT NULL
)";
*/
//-------------------------------------------------------------

/*if ($conn->query($sql) === TRUE) {
  echo "record created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();*/

?>
