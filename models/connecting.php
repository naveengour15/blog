<?php
	$servername = "localhost";
	$username = "root";
	$password = "rolemodel";
	$db = "blog";
	$conn = mysqli_connect($servername, $username, $password, $db);

	$email = $_POST['emailId'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$date = new DateTime();
	$date = date_format($date, 'Y-m-d H:i:s');

    echo $date;
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO contacts (contactEmailId, contactTitle, contactDesc, contactDate)VALUES('$email', '$title', '$desc', '$date')";

	if ($conn->query($sql) === TRUE) {
	    header("Location: /blog/contactme.php");
	} else {
	    header("Location: /blog/contactme.php");
	}	 
	$conn->close();
	
?>