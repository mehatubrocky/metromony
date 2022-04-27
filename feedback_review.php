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

	 $conn = mysqli_connect("localhost","root","","matrimony");

	$query= "SELECT * FROM feedback";
	$result=mysqli_query($conn,$query);
	if($result){
	 $row_numbs = mysqli_num_rows($result);
                        if($row_numbs>0){
	echo "<table border='1'>
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
}
?>
