<?php
    $sql_lietke_danhmuc = "SELECT * FROM tbl_category";
    $query_lietke_danhmuc = mysqli_query($conn, $sql_lietke_danhmuc);

?>
<p>Liệt kê danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse">
    <tr>
        <td>ID</td>
        <td>Tên danh mục</td>
        <td>Quản lý</td>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmuc)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a href="?action=quanlydanhmucsanpham&query=edit&id_danhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> | <a href="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>