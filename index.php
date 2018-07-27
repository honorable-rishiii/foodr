<?php
include 'config.php';
session_start();
 
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">		
    #panel {
   background: #555;
  color: #f1f1f1;
  position: inherit;
  top: 10px;
  left: 25%;
  z-index: 500;
  background-color: grey;
  padding: 8px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 20px;
  padding-left: 55px;
}
      #map {
        height: 88%;
        top: 0px;
 
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    
    </style>
</head>
<body>
  <div class="header" id="panel">
  <h2><center>Foodr</center></h2>
  <?php echo htmlspecialchars($_SESSION['username']); ?>
  <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</div>


    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
        <p><?php $sql = "SELECT * FROM users WHERE `username`='".$_SESSION['username']."'";
				 ?></p>
				<a href ="mapsacc.html">continue</a>
    </div>

</body>
</html>