<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpwd = $_POST['confirmpassword'];
	$hoten = $_POST['fullname'];
	$gioitinh = $_POST['gender'];
	$ngaysinh = $_POST['ngaysinh'];
	$mail = $_POST['email'];
	$sdt = $_POST['phonenumber'];
	$dchi = $_POST['diachi'];
	// Database connection
	$conn = new mysqli('localhost','root','','ct428');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt1 = $conn->prepare("insert into account(username, password) values(?, ?)");
		$stmt1->bind_param("si",$username,$password);
		$execval1 = $stmt1->execute();
		$stmt1->close();

		$stmt2 = $conn->prepare("insert into user(tennguoidung,gioitinh,ngaysinh,email,sdt,diachi) value(?, ?, ?, ?, ?, ?)");
		$stmt2->bind_param("sssssi",$hoten,$gioitinh,$ngaysinh,$mail,$sdt,$dchi);
		$execval2 = $stmt2->execute();
		$stmt2->close();
		//echo $execval;
		echo "Registration successfully...";
		$conn->close();
	}

?>