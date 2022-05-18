<?php 
//  include 'header1.php';

include '../connection/db.php';

$sql = "SELECT DonorName, TypeOfEquipment, Elocation FROM equipment";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br> clotheid: ". $row["clotheid"]. " - Name: ". $row["DonorName"]. "-typeofclothe:" . $row["clothe"] .  "-Phone Number:" . $row["contactno"]. "-pickup location:" . $row["clocation"].  "<br>";
//     }
// } else {
//     echo "0 results";
// }
 

 ?>   

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Clothing Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
          body{
            background-image: url("../images/donation1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        table {
            width:100%;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            margin-top:5%;
            text-align: center;
            color: #0000FF;
            font-size: xx-large;
            font-family:  'sans-serif';
        }
  
        td {
            background-color: white;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>EQUIPMENT DONATIONS</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                
                <th>DonorName</th>
                <th>TypeofEquipment</th>
                <th>Elocation</th>
               
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
            
                <td><?php echo $rows['DonorName'];?></td>
                <td><?php echo $rows['TypeOfEquipment'];?></td>
                <td><?php echo $rows['Elocation'];?></td>
               
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>