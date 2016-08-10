<?php
	$servername = "localhost";
	$username = "root";
	$password = "rolemodel";
	$db = "blog";
	$conn = mysqli_connect($servername, $username, $password, $db);

	$type = $_POST['type'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$date = new DateTime();
	$date = date_format($date, 'Y-m-d H:i:s');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO posts (postTitle, postDesc, postDate, type)VALUES('$title', '$desc', '$date', '$type')";

	if ($conn->query($sql) === TRUE) {
	    header("Location: /blog/views/home.php");
	} else {
	    header("Location: /blog/views/home.php");
	}		 
	$conn->close();
	
?>