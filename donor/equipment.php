<?php 

include '../connection/db.php';
include 'header1.php';

if (isset($_POST['submit'])) {
    

    $DonorName = $_POST['DonorName'];
    $TypeofEquipment = $_POST['TypeofEquipment'];
    $Elocation = $_POST['Elocation'];
    if(!empty($DonorName)&& !empty( $TypeofEquipment)&& !empty(  $Elocation)){
    
        $sql = "INSERT INTO equipment (DonorName, TypeofEquipment,Elocation)
                VALUES ('$DonorName', '$TypeofEquipment','$Elocation')";
        $result = mysqli_query($conn, $sql);
        if ($result) {

            $DonorName = " ";
            $TypeofEquipment = " ";
            $Elocation =  " ";
            
            header("Location:pop.php");
            
        } 
        else{

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
    <title>Equipment</title>
    <link rel="stylesheet" href="../styles/donor.css">
</head>
<body>
<center>
   <div class="container">
    <form class="equipform" method="post" action="">
        <div class="card">
    <h1>Equipment Donation</h1>
     
        <label for="DonorName">Username</label>
        <input type="text" id="Donor Name" name="DonorName">
        <label for="typeofdonation">Type Of Equipment</label>
                <select  name="TypeofEquipment">
                    <option>desktops</option>
                    <option>laptops</option>
                    <option>tablets</option>
                    <option>shelves</option>
                   
                </select>
            <label for="location">Pickup Location</label>
                <input type="location" id="location" name="Elocation">
                <button type="submit" name="submit">Donate</button>
                </div>
</form>
 <!-- <img src="../images/clothes2.jpg" alt="" > -->
        
 </div>
 </center>
</body>
</html>