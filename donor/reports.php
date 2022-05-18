<?php 
 include 'header1.php';

include '../connection/db.php';

$sql = "SELECT  donation, recipients  FROM userreports";
$result = $conn->query($sql);



 ?>   

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Distributed donations</title>
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
            color:  #0000FF;
            font-size: xx-large;
            font-family:'sans-serif';
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
        <h1> Distributed donations</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
               
                <th>donation</th>
                <th>recipients</th>
               
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
           
                <td><?php echo $rows['donation'];?></td>
                <td><?php echo $rows['recipients'];?></td>
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>