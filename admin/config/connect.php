<?php
// ket noi co so du lieu tren hosting
    // $conn = new mysqli("localhost", "id20557872_ct428_ltweb", "5+#Ev}\xR-&pM5Sp", "id20557872_ct428ltweb");

// ket noi co so du lieu duoi local
    $conn = new mysqli("localhost", "root", "", "ct428_ltweb");

    // Kiem tra ket noi
    if($conn->connect_errno) {
        echo "Kết nối database bị lỗi" . $conn->connect_error;
        exit();
    }
?>