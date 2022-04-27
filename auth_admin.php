<?php
session_start();
require_once("includes/dbconn.php");
$userlevel=$_GET['user'];
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM admin WHERE username='$myusername' AND password='$mypassword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username']= $myusername;
	$_SESSION['id']=$id;
	if($userlevel=='1')
		header("location:admin_panel.php?id={$row['id']}");
	else
		header("location:main.php");
}
else {
echo "Wrong Username or Password";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="main.php">Back to home</a>
</body>
</html>