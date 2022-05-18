<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "project2";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

