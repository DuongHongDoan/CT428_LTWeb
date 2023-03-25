<!-- <p>Chi tiết sản phẩm</p> -->
<style>
    .card-text {
        font-size: 1rem;
        display: block;
        font-weight: 400;
        color: var(--light-blue);
    }
    .product-price {
        color: var(--orange);
        font-size: 0.7rem;
    }
    .product-icon {
        margin-top: -6px;
    }
    .lookat-product, .add-product {
        font-size: 0.6rem;
        color: var(--light-blue);
    }
    .lookat-product:hover, .add-product:hover {
        color: var(--orange);
        cursor: pointer;
        transition: var(--smooth);
    }
    .deal-buy button{
        font-weight: 300;
    }

    @media (min-width: 36em) {
        .product-icon {
            margin-left: -12px;
            margin-top: -5px;
        }
        .btn-lg {
            margin-top: 4px;
        }
    }

    @media (min-width: 48em) {
        .product-icon {
            margin-left: -17px;
            margin-top: 2px;
        }
        .product-price {         
            font-size: 1rem;
        }
        .lookat-product, .add-product {
            font-size: 1rem;
        }
        .col-md-3 {
            flex: 1 0 0%;
            width: 25%;
        }
    }

    @media (min-width: 62em) {
        .product-icon {
            margin-left: -16px;
            margin-top: 0;
        }
        .col-md-3 {
            flex: 1 0 0%;
            width: 25%;
        }
        .btn-lg {
            margin-top: 4px;
        }
    }
</style>

<?php
    $sql_detail = "SELECT * FROM tbl_products,tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_products.id_sanpham='$_GET[id]' LIMIT 1";
    $query_detail = mysqli_query($conn, $sql_detail);
    while ($row_detail = mysqli_fetch_array($query_detail)){
?>
<title><?php echo $row_detail["tensp"]?></title>
<!-- Phan than -->
    <div class="container-fluid">
        <!-- Tao breadcrumb -->
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="index.php?quanly=categories&id=<?php echo $row_detail["id_danhmuc"]?>"><?php echo $row_detail["tendanhmuc"]?></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $row_detail["tensp"]?></li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row item-detail">
                <!-- anh ben trai -->
                <div class="img-bornPink col-sm-4 col-md-6 col-lg-4 col-xlg-3">
                    <div class="item-img">
                        <img src="admin/modules/quanlysp/uploads/<?php echo $row_detail['hinhanh']?>" alt="">
                    </div>
                    <!-- <div class="item-imgs">
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
                    </div> -->
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
                            <span>Mã sản phẩm:<?php echo $row_detail['masp']?></span>
                        </div>
                        <div class="item-price"><span><?php echo number_format($row_detail['giasp'],0,',', '.')?><sup>đ</sup></span></div>
                        <div class="item-deal">
                            <span>
                                Số lượng <span style="font-size:0.8rem; font-weight: 300">(Kho còn: <?php echo $row_detail['soluong']?>)</span>
                            </span>
                            <div class="deal-buy">
                                <button class="btn-minus" onclick="handleMinus()">-</button>
                                <input type="text" name="deal" id="deal" value="1">
                                <button class="btn-plus" onclick="handlePlus()">+</button>
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
                        <h2>Thông tin sản phẩm</h2>
                    </div>
                </div>
                <div class="row content">
                    <div class="content1 col-md-6">
                        <ul>
                            <h5>Chi tiết sản phẩm</h5>
                            <li>- Danh Mục: <a href="index.php?quanly=categories&id=<?php echo $row_detail['id_danhmuc']?>">Card bo góc</a></li>
                            <li>- Kiểu thần tượng: K-Pop</li>
                            <li>- Gửi từ: Hà Nội</li>
                        </ul>
                    </div>  
                    <div class="content2 col-md-6">
                        <ul>
                            <h5>Mô tả sản phẩm</h5>
                            <li><?php echo $row_detail['mota']?></li>
                            <!-- <li>- Kích thước: 5,5 * 8,6cm</li>
                            <li>- Chất liệu: Couche 300gsm (cứng)</li>
                            <li>- Cán màng: Nhám ( 2 mặt )</li>
                            <li>- Bo góc: Có</li>
                            <li>- Mặt chính: Hình ảnh idol</li>
                            <li>- Mặt sau : Hình ảnh nhóm</li>
                            <li>- Xuất xứ: Việt Nam</li> -->
                        </ul>
                    </div>  
                </div>
            </div>

<script>
    let dealElement = document.getElementById("deal");
    let deal = dealElement.value;
    let max = <?php echo $row_detail['soluong']?>;
    let render = (deal) => {
        dealElement.value = deal;
    }

    let handlePlus = () => {
        if (deal < max)
            deal++;
        render(deal);
    }
    let handleMinus = () => {
        if (deal > 1)
            deal--;
        render(deal);
    }

    dealElement.addEventListener('input',() => {
        deal = dealElement.value;
        deal = parseInt(deal);
        deal = (isNaN(deal)|| deal==0)?1:deal; 
        render(deal);
    });
</script>

<?php
    }
?>
<?php
    $sql_id = "SELECT tbl_products.id_danhmuc FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_products.id_sanpham='$_GET[id]'";
    $query_id = mysqli_query($conn, $sql_id);
    $row_id = mysqli_fetch_array($query_id);
    $sql_same = "SELECT * FROM tbl_products WHERE tbl_products.id_danhmuc='$row_id[id_danhmuc]'";
    $query_same = mysqli_query($conn, $sql_same);
    $sql_khac = "SELECT * FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND NOT tbl_products.id_danhmuc='$row_id[id_danhmuc]' LIMIT 5";
    $query_khac = mysqli_query($conn, $sql_khac);
?>
        <!-- sp lien quan -->
            <div class="row item-relate">
                <div class="container">
                    <div class="title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php
                        while($row_same = mysqli_fetch_array($query_same)) {
                            if($row_same['id_sanpham'] != $_GET['id']) {
                    ?>
                    <div class="item">
                        <a href="index.php?quanly=pro_detail&id=<?php echo $row_same['id_sanpham']?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row_same['hinhanh']?>" alt="">
                        </a>
                        <div class="product">
                            <a href="index.php?quanly=pro_detail&id=<?php echo $row_same['id_sanpham']?>" class="product-detail"><?php echo $row_same['tensp']?></a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price"><?php echo number_format($row_same['giasp'],0,',', '.')?><sup>đ</sup></p>
                                </div>
                                <div class="col product-icon">
                                    <a href="index.php?quanly=pro_detail&id=<?php echo $row_same['id_sanpham']?>">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    ?>
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
                    <?php
                        while($row_khac = mysqli_fetch_array($query_khac)) {
                    ?>
                    <div class="item">
                        <a href="index.php?quanly=pro_detail&id=<?php echo $row_khac['id_sanpham']?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row_khac['hinhanh']?>" alt="">
                        </a>
                        <div class="product">
                            <a href="index.php?quanly=pro_detail&id=<?php echo $row_khac['id_sanpham']?>" class="product-detail"><?php echo $row_khac['tensp']?></a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price"><?php echo number_format($row_khac['giasp'],0,',', '.')?><sup>đ</sup></p>
                                </div>
                                <div class="col product-icon">
                                    <a href="index.php?quanly=pro_detail&id=<?php echo $row_khac['id_sanpham']?>">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

