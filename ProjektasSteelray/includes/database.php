<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "steelray";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
