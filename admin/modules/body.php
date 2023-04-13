<div class="ad_body">
    <?php
        if(isset($_GET['action']) && $_GET['query']) {
            $tmp = $_GET['action'];
            $query = $_GET['query'];
        }
        else {
            $tmp = '';
            $query = '';
        }

        if($tmp == 'quanlydanhmucsanpham' && $query == 'them') {
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }
        elseif($tmp == 'quanlydanhmucsanpham' && $query == 'edit') {
            include("modules/quanlydanhmucsp/sua.php");
        }
        elseif($tmp == 'quanlysanpham' && $query=='them') {
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        }
        elseif($tmp == 'quanlysanpham' && $query == 'edit') {
            include("modules/quanlysp/sua.php");
        }
        // elseif($tmp == 'quanlydanhmucbaiviet') {
        //     include("");
        // }
        // elseif($tmp == 'quanlybaiviet') {
        //     include("");
        // }
        else {
            include("modules/dashboard.php");
        }
    ?>
</div>