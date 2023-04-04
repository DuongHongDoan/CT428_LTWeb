<!-- phan main -->
<div class="container">
    <div class="row overview">
        <?php
            if (isset($_GET['quanly'])) {
                $tmp = $_GET['quanly'];
            }
            else {
                $tmp = '';
            }
            if($tmp=='categories'){
                include("products/categories.php");
            }
            elseif($tmp=='pro_detail') {
                include("products/pro_detail.php");
            }
            elseif($tmp=='giohang') {
                include("products/giohang.php");
            }
            elseif($tmp=='timkiem') {
                include("products/timkiem.php");
            }
            elseif($tmp=='gioithieu') {
                include("products/intro.php");
            }
            elseif($tmp=='lienhe') {
                include("products/contact.php");
            }
            elseif($tmp=='vanchuyen') {
                include("products/vanchuyen.php");
            }
            elseif($tmp=='thanhtoan') {
                include("products/thanhtoan.php");
            }
            else
                include("main/index.php");
        ?>
    </div>
</div>

 <!-- phan products -->
<?php
    if (isset($_GET['quanly'])) {
        $t = $_GET['quanly'];
    }
    else {
        $t = '';
    }
    if ($t != "categories" && $t != "pro_detail" && $t != "giohang" && $t != "timkiem" && $t != "gioithieu" && $t != "lienhe" && $t != "vanchuyen" && $t != "thanhtoan"){
        include("products/product.php");
    }
?>