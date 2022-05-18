<?php
// session_start();


// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../styles/styls.css">
  
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Donations</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Donations</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="#">HOME</a></li>
          <li>
            <a href="Viewdonations.php">Veiwdonations Donation</a>
            <ul class="js-sub-menu sub-menu">
              <li><a href="clothingdonations.php">Clothing Donations</a></li>
              <li><a href="equipmentdonation.php">Equipment Donations</a></li>
            </ul>
          </li>
          <li>
            <a href="collect.php">Collect Donation</a>
            
          </li>
          <li>
            <a href="verify.php">Verify Donation</a>
           
          </li>
          <li>
            <!-- <a href="#"><?php echo  strtoupper($_SESSION['username']) ?></a> -->
            <!-- <i class='bx bxs-chevron-down js-arrow arrow '></i> -->
            <ul class="js-sub-menu sub-menu">
              <!-- <li><a href="#">Update</a></li>
              <li><a href="#">Reset password</a></li> -->
              <li><a href="logout.php">Logout</a></li>
              
            </ul>
          </li>
        </ul>
        
      </div>
     
    </div>
  </nav>
  <script src="../nav.js"></script>
</body>
</html>
