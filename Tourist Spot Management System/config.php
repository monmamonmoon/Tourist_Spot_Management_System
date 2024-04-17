<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tsms";

$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
mysqli_query($conn, $sql);

$conn = mysqli_connect($servername, $username, $password, $db_name);

// $sql = "CREATE TABLE IF NOT EXISTS user(
//   id int auto_increment PRIMARY KEY,
//   username VARCHAR(50) unique,
//   user VARCHAR(50),
//   password password
  
// )";

mysqli_query($conn, $sql);


?>