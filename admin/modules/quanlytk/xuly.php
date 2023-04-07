<?php
    include("../../config/connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['themtaikhoan'])&& isset($_POST['themtaikhoan'])) {
        $sql_them = "INSERT INTO account(Username, Password) VALUE('".$username."', '".$password."')";
        //ket noi db, them values vao bang
        mysqli_query($conn, $sql_them);
        //them xong thi quay lai trang hien tai
        header('Location: ../../index.php?action=quanlytk&query=them');
    }
    else {
        // Xoa danh muc, dng thoi xoa luon hinh anh trong thu muc uploads
        $sql = "SELECT * FROM account WHERE IDTaikhoan='$_GET[idtk]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $idtk = $_GET['idtk'];
        $sql_del = "DELETE FROM account WHERE IDTaikhoan='".$idtk."'";
        mysqli_query($conn, $sql_del);
        header('Location: ../../index.php?action=quanlytk&query=them');
    }
?>