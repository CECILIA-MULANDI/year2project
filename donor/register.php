<?php
session_start();
// require '../headerhome.php';
// require 'footer.php';
include '../connection/db.php';
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $contact = $_POST['contact'];
        $password = md5($_POST['password']);
        $confirm_password = md5($_POST['confirm_password']);
    
        if ($password == $confirm_password) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (fullname,contact,username,password,email,location)
                        VALUES ('$fullname', '$contact','$username','$password','$email','$location')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    
                    
                    $fullname = "";
                    $location= "";
                    $username = "";
                    $email = "";
                    $contact ="";
                    $_POST['password'] = "";
                    $_POST['confirm_password'] = "";
                    
               if(!empty( $fullname)||!empty( $location)||!empty($username)||!empty($email)||!empty($contact)||!empty($password)){
                echo "<script>alert('succesfull registration!.')</script>";
            
               }else {
                     header("Location:register.php");
                // echo "<script>alert('Email Already Exists.')</script>";
            }
        }	
        } 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="../styles/styling.css">
</head>
<body>
<div class="form"> 
    <div class="card">
    <h1>signup </h1>
        
        <form name="form" method="post" id="signup" action="" >
          
                <div class="input-grp">
    <input type="text" name="fullname" placeholder="Fullname" id="fullname" >
         <small style="color: red;font-size:medium"></small>
         </div>
         <div class="input-grp">
        <input type="text" name="username" placeholder="username" id="username">
        <small style="color: red;font-size:medium"></small>
         </div>
        <div class="input-grp">
        <input type="password" name="password" placeholder="password" id="password">
        <small style="color: red;font-size:medium"></small>
         </div>
        <div class="input-grp">
         <input type="password" name=" confirm_password" placeholder="confirm password" id="confpassword">
         <small style="color: red;font-size:medium"></small>
         </div>
         <div class="input-grp">
           <input type="text" name="contact" placeholder="contact" id="contact">
           <small style="color: red;font-size:medium"></small>
         </div>
           <div class="input-grp">
           <input type="email" name="email" placeholder="example@gmail.com" id="email">
           <small style="color: red;font-size:medium"></small>
         </div>
           <div class="input-grp">
           <input type="text" name="location" placeholder="location" id="location">
           <small style="color: red;font-size:medium"></small>
         </div>
          <button type="submit" id="formsubmit" name='submit'>signup</button>
          <p>Already have an account? <a href="login.php">login</a></p>
          </div>
        </form>
    </div>

    <script src="../jw.js"></script>

</body>
</html>