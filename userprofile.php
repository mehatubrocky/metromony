<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php

$id=$_GET['id'];
$profileid=$id;
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<title> User Home </title>
<div id="leftmenu"> 
	<li><a href="logout.php"> 
		 <input type="submit" name="logout" value="LOGOUT" class="btn_1 submit">
		 </a></li></div> 
<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>


<body>



<div id="header">
<center><img src="user.png">
<h3> User Home </h3></center>
</div>

<div id="sidemenu">
 <ul>
 	   <li><a href="profile_view.php?id=<?php echo $id;?>">View Profile</a></li>
	   <li><a href="edit_profile.php?id=<?php echo $id;?>">Edit Profile</a></li>
	   <li><a href="partner_choice.php?id=<?php echo $id;?>">Partner Preference</a></li>
		    <li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<span class="caret"></span></a>
		        <ul class="dropdown-menu" role="menu">
	   <li><a href="upload_photo.php?id=<?php echo $id;?>">Upload Photos</a></li>
		<li><a href="profile_view.php?id=<?php echo $id;?>">View Profile</a></li>
		<li><a href="edit_profile.php?id=<?php echo $id;?>">Edit Profile</a></li>  
		      </ul>
		           </li>
		 <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		         <ul class="dropdown-menu" role="menu">
		                <li><a href="search_id.php">Search by id</a></li>
		                <li><a href="basic_search.php">Basic Search</a></li>
						<li><a href="advanced_search.php">Advanced Search</a></li>
		
		              </ul>
		<li><a href="feedback.php?id=<?php echo $id;?>">Feedback</a></li>
 </ul>	
</div>
<?php
//getting profile details from db
 $conn = mysqli_connect("localhost","root","","matrimony");

	$query= "SELECT * FROM customer
ORDER BY cust_id ";
	$result=mysqli_query($conn,$query);
	if($result){
	 $row_numbs = mysqli_num_rows($result);
                        if($row_numbs>0){
	
	while($row=mysqli_fetch_array($result))
{    $id=$row['cust_id'];
	$fname=$row['firstname'];
	$lname=$row['lastname'];
    $age=$row['age'];
    $religion=$row['religion'];
    $dob=$row['dateofbirth'];
    $country=$row['country'];
    $division=$row['division'];
    $district=$row['district'];
    $image=$row['image'];
	echo "<center> <div class='card' style='width: 18rem;'>
	<p class='card-text'>User ID: ". $id . "</p>
  <img src='profile/". $id ."/". $image ."' /> 
  <div class='card-body'>
    <h5 class='card-title'  > <a href='feed_view.php?id=".$id."' ><span style='color: #5cb85c; font-size:30px;'><b> ". $fname . " " . $lname ."</a></h5></b> </span>
    <p class='card-text'>Age: ". $age . "</p>
	<p>-------------------------------------------------</p>
  </div>
</div>";
   
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


<script type="text/javascript">

</script>
</body>
</html>  