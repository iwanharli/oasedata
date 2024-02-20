@extends('layouts.master')

@section('content')
    <!--Contents-->
    <main>

        <!-- ====== berita ====== -->
        <section class="blog section-padding style-6" data-scroll-index="1">
            <div class="container">
                <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                    <h2 class="mb-20">
                        <span> <small>Berita</small> </span>
                        terbaru
                    </h2>
                    <p class="color-666">Dapatkan artikel terbaru dari pers kami, diskusikan, dan bagikan.</p>
                    <a href="{{ route('news') }}" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white">
                        <small> Lihat semua berita <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
                <div class="content">

                    @foreach ($latest_news as $latest)
                        <div class="blog-card style-6">
                            {{-- <a href="{{ url('artikel/' . $post->slug) }}">{{ $post->title }}</a> --}}

                            {{-- <a href="{{ url('news/' . $slug) }}" class="img img-cover d-block"> --}}
                            <a href="{{ route('news.show', $latest->slug) }}" class="img img-cover d-block">
                                <img src="{{ Voyager::image($latest->image) }}" alt="">
                            </a>
                            <div class="info">
                                <div class="date">
                                    <a href="#"
                                        class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                        news </a>
                                    <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                    <a href="#" class="fs-12px">{{ $latest->created_at->format('Y-m-d') }}</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="{{ route('news.show', $latest->slug) }}">{{ $latest->title }}</a>
                                </h4>
                                <div class="text">
                                    {{ Str::limit(strip_tags($latest->body), 40) }} [...]
                                </div>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                            a
                                        </span>
                                        <a href="#">
                                            <small class="text-muted">By</small> Admin
                                        </a>
                                    </div>
                                    {{-- <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br />
            <div class="container">
                <div class="content">
                    @foreach ($latest_news2 as $latest2)
                        <div class="blog-card style-6">
                            {{-- <a href="{{ url('artikel/' . $post->slug) }}">{{ $post->title }}</a> --}}

                            {{-- <a href="{{ url('news/' . $slug) }}" class="img img-cover d-block"> --}}
                            <a href="{{ route('news.show', $latest2->slug) }}" class="img img-cover d-block">
                                <img src="{{ Voyager::image($latest2->image) }}" alt="">
                            </a>
                            <div class="info">
                                <div class="date">
                                    <a href="#"
                                        class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                        news </a>
                                    <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                    <a href="#" class="fs-12px">{{ $latest2->created_at->format('Y-m-d') }}</a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="{{ route('news.show', $latest2->slug) }}">{{ $latest2->title }}</a>
                                </h4>
                                <div class="text">
                                    {{ Str::limit(strip_tags($latest2->body), 40) }} [...]
                                </div>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                            a
                                        </span>
                                        <div>
                                            <small class="text-muted">By</small> Admin
                                        </div>
                                    </div>
                                    {{-- <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <br>
            <div class="container">
                <div class="content">
                    <div class="blog-card style-6">
                        <a href="page-single-post-5.html" class="img img-cover d-block">
                            <img src="assets/img/blog/9.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#"
                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                    news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                <a href="#" class="fs-12px">3 Days ago</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="page-single-post-5.html">Workflow Strategy for E-shop</a>
                            </h4>
                            <div class="text">
                                If there’s one way that wireless technology has changed the way we work, it’s that will
                                everyone is now connected [...]
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">By</small> David
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
                    <div class="blog-card card-center style-6">
                        <a href="page-single-post-5.html" class="img img-cover d-block">
                            <img src="assets/img/blog/10.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#"
                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                    news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                <a href="#" class="fs-12px">12 Days ago</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="page-single-post-5.html">6 Tips To Help You Build Your Social Media
                                    Effeciency</a>
                            </h4>
                            <div class="text">
                                If there’s one way that wireless technology has changed the way we work, it’s that will
                                everyone is now connected [...]
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">By</small> David
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
                    <div class="blog-card style-6">
                        <a href="page-single-post-5.html" class="img img-cover d-block">
                            <img src="assets/img/blog/11.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#"
                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                    news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                <a href="#" class="fs-12px">12 Days ago</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="page-single-post-5.html">The Trend of Marketing With Tiktok, Should or not?</a>
                            </h4>
                            <div class="text">
                                If there’s one way that wireless technology has changed the way we work, it’s that will
                                everyone is now connected [...]
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">By</small> David
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
            </div> --}}
        </section>
        <!-- ====== end berita ====== -->

        <!-- ====== start about ====== -->
        <section class="about style-8 section-padding" style="background-color: #d8d1ff !important;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="img mb-4 mb-lg-0 wow fadeIn">
                            <img src="assets/img/about/3d_vector2.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="section-head style-8 mb-40">
                                <!-- <h6 class="wow fadeInUp"> about our service </h6> -->
                                <h3 class="wow fadeInUp"> We offer Real-time <br> Data Solutions. </h3>
                            </div>
                            <p class="color-666 wow fadeInUp"> Stay focused and productive with a clean and clutter-free
                                note space the flexible ways to organize </p>
                            <ul class="mt-30">
                                <li class="wow fadeInUp">
                                    <img src="assets/img/about/icon3.svg" alt="" class="icon">
                                    <p> Various AI Data Analysis Options </p>
                                </li>
                                <li class="wow fadeInUp">
                                    <img src="assets/img/about/icon3.svg" alt="" class="icon">
                                    <p> Auto Generate AI Content </p>
                                </li>
                            </ul>
                            <!-- <div class="d-flex align-items-center mt-40 wow fadeInUp">
                                                        <div class="author">
                                                            <div
                                                                class="img icon-60 rounded-circle overflow-hidden img-cover me-3 flex-shrink-0">
                                                                <img src="assets/img/testimonials/user7.png" alt="">
                                                            </div>
                                                            <div class="inf">
                                                                <p> Certified By </p>
                                                                <h6> Alonso D.Dowson </h6>
                                                            </div>
                                                        </div>
                                                        <img src="assets/img/about/signature.svg" alt="" class="signature ms-5">
                                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->

        <!-- ====== statistik ====== -->
        <section class="section-padding bg-gray2" data-scroll-index="2">
            <div class="container">
                <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                    <h2 class="mb-20">
                        <span> <small>Statistik</small> </span>
                        terbaru
                    </h2>
                    <a href="{{ route('statistic') }}"
                        class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white">
                        <small> Lihat semua statistik <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
                <div class="slider-3items slider-style-6">
                    <div class="swiper-container pb-70">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-card style-6">
                                    <div class="img">
                                        <img src="assets/img/projects/4.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="#">Okpay E-Wallet Optimized</a>
                                        </h3>
                                        <small class="color-blue6">
                                            <a href="#">SEO analysis</a>
                                        </small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new
                                            tech & app.
                                        </div>
                                        <div class="tags">
                                            <span>
                                                <a href="#">SEO Analysis</a>
                                            </span>
                                            <span>
                                                <a href="#">Content Strategy</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card style-6">
                                    <div class="img">
                                        <img src="assets/img/projects/5.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="#">e-Commerce Dashboard</a>
                                        </h3>
                                        <small class="color-blue6"> <a href="#">website design</a> & <a
                                                href="#">develoment</a> </small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new
                                            tech & app.
                                        </div>
                                        <div class="tags">
                                            <span><a href="#">WordPress</a></span>
                                            <span><a href="#">PHP</a></span>
                                            <span><a href="#">HTML/CSS</a></span>
                                            <span><a href="#">Figma</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card style-6">
                                    <div class="img">
                                        <img src="assets/img/projects/7.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h3 class="title"><a href="#">MLB Store
                                                Instagram</a></h3>
                                        <small class="color-blue6"><a href="#">social media</a></small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new
                                            tech & app.
                                        </div>
                                        <div class="tags">
                                            <span><a href="#">Social</a></span>
                                            <span><a href="#">Instagram</a></span>
                                            <span><a href="#">Followers</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-card style-6">
                                    <div class="img">
                                        <img src="assets/img/projects/5.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h3 class="title"><a href="#">e-Commerce
                                                Dashboard</a></h3>
                                        <small class="color-blue6"><a href="#">website design</a> & <a
                                                href="#">develoment</a></small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new
                                            tech & app.
                                        </div>
                                        <div class="tags">
                                            <span><a href="#">WordPress</a></span>
                                            <span><a href="#">PHP</a></span>
                                            <span><a href="#">HTML/CSS</a></span>
                                            <span><a href="#">Figma</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ====== pagination ====== -->
                    <div class="swiper-pagination"></div>

                    <!-- ====== arrows ====== -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end statistik ====== -->

        <!-- ====== start about ====== -->
        <section class="about section-padding style-4">

            <div class="integration pt-60" data-scroll-index="3">
                <div class="section-head text-center style-4">
                    <small class="title_small">Social Media Monitoring</small>
                    <h2 class="mb-20"><span> Aplikasi </span> Yang Terintegrasi</h2>
                    <p>OaseData intergrate with popular apps. Help you easy to connect and collaboration</p>
                </div>
                <div class="container">
                    <div class="content">
                        <div class="img">
                            <img src="assets/img/icon/x2.png" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="assets/img/icon/facebook.png" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="assets/img/icon/google-news.png" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="assets/img/icon/tiktok.png" alt="" class="mt-80">
                        </div>
                        <div class="img">
                            <img src="assets/img/icon/ig.png" alt="">
                        </div>
                    </div>
                </div>
                <img src="assets/img/about/intg_back.png" alt="" class="intg-back">
            </div>
            <img src="assets/img/about/about_s4_wave.png" alt="" class="top-wave">
            <img src="assets/img/wave/wave_ungu.png" alt="" class="bottom-wave">
        </section>
        <!-- ====== end about ====== -->

        <!-- ====== start layanan ====== -->
        <section class="features section-padding style-5" data-scroll-index="3" style="background-color: #d8d1ff;">
            <div style="margin-left: 100px; margin-right: 100px;">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20">
                                <span class="sub-features" style="color:#b000ff;"> Layanan </span>
                                Kami
                            </h2>
                            <p>OaseData Dashboard is a powerhouse when it comes to the feature list. This ensures you have
                                every functionality you need to build, run, and expand your marketplace
                            </p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="icon">
                                    <img src="assets/img/icons/features/1.png" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        Data Visualization
                                    </h5>
                                    <p class="text">
                                        Ideal for businesses that are seasonal or operate between fixed hours.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="icon">
                                    <img src="assets/img/icons/features/2.png" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        Data Collection
                                    </h5>
                                    <p class="text">
                                        Set up irresistible deals and offers with flexible discount promo codes.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="icon">
                                    <img src="assets/img/icons/features/3.png" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        Sentiment Analysis
                                    </h5>
                                    <p class="text">
                                        Import products from and export products to CSV from vendor dashboard.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="icon">
                                    <img src="assets/img/icons/features/4.png" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        Predictive Analysis
                                    </h5>
                                    <p class="text">
                                        Interaction with sellers help buyers to make better purchase decisions.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="features-card mb-30 mb-lg-0 style-5">
                                <div class="icon">
                                    <img src="assets/img/icons/features/5.png" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        Machine Learning
                                    </h5>
                                    <p class="text">
                                        Offer membership plans for sellers, free and paid. Accept recurring fees.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="features-card mb-30 mb-lg-0 style-5">
                                <div class="icon">
                                    <img src="assets/img/icons/features/6.png" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        Security Analysis
                                    </h5>
                                    <p class="text">
                                        Order fulfillment made easy with store invoices and shipping labels.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end layanan ====== -->

        <!-- ====== start faq ====== -->
        <section class="faq section-padding style-4 pt-50" data-scroll-index="4">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">Frequently Asked Question</small>
                    <h2 class="mb-30"> Butuh <span> Bantuan? </span> </h2>
                </div>
                <div class="content">
                    <div class="faq style-3 style-4">
                        <div class="accordion" id="accordionSt4">
                            <div class="row gx-5">
                                <div class="col-lg-6">
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading11">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                aria-expanded="true" aria-controls="collapse11">
                                                How Benefit That I Got When Choose Basic Plan?
                                            </button>
                                        </h2>
                                        <div id="collapse11" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading11" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading12">
                                            <button class="accordion-button py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                aria-expanded="false" aria-controls="collapse12">
                                                How Do I Organize My Notes?
                                            </button>
                                        </h2>
                                        <div id="collapse12" class="accordion-collapse collapse show rounded-0"
                                            aria-labelledby="heading12" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading13">
                                            <button class="accordion-button collapsed py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse13"
                                                aria-expanded="false" aria-controls="collapse13">
                                                How Long For A Standard Project
                                            </button>
                                        </h2>
                                        <div id="collapse13" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading13" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0 rounded-0">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="true" aria-controls="collapse4">
                                                How About Data Security & NDA Agreement
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading4" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading5">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="true" aria-controls="collapse5">
                                                How Does OaseData Store My Data?
                                            </button>
                                        </h2>
                                        <div id="collapse5" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading5" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse6">
                                                Does OaseData Support Storing Data on iCloud?
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading6" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading7">
                                            <button class="accordion-button collapsed py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                aria-expanded="false" aria-controls="collapse7">
                                                How Do I Change My Email or Password?
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading7" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading8">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                aria-expanded="true" aria-controls="collapse8">
                                                Can My Premium License Be Used For All Devices?
                                            </button>
                                        </h2>
                                        <div id="collapse8" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading8" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0 rounded-0">
                                        <h2 class="accordion-header" id="heading9">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                aria-expanded="true" aria-controls="collapse9">
                                                Can I Lock My Note App?
                                            </button>
                                        </h2>
                                        <div id="collapse9" class="accordion-collapse collapse rounded-0"
                                            aria-labelledby="heading9" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand,
                                                we're able to attain <br> mutual understanding, gain customer trust to
                                                offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end faq ====== -->

        <!-- ====== start community ====== -->
        <section class="community section-padding pt-0 style-4">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">OaseData Community</small>
                    <h2 class="mb-30"> Join Into <span> Our Hub </span> </h2>
                </div>
                <div class="content">
                    <a href="https://www.instagram.com/oasedata/" class="commun-card" target="_blank">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="inf">
                            <h5>Instagram</h5>
                            <p>Open Source & Commnit Code</p>
                        </div>
                    </a>
                    <a href="https://www.tiktok.com/@oasedata" class="commun-card" target="_blank">
                        <div class="icon">
                            <i class="fab fa-tiktok"></i>
                        </div>
                        <div class="inf">
                            <h5>Tiktok</h5>
                            <p>Latest News & Update</p>
                        </div>
                    </a>
                    <a href="https://whatsapp.com/channel/0029VaLHTTL77qVXN6sIne0a" class="commun-card" target="_blank">
                        <div class="icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="inf">
                            <h5>Whatsapp</h5>
                            <p>Chanel for Community</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== end community ====== -->
    </main>
    <!--End-Contents-->
@endsection
