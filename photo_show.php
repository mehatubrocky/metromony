<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
} else{
   header("location:login.php");
}
$id=$_GET['id'];
$profileid=$id;
	$pic1="";
	$pic2="";
	$pic3="";
	$pic4="";
$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	$pic1=$row2['pic1'];
	$pic2=$row2['pic2'];
	$pic3=$row2['pic3'];
	$pic4=$row2['pic4'];

}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><h1>My Photo</h1></title>
	<h2>Profile Id : <?php echo $profileid;?></h2>
	<link rel="stylesheet" type="text/css" href="pic.css">
</head>
<body>  <table>
	 	<div class="img1" >
   	 	
   	 
   
					 
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic1;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic1;?>" />
						</li>

						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic2;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic2;?>" />
						</li>
					
					
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic3;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic3;?>" />
						</li>
					
						<li data-thumb="profile/<?php echo $profileid;?>/<?php echo $pic4;?>">
							<img src="profile/<?php echo $profileid;?>/<?php echo $pic4;?>" />
						</li>
					 
				  </div>
				</table>
				</body>
				</html>
