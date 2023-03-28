<?php
    include("../../config/connect.php");
    $tenloaisp = $_POST['tendanhmuc'];
    if(isset($_POST['themdanhmuc'])) {
        $sql_them = "INSERT INTO tbl_category(tendanhmuc) VALUE('".$tenloaisp."')";
        //ket noi db, them values vao bang
        mysqli_query($conn, $sql_them);
        //them xong thi quay lai trang hien tai
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    elseif(isset($_POST['suadanhmuc'])) {
        $sql_edit = "UPDATE tbl_category SET tendanhmuc='".$tenloaisp."' WHERE id_danhmuc='$_GET[id_danhmuc]'";
        //ket noi db, edit values vao bang
        mysqli_query($conn, $sql_edit);
        //edit xong thi quay lai trang hien tai
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
    else {
        // Xoa danh muc
        $id_danhmuc = $_GET['id_danhmuc'];
        $sql_del = "DELETE FROM tbl_category WHERE id_danhmuc='".$id_danhmuc."'";
        mysqli_query($conn, $sql_del);
        header('Location: ../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>