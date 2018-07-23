<?php

// MySQL connection file along with necessary functions for DB access.

$username = 'root';
$password = '';
$host = 'localhost';
$database = 'ub';

$conn = mysqli_connect($host,$username,$password,$database) or die("Error: Could not access DB.");

?>