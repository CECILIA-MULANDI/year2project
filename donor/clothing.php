<?php 
 include 'header1.php';

include '../connection/db.php';

if (isset($_POST['submit'])) {
    

    $DonorName = $_POST['DonorName'];
    $clothe = $_POST['clothe'];
    $recipient = $_POST['recipient'];
    $contactno= $_POST['contactno'];
    $clocation =$_POST['clocation'];
    // $status =$_POST['status'];
    if(!empty($DonorName)&& !empty($clothe)&& !empty( $recipient)&& !empty($contactno)&& !empty($clocation)){
      if(preg_match('/^[0-9]{11}+$/', $contactno)){

        $sql = "INSERT INTO cloth (DonorName, clothe,recipient,contactno,clocation, status)
                VALUES ('$DonorName', '$clothe','$recipient','$contactno','$clocation', 'pending')";
        $result = mysqli_query($conn, $sql);
        if ($result) {

            $DonorName = " ";
            $clothe = " ";
            $recipient =  " ";
            $contactno = "";
            $clocation = "";
            
            header("Location:pop.php");
          
             } 
             else{
            echo "error";
             }
            //  else if (empty($DonorName)||empty( $clothe)||empty( $recipient)||empty($contactno)||empty($clocation)){
            //      echo "<script>alert('Registration successful!.')</script>";
            //  }
        
            
        } 
      }
        
        // echo "<script>alert('Registration successful!.')</script>";
    } 


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing</title>
    <link rel="stylesheet" href="../styles/donor.css">
</head>
<body>

<div class="cointainer">
    <form class="clothingform" name="form" method="POST" action="">
    <div class="card">
    <h1>Clothing Donation</h1>
     
        <label for="DonorName">Username</label>
        <input type="text" id="DonorNames" name="DonorName">
        <label for="clothe">Type</label>
                <select name="clothe"id="type">
                    <option>Trousers</option>
                    <option>Blouses</option>
                    <option>Skirts</option>
                    <option>shoes</option>
                    <option>shirts</option>
                    <option>A mixture</option>
                </select>
             <label for="recipient">Preferred recipient</label>
                <select name="recipient" id="receiver">
                    <option>0-3years</option>
                    <option>3-5years</option>
                    <option>6-10years</option>
                    <option>11-15years</option>
                    <option>16-19years</option>
                    <option>Rescue Centers</option>
                </select>
                <label for="l">Current working contact</label>
                <input type="text" id="contact" name="contactno">
                <label for="location">Pickup location</label>
                <input type="text" id="thelocation" name="clocation">
               
                <button type="submit" name= "submit">Donate</button>
                </div>
</form>
  </div>
 
<div id="googleMap" style="width:100%;height:400px;"></div>
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8171113.996956917!2d33.40980550896648!3d0.16509884993234597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182780d08350900f%3A0x403b0eb0a1976dd9!2sKenya!5e0!3m2!1sen!2ske!4v1651505475597!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
  

  <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(0.0236,37.9062),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
var marker = new google.maps.Marker({
              position: center ,
              map:map
          })
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-OAJbCUSX6fdZ4RktEdyQl0xb9MVz_Cc&callback=myMap"></script>

</body>
</html>
   <script>
    //   function initMap(){
    //       var location = { lat: 0.0236° S, lng:37.9062° E}
    //       var map = new google.maps.Map(document.getElementById("maps"),{
    //           zoom: 20,
    //           center:location
    //       });
    //       var marker = new google.maps.Marker({
    //           position: location,
    //           map:map
    //       })
    //   }

    //   let popup = document.getElementbyId("popup");
    //   function openPopup(){
    //       popup.classList.add("open-popup"); 

    //   }
    //   function closePopup(){
    //        popup.classList.remove("open-popup");

    //   }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-OAJbCUSX6fdZ4RktEdyQl0xb9MVz_Cc">  </script>


</body>
</html> 