<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel - Nosgene </title>
<div id="leftmenu"> 
	<li><a href="logout.php"> 
		 <input type="submit" name="logout" value="LOGOUT" class="btn_1 submit">
		 </a></li></div>
<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>


<body>



<div id="header">
<center><img src="pm.jpg">
<h3> Welcome to Admin Panel </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="seecustomer.php" target="_blank"> SEE ALL CUSTOMER </a></li>
	<li><a href="delate.php" > DELATE ACCOUNT </a></li>
	
 </ul>	
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
</div>
<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</body>
</html>
<?php

	 $conn = mysqli_connect("localhost","root","","matrimony");

	$query= "SELECT * FROM feedback";
	$result=mysqli_query($conn,$query);
	if($result){
	 $row_numbs = mysqli_num_rows($result);
                        if($row_numbs>0){
	echo "<center><table border='1'>
<tr>
<th>Email</th>
<th>Comment</th>
</tr>";
	
	while($row=mysqli_fetch_array($result))
{    $email=$row['email'];
	$comment=$row['comment'];
	
echo "<tr>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['comment'] . "</td>";
echo "</tr>";
   
}
mysqli_free_result($result);
}
else
{
	echo"undefined";
}
}
else
echo"query not runned";
?>