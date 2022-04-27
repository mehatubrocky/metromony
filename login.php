<?php include_once("function.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">
  	<h2>User Login</h2>
  </div>
	  <form action="auth.php?user=1" method="post">

  	
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
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    <p>
      If You are an Admin, <a href="admin_login.php">Click Here to Sign in</a>
    </p>
  </form>
</body>
</html>