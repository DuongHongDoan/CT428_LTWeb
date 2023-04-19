<style>
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
    .product-icon {
        margin-left: 54px;
        margin-top: 4px;
    }
    .product-icon button {
        border: none;
        background-color: transparent;
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
            margin-top: 2px;
        }
        .col-md-3 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }
        .product-price {
            color: var(--orange);
            font-size: 1rem;
        }
        .lookat-product, .add-product {
            font-size: 1rem;
            color: var(--light-blue);
        }
    }

    @media (min-width: 62em) {
        .card .product-icon {
            margin-left: -14px;
            margin-top: 6;
        }
        .col-md-3 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }
        .product-price {
            color: var(--orange);
            font-size: 1.2rem;
        }
        .lookat-product, .add-product {
            font-size: 1.2rem;
            color: var(--light-blue);
        }
        .card-text {
            font-size: 1.2rem;
        }
        
        .breadcrumb {
            margin: 10px 0 0 0px;
        }
    }
</style>

<?php
    // if (isset($_GET['sort'])) {
    //     $sort = $_GET['sort'];
    // }
    if(isset($_GET['trang'])) {
        $page = $_GET['trang'];
    }
    else {
        $page = 1;
    }
    if ($page=='' || $page==1) {
        $begin = 0;
    }
    else {
        $begin = ($page*9)-9;
    }
    $sql_products = "SELECT * FROM tbl_products WHERE tbl_products.id_danhmuc='$_GET[id]' LIMIT $begin,9";
    $query_products = mysqli_query($conn, $sql_products);
    $sql_pro = "SELECT * FROM tbl_category WHERE tbl_category.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_pro = mysqli_query($conn, $sql_pro);
    $row_title = mysqli_fetch_array($query_pro);
?>

<head>
    <title><?php echo $row_title['tendanhmuc']?></title>
</head>
<!-- Tao breadcrumb -->
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $row_title['tendanhmuc']?></li>
        </ol>
    </nav>
</div>
<!-- category -->
<?php
include("pages/main/category.php");
?>

<div class="col-lg-9">
    <div class="drop">
        <!-- drop title, filter -->
        <div class="dropdown drop-title">
            <div class="title title-deco" data-bs-toggle="dropdown">
                <h2><?php echo $row_title['tendanhmuc']?></h2>
            </div>
            <ul class="dropdown-menu drop-hover">
                <?php
                    $sql_danhmuc = "SELECT * FROM tbl_category";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while($row_drop = mysqli_fetch_array($query_danhmuc)){
                        if($row_drop['id_danhmuc'] != $_GET['id']) {
                ?>
                <li><a class="dropdown-item" href="index.php?quanly=categories&id=<?php echo $row_drop['id_danhmuc']?>"><?php echo $row_drop['tendanhmuc']?></a></li>
                <?php
                        }
                    }
                ?>
            </ul>
        </div>
        <!-- <div class="dropdown">
            <div class="product-filter dropdown-toggle" data-bs-toggle="dropdown">
                <span class="product-filter-label">Sắp xếp theo</span>
            </div>
            <ul class="dropdown-menu drop-hover">
                <li><a class="dropdown-item" href="index.php?quanly=categories&id=1&sort=asc">Giá tăng dần</a></li>
                <li><a class="dropdown-item" href="index.php?quanly=categories&id=1&sort=desc">Giá giảm dần</a></li>
            </ul>
        </div> -->
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
                        <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>" class="card-text"><?php echo $row_pro['tensp']?></a>
                        <div class="row product-footer">
                            <div class="col-6">
                                <p class="product-price"><?php echo number_format($row_pro['giasp'],0,',', '.')?><sup>đ</sup></p>
                            </div>
                            <div class="col product-icon">
                                <form method="POST" action="pages/products/add_cart.php?id_sanpham=<?php echo $row_pro['id_sanpham']?>">
                                            <a href="index.php?quanly=pro_detail&id=<?php echo $row_pro['id_sanpham']?>">
                                        <i class="lookat-product fa-solid fa-eye"></i>
                                    </a>
                                            <button class="icon-cart" type="submit" name="themgiohang" value="Thêm giỏ hàng" ><i class="add-product fa-solid fa-cart-plus"></i></button>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <?php
            $sql_page = "SELECT * FROM tbl_products WHERE tbl_products.id_danhmuc='$_GET[id]'";
            $query_page = mysqli_query($conn, $sql_page);
            $row_cnt = mysqli_num_rows($query_page);
            $row_page = mysqli_fetch_array($query_page);
            $trang = ceil($row_cnt/9);
        ?>

        <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="index.php?quanly=categories&id=<?php echo $row_page['id_danhmuc']?>&trang=<?php if($page>1 && $page<=$trang){echo $page-1;}else{echo $page;}?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
                for($i=1; $i<=$trang; $i++){
            ?>
            <li class="page-item"><a <?php if($i==$page) {echo 'style="color: #FF9933"';}else {echo 'style="color: #000;font-weight: 300"';}?> class="page-link" href="index.php?quanly=categories&id=<?php echo $row_page['id_danhmuc']?>&trang=<?php echo $i?>"><?php echo $i?></a></li>
            <?php
                }
            ?>
            <li class="page-item">
                <a class="page-link" href="index.php?quanly=categories&id=<?php echo $row_page['id_danhmuc']?>&trang=<?php if($page<$trang){echo $page+1;}else{echo $page;}?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
</nav>
    </div>
</div>