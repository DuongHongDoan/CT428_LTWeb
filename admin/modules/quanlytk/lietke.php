<?php
    $sql_lietke_sanpham = "SELECT * FROM account";
    $query_lietke_sanpham = mysqli_query($conn, $sql_lietke_sanpham);
?>
<p>Liệt kê sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse">
    <tr>
        <td>ID Tài khoản</td>
        <td>Username</td>
        <td>Password</td>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sanpham)){
            $i++;
    ?>
    <tr>
        <td><?php echo $row['IDTaikhoan'] ?></td>
        <td><?php echo $row['Username'] ?></td>
        <td><?php echo $row['Password'] ?></td>
        <td>
            <a href="modules/quanlytk/xuly.php?idtk=<?php echo $row['IDTaikhoan'] ?>">Xóa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>