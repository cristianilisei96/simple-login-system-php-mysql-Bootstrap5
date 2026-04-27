<<<<<<< HEAD
<?php

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "login";

// Database connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// Check database connection
if ($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
} else {
    // echo 'Connected successfully!';
}
=======
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
>>>>>>> 65d5abe992e31588d3cf4c82e0754d26752bb132
