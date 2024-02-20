@extends('layouts.news')

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
        {{-- <section class="popular-posts pt-50 pb-100 border-bottom brd-gray" style="background: #cae6ff;">
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
        </section> --}}
        <!-- ====== end Popular Posts ====== -->


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding blog bg-transparent style-3">
            <div class="container">
                <div class="row gx-11 gx-lg-11">
                    <div class="col-lg-8">
                        @foreach ($all_news as $news)
                            <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                                <div class="row">
                                    <div class="col-lg-5">

                                        <div class="img img-cover">
                                            {{-- <a href="{{ route('news.show', $news->slug) }}"> --}}
                                            <img src="{{ Voyager::image($news->image) }}" class="radius-7" alt="...">
                                            {{-- </a> --}}
                                        </div>

                                    </div>
                                    <div class="col-lg-7">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">
                                                    news </a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="{{ route('news.show', $news->slug) }}" class="op-8">
                                                    {{ $news->created_at->format('Y-m-d') }}
                                                </a>
                                            </small>
                                            <a href="{{ route('news.show', $news->slug) }}"
                                                class="card-title mb-10">{{ $news->title }}</a>
                                            <p class="fs-13px color-666">{{ Str::limit(strip_tags($news->body), 150) }}
                                                ... [read more]</p>
                                            <div
                                                class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
                                                        a
                                                    </span>
                                                    {{-- <a href="#"> --}}
                                                    <small class="text-muted">By</small> &nbsp; Admin
                                                    {{-- </a> --}}
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
                                </div>
                            </div>
                        @endforeach

                        {{-- {{ $all_news->links() }} --}}
                        {{-- <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
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
                        </div> --}}

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

                            <form action="#" class="search-form mb-50" method="post">
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
                                    Berita lainnya
                                </h6>
                                @foreach ($random_news as $rnews)
                                    <a href="{{ route('news.show', $rnews->slug) }}"
                                        class="post-card pb-3 mb-3 border-bottom brd-gray">
                                        <div class="img me-3">
                                            <img src="{{ Voyager::image($rnews->image) }}" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6> {{ $rnews->title }} </h6>
                                            <p> {{ Str::limit(strip_tags($rnews->body), 50) }}... [read more]</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                            <div class="side-categories mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    categories
                                </h6>
                                @foreach ($categoriesWithCount as $cat)
                                    <a href="#" class="cat-item">
                                        <span> {{ $cat->name }} </span>
                                        <span> {{ $cat->posts_count }} </span>
                                    </a>
                                @endforeach
                            </div>

                            {{-- <div class="side-newsletter mb-50">
                                <h6 class="title mb-10 text-uppercase fw-normal">
                                    newsletter
                                </h6>
                                <div class="text">
                                    Register now to get latest updates on promotions & coupons.
                                </div>
                                <form action="https://iteck-html.themescamp.com/contact.php" class="form-subscribe"
                                    method="post">
                                    <div class="email-input d-flex align-items-center py-3 px-3 bg-white mt-3 radius-5">
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
                            </div> --}}

                            {{-- <div class="side-share mb-50">
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
                            </div> --}}

                            {{-- <div class="side-insta mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    our instagram
                                </h6>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <a href="assets/img/blog/1.jpg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/1.jpg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/10.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/10.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/11.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/11.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/12.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/12.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/2.jpg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/2.jpg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/3.jpg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/3.jpg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </div>
                            </div> --}}

                            {{-- <div class="side-tags">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->

    </main>
    <!--End-Contents-->
@endsection
