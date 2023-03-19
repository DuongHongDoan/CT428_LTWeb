<?php
    session_start();
    include("config/connect.php");
    if(isset($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = md5($_POST['passwd']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$username."' AND password='".$password."' LIMIT 1";
        $row = mysqli_query($conn, $sql);
        $count = mysqli_fetch_array($row);
        if($count>0){
            $_SESSION['dangnhap'] = $username;
            header('Location: index.php');
        }
        else {
            echo '<script>alert("Username hoặc Password không đúng!");</script>';
            header('Location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        .wrapper-login{
            width: 15%;
            margin: 0 auto;
        }
        .table-login tr td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper-login">
        <form method="POST" autocomplete="off" action="">
            <table class="table-login" border="1" style="text-align: center; border-collapse: collapse">
                <tr>
                    <td colspan="2"><h2>Admin Login</h2></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>Pasword:</td>
                    <td>
                        <input type="password" name="passwd">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="dangnhap"></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
