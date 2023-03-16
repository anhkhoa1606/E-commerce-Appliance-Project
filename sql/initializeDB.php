<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cps630";

$conn = new mysqli($servername, $username, $password);
$conn->query("CREATE DATABASE cps630;");
$conn->close();


// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->close();
