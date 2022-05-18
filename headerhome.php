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

    <link rel="stylesheet" href="styles/styls.css">
  
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
          <!-- <span class="logo-name">Donations</span> -->
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="#">HOME</a></li>
          <li>
            <a href="./donor/register.php">Signup</a>
            </li>
          <li>
            <a href="./donor/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="nav.js"></script>
</body>
</html>
