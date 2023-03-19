<div class="container-fluid products">
        <div class="container">
            <!-- Sale -->
            <div id="sale" class="container product-items">
                <!-- ten tieu de -->
                <div class="title">
                    <h2>Khuyến mãi</h2>
                </div>
                <!-- carousel -->
                <div class="owl-carousel owl-theme">
                    <?php
                        $sql_products = "SELECT * FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_category.tendanhmuc='Khuyến mãi' LIMIT 5";
                        $query_products = mysqli_query($conn, $sql_products);
                        while($row = mysqli_fetch_array($query_products)){
                    ?>
                    <div class="item">
                        <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="">
                        </a>
                        <div class="product">
                            <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>" class="product-detail"><?php echo $row['mota']?></a>
                            <div class="row product-footer">
                                <div class="col-6">
                                    <p class="product-price"><?php echo number_format($row['giasp'],0,',', '.')?><sup>đ</sup></p>
                                </div>
                                <div class="col product-icon">
                                    <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
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
                <div class="product-link">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_category WHERE tendanhmuc='Khuyến mãi'";
                        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                        $row_danhmuc=mysqli_fetch_array($query_danhmuc)
                    ?>
                    <a href="index.php?quanly=categories&id=<?php echo $row_danhmuc['id_danhmuc']?>" class="xemthem">
                        Xem thêm <i class='fas fa-angle-right'></i>
                    </a>
                </div>
            </div>
            <div>
                <!-- Product 1: Deco -->
                <div id="deco" class="container product-items">
                    <!-- ten tieu de -->
                    <div class="title">
                        <h2>Deco</h2>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                        <?php
                            $sql_products = "SELECT * FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_category.tendanhmuc='Deco' LIMIT 5";
                            $query_products = mysqli_query($conn, $sql_products);
                            while($row = mysqli_fetch_array($query_products)){
                        ?>
                        <div class="item">
                            <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
                                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="">
                            </a>
                            <div class="product">
                                <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>" class="product-detail"><?php echo $row['mota']?></a>
                                <div class="row product-footer">
                                    <div class="col-6">
                                        <p class="product-price"><?php echo number_format($row['giasp'],0,',', '.')?><sup>đ</sup></p>
                                    </div>
                                    <div class="col product-icon">
                                        <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
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
                    <div class="product-link">
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_category WHERE tendanhmuc='Deco'";
                            $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                            $row_danhmuc=mysqli_fetch_array($query_danhmuc)
                        ?>
                        <a href="index.php?quanly=categories&id=<?php echo $row_danhmuc['id_danhmuc']?>" class="xemthem">
                            Xem thêm <i class='fas fa-angle-right'></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 2: Album -->
                <div id="deco" class="container product-items">
                    <!-- ten tieu de -->
                    <div class="title">
                        <h2>Album</h2>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                        <?php
                            $sql_products = "SELECT * FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_category.tendanhmuc='Album' LIMIT 5";
                            $query_products = mysqli_query($conn, $sql_products);
                            while($row = mysqli_fetch_array($query_products)){
                        ?>
                        <div class="item">
                            <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
                                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="">
                            </a>
                            <div class="product">
                                <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>" class="product-detail"><?php echo $row['mota']?></a>
                                <div class="row product-footer">
                                    <div class="col-6">
                                        <p class="product-price"><?php echo number_format($row['giasp'],0,',', '.')?><sup>đ</sup></p>
                                    </div>
                                    <div class="col product-icon">
                                        <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
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
                    <div class="product-link">
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_category WHERE tendanhmuc='Album'";
                            $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                            $row_danhmuc=mysqli_fetch_array($query_danhmuc)
                        ?>
                        <a href="index.php?quanly=categories&id=<?php echo $row_danhmuc['id_danhmuc']?>" class="xemthem">
                            Xem thêm <i class='fas fa-angle-right'></i>
                        </a>
                    </div>
                </div> 

                <!-- Product 3: Card bo góc -->
                <div id="deco" class="container product-items">
                    <!-- ten tieu de -->
                    <div class="title">
                        <h2>Card bo góc</h2>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                        <?php
                            $sql_products = "SELECT * FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc AND tbl_category.tendanhmuc='Card bo góc' LIMIT 5";
                            $query_products = mysqli_query($conn, $sql_products);
                            while($row = mysqli_fetch_array($query_products)){
                        ?>
                        <div class="item">
                            <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
                                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" alt="">
                            </a>
                            <div class="product">
                                <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>" class="product-detail"><?php echo $row['mota']?></a>
                                <div class="row product-footer">
                                    <div class="col-6">
                                        <p class="product-price"><?php echo number_format($row['giasp'],0,',', '.')?><sup>đ</sup></p>
                                    </div>
                                    <div class="col product-icon">
                                        <a href="index.php?quanly=pro_detail&id=<?php echo $row['id_sanpham']?>">
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
                    <div class="product-link">
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_category WHERE tendanhmuc='Card bo góc'";
                            $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                            $row_danhmuc=mysqli_fetch_array($query_danhmuc)
                        ?>
                        <a href="index.php?quanly=categories&id=<?php echo $row_danhmuc['id_danhmuc']?>" class="xemthem">
                            Xem thêm <i class='fas fa-angle-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>