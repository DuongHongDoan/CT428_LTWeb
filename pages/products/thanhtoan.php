<div class="container">
  <?php
  if(isset($_SESSION['id_khachhang'])){
  } 
  ?>
  	<form action="pages/products/xulythanhtoan.php" method="POST">
	<div class="row">
  
  	<?php
 	$id_dangky = $_SESSION['id_khachhang'];
 	$sql_get_vanchuyen = mysqli_query($conn,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
 	$count = mysqli_num_rows($sql_get_vanchuyen);
 	if($count>0){
 		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
 		$name = $row_get_vanchuyen['name'];
 		$phone = $row_get_vanchuyen['phone'];
 		$address = $row_get_vanchuyen['address'];
 		$note = $row_get_vanchuyen['note'];
 	}else{
		echo '<script>alert("Nhấn thêm thông tin vận chuyển để thanh toán")</script>';
		echo '<script>location.href = "index.php?quanly=vanchuyen";</script>';
 	}
 	?>
 		
  	<div class="col-md-8">
  		<h4>Thông tin vận chuyển và giỏ hàng</h4>
  		<ul>
  			<li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
  			<li>Số điện thoại : <b><?php echo $phone ?></b></li>
  			<li>Địa chỉ : <b><?php echo $address ?></b></li>
  			<li>Ghi chú : <b><?php echo $note ?></b></li>
  		</ul>
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
		  if(isset($_SESSION['cart'])){
		  	$i = 0;
		  	$tongtien = 0;
			$phivanchuyen=35000;
			$dk = 500000;
		  	foreach($_SESSION['cart'] as $cart_item){
		  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
		  		$tongtien+=$thanhtien;
		  		$i++;
			
		  ?>
		  <tr>
		    <td><?php echo $i; ?></td>
		    <td><?php echo $cart_item['tensp']; ?></td>
		    <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" style="width: 100px" alt=""></td>
		    <td>
		    	<?php echo $cart_item['soluong']; ?>
		    </td>
		    <td><?php echo number_format($cart_item['giasp'],0,',','.').'đ'; ?></td>
		    <td><?php echo number_format($thanhtien,0,',','.').'đ' ?></td>
		   
		  </tr>
		  <?php
		  	}
		  ?>
		  <?php
		  if ($tongtien < $dk){
			$tongtien += $phivanchuyen;
			}	
		  ?>
		   <tr>
		    <td colspan="8">
				<?php
				if($tongtien < $dk){
				?>
		    	<p style="float: left;">Tổng tiền + phí ship: <?php echo number_format($tongtien,0,',','.').'đ' ?></p><br/>
				<?php
				}else{
				?>
				<p style="float: left;">Tổng tiền và freeship: <?php echo number_format($tongtien,0,',','.').'đ' ?></p><br/>
				<?php
				}
				?>
		    </td>
		  </tr>
		  <?php	
		  }else{ 
		  ?>
		   <tr>
    			<td><p>Giỏ hàng đang rỗng =))))</p></td>
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
		    Tiền mặt
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyenkhoan">
		  <label class="form-check-label" for="exampleRadios2">
		    Chuyển khoản
		  </label>
		</div>

		<input type="submit" value="Thanh toán ngay" name="redirect" class="btn btn-danger">
		
		</form>
	
		<?php
		$tongtien = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$thanhtien = $value['soluong']*$value['giasp'];
  			$tongtien+=$thanhtien;

		} 
		$tongtien_vnd = $tongtien;
		$tongtien_usd = round($tongtien/22667);
		?>
		<input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
		<div id="paypal-button"></div>

		 </div>
		 </div>
		</div>
	
	
	