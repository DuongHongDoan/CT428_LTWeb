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
            <div class="col-sm-3">
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