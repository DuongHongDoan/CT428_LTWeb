<section id="overlay"></section>
    <!-- Phan dau -->
    <header>
        <marquee class="scroll text" bgcolor="#2E8B57" style="color: #fff;" behavior="" direction="">
            Cửa hàng Kpop
        </marquee>
        <!-- logo, search, cart, account -->
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-dark navbar-center">
                    <div class="col-5">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                              <img src="./img/logo.png" alt="Avatar Logo" class="rounded-pill"> 
                            </a>
                          </div>
                    </div>
                    <div class="col"> 
                        <section id="overlay-search">
                            <div class="input-group-collap">
                                <i class="close-btn fa-solid fa-xmark"></i>
                                <div class="collap mb-3">
                                    <input type="text" class="input-collap" placeholder="Search">
                                    <button>
                                        <i class="fas fa-search" ></i>
                                    </button>
                                </div>
                            </div>   
                        </section>
                        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn-search search-btn" type="submit">
                                <i class="header__search-btn-icon fas fa-search" ></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-3 icons">
                        <a href="./cart.php">
                            <i class="icon-cart fa-solid fa-cart-shopping">
                            </i>
                            <?php

                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"#\">$count</span>";
                                }else{
                                    echo "<span id=\"#\">0</span>";
                                 }
                            ?>
                        </a>
                        <a href="#">
                            <i class="icon-user fa-regular fa-user ps-2"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Thanh dieu huong (navbar) -->
        <div style="background-color: #2E8B57;" class="container-fluid navbar-init">
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container">
                    <ul class="navbar-nav navbar-links">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./lienhe.html">Liên hệ</a>
                        </li>
                    </ul>
                    <!-- nut gom menu -->
                    <div class="navbar-icons">
                        <div class="navbar-icon"></div>
                    </div>
                </div>
            </nav>
        </div>
    </header>