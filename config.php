<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_kulubu_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
