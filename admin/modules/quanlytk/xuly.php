<?php
    include("../../config/connect.php");

    if(isset($_POST['themtaikhoan'])&& isset($_POST['themtaikhoan'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql_them = "INSERT INTO account(Username, Password) VALUE('".$username."', '".$password."')";
        //ket noi db, them values vao bang
        mysqli_query($conn, $sql_them);
        //them xong thi quay lai trang hien tai
        $url='../../index.php?action=quanlytaikhoan&query=them';
        echo '<script>';
        echo 'if(confirm("Thêm tài khoản thành công!")){';
            echo 'window.location.href = "'.$url.'";';
            echo '}';
        echo '</script>';
        //header('Location: ../../index.php?action=quanlytaikhoan&query=them');
    }
    else {
        // Xoa danh muc, dng thoi xoa luon hinh anh trong thu muc uploads
        $sql = "SELECT * FROM account WHERE IDTaikhoan='$_GET[idtk]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $idtk = $_GET['idtk'];
        $sql_del = "DELETE FROM account WHERE IDTaikhoan='".$idtk."'";
        mysqli_query($conn, $sql_del);
        $url='../../index.php?action=quanlytaikhoan&query=them';
        echo '<script>';
        echo 'if(confirm("Xoá tài khoản thành công!")){';
            echo 'window.location.href = "'.$url.'";';
            echo '}';
        echo '</script>';
        // header('Location: ../../index.php?action=quanlytaikhoan&query=them');
    }
?>