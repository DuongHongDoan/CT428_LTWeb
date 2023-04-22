<p>Thêm tài khoản</p>
<table border="1" width="50%" style="border-collapse: collapse">
<!-- enctype="multipart/form-data": dung de gui file chua hinh anh -->
    <form method="POST" action="modules/quanlytk/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Username: </td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td>
                <input type="text" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="themtaikhoan" value="Thêm tài khoản">
            </td>
        </tr>
    </form>
</table>