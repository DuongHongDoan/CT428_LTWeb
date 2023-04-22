<div class="container">
	<?php
	if (isset($_SESSION['id_khachhang'])) {
	}
	?>

	<head>
		<title>Thanh toán</title>
	</head>
	<form action="pages/products/xulythanhtoan.php" method="POST">
		<div class="row">

			<?php
			$id_dangky = $_SESSION['id_khachhang'];
			$sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_vanchuyen WHERE id_khachhang='$id_dangky' LIMIT 1");
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

			<div class="col-md-8">
				<h4>Thông tin vận chuyển và giỏ hàng</h4>
				<?php
				if ($count > 0) {
				?>
					<ul>
						<li>Họ và tên vận chuyển : <b><?php echo $ten ?></b></li>
						<li>Số điện thoại : <b><?php echo $sdt ?></b></li>
						<li>Địa chỉ : <b><?php echo $diachi ?></b></li>
						<li>Ghi chú : <b><?php echo $chuthich ?></b></li>
					</ul>
				<?php
				} else {
					echo '<h5>Hiện chưa có thông tin vận chuyển</h5>';
				}
				?>
				<h5>Giỏ hàng của bạn</h5>
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
						<?php
						if ($tongtien < $dk) {
							$tongtien += $phivanchuyen;
						}
						?>
						<tr>
							<td colspan="8">
								<?php
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
							</td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
			<div class="col-md-4 ">
				<h4>Phương thức thanh toán</h4>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
					<label class="form-check-label" for="exampleRadios1">
						Thanh toán khi nhận hàng
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyenkhoan">
					<label class="form-check-label" for="exampleRadios2">
						Thanh toàn bằng chuyển khoản
					</label>
				</div>

				<?php
				if ($ten == '' || $diachi == '' || $sdt == '') {
					if ($_SESSION['id_khachhang'] != -1) {
				?>

						<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
							Thêm địa chỉ giao hàng
						</button>
					<?php
					} else {
						echo '<h5>Vui lòng đăng nhập rồi hãy thanh toán</h5>';
					}
				} else { ?>
					<input type="submit" value="Thanh toán ngay" name="redirect" class="btn btn-danger">
					<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
						Cập nhật địa chỉ giao hàng
					</button>
				<?php
				}
				?>


	</form>

	<?php
	$tongtien = 0;
	foreach ($_SESSION['cart'] as $key => $value) {
		$thanhtien = $value['soluong'] * $value['giasp'];
		$tongtien += $thanhtien;
	}
	?>


</div>
</div>
</div>
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
						echo '<script>location.href = "index.php?quanly=thanhtoan";</script>';
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
						echo '<script>location.href = "index.php?quanly=thanhtoan";</script>';
					}
				}
				?>
				<form action="" method="POST" id="thongtinthanhtoan" name="thongtinthanhtoan">
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

					<div class="modal-footer">
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
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>