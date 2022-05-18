<?php
error_reporting(0);
include "../connection/db.php";
$pid = $_GET['role'];

$query = "DELETE FROM users WHERE users.role = '$pid' ";
$data = mysqli_query($conn,$query);

if($data){
    echo
    "
    <script>
      alert('Deleted successfully');
    
    </script>
    ";
     
}
else{
    echo "failed!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width: 100%;
                margin-top: 90px;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: beige;
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
        .update, .delete{
        background-color: green;
        text-decoration: none;
        color: black;
        border-radius: 7px;
        border: 0;
        outline: none;
        height: 23px;
        width: 80px;
        font-weight: bold;
        cursor: pointer;
        }
        .delete{
        background-color: red;
        
        }
        tr:nth-child(odd)
     {
  background-color: white;
  
     }
    </style>
</head>
<body class="profile">

<?php
if(!isset($_SESSION)) { 
    session_start();
    }

include "index.php";
include "../connection/db.php";

$query = "SELECT * FROM users WHERE role NOT IN (65) ";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total != 0){
    ?>
    <table border="3",cellspacing = "7">
     <tr>
        <th>No</th>
        <th>FullName</th>
        <th>UserName</th>
        <th>contact</th>    
        <th>email</th>
        <th>location</th>
        <th>action</th>
        
      </tr>    
     <?php
      while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['userid']."</td>
                <td>".$result['fullname']."</td>
                <td>".$result['username']."</td>
                <td>".$result['contact']."</td>
                <td>".$result['email']."</td>
                <td>".$result['location']."</td>
                
                 <td><a class='update'; href='update_data.php?pid=$result[userid]'>Update</a>
                <a class='delete'; href='index.php?pid=$result[userid]' onclick = 'return checkdelete()'>Delete</a></td>
            </tr> 
             ";
      }
}
else{
    echo "<tr>
    <td>No</td>
    </tr>";
}
?>
</table>
<script>
   function checkdelete()
   {
       return confirm('Are you sure you want to DELETE this USERS record?');
       $sql = "DELETE FROM users WHERE userid=4";

   }
</script>

</body>
</html>
