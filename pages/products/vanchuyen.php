<?php
  if(isset($_SESSION['id_khachhang'])){

} 
?>
<h4>Thông tin vận chuyển</h4>
<?php
 	if(isset($_POST['themvanchuyen'])) {
 		$name = $_POST['name'];
 		$phone = $_POST['phone'];
 		$address = $_POST['address'];
 		$note = $_POST['note'];
 		$id_dangky = $_SESSION['id_khachhang'];
 		$sql_them_vanchuyen = mysqli_query($conn,"INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");
 		if($sql_them_vanchuyen){
 			echo '<script>alert("Thêm địa chỉ thành công")</script>';

 		}
 	}elseif(isset($_POST['capnhatvanchuyen'])){
 		$name = $_POST['name'];
 		$phone = $_POST['phone'];
 		$address = $_POST['address'];
 		$note = $_POST['note'];
 		$id_dangky = $_SESSION['id_khachhang'];
 		$sql_update_vanchuyen = mysqli_query($conn,"UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
 		if($sql_update_vanchuyen){
 			echo '<script>alert("Cập nhật địa chỉ thành công")</script>';

 		}
 	}
 ?>
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

 		$name = '';
 		$phone = '';
 		$address = '';
 		$note = '';
 	}
 	?>
 	<div class="col-md-12">
	 <form action="" autocomplete="off" method="POST" id="thongtinthanhtoan" name="thongtinthanhtoan">
	  <div class="form-group">
	    <label for="email">Họ và tên</label>
	    <input type="text" name="name" class="form-control" value="<?php echo $name ?>" placeholder="Nhập Họ Tên" >
	  </div>
		<div class="form-group">
	    <label for="email">Phone</label>
	    <input type="number" name="phone" class="form-control" value="<?php echo $phone ?>"  placeholder="Nhập số điện thoại của bạn" >
	  </div>
	  <div class="form-group">
	    <label for="email">Địa chỉ</label>
	    <input type="text" name="address" class="form-control" value="<?php echo $address ?>"  placeholder="Nhập địa chỉ cần giao hàng" >
	  </div>
	  <div class="form-group">
	    <label for="email">Ghi chú</label>
	    <input type="text" name="note" class="form-control" value="<?php echo $note ?>"  placeholder="Chú thích" >
	  </div>
	  <?php
	  if($name=='' && $phone=='') {
	  ?>
	  <button type="submit" name="themvanchuyen" class="btn btn-primary">Thêm vận chuyển</button>
	  <?php
	  } elseif($name!='' && $phone!=''){
	  ?>
	  <button type="submit" name="capnhatvanchuyen" class="btn btn-success">Cập nhật vận chuyển</button>
	  <?php
	  } 
	  ?>
	  
	  <?php
		if(isset($_POST['thongtinthanhtoan'])){
			$name1=$_POST['name'];
			$diachi=$_POST['address'];
			$sdt=$_POST['phone'];
			if($name1==''|| $diachi=='' || $sdt==''){
				echo '<script>alert("Hãy nhập thông tin đi!!")</script>';
			}else{
				echo '<script>location.href = "index.php?quanly=thanhtoan";</script>';
			}
		}
	  ?>
	</form>
	</div>
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
   <tr>
    <td colspan="8">
    	<p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'đ' ?></p><br/>
    	
      <?php
        if($_SESSION['id_khachhang']!=-1){
          ?>
           <p><button type="submit" name="thongtinthanhtoan" form="thongtinthanhtoan" class="btn btn-success">Thanh Toán</button></p>
	  <?php
        }else{
      ?>
        <p><a href="index.php?quanly=dangnhap">Đăng nhập để đặt hàng</a></p>
      <?php
        }
      ?>
      
    </td>

  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td>
    <img src="img/empty_cart.png" alt="">
              <p style="padding-top: 25px; font-size: 18px; padding-bottom: 15px">Giỏ hàng của bạn đang rỗng </p>
              <a href="./index.php">
                <button type="submit" name="themgiohang" value="Thêm giỏ hàng" class="themgiohang btn btn-success btn-lg">Tiếp tục mua sắm</button>
              </a>
    </td>
    </tr>
  <?php
  } 
  ?>
 
</table>
</div>
</div>
