<!-- <?php
session_start();


// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
?> -->
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
            <a href="">Update Agent</a>
         
            <ul class="htmlCss-sub-menu sub-menu">
            <li><a href="deleteagent.php">Delete Agent</a></li>
              </ul>
          </li>
          <li>
            <a href="#">Table Reports</a>
            
            <ul class="js-sub-menu sub-menu">
              <li><a href="collected.php">Collected Donations</a></li>
              <!-- <li><a href="pending.php">Pending Donations</a></li> -->
              <li class="more">
                <span><a href="#">Pending Donations</a>
                <!-- <i class='bx bxs-chevron-right arrow more-arrow'></i> -->
              </span>
                <ul class="more-sub-menu sub-menu">
                  <li><a href="clothingdonation.php">Clothing Donations</a></li>
                  <li><a href="equipmentdonation.php">Equipment</a></li>
                  <!-- <li><a href="#">Glassmorphism</a></li> -->
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Chart Reports</a>
            
            <ul class="js-sub-menu sub-menu">
              <li><a href="chartmoney.php">piemoney reports</a></li>
              <!-- <li><a href="pending.php">Pending Donations</a></li> -->
              <li class="more">
                <span><a href="barmoney.php">barmoney reports</a>
                <!-- <i class='bx bxs-chevron-right arrow more-arrow'></i> -->
              </span>
                
              </li>
            </ul>
          </li>
          
          <li>
         
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
            
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
