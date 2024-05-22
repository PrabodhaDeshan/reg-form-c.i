<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
    </div>
</div>
<!-- Header Area-->
<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="home.html"><img src="<?= base_url('public/app/img/core-img/logo-small.png') ?>" alt=""></a></div>
        <!-- Search Form-->
        <div class="top-search-form">
            <form action="" method="">
                <input class="form-control" type="search" placeholder="search">
                <button type="submit"><i class="lni lni-search"></i></button>
            </form>
        </div>
        <!-- Add to Cart Icon -->
        <button type="button" class="btn btn-sm btn-success" style="padding: 5px 10px; background-color: #28a745; border: none; border-radius: 5px;" onclick="addToCart()"><i class="lni lni-cart"></i></button>
        </button>

        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler d-flex flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
    </div>
</div>
<!-- Sidenav Black Overlay-->
<div class="sidenav-black-overlay"></div>
<!-- Side Nav Wrapper-->
<div class="suha-sidenav-wrapper" id="sidenavWrapper">
    <!-- Sidenav Profile-->
    <div class="sidenav-profile">
        <div class="user-profile"><img src="<?= base_url('public/app/img/bg-img/9.jpg') ?>" alt=""></div>
        <div class="user-info">
            <h6 class="user-name mb-0">Suha Sarah</h6>
            <p class="available-balance">Credit <span>$<span class="counter">461</span></span></p>
        </div>
    </div>
    <!-- Sidenav Nav-->
    <ul class="sidenav-nav ps-0">
        <li><a href="<?= base_url('login') ?>"><i class="lni lni-power-switch"></i>Login</a></li>
    </ul>
    <!-- Go Back Button-->
    <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
</div>