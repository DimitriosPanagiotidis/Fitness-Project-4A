<?php

include 'session_check.php';
require 'database.php';
$sql = "SELECT * FROM workouts";

// Filter workout by difficulty level difficulty
if (!empty($_GET['difficulty'])) {
    $difficulty = $_GET['difficulty'];
    $sql = "SELECT * FROM workouts WHERE difficulty = '$difficulty'";
}
if (!empty($_GET['duration'])) {
    $duration = $_GET['duration'];
    $sql = "SELECT * FROM workouts ORDER BY duration ASC";
    if ($duration === 'high') {
        $sql = "SELECT * FROM workouts ORDER BY duration DESC";
    }
}

$result = mysqli_query($conn, $sql);
$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h1>Our Workouts</h1>
            <p>Discover a variety of workouts to help you achieve your fitness goals!</p>
        </div>
        <section class="filters-workout-difficulty">
            <ul>
                <li>
                    <a href="workouts.php">All Workouts</a>
                </li>
                <li>
                    <a href="?difficulty=Beginner">Beginner</a>
                </li>
                <li>
                    <a href="?difficulty=Intermediate">Intermediate</a>
                </li>
                <li>
                    <a href="?difficulty=Advanced">Advanced</a>
                </li>
                <li>
                    <a href="?duration=low">Short Duration</a>
                </li>
                <li>
                    <a href="?duration=high">Long Duration</a>
                </li>
            </ul>
        </section>
        
    </header>

    <main>
        <?php include 'workout_list.php'; ?>
    </main>


    <?php include 'footer.php'; ?>
</body>

</html>