<?php
    session_start();
    include("../../admin/config/connect.php");
    //tru so luong
    //them so luong
    //them sp vao gio hang
    //xoa sp

    if(isset($_POST['themgiohang'])) {
        $id = $_GET['id_sanpham'];
        $soluong = 1;//moi lan click la them 1 sp
        $sql = "SELECT * FROM tbl_products WHERE id_sanpham='$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if ($row) {
            $new_pro=array(array('tensp'=>$row['tensp'], 'id'=>$id, 'soluong'=>$soluong, 'giasp'=>$row['giasp'], 'hinhanh'=>$row['hinhanh']));
            //kiem tra qua trinh them sp, neu co roi thi chi viec tang so luong==> còn lỗi chưa thêm được số lượng khi chọn trùng sp
            if(isset($_SESSION['cart'])) {
                $found = false;
                foreach($_SESSION['cart'] as $cart_item) {
                    if($cart_item['id'] != $id) {
                        $pro=array(array('tensp'=>$cart_item['tensp'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh']));
                        $found=true;
                    }
                    else {
                        $pro=array(array('tensp'=>$cart_item['tensp'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh']));
                    }
                }
            }
            else {
                $_SESSION['cart'] = $new_pro;
            }
        }
        header('Location: ../../index.php?quanly=giohang');
        // print_r($_SESSION['cart']);
    }
?>