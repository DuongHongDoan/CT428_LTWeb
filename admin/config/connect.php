<?php

    $conn = new mysqli("localhost", "root", "", "productdb");

    // Kiem tra ket noi
    if($conn->connect_errno) {
        echo "Kết nối database bị lỗi" . $conn->connect_error;
        exit();
    }
?>