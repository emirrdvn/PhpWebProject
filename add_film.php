<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO films (title, director, year, genre) VALUES ('$title', '$director', '$year', '$genre')";

    if ($conn->query($sql) === TRUE) {
        header("location: list_films.php");
        
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Film</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Add New Film</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" name="year">
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre">
            </div>
            <button type="submit" class="btn btn-primary">Add Film</button>
            <a href="dashboard.php" class="btn btn-secondary">Geri Dön</a>
        </form>
        

    </div>
</body>
</html>
