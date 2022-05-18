<?php
include 'db.php';
if(isset ($_POST['submit'])){
    

    $fullname= $_POST['fullname'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $confirmpass= $_POST['confirm-password'];
    $contact= $_POST['contact'];
    $email= $_POST['email'];
    $loaction= $_POST['location'];

    if(empty($fullname) || empty($username) || empty($password) || empty($confirmpass) || empty($contact)|| empty($email)){
         

        header("Location: ../register.php?erroremptyfields&username".$username);

    }
}