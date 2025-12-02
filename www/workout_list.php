<section class="workout-samples">
    <h2>Workout Samples</h2>
    <div class="workout-list">
        <?php foreach ($workouts as $workout): ?>
            <div class="workout-item">
                <h3><?php echo $workout['title']; ?></h3>
                <p><?php echo $workout['description']; ?></p>
                <a href="workout_detail.php?workout-id=<?php echo $workout['id']; ?>">
                    <img src="<?php echo $workout['image']; ?>" alt="<?php echo $workout['title']; ?>">
                </a>
                <p>Duration: <?php echo $workout['duration']; ?> minutes</p>
            </div>
        <?php endforeach; ?>
    </div>
</section>