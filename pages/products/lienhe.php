<head>
    <title>Liên hệ</title>
</head>
<style>
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
    color: var(--orange);
    transition: var(--smooth);
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
            <div class="content-section">
                <h2 class="section-heading">CONTACT US</h2>

                <div class="row contact-content">
                    <div class="col col-half s-col-full contact-info">
                        <p><i class="fa-solid fa-location-dot"></i> CAN THO, VN</p>
                        <p><i class="fa-solid fa-phone"></i> Phone: <a href="tel:+00 151515"> +01 234 567 88</a></p>
                        <p><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:mail@mail.com">mail@mail.com</a></p>
                    </div>

                    <div class="col col-half s-col-full contact-form">
                        <form action="./pages/products/contact.php" class="myForm text-center" id="form-1" method="POST">
                            <div class="row">
                                <div class="form-group col col-half s-col-full">
                                    <!-- <label for="username" class="form-label"></label> -->
                                    <input id="username" name="username" type="text" placeholder="Username"
                                        class="form-control"> <br>
                                    <span class="form-message"></span>
                                </div>

                                <div class="form-group col col-half s-col-full">
                                    <!-- <label for="email" class="form-label"></label> -->
                                    <input id="email" name="email" type="Email" placeholder="Email address"
                                        class="form-control"> <br>
                                    <span class="form-message"></span>
                                </div>
                            </div>

                            <div class="row mt-8">
                                <div class="form-groupcol col-full">
                                    <!-- <label for="message" class="form-label"></label> -->
                                    <input id="message" name="message" type="text" placeholder="Message"
                                        class="form-control"> <br>
                                    <span class="form-message"></span>
                                </div>

                            </div>

                            <button class="form-submit btn-contact tn pull-right mt-16 s-full-width" name="send">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nhung cac script -->
    <script src="./assets/main.js"></script>
    <script src="./assets/validator.js"></script>
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