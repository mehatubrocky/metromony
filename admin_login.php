<?php include_once("function.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>ADMIN LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">
  	<h2>ADMIN LOGIN</h2>
  </div>
	  <form action="auth_admin.php?user=1" method="post">

  	
  	<div class="input-group">
  		<label>Username</label>
  		 <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" id="edit-pass" name="password" size="60" maxlength="128" >
  	</div>
  	<div class="input-group">
  		<input type="submit" id="edit-submit" name="op" value="Log in" class="btn" >
  	</div>
  
    
  </form>
</body>
</html>