
<div class="row justify-content-center" style="margin: 20px 0">
      <div class="col-sm-7">
        <h1>Đặt hàng</h1>
        <form action="index.php?quanly=thanhtoan" method="post">
        <div class="mb-3 mt-3">
          <label for="email" class="form-label"
            ><h4>Thông tin cá nhân:</h4></label
          >
          <div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="email"
              placeholder="Enter email"
              name="email"
            />
            <label for="email">Email</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              id="check1"
              name="option1"
              value="something"
              checked
            />
            <label class="form-check-label">Gửi thông tin giao hàng</label>
          </div>
        </div>
        <div>
          <label for="sel1"><h4>Địa chỉ giao hàng:</h4></label>
          <div class="form-floating">
            <select class="form-select" id="sel1" name="sellist">
              <option>TP HCM</option>
              <option>Huế</option>
              <option>Hà Nội</option>
              <option>Các tỉnh khác</option>
            </select>
            <label for="sel1" class="form-label">Chọn thành phố bạn ở:</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="diachi"
              placeholder="Nhập địa chỉ cụ thể"
              name="diachi"
            />
            <label for="diachi">Địa chỉ cụ thể</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="hoten"
              placeholder="Nhập Họ và Tên"
              name="hoten"
            />
            <label for="hoten">Họ và tên</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input
              type="number"
              class="form-control"
              id="sdt"
              placeholder="Nhập số điện thoại"
              name="sdt"
            />
            <label for="sdt">Số Điện thoại của bạn</label>
          </div>
          <div class="form-check form-switch" style="margin-top: 10px">
            <input
              class="form-check-input"
              type="checkbox"
              id="mySwitch"
              name="darkmode"
              value="yes"
              checked
            />
            <label class="form-check-label" for="mySwitch">Lưu thông tin</label>
          </div>
        </div>
        <div>
          <a
            href="index.php?quanly=thanhtoan"
            class="btn btn-success"
            style="margin-top: 10px"
            ><input type="submit" value="Đặt Hàng" name="dathang"></a
          >
        </div>
      </form>
      </div>
      <div class="col-sm-5" style="background-color: #f7f4f4">
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
 