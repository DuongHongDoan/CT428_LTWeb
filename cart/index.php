<?php

    //start session
    session_start();

    require_once("./php/CreateDb.php");
    require_once("./php/component.php");

    // create instance of Createbd class

    $database  = new CreateDB("Productdb", "Producttb");


    if(isset($_POST['add'])) {
        if(isset($_SESSION['cart'])){
    
            $item_array_id = array_column($_SESSION['cart'], "product_id");
            // print_r($item_array_id);
    
            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Do tình hình hải quan... Mỗi khách hàng chỉ được phép mua 1 sản phẩm mỗi loại, mọi người thông cảm giúp shop nha :3')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );

                $_SESSION['cart'][$count] = $item_array;
            }
        }else{
            $item_array = array(
                'product_id' => $_POST['product_id']
            );
            //create new 
            $_SESSION['cart'][0] = $item_array;
            // print_r($_SESSION['cart']);
        }
    
    }
    
?>


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./asset/main.css">
    <title>Trang chủ</title>
</head>
<body>
<!-- Phan than -->
<?php
require_once('./php/header.php');
?>

    <!-- Phan category and slide chuyen dong -->
    <div class="container">
        <div class="row overview">
            <div class="col-lg-3">
                <div class="category">
                    <h4 class="category-heading"><i class="category-heading-icon fa-solid fa-list"></i>Danh mục</h4>
                    <ul class="category-list">
                        <li class="category-item">
                            <a href="./sale.html" class="category-item-link">Khuyến mãi</a>
                        </li>
                        <li class="category-item">
                            <a href="./deco.html" class="category-item-link">Deco</a>
                        </li>
                        <li class="category-item">
                            <a href="./album.html" class="category-item-link">Album</a>
                        </li>
                        <li class="category-item">
                            <a href="./bogoc.html" class="category-item-link">Card bo góc</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/RedVelvet_Slide.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/NCT.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/SEVENTEEN_SLIDE.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Phan loai hang va mat hang -->
    <div class="container-fluid products">
        <div class="container container-cart">
            <!-- Sale -->
            <div id="sale" class="container product-items">
                <!-- ten tieu de -->
                <div class="title">
                    <h2>Khuyến mãi</h2>
                </div>
                <!-- carousel -->
                <div class="owl-carousel owl-theme">
                <?php
                    $result = $database ->getData();
                    while($row = mysqli_fetch_assoc($result)) {
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);

                }
                ?>

                </div>
                <div class="product-link">
                    <a href="./sale.html" class="xemthem">
                        Xem thêm <i class='fas fa-angle-right'></i>
                    </a>
                </div>
            </div>
            <div>
                <!-- Product 1: Deco -->
                <div id="deco" class="container product-items">
                    <!-- ten tieu de -->
                    <div class="title">
                        <h2>Deco</h2>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                     


                    </div>
                    <div class="product-link">
                        <a href="./deco.html" class="xemthem">
                            Xem thêm <i class='fas fa-angle-right'></i>
                        </a>
                    </div>
                </div> 

                
                <!-- Product 2: Album -->
                <div id="album" class="container product-items">
                    <!-- ten tieu de -->
                    <div class="title">
                        <h2>Album</h2>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                       


                    </div>
                    <div class="product-link">
                        <a href="./album.html" class="xemthem">
                            Xem thêm <i class='fas fa-angle-right'></i>
                        </a>
                    </div>
                </div>


                <!-- Product 3: Card bo goc -->
                <div id="card" class="container product-items">
                    <!-- ten tieu de -->
                    <div class="title">
                        <h2>Card bo góc</h2>
                    </div>
                    <!-- carousel -->
                    <div class="owl-carousel owl-theme">
                       


                    </div>
                    <div class="product-link">
                        <a href="./bogoc.html" class="xemthem">
                            Xem thêm <i class='fas fa-angle-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Phan chan -->


<!-- Thanh toan, van chuyen -->
    <script src="./assets/main.js"></script>
    <script src="./assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/jquery-3.6.0.min.js"></script>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>