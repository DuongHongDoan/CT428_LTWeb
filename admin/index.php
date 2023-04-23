<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/styleAD.css">
</head>
<body>
    <h2 class="title">Welcome to Admin page</h2>
    <div class="wrapper">
        <?php
            include("config/connect.php");
            include("modules/header.php");
            include("modules/navbar.php");
            include("modules/body.php");
            // include("modules/footer.php");
        ?>
    </div>
</body>
</html>