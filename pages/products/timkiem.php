<style>
    .product-item {
        margin-top: 16px;
    }
    .card-text {
        font-size: 1rem;
        display: block;
        font-weight: 400;
        color: var(--light-blue);
    }
    .product-price {
        color: var(--orange);
        font-size: 1.2rem;
    }
    .card .product-icon {
        margin-left: 54px;
        margin-top: 4px;
    }
    .lookat-product, .add-product {
        font-size: 1rem;
        color: var(--light-blue);
    }
    .lookat-product:hover, .add-product:hover {
        color: var(--orange);
        cursor: pointer;
        transition: var(--smooth);
    }

    @media (min-width: 36em) {
        .card .product-icon {
            margin-left: 42px;
            margin-top: 4px;
        }
    }

    @media (min-width: 48em) {
        .card .product-icon {
            margin-left: 12px;
            margin-top: 4px;
        }
        .col-md-3 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }
    }

    @media (min-width: 62em) {
        .card .product-icon {
            margin-left: -8px;
            margin-top: 4px;
        }
    }
</style>

<?php
    if(isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    else {
        $tukhoa = '';
    }
    $sql_products = "SELECT * FROM tbl_products WHERE tbl_products.tensp LIKE '%".$tukhoa."%'";
    $query_products = mysqli_query($conn, $sql_products);
?>

<head>
    <title>Tìm kiếm</title>
</head>
<!-- category -->
<?php
include("pages/main/category.php");
?>

<div class="col-lg-9">
    <div class="drop">
        <!-- drop title, filter -->
        <div class="dropdown drop-title">
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Phổ biến</a></li>
                <li><a class="dropdown-item" href="#">Mới nhất</a></li>
                <li><a class="dropdown-item" href="#">Giá tăng dần</a></li>
                <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
            </ul>
        </div>
    </div>
    <!-- Danh muc cac san pham -->
    <div class="product-item">
        <div class="row row-cols-2">
            <?php
                while($row_pro = mysqli_fetch_array($query_products)){
            ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>" class="card-text"><?php echo $row_pro['mota']?></a>
                        <div class="row product-footer">
                            <div class="col-6">
                                <p class="product-price"><?php echo number_format($row_pro['giasp'],0,',', '.')?><sup>đ</sup></p>
                            </div>
                            <div class="col product-icon">
                                <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>">
                                    <i class="lookat-product fa-solid fa-eye"></i>
                                </a>
                                <a href="index.php?quanly=giohang">
                                    <i class="add-product fa-solid fa-cart-plus"></i>
                                </a>
                            </div>
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