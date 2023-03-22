<?php
// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$database = "restaurant_db";

$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}