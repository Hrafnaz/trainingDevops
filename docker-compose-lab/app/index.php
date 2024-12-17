<?php 
$mysqli = new mysqli("db", "root", "rootpassword", "mydb"); 
if ($mysqli->connect_error) 
    { echo "Connection failed: " . $mysqli->connect_error; } 
else { 
        echo "Connected to MySQL database!"; 
    } 
?>