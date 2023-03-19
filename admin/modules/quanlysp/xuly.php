<?php
    include("../../config/connect.php");
    $danhmuc = $_POST['danhmuc'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
// xu ly hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh; #them duoc nhieu anh trung nhau
    $mota = $_POST['mota'];
    $noidung = $_POST['noidung'];
    $trangthai = $_POST['trangthai'];

    if(isset($_POST['themsanpham'])) {
        $sql_them = "INSERT INTO tbl_products(id_danhmuc, tensp, giasp, soluong, hinhanh, mota, noidung, trangthai) VALUE('".$danhmuc."', '".$tensp."', '".$giasp."', '".$soluong."', '".$hinhanh."', '".$mota."', '".$noidung."', '".$trangthai."')";
        //ket noi db, them values vao bang
        mysqli_query($conn, $sql_them);
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        //them xong thi quay lai trang hien tai
        header('Location: ../../index.php?action=quanlysanpham&query=them');
    }
    elseif(isset($_POST['suasanpham'])) {
        if($hinhanh != '') {
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
            $sql_edit = "UPDATE tbl_products SET id_danhmuc='".$danhmuc."', tensp='".$tensp."', giasp='".$giasp."', soluong='".$soluong."', hinhanh='".$hinhanh."', mota='".$mota."', noidung='".$noidung."', trangthai='".$trangthai."' WHERE id_sanpham='$_GET[id_sanpham]'";
        
            $sql = "SELECT * FROM tbl_products WHERE id_sanpham='$_GET[id_sanpham]' LIMIT 1";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)) {
                unlink('uploads/'.$row['hinhanh']);
            }
        }
        else {
            $sql_edit = "UPDATE tbl_products SET id_danhmuc='".$danhmuc."',tensp='".$tensp."', giasp='".$giasp."', soluong='".$soluong."', hinhanh='".$hinhanh."', mota='".$mota."', noidung='".$noidung."', trangthai='".$trangthai."' WHERE id_sanpham='$_GET[id_sanpham]'";
        }
        //ket noi db, edit values vao bang
        mysqli_query($conn, $sql_edit);
        //edit xong thi quay lai trang hien tai
        header('Location: ../../index.php?action=quanlysanpham&query=them');
    }
    else {
        // Xoa danh muc, dng thoi xoa luon hinh anh trong thu muc uploads
        $sql = "SELECT * FROM tbl_products WHERE id_sanpham='$_GET[id_sanpham]' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/'.$row['hinhanh']);
        }
        $id_sanpham = $_GET['id_sanpham'];
        $sql_del = "DELETE FROM tbl_products WHERE id_sanpham='".$id_sanpham."'";
        mysqli_query($conn, $sql_del);
        header('Location: ../../index.php?action=quanlysanpham&query=them');
    }
?>