<?php
if (isset($_SESSION['id_khachhang'])) {
}
?>

<head>
	<title>Vận chuyển</title>
</head>
<h4>Thông tin vận chuyển</h4>
<div class="row">
	<?php
	$id_khachhang = $_SESSION['id_khachhang'];
	$sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_vanchuyen WHERE id_khachhang='$id_khachhang' LIMIT 1");
	$count = mysqli_num_rows($sql_get_vanchuyen);
	if ($count > 0) {
		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
		$ten = $row_get_vanchuyen['ten'];
		$sdt = $row_get_vanchuyen['sodienthoai'];
		$diachi = $row_get_vanchuyen['diachi'];
		$chuthich = $row_get_vanchuyen['chuthich'];
	} else {

		$ten = '';
		$sdt = '';
		$diachi = '';
		$chuthich = '';
	}
	?>
	<div class="col-md-12">
		<ul>
			<li>Họ và tên vận chuyển : <b><?php echo $ten ?></b></li>
			<li>Số điện thoại : <b><?php echo $sdt ?></b></li>
			<li>Địa chỉ : <b><?php echo $diachi ?></b></li>
			<li>Ghi chú : <b><?php echo $chuthich ?></b></li>
		</ul>
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Cập nhật thông tin vận chuyển</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<?php
						if (isset($_POST['themvanchuyen'])) {
							$ten = $_POST['name'];
							$sdt = $_POST['phone'];
							$diachi = $_POST['address'];
							$chuthich = $_POST['note'];
							$id_khachhang = $_SESSION['id_khachhang'];
							$sql_them_vanchuyen = mysqli_query($conn, "INSERT INTO tbl_vanchuyen(ten,sodienthoai,diachi,chuthich,id_khachhang) VALUES('$ten','$sdt','$diachi','$chuthich','$id_khachhang')");
							if ($sql_them_vanchuyen) {
								echo '<script>alert("Thêm địa chỉ thành công")</script>';
							}
						} elseif (isset($_POST['capnhatvanchuyen'])) {
							$ten = $_POST['name'];
							$sdt = $_POST['phone'];
							$diachi = $_POST['address'];
							$chuthich = $_POST['note'];
							$id_khachhang = $_SESSION['id_khachhang'];
							$sql_update_vanchuyen = mysqli_query($conn, "UPDATE tbl_vanchuyen SET ten='$ten',sodienthoai='$sdt',diachi='$diachi',chuthich='$chuthich',id_khachhang='$id_khachhang' WHERE id_khachhang='$id_khachhang'");
							if ($sql_update_vanchuyen) {
								echo '<script>alert("Cập nhật địa chỉ thành công")</script>';
							}
						}
						?>
						<form action="" autocomplete="off" method="POST" id="thongtinthanhtoan" name="thongtinthanhtoan">
							<div class="form-group">
								<label for="email">Họ và tên</label>
								<input type="text" name="name" class="form-control" value="<?php echo $ten ?>" placeholder="Nhập Họ Tên">
							</div>
							<div class="form-group">
								<label for="email">Phone</label>
								<input type="number" name="phone" class="form-control" value="<?php echo $sdt ?>" placeholder="Nhập số điện thoại của bạn">
							</div>
							<div class="form-group">
								<label for="email">Địa chỉ</label>
								<input type="text" name="address" class="form-control" value="<?php echo $diachi ?>" placeholder="Nhập địa chỉ cần giao hàng">
							</div>
							<div class="form-group">
								<label for="email">Ghi chú</label>
								<input type="text" name="note" class="form-control" value="<?php echo $chuthich ?>" placeholder="Chú thích">
							</div>
							<?php
							if ($ten == '' && $sdt == '') {
							?>
								<button type="submit" name="themvanchuyen" class="btn btn-primary">Thêm vận chuyển</button>
							<?php
							} elseif ($ten != '' || $sdt != '') {
							?>
								<button type="submit" name="capnhatvanchuyen" class="btn btn-success">Cập nhật vận chuyển</button>
							<?php
							}
							?>

							<?php
							if (isset($_POST['thongtinthanhtoan'])) {
								if ($ten == '' || $diachi == '' || $sdt == '') {
									echo '<script>alert("Hãy nhập thông tin đi!!")</script>';
								} else {
									echo '<script>location.href = "index.php?quanly=thanhtoan";</script>';
								}
							}
							?>
						</form>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
					</div>

				</div>
			</div>
		</div>
	</div>
	<h3>Thông tin giỏ hàng</h3>
	<table style="width:100%;text-align: center;border-collapse: collapse;" border="1">
		<tr>
			<th>Id</th>
			<th>Tên sản phẩm</th>
			<th>Hình ảnh</th>
			<th>Số lượng</th>
			<th>Giá sản phẩm</th>
			<th>Thành tiền</th>


		</tr>
		<?php
		if (isset($_SESSION['cart'])) {
			$i = 0;
			$tongtien = 0;
			$phivanchuyen = 35000;
			$dk = 500000;
			foreach ($_SESSION['cart'] as $cart_item) {
				$thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
				$tongtien += $thanhtien;
				$i++;
		?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $cart_item['tensp']; ?></td>
					<td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" style="width: 100px" alt=""></td>
					<td>
						<?php echo $cart_item['soluong']; ?>
					</td>
					<td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'đ'; ?></td>
					<td><?php echo number_format($thanhtien, 0, ',', '.') . 'đ' ?></td>

				</tr>
			<?php
			}
			?>
			<tr>
				<td colspan="8">
					<?php
					if ($tongtien < $dk) {
						$tongtien += $phivanchuyen;
					}
					if ($tongtien < $dk) {
					?>
						<p style="float: left;">Tổng tiền + phí ship: <?php echo number_format($tongtien, 0, ',', '.') . 'đ' ?></p><br />
					<?php
					} else {
					?>
						<p style="float: left;">Tổng tiền và freeship: <?php echo number_format($tongtien, 0, ',', '.') . 'đ' ?></p><br />
					<?php
					}
					?>
					<?php
					if ($_SESSION['id_khachhang'] != -1) {
					?>

						<p>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
								Thêm địa chỉ giao hàng
							</button>
							<button type="submit" name="thongtinthanhtoan" form="thongtinthanhtoan" class="btn btn-success">Thanh Toán</button>
						</p>
					<?php
					} else {
					?>
						<p><a href="index.php?quanly=dangnhap">Đăng nhập để đặt hàng</a></p>
					<?php
					}
					?>

				</td>

			</tr>
		<?php
		}
		?>
	</table>
</div>
</div>