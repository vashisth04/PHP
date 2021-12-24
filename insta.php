<html>
<head><title>insta rsiter</title>
<?php
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['username'])){
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "instadb";
$conn = new mysqli($servername, $db_username, $db_password, $db_name);


$sql = "INSERT INTO userdata (username, password, name) VALUES ('$username', '$password', '$name')";

if ($conn->query($sql) === TRUE) {
  echo "You have been registered successfully!!";
  echo "<a href='insta_login.php'> Click here to login</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
}
?>

</head>
<body>


<form method="post" action="insta.php">
	Name: <input type="text" name="name" size="20" placeholder="Your name">
	Username: <input type="text" name="username" size="20" placeholder="username">
	Password: <input type="password" name="password" size="20" placeholder="password">
	<input type="submit" value="Register now!">
</form>
</body>
</html>