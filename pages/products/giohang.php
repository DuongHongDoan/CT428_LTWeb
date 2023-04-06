<?php
  if(isset($_SESSION['cart'])) {

  }
?>

<div class="container-fluid" style="width: 100%; text-align:center">
  <div class="row px-5">
    <div class="col-md-7">
      <div class="shopping-cart">
        <h6 style="font-size: 30px; padding-top: 15px; text-align: center; letter-spacing: 4px">MY CART</h6>
        <hr>
      </div>
      <?php
        if(isset($_SESSION['cart'])){
          $i=0;
          $total = 0;
          $tongtien =0;
          $phivanchuyen=35000;
          $dk = 500000;
          foreach($_SESSION['cart'] as $cart_item){
            $total = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien+= $total;
            $i++;
      ?>
      <form action="" method="post" class="cart-items">
        <div class="border rounded">
          <div class="row bg-while">
            <div class="col-md-3 pl-0">
              <img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" style="width: 150px" alt="">
            </div>

            <div class="col-md-6">
              <h5 class="pt-2">
                <?php echo $cart_item['tensp']?>
              </h5>
              <small class="text-secondary">Seller: Kpops Store</small>
              <h5 class="pt-2">
                <?php echo number_format( $cart_item['giasp'], 0, ',', '.').'Đ'; ?>
              </h5>
              <a href="pages/products/add_cart.php?xoa=<?php echo $cart_item['id'] ?>">
                <!-- <button type="#" class="btn-danger mx-2" name="remove">Remove</button> -->
                <h5 class="pt-2" style="color:red; font-size: 18px;">Xóa</h5>
              </a>
            </div>
            <div class="col-md-3 py-5">
              <div>
                <td>
                  <a href="pages/products/add_cart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus" style="padding: 7px 0 0 7px"></i></a>
                    <?php echo $cart_item['soluong']; ?>
                  <a href="pages/products/add_cart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus" style="padding: 5px 0 0 5px"></i></a>
                </td>
              </div>
            </div>
          </div>
        </div>
      </form>
      <?php
        }
      ?>


    <h4 style ="padding-top: 30px"><a href="pages/products/add_cart.php?xoatatca=1" style="color: red; font-size: 20px">Xóa tất cả</a></h4>
    </div>
    <div class="col-md-4 offset-md-1 border rounded mt-5-bg-while h-25">
      <h6 style="font-size: 30px; padding-top: 15px; text-align: center; letter-spacing: 4px">DETAILS</h6>
      <hr>
      <div class="row price-details">
          <div class="col-md-6">
              <?php
              if(isset($_SESSION['cart'])) {
                  $count = count($_SESSION['cart']);
                  echo "<h6>Tạm tính ($count )</h6>";
              }else{
                  echo "<h6>Giá(0 items)</h6>";
              }
              ?>
              <h6>Phí vận chuyển</h6>
              <hr>
              <h6>Tổng số tiền </h6>
          </div>

          <div class="col-md-6">
              <h6>
              <?php echo number_format($tongtien, 0, ',', '.').'Đ'; ?>
              </h6>
                <?php
                    if ($tongtien < $dk){
                      echo number_format($phivanchuyen, 0, ',', ".").'Đ';
                      $tongtien1 = $tongtien + $phivanchuyen;
                    }else{
                      $str = "FREE";
                      $phivanchuyen = $str;
                      echo $phivanchuyen;
                    }
                ?>
              </h6>
              <hr>
              <h6>
              <?php 
              if ($tongtien < $dk) {
                echo number_format( $tongtien1, 0, ',', '.').'Đ';
              }else{

                echo number_format( $tongtien, 0, ',', '.').'Đ'; 
              }
              ?>

              </h6>

              <h6><i>Freeship với hóa đơn trên 500.000Đ</i></h6>
          </div>
          <a href="#">
            <button type="submit" name="thanhtoan" style="background-color: #059867; color: #fff; border-radius: 5px">Thanh toán</button>
          </a>

      </div>    
    </div>

      <?php
        }else{

      ?>
        <tr>
            <td><p>Giỏ hàng đang rỗng =))))</p></td>
        </tr>
      <?php
        }
      ?>
  </div>
</div>
