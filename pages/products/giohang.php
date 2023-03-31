
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
                <button type="submit" class="btn-danger mx-2" name="remove">Remove</button>
              </div>
              <div class="col-md-3 py-5">
                <div>
                  <td><?php echo $cart_item['soluong']; ?></td>
                </div>
              </div>
            </div>
          </div>
        </form>
        <?php
        }
        ?>
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

                    <h6 class="text-success">Free</h6>
                    <hr>
                    <h6>
                    <?php echo number_format($tongtien, 0, ',', '.').'Đ'; ?>
                    </h6>
                </div>
                <a href="#">
                  <button type="submit" name="thanhtoan" style="background-color: #059867; color: #fff;">Thanh toán</button>
                </a>

            </div>
            
        </div>

<?php
        }else{

?>
    <tr>
        <td colspan="8"><p>Giỏ hàng đang rỗng =))))</p></td>
    </tr>
<?php
}
?>
    </div>
</div>