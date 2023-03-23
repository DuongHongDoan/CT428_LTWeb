<p>Thêm sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse">
<!-- enctype="multipart/form-data": dung de gui file chua hinh anh -->
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" name="tensp">
            </td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_category";
                        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                        while ($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td>
                <input type="text" name="giasp">
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td>
                <input type="text" name="soluong">
            </td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
            </td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <textarea name="mota" id="" rows="10" style="resize: none;"></textarea>
            </td>
        </tr>
        <tr>
            <td>Chi tiết</td>
            <td>
                <textarea name="chitiet" rows="10" style="resize: none;"></textarea>
            </td>
        </tr>
        <tr>
            <td>Trạng thái</td>
            <td>
                <select name="trangthai">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="themsanpham" value="Thêm sản phẩm">
            </td>
        </tr>
    </form>
</table>