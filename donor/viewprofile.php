<?php
include 'header1.php';
// require 'footer.php';
session_start();
error_reporting(0);
include '../connection/db.php';
if(!isset($_SESSION["username"])){
    header("Location: index.php");
}
   if(isset($_POST['submit'])) {
       $fullname= $_POST["fullname"];
       $username= $_POST["username"];
       $password= $_POST["password"];
       $confirmpassword= $_POST["confirm_password"];
       $contact= $_POST["contact"];
       $email= $_POST["email"];
       $location= $_POST["location"];
       if($password === $confirmpassword){
           $sql = "UPDATE users SET fullname='$fullname',username='$username',password='$password',contact='$contact',email=' $email',location='$location' WHERE username='{$_SESSION["username"]}'";
        $result = mysqli_query($conn,$sql);
         if($result){
            echo "<script>alert('profile succesfully')</script>";
         }else{
            echo "<script>alert('cannot update profile')</script>";
         }
        //  else{
        // echo "<script>alert('Check your password!!.')</script>";
    //    }
   }
   
   }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../styles/styling.css">
</head>
<body>
<div class="form"> 
    <div class="card">
    <h1>Profile </h1>
        
        <form name="form" method="post" id="signup" action="" >
            <?php
            $sql = "SELECT *FROM  users WHERE username = '{$_SESSION["username"]}'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                if($row = mysqli_fetch_assoc($result)){
                    ?>
                             <div class="input-grp">
    <input type="text" name="fullname" placeholder="Fullname" id="fullname" value="<?php echo $row["fullname"]; ?>">
        </div>
         <div class="input-grp">
        <input type="text" name="username" placeholder="username" id="username" value="<?php echo $row["username"]; ?>">
       </div>
        <div class="input-grp">
        <input type="password" name="password" placeholder="password" id="password" value="<?php echo $row["password"]; ?>">
      </div>
        <div class="input-grp">
         <input type="password" name=" confirm_password" placeholder="confirm password" id="confpassword" value="<?php echo $row["password"]; ?>">
        </div>
         <div class="input-grp">
           <input type="text" name="contact" placeholder="contact" id="contact" value="<?php echo $row["contact"]; ?>">
         </div>
           <div class="input-grp">
           <input type="email" name="email" placeholder="example@gmail.com" id="email" value="<?php echo $row["email"]; ?>">
         </div>
           <div class="input-grp">
           <input type="text" name="location" placeholder="location" id="location" value="<?php echo $row["location"]; ?>">
           </div>
          <?php

                    

                }
            }


?>
          
       
      
         
          <div class="input-grp">
           <button type="submit" name="submit">Update Profile</button>
           </div>
           </div>
        </form>
    </div>

    <!-- <script src="../jw.js"></script> -->

</body>
</html>