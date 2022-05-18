<?php 


include '../connection/db.php';
include 'headeragent.php';


if (isset($_POST['submit'])) {

        $agentname= $_POST['agentname'];
		$donationtype = $_POST['donationtype'];
		$status = $_POST['status'];

        if(!empty($agentname)&& !empty($donationtype)&& !empty( $status)){
			$sql = "INSERT INTO qualitycheck (agentname,donationtype, status)
					VALUES ('$agentname','$donationtype', '$status')";
			$result = mysqli_query($conn, $sql);
			if ($result) {

                $agentname = "";
				$donationtype = "";
				$status = "";
                echo "<script>alert('succesfully verified!!')</script>";
				
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
    <title>Donation Verify Form</title>
    <link rel="stylesheet" href="../styles/styling.css">
</head>
<body>
<div class="form"> 
    <div class="card">
    <h1>Donation Verify Form </h1>
    
        <form name="form" method="post" action="" >
    <input type="text" name="agentname" placeholder="Agent's name">
        
        <input type="text" name="donationtype" placeholder="donationtype">
           <input type="text" name="status" placeholder="status of donation" >
          <button type="submit" name="submit">Verify</button>
          </div>
        </form>
    </div>
   <!-- <script src="jw.js"></script> -->
</body>
</html>