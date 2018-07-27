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
        body{ font: 14px sans-serif; text-align: center; }
		
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
        <p><?php $sql = "SELECT * FROM users WHERE `username`='".$_SESSION['username']."'";
				if($result = mysqli_query($link, $sql)){
								$row = mysqli_fetch_array($result);
								echo  $row['count'] ;
						}
				 else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				} ?>SERX</p>
    </div>
	
	
	
	
	
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>