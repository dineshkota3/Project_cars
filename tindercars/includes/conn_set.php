<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

# Connecting to MySql server 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$base_url = "http://localhost/tindercars/";


?> 
