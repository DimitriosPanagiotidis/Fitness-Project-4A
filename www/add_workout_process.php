<?php

if(empty($_POST['title']) || empty($_POST['description']) || empty($_POST['difficulty'])
     || empty($_POST['duration']) || empty($_POST['added_at']) || !isset($_POST['note']) ) {
    echo "All fields are required.";
    echo "<a href='add_workout.php'> Go back to add workout</a>";
    exit;
}

if(!is_numeric($_POST['duration']) || $_POST['duration'] <= 0){
    echo "Duration must be a positive number.";
    echo "<a href='add_workout.php'> Go back to add workout</a>";
    exit;
}

// Validate date format (YYYY-MM-DD)
if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['added_at'])){
    echo "Added At must be in YYYY-MM-DD format.";
    echo "<a href='add_workout.php'> Go back to add workout</a>";
    exit;
}




$title = $_POST['title'];
$description = $_POST['description'];
$difficulty = $_POST['difficulty'];
$duration = $_POST['duration'];
$added_at = $_POST['added_at'];
$note = $_POST['note'];
require 'database.php';
$sql = "INSERT INTO workouts (title, description, difficulty, duration, added_at, note) 
        VALUES ('$title', '$description', '$difficulty', '$duration', '$added_at', '$note')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Workout added successfully. <a href='workouts.php'> View Workouts</a>.";
} else {
    echo "Error adding workout: " . mysqli_error($conn);
    echo "<a href='add_workout.php'> Go back to add workout</a>";
}








?>