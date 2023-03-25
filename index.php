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
    <link rel="stylesheet" href="./B2013527_DHD/css/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="./B2013527_DHD/css/fontawesome-free-6.2.1-web/js/all.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/main.css">
</head>
<body id="onTop">
    <!-- overlay -->
    <section id="overlay"></section>

    <?php
        include("admin/config/connect.php");
    // <!-- Phan dau -->
        include("pages/header.php");
    // <!-- Thanh dieu huong (navbar) -->
        include("pages/navbar.php");
    // body
        include("pages/body.php");
    // <!-- Phan chan -->
        include("pages/footer.php");
    ?>
    <!-- Nhung cac script -->
    <script src="./assets/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
</body>
</html>