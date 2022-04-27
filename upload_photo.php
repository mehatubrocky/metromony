<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{ uploadphoto($id); }
?>
<!DOCTYPE html>
<html>
<head>
	<title>photo upload</title>
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>
<body>

<div id="header">
<center><img src="user.png">
<h3> User Home </h3></center>
</div>
<form action="" method="post" enctype="multipart/form-data">
  	    <div class="form-item form-type-textfield form-item-name">
	      <label for="edit-name"><h1 style="color:white;">Upload Your Photo(Upto 4 images, Use 300 x 250 dimensions)</h1> <span class="form-required" title="This field is required.">*</span></label><br><br> <br>
	      <input type="file" id="edit-name" name="pic1" class="form-file required"><br>
        <input type="file" id="edit-name" name="pic2" ><br>
        <input type="file" id="edit-name" name="pic3" ><br>
        <input type="file" id="edit-name" name="pic4" ><br>
	    </div><br>
	    <div class="form-actions">
	    	<input type="submit" id="edit-submit" name="op" value="Upload" class="btn_1 submit">
	    </div>

</body>
</html>