<style>

    

#main{
    
}

#concent {

}

.btn-contact{
    color: #fff;
    background-color: #2E8B57;
    text-decoration: none;
    padding: 11px 16px;
    display: inline-block;
    margin-top: 18px;
    border: none;
    text-align: center;
    appearance: none;
    -webkit-appearance: none ;
    /* text-align: center; */
    border-radius: 5px;
}

.btn-contact:hover{
    cursor: pointer;
    color: orange;
    background-color:#2E8B57;
}

.pull-right{
    float: right;
}

.mt-8 {
    margin-top: 8px !important;
}

.mt-16 {
    margin-top: 8px !important;
}

.row {
    margin-left: -8px;
    margin-right: -8px;
}

.row ::after{
    content: "";
    /* display: block; */
    clear: both;
}

#content .content-section {
    width: 800px;
    max-width: 100%;
    padding: 64px 0 112px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 16px;
    padding-right: 16px;
}

#content .section-heading{
    text-align: center;
    font-size: 30px;
    letter-spacing: 4px;
}

/* contact */
.contact-content{
    margin-top:  48px;
}

.contact-info {
    font-size: 18px;
    line-height: 1.5;
}

.contact-info i {
    width: 30px;
    display: inline-block;
}

.contact-form{
    font-size: 15px;
}

.contact-form .form-control {
    padding: 10px;
    border: 1px solid #ccc;
    width: 100%;
}

.col {
    float:left;
    padding-left: 8px;
    padding-right: 8px;
}

.col-full {
    width: 100%;
}

.col-half {
    width: 50%;
}

.form-message {
    color: red;
}

</style>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/main.css">
</head>



<body id="onTop">
    <!-- overlay -->
    <?php
    require_once('./pages/header.php');
    require_once('./pages/navbar.php');
    ?>
    <section id="overlay"></section>
  <!-- contact -->
  <div id="main">
        <div id="content">

            <div id="contact" class="content-section">
                <h2 class="section-heading">CONTACT US</h2>
                <p class="section-sub-headig"></p>

                <div class="row contact-content">
                    <div class="col col-half s-col-full contact-info">
                        <p><i class="fa-solid fa-location-dot"></i>Can Tho, VN</p>
                        <p><i class="fa-solid fa-phone"></i>Phone: +01 234 567 88</p>
                        <p><i class="fa-solid fa-envelope"></i>Email: mail@mail.com</p>
                    </div>
                    <div class="col col-half s-col-full contact-form">
                        <form action="" class="myForm text-center" id="form-1" method="POST">
                            <div class="row">
                                <div class="form-group col col-half s-col-full">
                                    <label for="username" class="form-label"></label>
                                    <input id="username" name="username" type="text" placeholder="Username"
                                        class="form-control"> <br>
                                    <span class="form-message"></span>
                                </div>

                                <div class="form-group col col-half s-col-full">
                                    <label for="email" class="form-label"></label>
                                    <input id="email" name="email" type="Email" placeholder="Email address"
                                        class="form-control"> <br>
                                    <span class="form-message"></span>
                                </div>
                            </div>

                            <!-- <div class="row mt-8">
                            <div class="col col-full">
                                <input type="text" name="message" placeholder="Message" required id="" class="form-control">
                            </div>
                        </div> -->

                            <div class="form-groupcol col-full">
                                <label for="message" class="form-label"></label>
                                <input id="message" name="message" type="text" placeholder="Message"
                                    class="form-control"> <br>
                                <span class="form-message"></span>
                            </div>

                            <button class="form-submit btn-contact tn pull-right mt-16 s-full-width">SEND</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <?php
    require_once('./pages/footer.php');
    ?>
    <!-- Nhung cac script -->
    <script src="./assets/main.js"></script>
    <script src="./assets/validator.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

    
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true
        });
    </script>


<script>
        Validator({
            form: '#form-1',
            ErrorSelector: '.form-message',
            rules: [
                Validator.isRequired('#username'),
                Validator.isEmail('#email'),
                Validator.isRequired('#message'),
            ],
            onSubmit: function (data) {
                console.log(data);
            }
        });
    </script>
</body>
</html>