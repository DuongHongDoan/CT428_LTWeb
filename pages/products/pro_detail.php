<!-- <p>Chi tiết sản phẩm</p> -->

<?php
    $sql_detail = "SELECT * FROM tbl_products,tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_products.id_sanpham='$_GET[id]' LIMIT 1";
    $query_detail = mysqli_query($conn, $sql_detail);
    while ($row_detail = mysqli_fetch_array($query_detail)){
?>
<!-- Tao breadcrumb -->
<div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="./bogoc.html">Card bo góc</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Card Born Pink</li>
                </ol>
            </nav>
        </div>
    </header>
<!-- Phan than -->
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row item-detail">
                <!-- anh ben trai -->
                <div class="img-bornPink col-sm-4 col-md-6 col-lg-4 col-xlg-3">
                    <div class="item-img">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_detail['hinhanh']?>" alt="">
                    </div>
                    <div class="item-imgs">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="./img/bornPink.jpeg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="./img/bornPink.jpeg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="./img/bornPink.jpeg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- noi dung sp ben phai -->
                <div class="col-sm-8 col-md-6 col-lg-8 col-xlg-9">
                        <div class="item-title">
                            <span><?php echo $row_detail['tensp']?></span>
                        </div>
                        <div class="item-rating item-rated">
                            <i class="item-icon-empty fa-regular fa-star"></i>
                            <i class="item-icon-empty fa-regular fa-star"></i>
                            <i class="item-icon-empty fa-regular fa-star"></i>
                            <i class="item-icon-empty fa-regular fa-star"></i>
                            <i class="item-icon-empty fa-regular fa-star"></i>
                            <span style="font-weight: 200; font-size: 0.8rem;"><i>(Đang cập nhật</i>)</span>
                        </div>
                        <div class="id-item">
                            <span>Mã sản phẩm: D2445T</span>
                        </div>
                        <div class="item-price"><span><?php echo number_format($row_detail['giasp'],0,',', '.')?><sup>đ</sup></span></div>
                        <div class="item-deal">
                            <span>
                                Số lượng <span style="font-size:0.8rem; font-weight: 300">(Kho còn: <?php echo $row_detail['soluong']?>)</span>
                            </span>
                            <div class="deal-buy">
                                <button class="btn-minus" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" name="deal" id="deal" value="1" min="1" max="<?php echo $row_detail['soluong']?>">
                                <button class="btn-plus" onclick="handlePlus()"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="item-transport">
                            <span>Vận chuyển</span>
                            <p>
                                Giao hàng toàn quốc qua các đơn vị vận chuyển <i> GIAO HÀNG TIẾT KIỆM, GIAO HÀNG NHANH, Viettel post</i>.
                                Giao hàng nội thành <i>TP.Hồ Chí Minh</i> - Hỏa tốc trong ngày
                            </p>
                        </div>
                    <form method="POST" action="pages/products/add_cart.php?id_sanpham=<?php echo $row_detail['id_sanpham']?>">
                        <div class="button-add">
                            <button type="submit" value="mua ngay" class="btn btn-success btn-lg">Mua ngay</button>
                            <button type="submit" name="themgiohang" value="Thêm giỏ hàng" class="btn btn-success btn-lg">Thêm vào giỏ hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        <!-- mo ta san pham -->
            <div class="row item-description">
                <div class="container">
                    <div class="title">
                        <h2>Mô tả sản phẩm</h2>
                    </div>
                </div>
                <div class="row content">
                    <div class="content1 col-md-6">
                        <ul>
                            <h5>Thông tin sản phẩm</h5>
                            <li>- Số lượng: 1 tấm</li>
                            <li>- Kích thước: 5,5 * 8,6cm</li>
                            <li>- Chất liệu: Couche 300gsm (cứng)</li>
                            <li>- Cán màng: Nhám ( 2 mặt )</li>
                            <li>- Bo góc: Có</li>
                            <li>- Mặt chính: Hình ảnh idol</li>
                            <li>- Mặt sau : Hình ảnh nhóm</li>
                            <li>- Xuất xứ: Việt Nam</li>
                        </ul>
                    </div>  
                    <div class="content2 col-md-6">
                        <ul>
                            <h5>Chi tiết sản phẩm</h5>
                            <li>- Danh Mục: <a href="index.php?quanly=categories&id=<?php echo $row_detail['id_danhmuc']?>">Card bo góc</a></li>
                            <li>- Kiểu thần tượng: K-Pop</li>
                            <li>- Gửi từ: Hà Nội</li>
                        </ul>
                    </div>  
                </div>
            </div>

        <!-- sp lien quan -->
            <div class="row item-relate">
                <div class="container">
                    <div class="title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#">
                            <img src="./img/BlackPink Slide.jpg" alt="">
                        </a>
                        <div class="product">
                            <a href="#" class="product-detail">day la blackpink la nhom nhac han quoc</a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price">25$</p>
                                </div>
                                <div class="col product-icon">
                                    <a href="#">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="./img/LE SSERAFIM SLIDE.jpg" alt="">
                        </a>
                        <div class="product">
                            <a href="#" class="product-detail">day la blackpink la nhom nhac han quoc</a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price">25$</p>
                                </div>
                                <div class="col product-icon">
                                    <a href="#">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="./img/TXT_SLIDE.jpg" alt="">
                        </a>
                        <div class="product">
                            <a href="#" class="product-detail">day la blackpink la nhom nhac han quoc</a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price">25$</p>
                                </div>
                                <div class="col product-icon">
                                    <a href="#">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- sp khac -->
            <div class="row item-follow">
                <div class="container">
                    <div class="title">
                        <h2>Có thể bạn quan tâm</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#">
                            <img src="./img/BlackPink Slide.jpg" alt="">
                        </a>
                        <div class="product">
                            <a href="#" class="product-detail">day la blackpink la nhom nhac han quoc</a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price">25$</p>
                                </div>
                                <div class="col product-icon">
                                    <a href="#">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="./img/LE SSERAFIM SLIDE.jpg" alt="">
                        </a>
                        <div class="product">
                            <a href="#" class="product-detail">day la blackpink la nhom nhac han quoc</a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price">25$</p>
                                </div>
                                <div class="col product-icon">
                                    <a href="#">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="./img/TXT_SLIDE.jpg" alt="">
                        </a>
                        <div class="product">
                            <a href="#" class="product-detail">day la blackpink la nhom nhac han quoc</a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price">25$</p>
                                </div>
                                <div class="col product-icon">
                                    <a href="#">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    }
?>

