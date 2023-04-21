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
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_category";
                        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                        while ($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                            if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                    <?php
                            }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td>
                <input value="<?php echo $row['masp'] ?>" type="text" name="masp">
            </td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td>
                <input value="<?php echo $row['giasp'] ?>" type="text" name="giasp">
            </td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td>
                <input value="<?php echo $row['soluong'] ?>" type="text" name="soluong">
            </td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <img width="100px" src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">  
            </td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td>
                <textarea name="mota" rows="10" style="resize: none;"> <?php echo $row['mota'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Trạng thái</td>
            <td>
                <select name="trangthai">
                    <?php
                        if($row['trangthai']==1){
                    ?>
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                    <?php
                        }else{
                    ?>
                    <option value="1">Kích hoạt</option>
                    <option value="0" selected>Ẩn</option>
                    <?php
                        }
                    ?>
                </select>
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