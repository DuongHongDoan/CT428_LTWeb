<style>
    .search-mb {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 25%;
    }

    .search-mb input {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        border-color: var(--light-green);
        border: 1px solid rgb(0, 0, 0, 0.3);
        height: 35px;
        padding: 0 8px;
    }

    .search-mb button {
        display: inline-block;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        padding: 0 16px;
        margin: -8px;
        font-size: 1rem;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        background-color: var(--light-blue);
        border: 1rem;
        height: 36px;
    }

    .search-mb button:hover {
        background-color: var(--orange);
        color: var(--white);
        transition: var(--smooth);
    }

    .search-mb button i {
        color: var(--white);
    }

    .icons {
        margin-top: 18px;
        font-size: 20px;
    }

    .search-lg {
        display: none;
    }

    @media (min-width: 36em) {
        .col-12 {
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-8 {
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-4 {
            flex: 0 0 auto;
            width: 16.66666667%;
        }

        .search-mb {
            margin-top: 32px;
        }

        .icons {
            margin-left: 24px;
            margin-top: 24px;
        }

    }

    @media (min-width: 48em) {
        .search-lg {
            display: flex;
            margin-top: 16px;
        }

        .search-lg input {
            margin-top: 60px;
            border-top-right-radius: unset;
            border-bottom-right-radius: unset;
        }

        .search-mb {
            display: none;
        }

        .search-lg button {
            display: block;
            margin-top: 60px;
            width: 50px;
            color: white;
            background-color: var(--light-blue);
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            border: solid 1px rgb(0, 0, 0, 0.1);
        }

        .search-lg button:hover {
            background-color: var(--orange);
            color: var(--white);
            transition: var(--smooth);
        }

        .icons {
            margin-left: 24px;
            margin-top: 20px;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-8 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        .col-4 {
            flex: 0 0 auto;
            width: 25%;
        }

    }
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        z-index: 50;
    }
</style>

<header>
    <marquee class="scroll text" bgcolor="#2E8B57" style="color: #fff;" behavior="" direction="">
        Kpop Store - Mang kpop đến gần bên bạn
    </marquee>
    <!-- logo, search, cart, account -->
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-sm navbar-dark navbar-center">
                <div class="col-12">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="./img/logo.png" alt="Avatar Logo" class="rounded-pill">
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <form method="POST" class="example" action="index.php?quanly=timkiem" style="margin-top:-58px;max-width:300px">
                        <div class="search-mb mb-3">
                            <input type="text" placeholder="Search.." name="tukhoa">
                            <button name="timkiem" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>


                    <form method="POST" action="index.php?quanly=timkiem">
                        <div class="search-lg mb-3">
                            <input type="text" name="tukhoa" class="form-control" placeholder="Search">
                            <button name="timkiem" value="Tìm kiếm" type="submit">
                                <i class=" fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-4 icons">
                    <a href="index.php?quanly=giohang">
                        <i class="icon-cart fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="#">
                        <div class="dropdown">
                            <span><i class="icon-user fa-regular fa-user ps-2"></i></span>
                            <div class="dropdown-content">
                                <p><a href="index.php?quanly=dangky">Sign Up</a></p>
                                <p><a href="index.php?quanly=dangnhap">Sign In</a></p>
                                <p><a href="index.php?quanly=datlai">Re Pass</a></p>
                            </div>
                        </div>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>