<?php
include("../../config/connect.php");
$trangthai = $_POST['tt'];
$madh = $_POST['madh'];
$tongtien = $_POST['money'];
$nl = $_POST['ngaylap'];
if (isset($_POST['suatrangthai']) && isset($_POST['suatrangthai'])) {
    $sql_update_vanchuyen = mysqli_query($conn, "UPDATE tbl_donhang SET ma_donhang='$madh',trangthai_donhang='$trangthai' ,tongtien='$tongtien',ngaylap_donhang='$nl' WHERE ma_donhang='$madh'");
    header('Location: ../../index.php?action=quanlydonhang&query=sua');
}
