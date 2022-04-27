<?php
session_start();
session_destroy();
echo "Successfully logged out";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<a href="main.php">Back to home</a>
</body>
</html>