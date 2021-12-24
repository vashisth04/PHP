<html>
<head>
	<title>Login</title>
<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "instadb";
$conn = new mysqli($servername, $db_username, $db_password, $db_name);

        $sql = "select *from userdata where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
        	$_SESSION['username'] = $username;
        	header("Location: homepage2.php");
            // echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h3> Login failed. Invalid username or password.</h3>";  
        }   
}

?>
</head>
<body>
	<form action="insta_login.php" method="POST">
		Username: <input type="text" name="username" size="20">
		Password: <input type="password" name="password">
		<input type="submit" value="Login me!">
	</form>

</body>
</html>