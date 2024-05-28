<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

include 'config.php';

$sql = "SELECT * FROM films";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Film List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Film List</h2>
        <?php
        if ($result->num_rows > 0) {
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>Title</th><th>Director</th><th>Year</th><th>Genre</th><th>Actions</th></tr></thead>';
            echo '<tbody>';
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["title"] . '</td>';
                echo '<td>' . $row["director"] . '</td>';
                echo '<td>' . $row["year"] . '</td>';
                echo '<td>' . $row["genre"] . '</td>';
                echo '<td>';
                echo '<a href="edit_film.php?id=' . $row["id"] . '" class="btn btn-warning btn-sm mr-2">Edit</a>';
                echo '<a href="delete_film.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">Delete</a>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<div class="alert alert-info mt-3">No films found.</div>';
        }
        echo '<a href="dashboard.php" class="btn btn-secondary">Geri Dön</a>'; 
        $conn->close();
        ?>
    </div>
</body>
</html>
