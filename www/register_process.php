<?php

// Validations for register

if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])
     || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['role_form'])){
    echo "All fields are required.";
    echo "<a href='register.php'> Go back to registration</a>";
    exit;
}

if(strlen($_POST['password']) < 6){
    echo "Password must be at least 6 characters long.";
    echo "<a href='register.php'> Go back to registration</a>";
    exit;
}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format.";
    echo "<a href='register.php'> Go back to registration</a>";
    exit;
}
// If all validations pass, proceed to register the user
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role_form'];
require 'database.php';

$sql = "INSERT INTO user (firstname, lastname, email, username, password, role) 
        VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$role')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Registration successful. You can now <a href='login.php'> login</a>.";
} else {
    echo "Error during registration: " . mysqli_error($conn);
    echo "<a href='register.php'> Go back to registration</a>";
}




?>