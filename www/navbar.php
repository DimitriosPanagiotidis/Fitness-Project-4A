<nav class="navigation-bar">
    <div class="nav-center">
        <ul>
            <?php
            
        
       
            if (isset($_SESSION['user_id'])): ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="workouts.php">Workouts</a></li>
                <li><a href="add_workout.php">Add Workout</a></li>
            <?php endif; ?>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="nav-right">
        <ul>
            <li><a href="register.php">Register</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>