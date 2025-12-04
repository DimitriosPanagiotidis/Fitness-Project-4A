<?php
include 'session_check.php';
require 'database.php';


$id = $_GET['workout-id'];
$sql = "SELECT * FROM workouts WHERE id =  $id";
$result = mysqli_query($conn, $sql);
$workout = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $workout['title']; ?> - Workout Details</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h1><?php echo $workout['title']; ?></h1>
        </div>
    </header>
    <main>
        <section class="workout-detail">
            <img src="<?php echo $workout['image']; ?>" alt="<?php echo $workout['title']; ?>">
            <div class="workout-info">
                <h2>Title</h2>
                <p><?php echo $workout['title']; ?></p>
                <h2>Description</h2>
                <p><?php echo $workout['description']; ?></p>
                <h2>Duration</h2>
                <p><?php echo $workout['duration']; ?> minutes</p>
                <h2>Difficulty</h2>
                <p><?php echo $workout['difficulty']; ?></p>
                <h2>Note</h2>
                <p><?php echo $workout['note']; ?></p>
                <h2>Added at</h2>
                <p><?php echo $workout['added_at']; ?></p>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>