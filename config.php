<?php
$servername = "sql204.infinityfree.com";
$username = "if0_36633104";
$password = "a7eEi20QPRy4t";
$dbname = "if0_36633104_film_kulubu_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
