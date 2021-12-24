<?php
setcookie('machine_name',gethostname(),time()+3600);
?>
<!DOCTYPE html>
<html>
<head>
	 <?php
 session_start();
 if (!isset($_SESSION['username'])) {
 header("Location: insta_login.php");
 }

 	$servername = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "instadb";
	$conn = new mysqli($servername, $db_username, $db_password, $db_name);

 if(isset($_POST['update_button']) && isset($_POST['id']) && isset($_POST['book_name']) && isset($_POST['book_author']) && isset($_POST['book_category'])){
	$id = $_POST['id'];
	$book_name = $_POST['book_name'];
	$book_author = $_POST['book_author'];
	$book_category = $_POST['book_category'];
	$sql = "UPDATE books SET Book Name='$book_name', Book Author='$book_author', Book Category='$book_category' WHERE Book Name='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  echo "<a href='crud.php'> Click here to refresh table</a>";
} else {
  echo "Error updating record: " . $conn->error;
}
}

if(isset($_POST['delete_button']) && isset($_POST['id'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM books WHERE Book Name='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  echo "<a href='homepage.php'> Click here to refresh table</a>";
} else {
  echo "Error deleting record: " . $conn->error;
}
}

 ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="logout.php">Logout</a>
	<br>
		<table border="solid black 2px">
		<tr>
	<th>Book Name</th>
	<th>Book Author</th>
	<th>Book Category</th>
	</tr>

	<?php 
	echo '<h4>Welcome '.$_SESSION['username'].'</h4>';


	$sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

	// echo "<form action='crud.php' method='POST'><td><input type='text' size='30' placeholder='username' name='username'</td><td><input type='password' size='40' placeholder='password' name='password'</td><td><input type='hidden' name='insert_button' value='now'><input type='text' size='10' placeholder='phone' name='phone'</td>
	// <td><input type='submit' value='INSERT'></td></form>";	
  while($row = $result->fetch_assoc()) {

  	echo '<tr>';
    echo '<td>';
    echo '<form method="POST" action="homepage.php">
	<input type="text" name="book_name" value="'.$row["Book Name"].'">';
    // echo $row["book_name"];
    echo'</td>';
    echo '<td>';
    echo '<input type="text" name="book_author" value="'.$row["Book Author"].'">';
    // echo $row["book_author"];
    echo '</td>';
    echo '<td>';
    echo '<input type="text" name="book_category" value="'.$row["Book Category"].'">';
    // echo $row["book_category"];
    echo '</td>';
    echo '<td>';
    echo "<input type='submit' value='UPDATE'>
	<input type='hidden' name='update_button' value='now'>
	<input type='hidden' name='id' value='".$row['book_name']."'>
	</form>";
    echo '</td>';
    echo '<td>';
    echo "<form action='homepage.php' method='POST'>
	<input type='submit' value='DELETE'>
	<input type='hidden' name='delete_button' value='now'>
	<input type='hidden' name='id'value='".$row['book_name']."'>
	</form>";
    echo '</td>';

    echo '</tr>';
  }
}
else {
  echo "No books found!";
}
echo $_COOKIE['machine_name'];
$_COOKIE['interpretr_info'] = phpversion();
echo '<br>'.$_COOKIE['interpretr_info'];
$_COOKIE['ip address']= $_SERVER['REMOTE_ADDR'];
echo '<br>'.$_COOKIE['ip address'];

	?>
</table>
</body>
</html>