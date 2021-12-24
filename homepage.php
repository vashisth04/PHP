<!DOCTYPE html>
<html>
<head>
	 <?php
 session_start();


 if (!isset($_SESSION['username'])) {
 header("Location: insta_login.php");
 }
 ?>
</head>
<body>
	<a href="logout.php">Logout</a>
	<br>
	<h5>
	<?php 
	echo '<h4>Welcome '.$_SESSION['username'].'</h4>';

	?>
</h5>
</body>
</html>