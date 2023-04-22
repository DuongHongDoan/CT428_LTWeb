<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = date("l j/n/Y G:i:s A");
$conn = new mysqli("localhost", "root", "", "ct428_ltweb");
// Kiem tra ket noi
if ($conn->connect_errno) {
	echo "Kết nối database bị lỗi" . $conn->connect_error;
	exit();
}
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);
$cart_payment = $_POST['payment'];
//lay id thong tin van chuyen
$sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_vanchuyen WHERE id_khachhang='$id_khachhang' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['id_vanchuyen'];
$tongtien = 0;
foreach ($_SESSION['cart'] as $key => $value) {
	$thanhtien = $value['soluong'] * $value['giasp'];
	$tongtien += $thanhtien;
}

if ($cart_payment == 'tienmat' || $cart_payment == 'chuyenkhoan') {
	//insert vào đơn hàng
	$insert_cart = "INSERT INTO tbl_donhang(id_khachhang,trangthai_donhang,ngaylap_donhang,pt_thanhtoan,vanchuyen_donhang,ma_donhang,tongtien) VALUE('" . $id_khachhang . "','Đang chờ xác nhận','" . $now . "','" . $cart_payment . "','" . $id_shipping . "','" . $code_order . "','" . $tongtien . "')";
	$cart_query = mysqli_query($conn, $insert_cart);
	//them don hàng chi tiet
	foreach ($_SESSION['cart'] as $key => $value) {
		$id_sanpham = $value['id'];
		$soluong = $value['soluong'];
		$insert_order_details = "INSERT INTO tbl_donhang_chitiet(id_sanpham,ma_donhang,soluongmua) VALUE('" . $id_sanpham . "','" . $code_order . "','" . $soluong . "')";
		mysqli_query($conn, $insert_order_details);
	}

	header('Location:../../index.php?quanly=hoadon');
}
