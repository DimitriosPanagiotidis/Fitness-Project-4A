<?php

require 'database.php';

$sql = "SELECT * FROM workouts";
$result = mysqli_query($conn, $sql);
$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h1>Welcome to the Fitness App</h1>
            <p>Explore our collection of workouts to stay fit and healthy!</p>
            <a href="workouts.php" class="btn">View Workouts</a>
        </div>
    </header>
    <main>
        <?php include 'workout_list.php'; ?>
    </main>


    <?php include 'footer.php'; ?>
</body>

</html>