<?php
    if(isset($_POST['dathang'])&& isset($_POST['dathang'])){
        $email = $_POST['email'];
        $tp = $_POST['sellist'];
        $diachi = $_POST['diachi'];
        $hoten = $_POST['hoten'];
        $sdt = $_POST['sdt'];
    }
?>
<div class="row">
  <div class="col-sm-7">
  <table class="table">
    <tbody>
      <tr>
        <td>Địa chỉ email: </td>
        <td><?php echo $email?></td>
      </tr>
      <tr>
        <td>Địa chỉ giao hàng: </td>
        <td>
            <?php 
                if(isset($_POST['sellist'])){
                    echo $tp ." ". $diachi;
                }
            ?>
        </td>
      </tr>
      <tr>
        <td>Họ và tên: </td>
        <td><?php echo $hoten?></td>
      </tr>
      <tr>
        <td>Số điện thoại</td>
        <td><?php echo $sdt?></td>
      </tr>
    </tbody>
  </table>
  <div>
  <label class="radio-inline"><input type="radio" name="optradio" checked>Trả tiền trực tiếp</label>
  <label class="radio-inline"><input type="radio" name="optradio">Momo</label>
  <label class="radio-inline"><input type="radio" name="optradio">Ngân hàng</label>
  <label class="radio-inline"><input type="radio" name="optradio">Zalo Pay</label>
  </div>
  <div>
          <a
            href="index.php?quanly=hoadon"
            class="btn btn-success"
            style="margin-top: 10px"
            ><input type="submit" value="Thanh toán" name="thanhtoan"></a
          >
        </div>
</div>
  <div class="col-sm-5">
  <div class="mathang">
<?php
    $sql_thanhtoan = "SELECT MASP, img, TenSP, GIA, TT FROM thanhtoan";
    $result = $conn->query($sql_thanhtoan);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>
      <div>
        <?php echo $row['MASP']?>
        <img src="admin/modules/quanlysp/uploads/<?php echo $row['img']?>" style="height: 120px; width: 120px; margin-bottom: 10px;" alt="<?php echo $row['TT']?>">
        <?php echo $row['TenSP']?>
        <?php echo $row['GIA']?>
      </div>
     <?php }
      } else {
      echo "0 ";
      }
      $conn->close();
?>
        </div>
        <div class="tonggia">
            <?php
              date_default_timezone_set('Asia/Ho_Chi_Minh');
              $Ngay = date('Y-m-d H:i:s');
              echo $Ngay;
            ?>
        </div>
  </div>
</div>