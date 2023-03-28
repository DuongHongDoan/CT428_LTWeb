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
    <link rel="stylesheet" href="sign/signup.css">
    <title>SIGN UP</title>
</head>
<body>
<?php
    if(isset($_POST['signupp'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpwd = $_POST['confirmpassword'];
        $hoten = $_POST['fullname'];
        $gioitinh = $_POST['gender'];
        $ngaysinh = $_POST['ngaysinh'];
        $mail = $_POST['email'];
        $sdt = $_POST['phonenumber'];
        $dchi = $_POST['diachi'];
        // Database connection
        $conn = new mysqli('localhost','root','','ct428');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            $stmt1 = $conn->prepare("insert into account(Username, Password) values(?, ?)");
            $stmt1->bind_param("si",$username,$password);
            $execval1 = $stmt1->execute();
            $stmt1->close();

            $stmt2 = $conn->prepare("insert into user(tennguoidung,gioitinh,ngaysinh,email,sdt,diachi) value(?, ?, ?, ?, ?, ?)");
            $stmt2->bind_param("sssssi",$hoten,$gioitinh,$ngaysinh,$mail,$sdt,$dchi);
            $execval2 = $stmt2->execute();
            $stmt2->close();
            //echo $execval;
            echo "Registration successfully...";
            $conn->close();
        }
    }
?>
    <header>
    </header>
    <main style="margin-top: -30px;">
        <div class="content-wrapper"> 
            <div class="content">
                <div class="signup-wrapper shadow-box">
                    <div class="company-details ">
                        <div class="shadow"></div>
                        <div class="wrapper-1">
                            <div class="logo"></div>
                            <div class="slogan"></div>
                        </div>
                    </div>
                    <div class="signup-form ">
                        <div class="wrapper-2">
                            <div class="form-title">SIGN UP NOW!</div>
                            <div class="form">
                                <form action="./signupp.php" method="POST">
                                    <p class="content-item">
                                        <label for="username"><a class="form-label lbs">Username: </a>
                                            <input type="text" id="username" name="username"  placeholder="At least 8 chars"  required>
                                        </label>
                                    </p>

                                    <p class="content-item">
                                        <label for="password"> <a class="form-label lbs">Password:</a>
                                            <input type="password" id="password" name="password" placeholder="*****" name="password" required>
                                        </label>
                                    </p>
                                    
                                    <p class="content-item">
                                        <label for="confirmpassword"><a class="form-label lbs">Confirm password:</a>
                                            <input type="password" placeholder="*****" id="confirmpassword" name="confirmpassword" required>
                                        </label>
                                    </p>

                                    <p class="content-item">
                                        <label for="fullname"><a class="form-label lbs">Fullname: </a>
                                            <input type="text" placeholder="Enter fullname" id="fullname" name="fullname"  required>
                                        </label>
                                    </p>

                                    <p class="content-item">
                                        <label for="phonenumber"><a class="form-label lbs">Phone number: </a>
                                            <input type="text" placeholder="Enter your phone number" id="phonenumber" name="phonenumber"  required>
                                        </label>
                                    </p>

                                    <p class="content-item">
                                        <label for="email"><a class="form-label lbs">Email: </a>
                                            <input type="text"  placeholder="btmy@loremipsum.com" id="email" name="email" required>
                                        </label>
                                    </p>

                                    <p class="content-item" style="padding-top: 5px;">
                                        <label id="gender"> <a class="form-label lbs">Gender:</a>
                                            <input type= "radio" id="gender" name="gender" value=1><a class="lbs">Male</a>
                                            <input  type= "radio" id="gender" name="gender" value=0><a class="lbs">Female</a>
                                        </label>
                                    </p>

                                    <p class="content-item" style="padding-top: 10px;">
                                        <label for="ngaysinh"> <a class="form-label lbs">Birth of date: </a>
                                            <input type="date" id="ngaysinh" name="ngaysinh" style="border:none" required>
                                        </label>
                                    </p>

                                    <p class="content-item" style="padding-top: 10px;">
                                        <label for="diachi"><a class="form-label lbs">Address: </a>
                                            <input type="text" placeholder="Enter your address" id="diachi" name="diachi"  required>
                                        </label>
                                    </p>
                                    <button type="submit" name="signupp" class="signup" style="margin-top: 10px;">SIGN UP </button>
                                    <button type="reset" class="signup" style="margin-top: 10px;">RESET</a></button>
                                </form>
                                <button onclick="open1()" class="signup" style="margin-top: 5px;">SIGN IN </button>
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
    <script src="./assets/main.js"></script>
    <script src="./sign/signup.js"></script>
    <script src="./introassets/intro.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>