<head>
    <title>Hóa đơn</title>
</head>
<?php
$id_dangky = $_SESSION['id_khachhang'];
$sql_get_donhang = mysqli_query($conn, "SELECT * FROM tbl_donhang WHERE id_khachhang='$id_dangky' LIMIT 1");
$count = mysqli_num_rows($sql_get_donhang);
if ($count > 0) {
    $row_get_donhang = mysqli_fetch_array($sql_get_donhang);
    $madh = $row_get_donhang['ma_donhang'];
    $tt = $row_get_donhang['trangthai_donhang'];
    $nl = $row_get_donhang['ngaylap_donhang'];
    $pt = $row_get_donhang['pt_thanhtoan'];
    $dcgh = $row_get_donhang['vanchuyen_donhang'];
} else {
}
foreach ($_SESSION['donhang'] as $donhang) {
    $donhangm[] = array('tensp'=>$donhang['tensp'], 'id'=> $cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=> $cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'] );
}
?>
<table style="width:100%;text-align: center;border-collapse: collapse;" border="1">
    <tr>
        <td>
            <?php
            echo $madh;
            echo $tt;
            echo $nl;
            echo $pt;
            ?>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
    </tr>
</table>