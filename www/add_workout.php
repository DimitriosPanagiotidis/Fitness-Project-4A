<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workout</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>
    <div class="add_workout_wrapper">
        <form action="add_workout_process.php" method="POST" class="add_workout">
            <h1>Add New Workout</h1>
            <input type="text" name="title" placeholder="Workout Title" required>
            <textarea name="description" placeholder="Workout Description" required></textarea>
            <input type="number" name="duration" placeholder="Duration (minutes) 48" required>
            <select name="difficulty" required>
                <option value="" disabled selected>Select Difficulty</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
            <input type="text" name="note" placeholder="Additional Note">
            <input type="text" name="added_at" placeholder="Added At (YYYY-MM-DD)" required>
            <button type="submit">Add Workout</button>
        </form>
    </div>

</body>

</html>