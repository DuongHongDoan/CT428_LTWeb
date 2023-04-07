<?php
    session_start();
    if(!isset($_SESSION['signin'])) {
        header('Location: ./pages/log/signin.php');
    }
?>
<h1>Giỏ hàng</h1>