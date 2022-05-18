

 <?php 
 include 'headeragent.php';

include '../connection/db.php';


 
if (isset($_POST['submit'])) {

        $agentname = $_POST['agentname'];
		$donationtype = $_POST['donationtype'];
		$timeofpickup = $_POST['timeofpickup'];
        $location   = $_POST['location'];
       
                      
	
			$sql = "INSERT INTO pickup (agentname,donationtype,timeofpickup,location,status)
					VALUES ('$agentname','$donationtype', '$timeofpickup','$location','picked')";
			$result = mysqli_query($conn, $sql);
			if ($result) {

                $agentname = "";
				$donationtype = "";
				$timeofpickup = "";
                $location = "";
                
			} 
           
}
 ?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Collection Form</title>
    <link rel="stylesheet" href="../styles/styling.css">
</head>
<body>
<div class="form"> 
    
     <div class="card">
     <h1>Donation Collection Form </h1>
        <form name="form"  method="POST" action="" >
    <input type="text" name="agentname" placeholder="Agent's name" id="name" >
        
        <input type="text" name="donationtype" placeholder="donation picked" id="donationtype">
         <input type="text" name=" timeofpickup" placeholder="timeofpickup">
           <input type="text" name="location" placeholder="locationofpickup" >
          <button type="submit" name='submit'>Pickup</button>
          </div>
    
        </form>
    </div>
   <!-- <script src="jw.js"></script> -->
</body>
</html>