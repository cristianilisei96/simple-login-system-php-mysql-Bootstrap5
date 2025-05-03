<?php

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "root";
$DB_NAME = "login";

// Database connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// Check database connection
if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
} else {
    // echo 'Connected successfully!';
}
