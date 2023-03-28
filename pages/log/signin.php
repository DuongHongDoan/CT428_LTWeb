<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Nhung gg font -> Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <!-- Nhung gg font -> End -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.0.0-web/js/all.min.js">
    <link rel="stylesheet" href="./assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/main.css">
    <link rel="stylesheet" href="./introassets/intro.css">
    <link rel="stylesheet" href="sign/signin.css">
    <title>SIGN IN</title>
</head>
<body>
<?php
    if(isset($_POST['signin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conn = new mysqli('localhost','root','','ct428');
        $sql = "SELECT * FROM account WHERE Username='$username'";
        $kq = $conn->query($sql)->fetch_assoc();
        if($kq['Password'] == $password){
            echo "<h1>Dang nhap thanh cong !</h1>";
        } else{
            echo "<h1>Dang nhap khong thanh cong !</h1>";
        }
    }
?>
    <header>
    </header>
    <main style="margin-top: -30px;">
        <div class="content-wrapper" style="margin-top: 150px;"> 
            <div class="content">
                <div class="signup-wrapper shadow-box">
                    <div class="company-details ">
                        <div class="shadow"></div>
                        <div class="wrapper-1">
                            <div class="logo"></div>
                            <div class="slogan"></div>
                        </div>
                    </div>
                    <div class="signup-form">
                        <div class="wrapper-2">
                            <div style="text-align:center;">
                                <A href="/CT428_LTWeb/index.php">
                                    <img src="/CT428_LTWeb/img/logo.png" style="width:50px; border-radius: 30px;"></img>
                                </A></div>
                            <div class="form-title" style="text-align:center;">
                                SIGN IN NOW !
                            </div>
                            <div class="form" style="padding-top: 20px;">
                                <form name="signin" action="./signin.php" method="POST">
                                    <p class="content-item">
                                        <label><a class="form-label lbs">Username:</a>
                                            <input type="text" id="username" name="username" placeholder="Enter username"  required>
                                        </label>
                                    </p>
                                    <p class="content-item" style="padding-top: 10px;">

                                        <label> <a class="form-label lbs">Password:</a>
                                            <input type="password" id="password" placeholder="*****" name="password" required>
                                        </label>
                                    </p>
                                    <button type="submit" name="signin" class="signup" style="margin-top: 10px;">SIGN IN </button>
                                    <button class="signup" style="margin-top: 10px;">RESET</a></button>
                                </form>
                                    <button onclick="open2()" class="signup" style="margin-top: 5px;"><a href="./signupp.php">SIGN UP</a></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    </main>
    <footer>
    </footer>
    <!-- Nhung cac script -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./assets/main.js"></script>
    <script src="./sign/signup.js"></script>
    <script src="./introassets/intro.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>