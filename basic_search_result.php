<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php
$fname="";
$lname="";
$sex="";
$religion="";
if(isset($_POST['search']))
{
$conn = mysqli_connect("localhost","root","","matrimony");
$query="INSERT INTO temp SELECT * FROM customer";
mysqli_query($conn,$query);

$gender=$_POST['sex'];
$Reli=$_POST['religion'];
$Cntry=$_POST['country'];
$Mstatus=$_POST['maritalstatus'];
$lan=$_POST['mothertounge'];
$agem=$_POST['agemin'];
$agemx=$_POST['agemax'];

if($gender!=""){
	$query1="DELETE FROM temp WHERE NOT sex='$gender'";
	mysqli_query($conn,$query1);
	
}
if($Mstatus!=""){
	$query1="DELETE FROM temp WHERE NOT maritalstatus='$Mstatus'";
	mysqli_query($conn,$query1);
	
}
if($Cntry!=""){
	$query1="DELETE FROM temp WHERE NOT country='$Cntry'";
	mysqli_query($conn,$query1);
}
if($lan!=""){
	$query1="DELETE FROM temp WHERE NOT mothertounge='$lan'";
	mysqli_query($conn,$query1);
}
if($agem!=""){
	$query1="DELETE FROM temp WHERE age<'$agem';";
	mysqli_query($conn,$query1);
}
if($agemx!=""){
	$query1="DELETE FROM temp WHERE age>'$agemx';";
	mysqli_query($conn,$query1);
}
}
else
echo"query not runned";

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
		                <li><a href="search.php">Regular Search</a></li>
		
		              </ul>
		<li><a href="feedback.php?id=<?php echo $id;?>">Feedback</a></li>
 </ul>	
</div>
<?php
//getting profile details from db
	$cnt=0;
 $conn = mysqli_connect("localhost","root","","matrimony");
	
	$query= "SELECT * FROM temp";
	$result=mysqli_query($conn,$query);
	if($result){
	 $row_numbs = mysqli_num_rows($result);
                        if($row_numbs>0){
	
	while($row=mysqli_fetch_array($result))
	{
		$cnt=$cnt+1;
    $id=$row['cust_id'];
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
</div>

";
   
}
echo"<p STYLE='font-size:25px; color:blue;' ><b> Total ". $cnt . " Result Found.</p>";
mysqli_free_result($result);
}
else
{
	echo"undefined";
}
}
else
echo"query not runned";

$query1= "DELETE FROM temp";
mysqli_query($conn,$query1);
?>


<script type="text/javascript">

</script>
</body>
</html>  