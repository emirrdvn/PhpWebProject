<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM films WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("location: list_films.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list_films.php");
?>
