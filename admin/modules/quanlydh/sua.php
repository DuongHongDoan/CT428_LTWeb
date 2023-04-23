<?php
$id_dangky = $_SESSION['id_khachhang'];
$sql_get_donhang = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE id_khachhang='$id_dangky'");
?>
<p>Xác nhận đơn hàng</p>
<a href="?action=quanlydonhang&query=lietke">Liệt kê</a>
<table border="1" width="50%" style="border-collapse: collapse">
    <?php
    while ($row = mysqli_fetch_array($sql_get_donhang)) {
    ?>
        <!-- enctype="multipart/form-data": dung de gui file chua hinh anh -->
        <form method="POST" action="modules/quanlydh/xuly.php" enctype="multipart/form-data">
            <tr>
                <td>Mã đơn hàng</td>
                <td>
                    <input value="<?php echo $row['ma_donhang'] ?>" type="text" name="madh">
                </td>
            </tr>
            <tr>
                <td>Trạng thái</td>
                <td>
                    <input value="<?php echo $row['trangthai_donhang'] ?>" type="text" name="tt">
                </td>
            </tr>
            <tr>
                <td>Ngày lập đơn hàng</td>
                <td>
                    <input value="<?php echo $row['ngaylap_donhang'] ?>" type="text" name="ngaylap">
                </td>
            </tr>
            <tr>
                <td>Tổng tiền</td>
                <td>
                    <input value="<?php echo $row['tongtien'] ?>" type="text" name="money">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="suatrangthai" value="cập nhập trạng thái">
                </td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>