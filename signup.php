<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpwd = $_POST['confirmpassword'];

	// Database connection
	$conn = new mysqli('localhost','root','','ct428');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into account(username, password) values(?, ?)");
		$stmt->bind_param("si",$username,$password);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>