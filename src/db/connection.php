<?php
$host = 'localhost'; // Database host
$username = 'Abdanio'; // Database username
$password = 'abdanio123'; // Database password
$dbname = 'crud_php'; // Replace with your database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>