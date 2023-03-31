<?php
    session_start();
    include("../../admin/config/connect.php");
    //tru so luong
    //them so luong
    //xoa sp
    if(isset($_SESSION['cart']) && $_GET['xoa']){
        $id= $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array('tensp'=>$cart_item['tensp'], 'id'=> $cart_item['id'], 'soluong'=>$cart_item['soluong']+1,'giasp'=> $cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'] );

            }
        $_SESSION['cart'] = $product;
        header('Location: ../../index.php?quanly=giohang');

        }
    }
    //xoa tat ca
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('Location: ../../index.php?quanly=giohang');
        
    }
    
    //them sp vao gio hang
    if(isset($_POST['themgiohang'])){
        $id = $_GET['id_sanpham'];
        $soluong = 1;
        $sql = "SELECT * FROM tbl_products WHERE id_sanpham='$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if($row) {
            $new_product[] = array('tensp'=>$row['tensp'], 'id'=> $id, 'soluong'=>$soluong,'giasp'=> $row['giasp'], 'hinhanh'=>$row['hinhanh'] );
            // KT session gio hang ton tai

            if (isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item) {
                    // neeu dl trung nhau
                    if($cart_item['id'] == $id) {
                        $product[] = array('tensp'=>$cart_item['tensp'], 'id'=> $cart_item['id'], 'soluong'=>$cart_item['soluong']+1,'giasp'=> $cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'] );
                        $found = true;
                        // dl khong trung thi them vo 
                    }else{
                        $product[] = array('tensp'=>$cart_item['tensp'], 'id'=> $cart_item['id'], 'soluong'=>$cart_item['soluong'],'giasp'=> $cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'] );

                    }
                }

                if ( $found == false){
                    $_SESSION['cart'] = array_merge($product, $new_product);

                }else{
                    $_SESSION['cart'] = $product;

                }

            }else{
                $_SESSION['cart'] = $new_product;
            }
        }
        header('Location: ../../index.php?quanly=giohang');
        // print_r($_SESSION['cart']);
    }
?>