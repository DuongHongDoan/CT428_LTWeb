<?php
	session_start();
    $now = date_default_timezone_set('Asia/Ho_Chi_Minh');
    $conn = new mysqli("localhost", "root", "", "ct428_ltweb");
    // Kiem tra ket noi
    if($conn->connect_errno) {
        echo "Kết nối database bị lỗi" . $conn->connect_error;
        exit();
    }
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);
	$cart_payment = $_POST['payment'];
	//lay id thong tin van chuyen
	$sql_get_vanchuyen = mysqli_query($conn,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_khachhang' LIMIT 1");
	$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
	$id_shipping = $row_get_vanchuyen['id_shipping'];
	$tongtien = 0;
	foreach($_SESSION['cart'] as $key => $value){
		$thanhtien = $value['soluong']*$value['giasp'];
  		$tongtien+=$thanhtien;
	}


	if($cart_payment == 'tienmat' || $cart_payment == 'chuyenkhoan'){
	//insert vào đơn hàng
		$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date,cart_payment,cart_shipping) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."','".$cart_payment."','".$id_shipping."')";
		$cart_query = mysqli_query($conn,$insert_cart);
		//them don hàng chi tiet
		foreach($_SESSION['cart'] as $key => $value){
				$id_sanpham = $value['id'];
				$soluong = $value['soluong'];
				$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
				mysqli_query($conn,$insert_order_details);
		}
		
		header('Location:../../index.php?quanly=hoadon');
	
    }
?>