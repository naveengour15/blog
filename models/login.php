<?php
	$servername = "localhost";
	$username = "root";
	$password = "rolemodel";
	$db = "blog";
	$conn = mysqli_connect($servername, $username, $password, $db);

	$name = $_POST['uname'];
	$pass = $_POST['upass'];

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        if( ($name == $row["name"]) && ($pass == $row["password"])){

				    session_start();
				    $_SESSION['loggedin'] = true;
				    $_SESSION['name'] = $name;
	    		 header("Location: /blog/views/home.php");
			} 
			else {
				 header("Location: /blog/singin.php");
			}  	
		}
	}

	
	$conn->close();
	
?>