<?php
	$servername = "localhost";
	$username = "root";
	$password = "rolemodel";
	$db = "blog";
	$conn = mysqli_connect($servername, $username, $password, $db);

	$type = $_POST['type'];

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM posts WHERE type="'.$type.'";
	
	if ($conn->query($sql) == TRUE) {
		var_dump($conn);
//		header($conn);	    
	} else {
	    header("success =  false");
	}	 		 
	$conn->close();
	
?>