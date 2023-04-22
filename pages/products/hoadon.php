<head>
    <title>Hóa đơn</title>
</head>
<h1 style="text-align: center;">Đơn Hàng</h1>
<table style="width:100%;text-align: center;border-collapse: collapse;" border="1" class="table table-hover">
    <thead class="table-info">
        <tr>
            <th>
                Mã Đơn hàng
            </th>
            <th>
                Trạng thái
            </th>
            <th>
                Sản phẩm
            </th>
            <th>
                Số lượng
            </th>
            <th>
                Ngày lập
            </th>
            <th>
                Thanh toán
            </th>
            <th>
                Địa chỉ
            </th>
            <th>
                Tổng tiền
            </th>
        </tr>
    </thead>
    <?php
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_get_donhang = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE id_khachhang='$id_dangky'");

    $sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_vanchuyen WHERE id_khachhang='$id_dangky' LIMIT 1");
    $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
    $dc = $row_get_vanchuyen['diachi'];
    for ($x = 1; $x <= $count; $x++) {

        $count = mysqli_num_rows($sql_get_donhang);
        if ($count > 0) {
            $row_get_donhang = mysqli_fetch_array($sql_get_donhang);
            $madh = $row_get_donhang['ma_donhang'];
            $tt = $row_get_donhang['trangthai_donhang'];
            $nl = $row_get_donhang['ngaylap_donhang'];
            $pt = $row_get_donhang['pt_thanhtoan'];
            if ($pt == 'tienmat') {
                $pt = 'Thanh toán khi nhận hàng';
            } else {
                $pt = 'Thanh toán chuyển khoản';
            }
            $dcgh = $row_get_donhang['vanchuyen_donhang'];
            $tongtien = $row_get_donhang['tongtien'];
        }
    ?>
        <tbody class="table-light">
            <tr>
                <td>
                    <?php echo $madh; ?>

                </td>
                <td>
                    <?php echo $tt; ?>
                </td>
                <td>
                    <?php
                    $sql_get_donhang_ct = mysqli_query($conn, "SELECT * FROM tbl_donhang_chitiet WHERE ma_donhang='$madh'");
                    $count1 = mysqli_num_rows($sql_get_donhang_ct);
                    if ($count1 > 0) {
                        for ($i = 1; $i <= $count1; $i++) {
                            $row_get_donhang_ct = mysqli_fetch_array($sql_get_donhang_ct);
                            $sp = $row_get_donhang_ct['id_sanpham'];
                            $sql_get_sanpham = mysqli_query($conn, "SELECT * FROM tbl_products WHERE id_sanpham='$sp'");
                            $row_get_sanpham = mysqli_fetch_array($sql_get_sanpham);
                            $tensp = $row_get_sanpham['tensp'];
                            echo $tensp . '</br>';
                        }
                    ?>
                </td>
                <td>
                <?php
                        $sql_get_donhang_sl = mysqli_query($conn, "SELECT soluongmua FROM tbl_donhang_chitiet WHERE ma_donhang='$madh'");
                        $count2 = mysqli_num_rows($sql_get_donhang_sl);
                        for ($a = 1; $a <= $count2; $a++) {
                            $row_get_donhang_sl = mysqli_fetch_array($sql_get_donhang_sl);
                            $sl = $row_get_donhang_sl['soluongmua'];
                            echo $sl . '</br>';
                        }
                    }
                ?>
                </td>
                <td>
                    <?php echo $nl; ?>
                </td>
                <td>
                    <?php echo $pt; ?>
                </td>
                <td>
                    <?php echo $dc; ?>
                </td>
                <td>
                    <?php echo $tongtien . 'đ' ?>
                </td>
            </tr>
        </tbody>
    <?php
    }
    ?>

</table>