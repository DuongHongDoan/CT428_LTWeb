<?php
    $sql_lietke_sanpham = "SELECT * FROM tbl_products, tbl_category WHERE tbl_products.id_danhmuc=tbl_category.id_danhmuc";
    $query_lietke_sanpham = mysqli_query($conn, $sql_lietke_sanpham);
?>
<p>Liệt kê sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse">
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Tên danh mục</td>
        <td>Mã sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Mô tả</td>
        <td>Trạng thái</td>
        <td>Quản lý</td>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sanpham)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><img width="100px" src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['mota'] ?></td>
        <td><?php 
            if($row['trangthai']==1) {
                echo "Kích hoạt";
            } 
            else {
                echo "Ẩn";
            }
            ?>
        </td>
        <td>
            <a href="?action=quanlysanpham&query=edit&id_sanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> | <a href="modules/quanlysp/xuly.php?id_sanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>