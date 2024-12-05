<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Ikmal'); // Updated to uppercase for consistency
define('DB_PASS', 'password123');
define('DB_NAME', 'php1');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error); // Error message
}

// echo 'CONNECTED!!!!';
