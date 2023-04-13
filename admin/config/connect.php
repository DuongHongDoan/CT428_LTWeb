<?php

    $conn = new mysqli("localhost", "root", "", "ct428_ltweb");

    // Kiem tra ket noi
    if($conn->connect_errno) {
        echo "Kết nối database bị lỗi" . $conn->connect_error;
        exit();
    }
?>