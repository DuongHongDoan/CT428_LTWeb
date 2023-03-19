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
                            <a class="navbar-brand" href="./index.html">
                              <img src="./img/logo.png" alt="Avatar Logo" class="rounded-pill"> 
                            </a>
                          </div>
                    </div>
                    <div class="col">
                        <section id="overlay-search">
                            <div class="input-group-collap">
                                <i class="close-btn fa-solid fa-xmark"></i>
                                    <form method="POST" action="index.php?quanly=timkiem">
                                <div class="collap mb-3">
                                        <input type="text" name="tukhoa" class="input-collap" placeholder="Search">
                                        <button name="timkiem">
                                            <i class="fas fa-search" ></i>
                                        </button>
                                </div>
                                    </form>
                            </div>   
                        </section>
                        
                            <form method="POST" action="index.php?quanly=timkiem">
                        <div class="input-group mb-3">
                                <input type="text" name="tukhoa" class="form-control" placeholder="Search">
                                <button name="timkiem" value="Tìm kiếm" class="btn-search search-btn" type="submit">
                                    <i class="header__search-btn-icon fas fa-search" ></i>
                                </button>
                        </div>
                            </form>
                    </div>
                    <div class="col-3 icons">
                        <a href="index.php?quanly=giohang">
                            <i class="icon-cart fa-solid fa-cart-shopping"></i>
                        </a>
                        <a href="#">
                            <i class="icon-user fa-regular fa-user ps-2"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>