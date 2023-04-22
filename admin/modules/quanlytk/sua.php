<?php
    $sql_sua_sanpham = "SELECT * FROM tbl_products WHERE id_sanpham='$_GET[id_sanpham]' LIMIT 1";
    $query_sua_sanpham = mysqli_query($conn, $sql_sua_sanpham);
?>
<p>Sửa sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse">
    <?php
        while($row = mysqli_fetch_array($query_sua_sanpham)){
    ?>
<!-- enctype="multipart/form-data": dung de gui file chua hinh anh -->
    <form method="POST" action="modules/quanlysp/xuly.php?id_sanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input value="<?php echo $row['tensp'] ?>" type="text" name="tensp">
            </td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td>
                <input value="<?php echo $row['giasp'] ?>" type="text" name="giasp">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="suasanpham" value="Sửa sản phẩm">
            </td>
        </tr>
    </form>
    <?php
        }
    ?>
</table>