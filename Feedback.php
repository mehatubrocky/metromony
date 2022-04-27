<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

        if(isset($_REQUEST['feedback'])){
			$email=$_REQUEST['email'];
			$comment=$_REQUEST['comment'];
            $sql="INSERT INTO feedback(email,comment)
            VALUES('$email', '$comment')";
                 $result=mysqli_query($conn,$sql);
                 if($result)
                 {
                    echo"<script>alert('Data Successfully Seved')</script>";
					echo"<script> location.href='userprofile.php?id=$id'</script>";
                }
                else
                {
                    echo"<script>alert('Data not Seved')</script>";
                }	     	
         } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

	<form>
  <div class="form-group">
    <label for="Feedback">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
    <label for="Feedback">Feedback</label>
    <textarea class="form-control" name="comment" rows="9" cols="100"></textarea>
  </div>
  <button type="submit" class="btn btn-success mr-4 mt-4" name="feedback">Submit</button>
  <a href="userprofile.php?id=<?php echo $id; ?>" target="new window"></a>
</form>

</body>
</html>

		  
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script> 

 

</body>
</html>