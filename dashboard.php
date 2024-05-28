<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Welcome, <?php echo $_SESSION['username']; ?></h2>
        <div class="list-group mt-4">
            <a href="add_film.php" class="list-group-item list-group-item-action">Add New Film</a>
            <a href="list_films.php" class="list-group-item list-group-item-action">List Films</a>
            <a href="logout.php" class="list-group-item list-group-item-action list-group-item-danger">Logout</a>
        </div>
    </div>
</body>
</html>
