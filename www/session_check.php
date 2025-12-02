<?php 


session_start();

if(empty($_SESSION['email']) || empty($_SESSION['user_id'])){
    echo "You are not correct logged in.";
    echo "<a href='login.php'> Login here</a>";
    exit;
}


