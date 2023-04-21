<?php

    $conn = new mysqli("localhost", "root", "", "test");

    // Kiem tra ket noi
    if($conn->connect_errno) {
        echo "Kết nối database bị lỗi" . $conn->connect_error;
        exit();
    }
?>