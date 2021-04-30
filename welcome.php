<?php
session_start();
if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<style type="text/css">
	body  {
  background-image: url("background.jpg");
</style>
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">  
 
<center><p style="color:#88F6FF">Welcome : <?php echo $_SESSION['login'];?> | <a href="userlog.php">User Access log</a> </p>
<img src="rose.jpg" height="500">
<p><a href="logout.php">Logout</a></p></center>


 </body>
</html>
<?php
} else{
header('location:logout.php');
}
?>
