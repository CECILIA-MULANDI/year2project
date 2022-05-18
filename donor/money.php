 <?php 
 include 'header1.php';

include '../connection/db.php';


if (isset($_POST['submit'])) {

        $donorname = $_POST['donorname'];
		$amount = $_POST['amount'];
		$mode = $_POST['mode'];

        if(!empty($Donorname)&& !empty($amount)&& !empty( $mode)){
			$sql = "INSERT INTO money (donorname,amount, mode)
					VALUES (' $donorname','$amount', '$mode')";
			$result = mysqli_query($conn, $sql);
			if ($result) {

                $donorname = "";
				$amount = "";
				$mode = "";
                header("Location:pop.php");
                // echo "<script>alert('Thank you for donating.')</script>";
				
			} 
           
		} } 

 ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money</title>
    <link rel="stylesheet" href="../styles/moneys.css">
</head>
<body>
   
<div class="cointainer">
   
    <form action="" name="form" method="POST" class="moneyform">
        <div class="card">
    <h1>Money Donation</h1>
    
        <label for="DonorName">Donor's name</label> 
        <input type="text" id="Donor Name" name="donorname">
        <label for="Amout">Amount</label>
        <input type="text" id="amount" name="amount">
        <label for="mode" name="mode">Mode Of Payment</label>
        <select  id="mode" name="mode">
            <option value="mpesa">mpesa</option>
            <option value="paypal">paypal</option>
            <option value="account">Account</option>

        </select>
    
                
                <button type="submit" name="submit">Donate</button>
                </div>
</form>


        

    
</body>
</html>  