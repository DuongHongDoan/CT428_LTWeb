<?php
   
    if($_SESSION['id_khachhang']!=-1){
    $_SESSION['id_khachhang']=-1;    
    echo '<script>location.href = "index.php?quanly=index";</script>';
    }else{
        echo '<script>alert("Bạn chưa đăng nhập")</script>';
        echo '<script>location.href = "index.php?quanly=dangnhap";</script>';
    }
?>