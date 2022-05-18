<?php 

session_start();
session_destroy();

header("Location: ../donor/login.php");

?>