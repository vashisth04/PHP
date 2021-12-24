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
		<table border ="solid black 2px">
		<tr>
	<th>Book Name</th>
	<th>Book Author</th>
	<th>Book Category</th>
	</tr>

	<?php 
	echo '<h4>Welcome '.$_SESSION['username'].'</h4>';

	$servername = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "instadb";
	$conn = new mysqli($servername, $db_username, $db_password, $db_name);

	$sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

  	echo '<tr>';
    echo '<td>';
    echo $row["Book Name"];
    echo'</td>';
    echo '<td>';
    echo $row["Book Author"];
    echo '</td>';
    echo '<td>';
    echo $row["Book Category"];
    echo '</td>';
    echo '</tr>';
  }
}
else {
  echo "No books found!";
}

	?>
</table>
</body>
</html>