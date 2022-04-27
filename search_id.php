<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php 
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

?>
<?php
$id=$_SESSION['id'];
$result=search();
?>
<!DOCTYPE html>
<html>
<head>
	<title>search id</title>
	<link href="style_admin.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<form>	
<label ><h3>Profile ID :</h3> </label>
		
		  <div class="input-group1">
	        <input type="text" value="" id="profid" name="profid" placeholder="Search by id"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
	        <input type="button" onclick="viewprofile();"  value="search">
          <script type="text/javascript">
            function viewprofile(){
              var profid=document.getElementById("profid").value;
              window.location.href="profile.php?id="+profid;
            }
          </script>
	      
	    
	    </div>
	      </form>
	     <div class="paid_people">
   <h1>Profiles</h1>
   <div class="row_1">
</body>
</html>