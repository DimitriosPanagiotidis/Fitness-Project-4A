<?php

$dbhost = 'mariadb';
$dbuser = 'root';
$dbpassword = 'password';
$dbname = 'project_4A';

$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


?>