<?php
    $sql_sua_danhmuc = "SELECT * FROM tbl_category WHERE id_danhmuc='$_GET[id_danhmuc]' LIMIT 1";
    $query_sua_danhmuc = mysqli_query($conn, $sql_sua_danhmuc);

?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse">
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?id_danhmuc=<?php echo $_GET['id_danhmuc'] ?>">
        <?php
            while ($row = mysqli_fetch_array($query_sua_danhmuc)){
        ?>
        <tr>
            <td>Tên danh mục</td>
            <td>
                <input type="text" value="<?php echo $row['tendanhmuc'] ?>" name="tendanhmuc">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="suadanhmuc" value="Cập nhật">
            </td>
        </tr>
        <?php
            }
        ?>
    </form>
</table>