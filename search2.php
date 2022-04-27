<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}?>

<?php
$fname="";
$lname="";
$sex="";
$religion="";
if(isset($_POST['search']))
{
$agem=$_POST['agemin'];
$agemx=$_POST['agemax'];
echo $agemx;
	 $conn = mysqli_connect("localhost","root","","matrimony");

	$query= "SELECT * FROM customer WHERE age BETWEEN $agem AND $agemx;";
	$result=mysqli_query($conn,$query);
	if($result){
	 $row_numbs = mysqli_num_rows($result);
                        if($row_numbs>0){
	echo "<table border='1'>
<tr>
<th>User ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";
	
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
    $maritalstatus=$row['maritalstatus'];
	
echo "<tr>";
echo "<td>" . $row['cust_id'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
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
}
?>
