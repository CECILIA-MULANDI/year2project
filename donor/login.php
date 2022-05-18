<?php 

include '../connection/db.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		 if($row['role'] == 'admin')
		 header("Location: ../admin/index.php");
         else if($row['role'] == 'agent'){
             header("Location:../agent/index.php");
         }
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../styles/stylins.css">
</head>
<body>
<div class="form">
    <div class="card">
    <h1>login </h1>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">login</button>
    </form>
    <p>No account? <a href="register.php">signup here</a></p>
</div>
    </div>
    <script src="../jw.js"></script>
</body>
</html>