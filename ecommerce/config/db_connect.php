<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rebe_shop";

// this creates the connectuin
$conn = new mysqli($servername, $username, $password, $dbname);

// this checks the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>