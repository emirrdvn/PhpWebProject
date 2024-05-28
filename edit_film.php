<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $director = $_POST['director'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];

    $sql = "UPDATE films SET title='$title', director='$director', year='$year', genre='$genre' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("location: list_films.php");
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM films WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Film</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Update Film</h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" class="form-control" id="director" name="director" value="<?php echo $row['director']; ?>">
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" name="year" value="<?php echo $row['year']; ?>">
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $row['genre']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Film</button>
            <a href="dashboard.php" class="btn btn-secondary">Back</a>
        </form>
        
    </div>
</body>
</html>
