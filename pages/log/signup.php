<style>
.content1 {
  width: 1280px;
  max-width: 100%;
  margin: -50px 0 0 0;
}
@media (max-width: 62em){
    .content1{
        margin: 30px 0 0 0;
    }
}

.shadow-box {
  background: white;
}
.form p {
  padding: 0;
  margin: 0;
}
@media (min-width: 700px) {
  .shadow-box {
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
  }
}

.signup-wrapper .company-details {
  background: url(./pages/log/sign/YA.jpg);
  background-size: cover;
  position: relative;
}
.signup-wrapper .company-details:before {
  content: "";
  position: absolute;
  display: block;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.75) 0%,
    rgba(0, 0, 0, 0) 100%
  );
}

.signup-wrapper .company-details .wrapper-1 {
  position: relative;
  padding-bottom: 10px;
  padding-top: 22px;
}
.signup-wrapper .company-details .logo {
  padding: 0 20px;
  width: 20%;
  margin: 0 auto;
}
.signup-wrapper .company-details .logo .icon-food {
  background-size: contain;
  background-repeat: no-repeat;
  width: 38px;
  height: 38px;
  margin: 0 auto;
}
.signup-wrapper .company-details .title {
  padding: 20px;
  width: 74%;
  margin: 0 auto;
  text-transform: uppercase;
  color: #fff;
  font-weight: 600;
  font-size: 2em;
  text-shadow: 1px 1px #4b4a4a;
  text-align: center;
}
.signup-wrapper .company-details .slogan {
  display: none;
}

.signup-wrapper .signup-form .wrapper-2 {
  padding: 14px 20px;
  margin: 30px 80px;
}
.signup-wrapper .signup-form .form-title {
  font-size: 1.5em;
  color: #007700;
  padding: 5px;
  text-align: center;
}
.signup-wrapper .signup-form .form .content-item {
  text-transform: uppercase;
  color: #a19f9c;
  font-size: 0.7em;
  letter-spacing: 1px;
  margin-top: 5px;
  text-align: center;
}
.signup-wrapper .signup-form .form input[type="text"],
.signup-wrapper .signup-form .form input[type="password"] {
  border: none;
  border-bottom: 1px solid #e4e4e4;
  padding-top: 10px;
  padding-bottom: 10px;
  display: block;

  text-align: center;
  width: 100%;
}
.signup-wrapper .signup-form .signup {
  background-color: #007700;
  border: none;
  color: white;
  padding: 15px 25px;
  font-size: 1em;
  text-transform: capitalize;
  margin-top: 49px;
  border-radius: 5px;
}
.signup-wrapper .signup-form .login {
  color: #007700;
  padding: 20px;
  font-weight: 600;
  text-decoration: none;
  font-size: 0.9em;
  width: 95%;
  margin: 0 auto;
  display: inline-block;
  text-align: center;
}
input::placeholder {
  color: #575757;
}

@media (min-width: 200px) {
  .signup-wrapper .signup-form .wrapper-2 {
    margin: 30px 23px;
  }

  .signup-wrapper .company-details .title {
    width: 90%;
    font-size: 1.5em;
  }
}
@media (min-width: 300px) {
  .signup-wrapper .signup-form .login {
    display: inline-block;
  }
  .signup-wrapper .signup-form .wrapper-2 {
    margin: 30px 60px;
  }

  .signup-wrapper .company-details .title {
    width: 80%;
    font-size: 2em;
  }
}
@media (min-width: 500px) {
  .signup-wrapper .signup-form .login {
    display: inline;
  }
}

@media (min-width: 700px) {
  .signup-wrapper .company-details,
  .signup-wrapper .signup-form {
    width: 50%;
  }
  .signup-wrapper {
    display: flex;
    max-width: 700px;
    margin: 0 auto;
    margin-top: 5%;
  }
  .signup-wrapper .company-details .wrapper-1 {
    padding-bottom: 150px;
    padding-top: 160px;
  }
  .signup-wrapper .company-details .slogan {
    padding: 0 20px;
    width: 70%;
    margin: 0 auto;
    color: #fff;
    font-size: 1.2em;
    text-align: center;
    text-shadow: 1px 1px #4b4a4a;
    display: block;
  }
  .signup-wrapper .company-details .title {
    width: 76%;
  }
  .signup-wrapper .signup-form .wrapper-2 {
    padding: 50px 40px;
    margin: 0;
  }

  .signup-wrapper .signup-form .login {
    display: inline;
  }
  .signup-wrapper .signup-form .form .content-item {
    text-align: initial;
  }
  .signup-wrapper .signup-form .form input[type="text"],
  .signup-wrapper .signup-form .form input[type="password"] {
    text-align: initial;
  }
  .signup-wrapper .signup-form .form-title {
    text-align: initial;
    padding: 0;
  }
}
.lbs{
  font-weight: bolder;
  text-decoration: none;
  color: #4b4a4a;
}

</style>
<?php
  if(isset($_POST['signup'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $confirmpwd = $_POST['confirmpassword'];
      $hoten = $_POST['fullname'];
      $gioitinh = $_POST['gender'];
      $ngaysinh = $_POST['ngaysinh'];
      $mail = $_POST['email'];
      $sdt = $_POST['phonenumber'];
      $dchi = $_POST['diachi'];
      $check1=0;
      $check2=0;
      $check3=0;
      $check4=0;
      $check5=0;
      // Database connection
      $conn = new mysqli('localhost','root','','ct428');
      if($conn->connect_error){
          echo "$conn->connect_error";
          die("Connection Failed : ". $conn->connect_error);
      } else {
          $sql = "SELECT * FROM account WHERE Username='$username'";
          $kq = $conn->query($sql);
          if(mysqli_num_rows($kq)>0){
              $fail1="<h6>Username da ton tai!</h6>";
              $check1 = 1;
          }elseif($password != $confirmpwd){
            $fail2="<h6>Password khong khop!</h6>";
            $check2 = 1;
          } 
          elseif(strlen($password) < 8){
            $fail3="<h6>Password khong hop le!</h6>";
            $check3 = 1;
          }elseif(strlen($sdt) != 10){
            $fail4="<h6>So dien thoai khong hop le!</h6>";
            $check4 = 1;
          }
          else{
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
  }
?>
    <!-- <header>
    </header> -->
    <main>
        <div class="content-wrapper"> 
            <div class="content1">
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
                        <div style="text-align:center;">
                                <a href="/CT428_LTWeb/index.php">
                                    <img src="./img/logo.png" style="width:50px; border-radius: 30px;"></img>
                                </a>
                        </div>
                            <div class="form-title" style="text-align:center;">
                                SIGN UP NOW !
                            </div>
                            <div class="form">
                                <form action="" method="POST">
                                    <p class="content-item">
                                        <label for="username"><a class="form-label lbs">Username: </a>
                                            <input type="text" id="username" name="username"  placeholder="At least 8 chars"  required>
                                            <?php
                                              if(isset($_POST['signup']) && $check1==1){
                                                echo $fail1;
                                              } 
                                            ?>
                                        </label>
                                    </p>

                                    <p class="content-item">
                                        <label for="password"> <a class="form-label lbs">Password:</a>
                                            <input type="password" id="password" name="password" placeholder="*****" name="password" required>
                                            <?php
                                              if(isset($_POST['signup']) && $check3==1){
                                                echo $fail3;
                                              }
                                                
                                            ?>
                                        </label>
                                    </p>
                                    
                                    <p class="content-item">
                                        <label for="confirmpassword"><a class="form-label lbs">Confirm password:</a>
                                            <input type="password" placeholder="*****" id="confirmpassword" name="confirmpassword" required>
                                            <?php
                                              if(isset($_POST['signup']) && $check2==1){
                                                echo $fail2;
                                              }  
                                            ?>
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
                                            <?php
                                              if(isset($_POST['signup']) && $check4==1){
                                                echo $fail4;
                                              }  
                                            ?>
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
                                            <?php
                                            if(isset($_POST['signup']))
                                              $date=strtotime(date('Y-m-d'));
                                              // echo $date;
                                              $date1 = strtotime($ngaysinh);
                                              $kqne =  $date - $date1;
                                              // echo strtotime($ngaysinh);
                                              if($kqne < 473353920){
                                                echo "flase";
                                              }
                                              
                                            ?>
                                        </label>
                                    </p>

                                    <p class="content-item" style="padding-top: 10px;">
                                        <label for="diachi"><a class="form-label lbs">Address: </a>
                                            <input type="text" placeholder="Enter your address" id="diachi" name="diachi"  required>
                                        </label>
                                    </p>
                                    <p class="content-item" style="padding-top: 10px;">
                                        <button type="submit" name="signup" class="signup" style="margin-top: 10px;">SIGN UP </button>
                                        <button type="reset" class="signup" style="margin-top: 10px;">RESET</a></button>
                                    </p>
                                    
                                </form>
                                <p class="content-item" style="margin-top:-40px">
                                  <a href="index.php?quanly=dangnhap"><button type="button" class="signup">SIGN IN</button></a>
                                  <a href="index.php?quanly=datlai" ><button type="button" class="signup">CHANGE</button></a>
                                </p>                              
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
