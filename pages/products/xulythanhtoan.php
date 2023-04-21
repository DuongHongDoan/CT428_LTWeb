<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$now = date('l j-m-Y G:i:s A');

$conn = new mysqli("localhost", "root", "", "ct428_ltweb");
// Kiem tra ket noi
if ($conn->connect_errno) {
	echo "Kết nối database bị lỗi" . $conn->connect_error;
	exit();
}
$id_khachhang = $_SESSION['id_khachhang'];
$ptThanhToan = $_POST['payment'];
$ttdonhang = 1;

//lay id thong tin van chuyen
$sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_vanchuyen WHERE id_khachhang='$id_khachhang' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['id_vanchuyen'];
$tongtien = 0;
foreach ($_SESSION['cart'] as $key => $value) {
	$thanhtien = $value['soluong'] * $value['giasp'];
	$tongtien += $thanhtien;
}


if ($ptThanhToan == 'tienmat' || $ptThanhToan == 'chuyenkhoan') {
	//insert vào đơn hàng
	$insert_cart = "INSERT INTO tbl_donhang(id_khachhang,trangthai_donhang,ngaylap_donhang,pt_thanhtoan,vanchuyen_donhang) VALUE('" . $id_khachhang . "','" . $ttdonhang . "','" . $now . "','" . $ptThanhToan . "','" . $id_shipping . "')";
	$cart_query = mysqli_query($conn, $insert_cart);
	//them don hàng chi tiet
	$sql_get_donhang = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE id_khachhang='$id_khachhang' LIMIT 1");
	$row_get_vanchuyen = mysqli_fetch_array($sql_get_donhang);
	$id_donhang = $row_get_vanchuyen['id_donhang'];
	foreach ($_SESSION['cart'] as $key => $value) {
		$id_sanpham = $value['id'];
		$soluong = $value['soluong'];
		$insert_order_details = "INSERT INTO tbl_donhang_chitiet(id_sanpham,id_donhang,soluongmua) VALUE('" . $id_sanpham . "','" . $id_donhang . "','" . $soluong . "')";
		mysqli_query($conn, $insert_order_details);
	}

	header('Location:../../index.php?quanly=hoadon');
}
