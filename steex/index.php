<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:./login.php");
} else {
    echo "yes";
}
?>
<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">
    <head>
        <meta charset="utf-8">
        <title>Dashboard | Steex - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <link rel="shortcut icon" href="./assets/images/favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="./assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
        <script src="./assets/js/layout.js"></script>
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/css/custom.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="./assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="./assets/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="./assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="./assets/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Category</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="./Category/Addcategory.php" class="nav-link" data-key="t-analytics"> View Category </a>
                            </li>
                            
                           
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="./assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="./assets/images/logo-dark.png" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="./assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="./assets/images/logo-light.png" alt="" height="22">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                            <form class="app-search d-none d-md-inline-flex">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                        </div>
                
                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>
                
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>
                
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>
                
                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="./assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-2xs mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="./assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-2xs mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="./assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-2xs mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                
                                    <div class="text-center pt-3 pb-1">
                                        <a href="#" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-grid fs-2xl'></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fw-semibold fs-base"> Browse by Apps </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="btn btn-sm btn-subtle-info"> View All Apps
                                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="./assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="./assets/images/brands/bitbucket.png" alt="bitbucket">
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="./assets/images/brands/dribbble.png" alt="dribbble">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="./assets/images/brands/dropbox.png" alt="dropbox">
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="./assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                    <span>Mail Chimp</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#!">
                                                    <img src="./assets/images/brands/slack.png" alt="slack">
                                                    <span>Slack</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-1 topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img id="header-lang-img" src="./assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                        <img src="./assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">English</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                        <img src="./assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Española</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                        <img src="./assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                        <img src="./assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">Italiana</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                        <img src="./assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">русский</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                        <img src="./assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">中国人</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                        <img src="./assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">français</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                                        <img src="./assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                                        <span class="align-middle">عربي</span>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bag fs-2xl'></i>
                                    <span class="position-absolute topbar-badge cartitem-badge fs-3xs translate-middle badge rounded-pill bg-info">5</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 product-list" aria-labelledby="page-header-cart-dropdown">
                                    <div class="p-3 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-lg fw-semibold"> My Cart <span class="badge bg-secondary fs-sm cartitem-badge ms-1">7</span></h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 300px;">
                                        <div class="p-3">
                                            <div class="text-center empty-cart" id="empty-cart">
                                                <div class="avatar-md mx-auto my-3">
                                                    <div class="avatar-title bg-info-subtle text-info fs-2 rounded-circle">
                                                        <i class='bx bx-cart'></i>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                                <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                            </div>
                                
                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="./assets/images/products/32/img-1.png" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Blive Printed Men Round Neck</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">327.49</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">654.98</span></h5>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="./assets/images/products/32/img-5.png" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Sportwear</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Willage Volleyball Ball</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">49.06</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">147.18</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="./assets/images/products/32/img-10.png" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Cotton collar tshirts for men</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">53.33</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">159.99</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="./assets/images/products/32/img-11.png" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Jeans blue men boxer</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">164.37</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">164.37</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-block dropdown-item product text-wrap p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-sm me-3 flex-shrink-0">
                                                        <div class="avatar-title bg-light rounded">
                                                            <img src="./assets/images/products/32/img-8.png" class="avatar-xs" alt="user-pic">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-1 fs-sm text-muted">Fashion</p>
                                                        <h6 class="mt-0 mb-3 fs-md">
                                                            <a href="#!" class="text-reset">Full Sleeve Solid Men Sweatshirt</a>
                                                        </h6>
                                                        <div class="text-muted fw-medium d-none">$<span class="product-price">180.00</span></div>
                                                        <div class="input-step">
                                                            <button type="button" class="minus">–</button>
                                                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                                            <button type="button" class="plus">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 d-flex flex-column justify-content-between align-items-end">
                                                        <button type="button" class="btn btn-icon btn-sm btn-ghost-primary remove-cart-btn" data-bs-toggle="modal" data-bs-target="#removeCartModal"><i class="ri-close-fill fs-lg"></i></button>
                                                        <h5 class="mb-0">$ <span class="product-line-price">180.00</span></h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="count-table">
                                                <table class="table table-borderless mb-0  fw-semibold">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sub Total :</td>
                                                            <td class="text-end cart-subtotal">$1306.52</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Discount <span class="text-muted">(Steex15)</span>:</td>
                                                            <td class="text-end cart-discount">- $195.98</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge :</td>
                                                            <td class="text-end cart-shipping">$65.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Tax (12.5%) : </td>
                                                            <td class="text-end cart-tax">$163.31</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                        <div class="d-flex justify-content-between align-items-center pb-3">
                                            <h5 class="m-0 text-muted">Total:</h5>
                                            <div class="px-2">
                                                <h5 class="m-0 cart-total">$1338.86</h5>
                                            </div>
                                        </div>

                                        <a href="apps-ecommerce-checkout.html" class="btn btn-info text-center w-100">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                    <i class='bi bi-arrows-fullscreen fs-lg'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-3xl"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                                </div>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bi bi-bell fs-2xl'></i>
                                    <span class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head rounded-top">
                                        <div class="p-3 border-bottom border-bottom-dashed">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger fs-sm notification-badge"> 4</span></h6>
                                                    <p class="fs-md text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                                </div>
                                                <div class="col-auto dropdown">
                                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                        <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">New</h6>
                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                Optimization <span class="text-secondary">reward</span> is ready!
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                            <label class="form-check-label" for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="./assets/images/users/32/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                                        </a>
                                                        <div class="fs-sm text-muted">
                                                            <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                        </div>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                            <label class="form-check-label" for="all-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                            <label class="form-check-label" for="all-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">Read Before</h6>

                                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">

                                                    <div class="position-relative me-3 flex-shrink-0">
                                                        <img src="./assets/images/users/32/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                        <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </div>

                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-md fw-semibold">Maureen Gibson</h6>
                                                        </a>
                                                        <div class="fs-sm text-muted">
                                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                                        </div>
                                                        <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-base">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                            <label class="form-check-label" for="all-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions" id="notification-actions">
                                            <div class="d-flex text-muted justify-content-center align-items-center">
                                                Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="./assets/images/users/32/avatar-1.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Richard Marshall</span>
                                            <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome Richard!</h6>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                    <a class="dropdown-item" href="apps-tickets-overview.html"><i class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Help</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                                    <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="auth-lockscreen.html"><i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                    <a class="dropdown-item" href="../logout.php"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-4"></i>
                                </div>
                                <div class="mt-4 fs-base">
                                    <h4 class="mb-1">Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- removeCartModal -->
            <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-cartmodal"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-5"></i>
                                </div>
                                <div class="mt-4">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card card-height-100 border-0 overflow-hidden">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                                                    <div class="card-body">
                                                        <div class="dropdown float-end">
                                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                                <a class="dropdown-item" href="#">Last Month</a>
                                                                <a class="dropdown-item" href="#">Current Year</a>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-3">
                                                                <i class="ph-wallet"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Revenue</p>
                                                            <h4 class="fw-semibold mb-3">$<span class="counter-value" data-target="750.36">0</span>M </h4>
                                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                                <h5 class="text-success fs-xs mb-0">
                                                                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-bottom rounded-0 mb-0">
                                                    <div class="card-body">
                                                        <div class="dropdown float-end">
                                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                                <a class="dropdown-item" href="#">Last Month</a>
                                                                <a class="dropdown-item" href="#">Current Year</a>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-dark-subtle text-dark rounded-circle fs-3">
                                                                <i class="ph-bag"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Orders</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="684">0</span></h4>
                                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                                <h5 class="text-success fs-xs mb-0">
                                                                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +8.13 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-end-md rounded-0 mb-0">
                                                    <div class="card-body">
                                                        <div class="dropdown float-end">
                                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                                <a class="dropdown-item" href="#">Last Month</a>
                                                                <a class="dropdown-item" href="#">Current Year</a>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-light text-body rounded-circle fs-3">
                                                                <i class="ph-eye"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Product Views</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="113870">0</span></h4>
                                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                                <h5 class="text-danger fs-xs mb-0">
                                                                    <i class="ri-arrow-right-down-line fs-sm align-middle"></i> +2.01 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->

                                            <div class="col-md-6">
                                                <!-- card -->
                                                <div class="card shadow-none border-top border-top-md-0 rounded-0 mb-0">
                                                    <div class="card-body">
                                                        <div class="dropdown float-end">
                                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Today</a>
                                                                <a class="dropdown-item" href="#">Last Week</a>
                                                                <a class="dropdown-item" href="#">Last Month</a>
                                                                <a class="dropdown-item" href="#">Current Year</a>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-3">
                                                                <i class="ph-users-three"></i>
                                                            </span>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Customers</p>
                                                            <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="2500">0</span>k </h4>
                                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                                <h5 class="text-success fs-xs mb-0">
                                                                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +10.42 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                                        </div> <!-- end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-xl-9">
                                            <div class="card-header border-0 align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                                <div>
                                                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-subtle-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-subtle-primary btn-sm">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div><!-- end card header -->
                                            <div class="card-body ps-0">
                                                <div class="w-100">
                                                    <div id="market-overview" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card-body border-start-xl border-top border-top-xl-0 border-2 h-100">
                                                <div>
                                                    <p class="text-muted mb-2">Budget (USD)</p>
                                                    <h4>$750.36M <small class="text-success fs-sm fw-normal"><i class="ph-arrow-up align-baseline"></i> 2.17%</small></h4>
                                                    <p class="text-muted text-truncate">Budget in than last years</p>
                                                    <div class="mx-3">
                                                        <div id="mini-chart-6" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                                    </div>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-2">Payouts (USD)</p>
                                                    <h4>$7,45,123 <small class="text-danger fs-sm fw-normal"><i class="ph-arrow-down align-baseline"></i> -1.36%</small></h4>
                                                    <p class="text-muted text-truncate">Payouts in than last years</p>
                                                    <div class="mx-3">
                                                        <div id="mini-chart-7" data-colors='["--tb-info"]' class="apex-charts" dir="ltr"></div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addAmount">Add Amount</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <!-- card -->
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Sales by Countries</h4>
                                        <div class="flex-shrink-0">
                                            <button type="button" class="btn btn-subtle-primary btn-sm">
                                                Export Report
                                            </button>
                                        </div>
                                    </div><!-- end card header -->

                                    <!-- card body -->
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 340px"></div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-4">
                                                    <h6 class="text-muted mb-3 fw-medium fs-xs text-uppercase">Compared to last month</h6>
                                                    <h3><span class="counter-value" data-target="53736"></span> <small class="text-muted fw-normal fs-sm">Sales</small></h3>
                                                </div>
                                                <div>
                                                    <ul class="list-unstyled vstack gap-2">
                                                        <li class="p-2 rounded">
                                                            <i class="ri-checkbox-blank-circle-fill text-primary align-bottom me-1"></i> United States <span class="float-end">15,364</span>
                                                        </li>
                                                        <li class="bg-light-subtle p-2 rounded">
                                                            <i class="ri-checkbox-blank-circle-fill text-secondary align-bottom me-1"></i> Greenland <span class="float-end">12,387</span>
                                                        </li>
                                                        <li class="p-2 rounded">
                                                            <i class="ri-checkbox-blank-circle-fill text-info align-bottom me-1"></i> Serbia <span class="float-end">9,123</span>
                                                        </li>
                                                        <li class="bg-light-subtle p-2 rounded">
                                                            <i class="ri-checkbox-blank-circle-fill text-success align-bottom me-1"></i> Russia <span class="float-end">7,108</span>
                                                        </li>
                                                        <li class="p-2 rounded">
                                                            <i class="ri-checkbox-blank-circle-fill text-danger align-bottom me-1"></i> Brazil <span class="float-end">6,731</span>
                                                        </li>
                                                        <li class="bg-light-subtle p-2 rounded">
                                                            <i class="ri-checkbox-blank-circle-fill text-warning align-bottom me-1"></i> Sydney <span class="float-end">3,023</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-height-100">
                                    <div class="card-header d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Traffic Source</h4>
                                        <div class="dropdown card-header-dropdown float-end">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ph-dots-three-outline-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">Current Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="column_chart" data-colors='["--tb-primary", "--tb-light"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-height-100">
                                    <div class="card-header d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Sales</h4>
                                        <a href="#!" class="text-muted">View All <i class="ph-caret-right align-middle"></i></a>
                                    </div>
                                    <div class="card-body px-0">
                                        <div data-simplebar class="px-3" style="max-height: 360px;">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-2.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Bethany Nienow</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$630.73</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-7.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Sonia Conn</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$1,452.64</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-4.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Talon Bradtke</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$478.87</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-5.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Tyrell Kerluke</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$82.14</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-6.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Ross Zieme</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$79.00</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-1.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Hollis Spencer</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$849.05</h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-1">
                                                                <div class="flex-shrink-0">
                                                                    <img src="./assets/images/users/48/avatar-8.jpg" alt="" class="avatar-sm rounded-circle p-1">
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h6 class="fs-md mb-1">Cordia Grady</h6>
                                                                    <p class="text-muted text-truncate mb-0">03 Feb, 2023</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <h6 class="fs-md">$254.32</h6>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card" id="contactList">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Latest Orders</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown sortble-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                    </span><span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <button class="dropdown-item sort" data-sort="order_date">Order Date</button>
                                                    <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                                                    <button class="dropdown-item sort" data-sort="amount">Amount</button>
                                                    <button class="dropdown-item sort" data-sort="status">Status</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="order_date">Order Date</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="order_id">Order ID</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="shop">Shop</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="customer">Customers</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="products">Products</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
                                                    <tr>
                                                        <td class="order_date">
                                                            15 Feb, 2023
                                                        </td>
                                                        <td class="order_id">
                                                            <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250011</a>
                                                        </td>
                                                        <td class="shop">
                                                            <img src="./assets/images/companies/img-7.png" alt="" class="avatar-xxs rounded-circle">
                                                        </td>
                                                        <td class="customer">
                                                            Alex Smith
                                                        </td>
                                                        <td class="products">Clothes</td>
                                                        <td class="amount">
                                                            <span class="fw-medium">$109.00</span>
                                                        </td>
                                                        <td class="status">
                                                            <span class="badge bg-secondary-subtle text-secondary">New</span>
                                                        </td>
                                                        <td class="rating">
                                                            <h5 class="fs-md fw-medium mb-0">-</h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="order_date">
                                                            14 Feb, 2023
                                                        </td>
                                                        <td class="order_id">
                                                            <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250010</a>
                                                        </td>
                                                        <td class="shop">
                                                            <img src="./assets/images/companies/img-1.png" alt="" class="avatar-xxs rounded-circle">
                                                        </td>
                                                        <td class="customer">
                                                            Jansh Brown
                                                        </td>
                                                        <td class="products">Kitchen Storage</td>
                                                        <td class="amount">
                                                            <span class="fw-medium">$149.00</span>
                                                        </td>
                                                        <td class="status">
                                                            <span class="badge bg-warning-subtle text-warning">Pending</span>
                                                        </td>
                                                        <td class="rating">
                                                            <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.5</h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="order_date">
                                                            30 Jan, 2023
                                                        </td>
                                                        <td class="order_id">
                                                            <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250009</a>
                                                        </td>
                                                        <td class="shop">
                                                            <img src="./assets/images/companies/img-2.png" alt="" class="avatar-xxs rounded-circle">
                                                        </td>
                                                        <td class="customer">
                                                            Ayaan Bowen
                                                        </td>
                                                        <td class="products">Bike Accessories</td>
                                                        <td class="amount">
                                                            <span class="fw-medium">$215.00</span>
                                                        </td>
                                                        <td class="status">
                                                            <span class="badge bg-danger-subtle text-danger">Out of Delivered</span>
                                                        </td>
                                                        <td class="rating">
                                                            <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.9</h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="order_date">
                                                            25 Jan, 2023
                                                        </td>
                                                        <td class="order_id">
                                                            <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250008</a>
                                                        </td>
                                                        <td class="shop">
                                                            <img src="./assets/images/companies/img-3.png" alt="" class="avatar-xxs rounded-circle">
                                                        </td>
                                                        <td class="customer">
                                                            Prezy Mark
                                                        </td>
                                                        <td class="products">Furniture</td>
                                                        <td class="amount">
                                                            <span class="fw-medium">$199.00</span>
                                                        </td>
                                                        <td class="status">
                                                            <span class="badge bg-primary-subtle text-primary">Shipping</span>
                                                        </td>
                                                        <td class="rating">
                                                            <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.3</h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="order_date">
                                                            19 Jan, 2023
                                                        </td>
                                                        <td class="order_id">
                                                            <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250007</a>
                                                        </td>
                                                        <td class="shop">
                                                            <img src="./assets/images/companies/img-4.png" alt="" class="avatar-xxs rounded-circle">
                                                        </td>
                                                        <td class="customer">
                                                            Vihan Hudda
                                                        </td>
                                                        <td class="products">Bags and Wallets</td>
                                                        <td class="amount">
                                                            <span class="fw-medium">$330.00</span>
                                                        </td>
                                                        <td class="status">
                                                            <span class="badge bg-success-subtle text-success">Delivered</span>
                                                        </td>
                                                        <td class="rating">
                                                            <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.7</h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td class="order_date">
                                                            16 Jan, 2023
                                                        </td>
                                                        <td class="order_id">
                                                            <a href="apps-ecommerce-order-overview.html" class="fw-medium link-primary">#TBS250006</a>
                                                        </td>
                                                        <td class="shop">
                                                            <img src="./assets/images/companies/img-5.png" alt="" class="avatar-xxs rounded-circle">
                                                        </td>
                                                        <td class="customer">
                                                            Vihan Hudda
                                                        </td>
                                                        <td class="products">Bags and Wallets</td>
                                                        <td class="amount">
                                                            <span class="fw-medium">$745.11</span>
                                                        </td>
                                                        <td class="status">
                                                            <span class="badge bg-warning-subtle text-warning">Pending</span>
                                                        </td>
                                                        <td class="rating">
                                                            <h5 class="fs-md fw-medium mb-0"><i class="ph-star align-baseline text-warning"></i> 4.6</h5>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any transactions for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h4 class="card-title mb-0 flex-grow-1">Popular Products</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase">Sort by:
                                                    </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Yesterday</a>
                                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                                    <a class="dropdown-item" href="#">This Month</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <div data-simplebar class="px-3" style="max-height: 333px;">
                                            <div class="vstack gap-2">
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="./assets/images/products/32/img-1.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 487
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 936
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$15.99</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="./assets/images/products/32/img-2.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Unique Men's Wrist Watch</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 452
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 1420
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$84.99</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="./assets/images/products/32/img-3.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Twiala Floral Dress</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 562
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 1348
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$149.99</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="./assets/images/products/32/img-4.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Tokyo Fancy Bomber Jacket</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 644
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 1540
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$245.00</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="./assets/images/products/32/img-5.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Aster Dress 2XL / Royal Blue</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 841
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 985
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$74.63</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-2 border border-dashed">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <div class="avatar-title bg-light rounded">
                                                                <img src="./assets/images/products/32/img-6.png" alt="" class="avatar-xs">
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!">
                                                                <h6 class="fs-md mb-2">Craft Women Black Sling Bag</h6>
                                                            </a>
                                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                                <li>
                                                                    <i class="ph-star align-baseline"></i> 763
                                                                </li>
                                                                <li>
                                                                    <i class="ph-shopping-cart align-baseline"></i> 763
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-end">
                                                            <h5 class="fs-md text-primary mb-0">$245.74</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <button class="btn btn-secondary btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#productModal"><i class="ph-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">Orders Status</h5>
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ph-dots-three-outline-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 pb-1 text-center">
                                            <h6 class="mb-0">01 Jan, 2022 - 01 Jan, 2023</h6>
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">New</p>
                                                    <h6 class="mb-0">307</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 50%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Pending</p>
                                                    <h6 class="mb-0">177</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 37%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Rejected</p>
                                                    <h6 class="mb-0">39</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 12%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Returns</p>
                                                    <h6 class="mb-0">17</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger bg-opacity-75" style="width: 3%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Dispatched</p>
                                                    <h6 class="mb-0">661</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 57%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Delivered</p>
                                                    <h6 class="mb-0">1320</h6>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 86%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="hstack gap-2">
                                                    <p class="mb-0 flex-grow-1">Cancelled</p>
                                                    <h6 class="mb-0">74</h6>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-8">
                                                <div class="progress animated-progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 13%"></div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-4 col-lg-6">
                                <div class="card card-height-100">
                                    <div class="card-header d-flex">
                                        <h5 class="card-title flex-grow-1 mb-0">Recent Activity</h5>
                                        <div class="flex-shrink-0">
                                            <a href="#!" class="btn btn-subtle-info btn-sm">View More <i class="ph-caret-right align-middle"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <div data-simplebar class="px-3" style="max-height: 258px;">
                                            <div class="acitivity-timeline acitivity-main">
                                                <div class="acitivity-item d-flex">
                                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                        <div class="avatar-title bg-success-subtle text-success rounded-circle">
                                                            <i class="ph-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Purchased by James Price</h6>
                                                        <p class="text-muted mb-2">Product noise evolve smartwatch </p>
                                                        <small class="mb-0 text-muted">05:57 AM Today</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="./assets/images/users/32/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                                        <p class="text-muted mb-2">Allow users to like products in your WooCommerce store.</p>
                                                        <small class="mb-0 text-muted">25 Dec, 2022</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div class="avatar-title rounded-circle bg-secondary-subtle text-secondary">
                                                                <i class="mdi mdi-sale fs-14"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Today offers by <a href="apps-ecommerce-seller-details.html" class="link-secondary">Digitech Galaxy</a></h6>
                                                        <p class="text-muted mb-2">Offer is valid on orders of $230 Or above for selected products only.</p>
                                                        <small class="mb-0 text-muted">12 Dec, 2022</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div class="avatar-title rounded-circle bg-warning-subtle text-warning">
                                                                <i class="ri-bookmark-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Favoried Product</h6>
                                                        <p class="text-muted mb-2">Esther James have favorited product.</p>
                                                        <small class="mb-0 text-muted">25 Nov, 2022</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item py-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div class="avatar-title rounded-circle bg-secondary-subtle text-secondary">
                                                                <i class="mdi mdi-sale fs-14"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                                        <p class="text-muted mb-2">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                        <small class="mb-0 text-muted">22 Oct, 2022</small>
                                                    </div>
                                                </div>
                                                <div class="acitivity-item d-flex">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs acitivity-avatar">
                                                            <div class="avatar-title rounded-circle bg-info-subtle text-info">
                                                                <i class="ri-line-chart-line"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                        <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a></p>
                                                        <small class="mb-0 text-muted">15 Oct, 2022</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-xl-4 col-lg-6">
                                <div class="card card-height-100">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title flex-grow-1 mb-0">Insight</h5>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">This Month<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">This Month</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="vstack gap-2">
                                            <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                                <i class="bi bi-check2-square text-primary"></i>
                                                <h6 class="mb-0">The recognition that one has a mental illness</h6>
                                            </div>
                                            <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                                <i class="bi bi-check2-square text-primary"></i>
                                                <h6 class="mb-0">Review market characteristics and trends</h6>
                                            </div>
                                            <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                                <i class="bi bi-check2-square text-primary"></i>
                                                <h6 class="mb-0">Digital analytics data including site analytics</h6>
                                            </div>
                                            <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                                <i class="bi bi-check2-square text-primary"></i>
                                                <h6 class="mb-0">Check uikings theme and give customer support</h6>
                                            </div>
                                            <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                                <i class="bi bi-check2-square text-primary"></i>
                                                <h6 class="mb-0">Success stories and case studies</h6>
                                            </div>
                                            <div class="border py-2 px-3 w-100 rounded d-flex align-items-center gap-2">
                                                <i class="bi bi-check2-square text-primary"></i>
                                                <h6 class="mb-0">Preferences & purchase activity</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Steex.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Modal -->
        <div class="modal fade" id="addAmount" tabindex="-1" aria-labelledby="addAmountLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="addAmountLabel">Add Amount</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="#!">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div>
                                        <label for="AmountInput" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="AmountInput" placeholder="$000.00">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Select Method</label>
                                    <div class="row g-3">
                                        <div class="col-lg-4">
                                            <label class="border rounded w-100 form-label p-2">
                                                <input class="form-check-input me-1" name="exampleRadios" type="radio" value="" checked>
                                                Visa
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="border rounded w-100 form-label p-2">
                                                <input class="form-check-input me-1" name="exampleRadios" type="radio" value="">
                                                Mastercard
                                            </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="border rounded w-100 form-label p-2">
                                                <input class="form-check-input me-1" name="exampleRadios" type="radio" value="">
                                                Credit Card
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="cardNumber" class="form-label">Card Number</label>
                                        <input type="number" class="form-control" id="cardNumber" placeholder="xxxx xxxx xxxx xxxx">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        <label for="month" class="form-label">Expiry Date</label>
                                        <div class="row g-3">
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="month" placeholder="MM">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="years" placeholder="YYYY">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <label for="cvv/cvc" class="form-label">CVV/CVC</label>
                                        <input type="number" class="form-control" id="cvv/cvc" placeholder="***">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label for="cardHoldersName" class="form-label">Cardholders Name</label>
                                        <input type="text" class="form-control" id="cardHoldersName" placeholder="Enter name">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="ph-x align-middle"></i> Close</button>
                        <button type="button" class="btn btn-primary">Add Amount</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->

        <!-- Product Modal -->
        <div class="modal fade" id="productModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-body p-0 ribbon-box">
                        <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                            <span class="trending-ribbon-text">Trending</span> <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                        </div>
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="bg-primary-subtle p-5 h-100">
                                    <div class="p-lg-4">
                                        <img src="./assets/images/products/img-3.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-7">
                                <div class="p-4 h-100">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <a href="#!"><h5 class="mb-1">Craft Women Black Sling Bag</h5></a>
                                    <p class="text-muted">Fashion & Clothing</p>

                                    <h5 class="mb-3">$199.99 <del class="text-muted fs-sm fw-normal">$299.99</del></h5>

                                    <ul class="list-unstyled hstack gap-2 mb-4">
                                        <li>
                                            Available Colors
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-primary-subtle"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-success-subtle"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-danger-subtle"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar-xxs">
                                                <div class="avatar-title rounded bg-dark-subtle"></div>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul class="list-unstyled vstack gap-2 mb-4">
                                        <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>In stock</li>
                                        <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Free delivery available</li>
                                        <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Sales 10% Off Use Code: <b>STEEX10</b></li>
                                    </ul>

                                    <div class="hstack gap-2 justify-content-end">
                                        <button class="btn btn-primary"><i class="bi bi-cart align-baseline me-1"></i> Add To Cart</button>
                                        <button class="btn btn-subtle-secondary">View Details <i class="bi bi-arrow-right align-baseline ms-1"></i></button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Modal -->


        <!--start back-to-top-->
        <button class="btn btn-dark btn-icon" id="back-to-top">
            <i class="bi bi-caret-up fs-3xl"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        <div id="preloader">
            <div id="status">
                <div class="spinner-border text-primary avatar-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <div class="customizer-setting d-none d-md-block">
            <div class="btn btn-info p-2 text-uppercase rounded-end-0 shadow-lg" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class="bi bi-gear mb-1"></i> Customizer
            </div>
        </div>

        <!-- Theme Settings -->
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                <div class="me-2">
                    <h5 class="mb-1 text-white">Steex Builder</h5>
                    <p class="text-white text-opacity-75 mb-0">Choose your themes & layouts etc.</p>
                </div>

                <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-4">
                        <h6 class="fs-md mb-1">Layout</h6>
                        <p class="text-muted fs-sm">Choose your layout</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Vertical</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column gap-1">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Horizontal</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Two Column</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="mt-4 fs-md mb-1">Theme</h6>
                        <p class="text-muted fs-sm">Choose your suitable Theme.</p>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme01" name="data-theme" type="radio" value="default" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme01">
                                        <img src="./assets/images/custom-theme/light-mode.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme02" name="data-theme" type="radio" value="material" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme02">
                                        <img src="./assets/images/custom-theme/material.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Material</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme03" name="data-theme" type="radio" value="creative" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme03">
                                        <img src="./assets/images/custom-theme/creative.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Creative</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme04" name="data-theme" type="radio" value="minimal" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme04">
                                        <img src="./assets/images/custom-theme/minimal.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Minimal</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme05" name="data-theme" type="radio" value="modern" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme05">
                                        <img src="./assets/images/custom-theme/modern.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Modern</h5>
                            </div>
                            <!-- end col -->
                            <div class="col-6">
                                <div class="form-check card-radio">
                                    <input id="customizer-theme06" name="data-theme" type="radio" value="interaction" class="form-check-input">
                                    <label class="form-check-label p-0" for="customizer-theme06">
                                        <img src="./assets/images/custom-theme/interaction.png" alt="" class="img-fluid">
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Interaction</h5>
                            </div><!-- end col -->
                        </div>

                        <h6 class="mt-4 fs-md mb-1">Color Scheme</h6>
                        <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                        <div class="colorscheme-cardradio">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                        <label class="form-check-label p-0 bg-transparent" for="layout-mode-light">
                                            <img src="./assets/images/custom-theme/light-mode.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check card-radio dark">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                        <label class="form-check-label p-0 bg-transparent" for="layout-mode-dark">
                                            <img src="./assets/images/custom-theme/dark-mode.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check card-radio brand">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-brand" value="brand" disabled>
                                        <h6 class="text-danger fs-18 lh-base text-center position-absolute top-50 start-50 translate-middle z-1 mb-0">Coming Soon</h6>
                                        <label class="form-check-label cursor-none p-0 bg-transparent opacity-75" for="layout-mode-brand">
                                            <img src="./assets/images/custom-theme/brand-mode.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Brand</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-width">
                            <h6 class="mt-4 fs-md mb-1">Layout Width</h6>
                            <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Fluid</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                            <span class="d-flex gap-1 h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>

                        <div id="layout-position">
                            <h6 class="mt-4 fs-md mb-1">Layout Position</h6>
                            <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>

                        <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                        <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                            </div>
                        </div>

                        <div id="sidebar-size">
                            <h6 class="mt-4 fs-md mb-1">Sidebar Size</h6>
                            <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Compact</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Small (Icon View)</h5>
                                </div>

                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Small Hover View</h5>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-view">
                            <h6 class="mt-4 fs-md mb-1">Sidebar View</h6>
                            <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                    <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                </span>
                                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar-color">
                            <h6 class="mt-4 fs-md mb-1">Sidebar Color</h6>
                            <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </button>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Gradient</h5>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="collapse" id="collapseBgGradient">
                                <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sidebar-img">
                            <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                            <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                            <div class="d-flex gap-2 flex-wrap img-switch">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                        <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                            <i class="ri-close-fill fs-3xl"></i>
                                        </span>
                                    </label>
                                </div>

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                        <img src="./assets/images/sidebar/img-sm-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                        <img src="./assets/images/sidebar/img-sm-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                        <img src="./assets/images/sidebar/img-sm-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                    <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                        <img src="./assets/images/sidebar/img-sm-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div id="preloader-menu">
                            <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                            <p class="text-muted fs-sm">Choose a preloader.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                        <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <!-- <div id="preloader"> -->
                                            <span class="d-flex align-items-center justify-content-center">
                                                <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </span>
                                            </span>
                                            <!-- </div> -->
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Enable</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                        <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Disable</h5>
                                </div>
                            </div>

                        </div><!-- end preloader-menu -->
                    </div>
                </div>

            </div>
            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                    </div>
                    <div class="col-6">
                        <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/libs/simplebar/simplebar.min.js"></script>
        <script src="./assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="./assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="./assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="./assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="./assets/libs/swiper/swiper-bundle.min.js"></script>

        <script src="./assets/libs/list.js/list.min.js"></script>

        <!-- Dashboard init -->
        <script src="./assets/js/pages/dashboard-ecommerce.init.js"></script>

        <!-- App js -->
        <script src="./assets/js/app.js"></script>
    </body>

</html>