<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Iteck</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper.min.css') }}" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <style>
        .sticky-icon {
            z-index: 20;
            position: fixed;
            top: 25%;
            right: 0%;
            width: 220px;
            display: flex;
            flex-direction: column;
        }

        .sticky-icon a {
            transform: translate(160px, 0px);
            border-radius: 50px 0px 0px 50px;
            text-align: left;
            margin: 2px;
            text-decoration: none;
            text-transform: uppercase;
            padding: 10px;
            font-size: 22px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            transition: all 0.8s;
        }

        .sticky-icon a:hover {
            color: #FFF;
            transform: translate(0px, 0px);
        }

        .sticky-icon a:hover i {
            transform: rotate(360deg);
        }

        .Facebook {
            background-color: #2C80D3;
            color: #FFF;
        }

        .Youtube {
            background-color: #fa0910;
            color: #FFF;
        }

        .Twitter {
            background-color: #53c5ff;
            color: #FFF;
        }

        .Instagram {
            background-color: #b74bff;
            color: #FFF;
        }

        .Tiktok {
            background-color: #000000;
            color: #FFF;
        }

        .sticky-icon a i {
            background-color: #FFF;
            height: 40px;
            width: 40px;
            color: #000;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            margin-right: 20px;
            transition: all 0.5s;
        }

        .sticky-icon a:hover {
            background-color: #805aff;
        }

        .sticky-icon a i.fa-facebook-f {
            background-color: #FFF;
            color: #2C80D3;
        }

        .sticky-icon a i.fa-tiktok {
            background-color: #FFF;
            color: #000000;
        }

        .sticky-icon a i.fa-instagram {
            background-color: #FFF;
            color: #c249ff;
        }

        .sticky-icon a i.fa-youtube {
            background-color: #FFF;
            color: #fa0910;
        }

        .sticky-icon a i.fa-twitter {
            background-color: #FFF;
            color: #53c5ff;
        }

        .fas fa-shopping-cart {
            background-color: #FFF;
        }

        #myBtn {
            height: 50px;
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            text-align: center;
            padding: 10px;
            text-align: center;
            line-height: 40px;
            border: none;
            outline: none;
            background-color: #1e88e5;
            color: white;
            cursor: pointer;
            border-radius: 50%;
        }

        .fa-arrow-circle-up {
            font-size: 30px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    <div id="preloader">
        <div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="{{ asset('assets/img/logo_loading.png') }}" alt=""> </div>
            <div id="loading-content"></div>
        </div>
    </div>
    <!-- ====== end loading page ====== -->

    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-4">
        <div class="container">
            <div class="content text-white">
                <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                    <small class="fs-10px">Special</small>
                </span>
                <img src="assets/img/icons/nav_icon/imoj_heart.png" alt="" class="icon-15">
                <span class="fs-10px op-6">Get </span>
                <small class="op-10 fs-10px">20% Discount</small>
                <span class="fs-10px op-6">Get for New Account</span>
                <a href="page-contact-5.html" class="fs-10px text-decoration-underline ms-2">Register Now</a>
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-4" id="main-nav" style="padding: 18px 15px !important;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo_oasedata_dark2.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
                    <li class="nav-item" style="border-right: 1px solid rgba(103, 103, 103, 0.322); ">
                        <a class="nav-link" href="page-404.html">
                            Profil
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="index.html">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            Statistik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item komparasi"
                        style="border-radius: 15px 0px 0px 15px; background: linear-gradient(90deg, rgb(155 151 255) 0%, rgba(45,183,255,0) 100%);">
                        <a class="nav-link" href="komparasi.html">
                            Komparasi
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <a href="#0" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                        <small> Login <i class="fal fa-sign-in ms-1"></i></small>
                    </a> &nbsp;
                    <a href="#0" class="btn rounded-pill text-white bg-blue4 sm-butn fw-bold">
                        <small> Trial <i class="fal fa-long-arrow-right ms-1"></i></small>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    @section('content')
        <!--Contents-->
        <main class="blog-page style-5 color-4">
            <!-- ====== start Reasons ====== -->
            {{-- <section class="community pt-40 style-5" style="background: #cae6ff; padding-bottom: 30px;">
            <div class="container">
                <div class="content rounded-pill"
                    style="background: #838fff; border: 5px solid white; color: white; font-size: 30px;">
                    <div class="commun-card">
                        <a href="#backward" class="btn-backward">
                            <i class="fas fa-step-backward"></i>
                        </a>
                    </div>
                    <div class="commun-card">
                        <a href="#play" class="btn-play"
                            onclick="document.getElementById('test').style.display=='' ? document.getElementById('test').style.display='none' : document.getElementById('test').style.display ='';">
                            <i class="fas fa-play-circle"></i>
                        </a>
                    </div>
                    <div class="commun-card">
                        <a href="#forward" class="btn-forward">
                            <i class="fas fa-step-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
            </section> --}}
            <!-- ====== end Reasons ====== -->

            <!-- ====== start blog ====== -->
            {{-- <section class="blog section-padding style-1" id="test" style="background: #abd7ff;">
                <div class="container">
                    <div class="row">
                        <div class="col offset-lg-1">
                            <div class="section-head mb-60">
                                <h6 class="color-main text-uppercase wow fadeInUp">READING MODE</h6>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="blog_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">news</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/1.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">Crypto Trends 2023</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user1.jpg"
                                                            alt="">
                                                        <small><a href="#">By Admin</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">technology</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/2.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user2.jpg"
                                                            alt="">
                                                        <small><a href="#">By Moussa</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">tips & tricks</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/3.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">Wireframe For UI/UX?</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user3.jpg"
                                                            alt="">
                                                        <small><a href="#">By Admin</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">news</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/4.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">VR Game, Opportunity & Challenge</a>
                                                </h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user1.jpg"
                                                            alt="">
                                                        <small><a href="#">By David</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">technology</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/2.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user2.jpg"
                                                            alt="">
                                                        <small><a href="#">By Moussa</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">news</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/1.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">Crypto Trends 2023</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user1.jpg"
                                                            alt="">
                                                        <small><a href="#">By Admin</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">technology</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/2.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user2.jpg"
                                                            alt="">
                                                        <small><a href="#">By Moussa</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">tips & tricks</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/3.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">Wireframe For UI/UX?</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user3.jpg"
                                                            alt="">
                                                        <small><a href="#">By Admin</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">news</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/4.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">VR Game, Opportunity & Challenge</a>
                                                </h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user1.jpg"
                                                            alt="">
                                                        <small><a href="#">By David</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog_box">
                                            <div class="tags">
                                                <a href="#">technology</a>
                                            </div>
                                            <div class="img">
                                                <img src="assets/img/blog/2.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                                <div class="auther">
                                                    <span>
                                                        <img class="auther-img" src="assets/img/testimonials/user2.jpg"
                                                            alt="">
                                                        <small><a href="#">By Moussa</a></small>
                                                    </span>
                                                    <span>
                                                        <i class="bi bi-calendar2"></i>
                                                        <small><a href="#">May 15, 2023</a></small>
                                                    </span>
                                                </div>
                                                <div class="text">
                                                    If there’s one way that wireless technology has changed the way we work,
                                                    it’s that will everyone is now connected [...]
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- ====== end blog ====== -->

            <!-- ====== start blog ====== -->
            {{-- <section class="blog section-padding style-1" id="test"
                style="background: #1e245c; height: 235px !important;">
            </section> --}}
            <!-- ====== end blog ====== -->


            <!-- ====== start Popular Posts ====== -->
            <section class="popular-posts pt-50 pb-100 border-bottom brd-gray" style="background: #cae6ff;">
                <div class="container">
                    <h5 class="post-sc-title text-center text-uppercase mb-70">Popular Posts</h5>
                    <div class="row gx-5">
                        <div class="col-lg-4 border-end brd-gray">
                            <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                                <div class="img radius-7 overflow-hidden img-cover">
                                    <img src="assets/img/blog/1.jpg" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body px-0">
                                    <small class="d-block date mt-10 fs-10px fw-bold">
                                        <a href="#"
                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4">News</a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">Posted on 3 Days ago</a>
                                    </small>
                                    <h5 class="fw-bold mt-10 title">
                                        <a href="page-single-post-5.html">Crypto Trend 2023</a>
                                    </h5>
                                    <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                        changed the way we work, it’s that will everyone is now connected [...]
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span
                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#" class="mt-1">
                                                By Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 border-end brd-gray">
                            <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                                <div class="img radius-7 overflow-hidden img-cover">
                                    <img src="assets/img/blog/7.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body px-0">
                                    <small class="d-block date mt-10 fs-10px fw-bold">
                                        <a href="#"
                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4">News</a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">Posted on 3 Days ago</a>
                                    </small>
                                    <h5 class="fw-bold mt-10 title">
                                        <a href="page-single-post-5.html">AI With Fingerprint</a>
                                    </h5>
                                    <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                        changed the way we work, it’s that will everyone is now connected [...]
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span
                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#" class="mt-1">
                                                By Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                                <div class="img radius-7 overflow-hidden img-cover">
                                    <img src="assets/img/blog/5.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body px-0">
                                    <small class="d-block date mt-10 fs-10px fw-bold">
                                        <a href="#"
                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4">News</a>
                                        <i class="bi bi-clock me-1"></i>
                                        <a href="#" class="op-8">Posted on 3 Days ago</a>
                                    </small>
                                    <h5 class="fw-bold mt-10 title">
                                        <a href="page-single-post-5.html">NFT Game! New Oppoturnity</a>
                                    </h5>
                                    <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                        changed the way we work, it’s that will everyone is now connected [...]
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span
                                                class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                a
                                            </span>
                                            <a href="#" class="mt-1">
                                                By Admin
                                            </a>
                                        </div>
                                        <div class="r-side mt-1">
                                            <i class="bi bi-chat-left-text me-1"></i>
                                            <a href="#">24</a>
                                            <i class="bi bi-eye ms-4 me-1"></i>
                                            <a href="#">774k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== end Popular Posts ====== -->


            <!-- ====== start all-news ====== -->
            <section class="all-news section-padding blog bg-transparent style-3">
                <div class="container">
                    <div class="row gx-11 gx-lg-11">
                        <div class="col-lg-8">
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/6.png" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">
                                                    news </a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">How To Become A
                                                Python Develop Expert</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/4.jpg" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">news</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">VR Game,
                                                Oppoturnity
                                                & Challenge</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/10.png" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">tips
                                                    & tricks</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">6 Tips To Help You
                                                Build Your Social Media Effeciency & Better</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/11.png" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">tips
                                                    & tricks</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">The New Trend Of
                                                Marketing With Tiktok, Should Or Not?</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/9.png" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">tips
                                                    & tricks</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">Workflow Strategy
                                                For
                                                E-Shop</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/3.jpg" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">tips
                                                    & tricks</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">Wireframe For
                                                UI/UX</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 pb-30 mb-30 mb-lg-0 pb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover">
                                            <img src="assets/img/blog/12.png" class="radius-7" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">tips
                                                    & tricks</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">12 Days ago</a>
                                            </small>
                                            <a href="page-single-post-5.html" class="card-title mb-10">Freelancer Days
                                                2023,
                                                What’s new?</a>
                                            <p class="fs-13px color-666">If there’s one way that wireless technology has
                                                changed the way we work, it’s that will everyone [...]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Admin
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pagination style-5 color-4 justify-content-center mt-60">
                                <a href="#" class="active">
                                    <span>1</span>
                                </a>
                                <a href="#">
                                    <span>2</span>
                                </a>
                                <a href="#">
                                    <span>3</span>
                                </a>
                                <a href="#">
                                    <span>4</span>
                                </a>
                                <a href="#">
                                    <span>...</span>
                                </a>
                                <a href="#">
                                    <span>20</span>
                                </a>
                                <a href="#">
                                    <span class="text">next <i class="fas fa-chevron-right"></i> </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

                                <form action="https://iteck-html.themescamp.com/contact.php" class="search-form mb-50"
                                    method="post">
                                    <h6 class="title mb-20 text-uppercase fw-normal">
                                        search
                                    </h6>
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control rounded-pill"
                                            placeholder="Type and hit enter">
                                        <button class="search-btn border-0 bg-transparent"> <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>

                                <div class="side-recent-post mb-50">
                                    <h6 class="title mb-20 text-uppercase fw-normal">
                                        recent post
                                    </h6>
                                    <a href="page-single-post-5.html" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                        <div class="img me-3">
                                            <img src="assets/img/blog/1.jpg" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> Crypto Trend 2023 </h6>
                                            <p> If there’s one way that wireless technology has [...] </p>
                                        </div>
                                    </a>
                                    <a href="page-single-post-5.html" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                        <div class="img me-3">
                                            <img src="assets/img/blog/2.jpg" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> How To Become Web Developer </h6>
                                            <p> If there’s one way that wireless technology has [...] </p>
                                        </div>
                                    </a>
                                    <a href="page-single-post-5.html" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                        <div class="img me-3">
                                            <img src="assets/img/blog/3.jpg" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> Wireframe for UI/UX </h6>
                                            <p> If there’s one way that wireless technology has [...] </p>
                                        </div>
                                    </a>
                                    <a href="page-single-post-5.html" class="post-card">
                                        <div class="img me-3">
                                            <img src="assets/img/blog/7.png" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> AI With Fingerprint </h6>
                                            <p> If there’s one way that wireless technology has [...] </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="side-categories mb-50">
                                    <h6 class="title mb-20 text-uppercase fw-normal">
                                        categories
                                    </h6>
                                    <a href="#" class="cat-item">
                                        <span> all </span>
                                        <span> 265 </span>
                                    </a>
                                    <a href="#" class="cat-item">
                                        <span> News </span>
                                        <span> 38 </span>
                                    </a>
                                    <a href="#" class="cat-item">
                                        <span> Technology </span>
                                        <span> 16 </span>
                                    </a>
                                    <a href="#" class="cat-item">
                                        <span> Tips & Tricks </span>
                                        <span> 85 </span>
                                    </a>
                                    <a href="#" class="cat-item">
                                        <span> Career </span>
                                        <span> 21 </span>
                                    </a>
                                    <a href="#" class="cat-item">
                                        <span> Community </span>
                                        <span> 874 </span>
                                    </a>
                                    <a href="#" class="cat-item">
                                        <span> Videos </span>
                                        <span> 54 </span>
                                    </a>
                                    <a href="#" class="cat-item border-0">
                                        <span> Others </span>
                                        <span> 85 </span>
                                    </a>
                                </div>

                                <div class="side-newsletter mb-50">
                                    <h6 class="title mb-10 text-uppercase fw-normal">
                                        newsletter
                                    </h6>
                                    <div class="text">
                                        Register now to get latest updates on promotions & coupons.
                                    </div>
                                    <form action="https://iteck-html.themescamp.com/contact.php" class="form-subscribe"
                                        method="post">
                                        <div
                                            class="email-input d-flex align-items-center py-3 px-3 bg-white mt-3 radius-5">
                                            <span class="icon me-2 flex-shrink-0">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                            <input type="text" placeholder="Email Address"
                                                class="border-0 bg-transparent fs-13px">
                                        </div>
                                        <button
                                            class="btn bg-blue4 sm-butn text-white hover-darkBlue w-100 mt-3 radius-5 py-3">
                                            <span>Subscribe</span>
                                        </button>
                                    </form>
                                </div>

                                <div class="side-share mb-50">
                                    <h6 class="title mb-20 text-uppercase fw-normal">
                                        social
                                    </h6>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-goodreads-g"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>

                                <div class="side-insta mb-50">
                                    <h6 class="title mb-20 text-uppercase fw-normal">
                                        our instagram
                                    </h6>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <a href="assets/img/blog/1.jpg" class="insta-img img-cover"
                                            data-fancybox="gallery">
                                            <img src="assets/img/blog/1.jpg" alt="">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                        <a href="assets/img/blog/10.png" class="insta-img img-cover"
                                            data-fancybox="gallery">
                                            <img src="assets/img/blog/10.png" alt="">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                        <a href="assets/img/blog/11.png" class="insta-img img-cover"
                                            data-fancybox="gallery">
                                            <img src="assets/img/blog/11.png" alt="">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                        <a href="assets/img/blog/12.png" class="insta-img img-cover"
                                            data-fancybox="gallery">
                                            <img src="assets/img/blog/12.png" alt="">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                        <a href="assets/img/blog/2.jpg" class="insta-img img-cover"
                                            data-fancybox="gallery">
                                            <img src="assets/img/blog/2.jpg" alt="">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                        <a href="assets/img/blog/3.jpg" class="insta-img img-cover"
                                            data-fancybox="gallery">
                                            <img src="assets/img/blog/3.jpg" alt="">
                                            <i class="fab fa-instagram icon"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="side-tags">
                                    <h6 class="title mb-20 text-uppercase fw-normal">
                                        popular tags
                                    </h6>
                                    <div class="content">
                                        <a href="#">WordPress</a>
                                        <a href="#">PHP</a>
                                        <a href="#">HTML/CSS</a>
                                        <a href="#">Figma</a>
                                        <a href="#">Technology</a>
                                        <a href="#">Marketing</a>
                                        <a href="#">Consultation</a>
                                        <a href="#">Seo</a>
                                        <a href="#">Envato</a>
                                        <a href="#">Psd</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== end all-news ====== -->

        </main>
        <!--End-Contents-->
    @endsection

    <!-- ====== start footer ====== -->
    <footer class="style-4" data-scroll-index="8">
        <div class="container">
            <div class="section-head text-center style-4">
                <h2 class="mb-10"> Ready To <span> Get Your Analytics </span> </h2>
                <p>Discover your new favorite spaces, from Sao Paulo to Seoul. Download from App Store or Google Play.
                </p>
            </div>
            <div class="foot mt-80">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <img src="assets/img/logo_oasedata_dark2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <ul class="links">
                            <li>
                                <a href="home-app-landing.html" class="active">Home</a>
                            </li>
                            <li>
                                <a href="page-about-5.html">about</a>
                            </li>
                            <li>
                                <a href="page-product-5.html">product</a>
                            </li>
                            <li>
                                <a href="page-portfolio-5.html">portfolio</a>
                            </li>
                            <li>
                                <a href="page-services-5.html">services</a>
                            </li>
                            <li>
                                <a href="page-shop-5.html">shop</a>
                            </li>
                            <li>
                                <a href="page-blog-5.html">blog</a>
                            </li>
                            <li>
                                <a href="page-contact-5.html">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <div class="dropdown">
                            <button
                                class="icon-25 dropdown-toggle p-0 border-0 bg-transparent rounded-circle img-cover"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/img/lang.png" alt="" class="me-2">
                                <small>Indonesia</small>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Indonesia</a></li>
                                <li><a class="dropdown-item" href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copywrite text-center">
                <small class="small">
                    © 2023 Copyrights by <a href="#" class="fw-bold text-decoration-underline">OaseData</a> All
                    Rights
                    Reserved. Designed by <a href="https://themeforest.net/user/themescamp"
                        class="fw-bold text-decoration-underline">Harlitech</a>
                </small>
            </div>
        </div>
        <img src="{{ asset('assets/img/footer/footer_4_wave.png') }}" alt="" class="wave">
    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#"
        class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <!-- <script src="assets/js/lib/bootstrap.bundle.min.js"></script> -->\
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <!-- <script src="assets/js/lib/pace.js"></script> -->
    <script src="{{ asset('assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $('.btn-play').on('click', function() {
            $('i', this).toggleClass('fas fa-play-circle fas fa-pause');
        });
    </script>

</body>


<!-- Mirrored from iteck-html.themescamp.com/page-blog-app.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Oct 2023 14:04:48 GMT -->

</html>
