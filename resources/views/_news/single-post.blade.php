@extends('layouts.news')

@section('head')
    <meta property="og:image" content="{{ asset(Voyager::image($post->image)) }}">
@endsection

@section('content')
    <!--Contents-->
    <main class="blog-page style-5">


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding pt-50 blog bg-transparent style-3">
            <div class="container">
                <div class="blog-details-slider mb-30">
                    <div class="section-head text-center mb-30 style-5">
                        <h2 class="mb-20 color-000"> {{ $post->title }} </h2>
                        <small class="d-block date text">
                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-1 color-blue5 fw-bold">
                                <span class="">
                                    Admin
                                </span>
                            </a>
                            <i class="bi bi-clock me-1"></i>
                            <span class="op-8">{{ $post->created_at->format('Y-m-d') }}</span>
                        </small>
                    </div>
                    <div class="content-card">
                        <div class="img">
                            <img src="{{ Voyager::image($post->image) }}" alt="">
                        </div>
                        {{-- <div class="info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="cont">
                                        <small class="date small mb-20"> <span
                                                class="text-uppercase border-end brd-gray pe-3 me-3"> News </span> <i
                                                class="far fa-clock me-1"></i> Posted on 3 Days ago </small>
                                        <h2 class="title">
                                            Solutions For Big Data Issue, Expert Perspective
                                        </h2>
                                        <p class="fs-12px mt-10 text-light text-info">If there’s one way that wireless
                                            technology has changed the way we work, it’s that will everyone is now
                                            connected [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-8">
                        {{-- <div class="d-flex small align-items-center justify-content-between mb-70 fs-12px">
                            <div class="l_side d-flex align-items-center">

                                <a href="#" class="me-3 me-lg-5">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <span>24 Comments</span>
                                </a>
                                <a href="#">
                                    <i class="bi bi-eye me-1"></i>
                                    <span>774k Views</span>
                                </a>
                            </div>
                            <div class="r-side mt-1">
                                <a href="#">
                                    <i class="bi bi-info-circle me-1"></i>
                                    <span>Report</span>
                                </a>
                            </div>
                        </div> --}}

                        <div class="blog-content-info">
                            {{-- <h4 class="fw-bold color-000 lh-4 mb-30">To mark the first UK show of artist Henri Barande,
                                developer <a href="#" class="color-blue5">Moussa</a> and German studio
                                Schultzschultz have created The Lodge Wooden at Berlin City</h4> --}}
                            <div class="text mb-10 color-666 text-custom">
                                {!! $post->body !!}
                            </div>

                            <br />
                            <br />

                            {{-- DISQUSS KOMENTAR  --}}
                            <div id="disqus_thread"></div>

                            <script>
                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    
                                 **/

                                var disqus_config = function() {
                                    this.page.url = '{{ URL::current() }}'; // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier =
                                        {{ $post->slug }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };

                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document,
                                        s = d.createElement('script');
                                    s.src = 'https://oasedata.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="#">comments powered by
                                    Licuanqus.</a>
                            </noscript>

                            {{-- <div class="blog-comments mt-70">
                                <div class="comment-card card p-5 radius-5 border-0 mt-50">
                                    <div class="d-flex">
                                        <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                            <img src="assets/img/team/3.jpeg" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6 class="fw-bold">Russel B.</h6>
                                            <small class="color-999"> @russelb - 15 Dec, 2023 </small>
                                            <div class="text color-000 fs-12px mt-10">
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum sed ut perspiciatis unde.
                                                Lorem ispum dolor sit amet
                                            </div>
                                            <div class="social-icons d-flex mt-20">
                                                <a href="#"
                                                    class="icon-25 rounded-circle d-inline-flex overflow-hidden align-items-center justify-content-center fs-10px me-2">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#"
                                                    class="icon-25 rounded-circle d-inline-flex overflow-hidden align-items-center justify-content-center fs-10px me-2">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="#"
                                                    class="icon-25 rounded-circle d-inline-flex overflow-hidden align-items-center justify-content-center fs-10px me-2">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-content mt-70">
                                    <h3 class="color-000 mb-0"> 02 Comments </h3>
                                    <div class="comment-replay-cont border-bottom border-1 brd-gray pb-40 pt-40">
                                        <div class="d-flex comment-cont">
                                            <div
                                                class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/2.jpg" alt="">
                                            </div>
                                            <div class="inf">
                                                <div class="title d-flex justify-content-between">
                                                    <h6 class="fw-bold fs-14px">Robert Downey Jr</h6>
                                                    <span class="time fs-12px text-uppercase">
                                                        3 hours ago
                                                    </span>
                                                </div>
                                                <div class="text color-000 fs-12px mt-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume
                                                    nusaate staman utra phone limo sumeria
                                                </div>
                                                <a href="#"
                                                    class="butn border border-1 rounded-pill border-blue5 mt-20 py-2 px-3 hover-blue5 color-blue5">
                                                    <span class="fs-10px"> replay </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex comment-replay ps-5 mt-30 ms-4">
                                            <div
                                                class="icon-40 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/5.jpg" alt="">
                                            </div>
                                            <div class="inf">
                                                <div class="title d-flex justify-content-between">
                                                    <h6 class="fw-bold fs-14px">Tobey McGuire</h6>
                                                    <span class="time fs-12px text-uppercase">
                                                        2 dayes ago
                                                    </span>
                                                </div>
                                                <div class="text color-000 fs-12px mt-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume
                                                    nusaate staman utra phone limo sumeria
                                                </div>
                                                <a href="#"
                                                    class="butn border border-1 rounded-pill border-blue5 mt-20 py-2 px-3 hover-blue5 color-blue5">
                                                    <span class="fs-10px"> replay </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-replay-cont pb-40 pt-40">
                                        <div class="d-flex comment-cont">
                                            <div
                                                class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/4.jpg" alt="">
                                            </div>
                                            <div class="inf">
                                                <div class="title d-flex justify-content-between">
                                                    <h6 class="fw-bold fs-14px">Ben Chiwell</h6>
                                                    <span class="time fs-12px text-uppercase">
                                                        December 25, 2023
                                                    </span>
                                                </div>
                                                <div class="text color-000 fs-12px mt-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume
                                                    nusaate staman utra phone limo sumeria
                                                </div>
                                                <a href="#"
                                                    class="butn border border-1 rounded-pill border-blue5 mt-20 py-2 px-3 hover-blue5 color-blue5">
                                                    <span class="fs-10px"> replay </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="comment-form d-block pt-30">
                                    <h3 class="color-000 mb-40"> Leave A Comment </h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <textarea class="form-control radius-4 fs-12px p-3" rows="6" placeholder="Write your comment here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4 mb-lg-0">
                                                <input type="text" class="form-control fs-12px radius-4 p-3"
                                                    placeholder="Your Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control fs-12px radius-4 p-3"
                                                    placeholder="Your Email *">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-check mt-20">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label fs-12px" for="flexCheckDefault">
                                                    Save my name & email in this browser for next time I comment
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="#"
                                                class="btn rounded-pill blue5-3Dbutn hover-blue5 sm-butn fw-bold mt-40">
                                                <span>Submit Comment </span>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div> --}}
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

                            {{-- <div class="side-categories mb-50">
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
                            </div> --}}

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
                                            class="border-0 bg-transparent fs-12px">
                                    </div>
                                    <button
                                        class="btn bg-blue5 sm-butn text-white hover-darkBlue w-100 mt-3 radius-5 py-3">
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


        <!-- ====== start Popular Posts ====== -->
        {{-- <section class="popular-posts related Posts section-padding pb-100 bg-gray5">
            <div class="container">
                <h5 class="fw-bold text-uppercase mb-50">Related Posts</h5>
                <div class="related-postes-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                    <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                        <img src="assets/img/blog/1.jpg" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body px-0">
                                        <small class="d-block date mt-10 fs-10px fw-bold">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">Posted on 3 Days ago</a>
                                        </small>
                                        <h5 class="fw-bold mt-10 title">
                                            <a href="page-single-post-5.html">Crypto Trend 2023</a>
                                        </h5>
                                        <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                            changed the way we work.
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
                            <div class="swiper-slide">
                                <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                    <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                        <img src="assets/img/blog/7.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body px-0">
                                        <small class="d-block date mt-10 fs-10px fw-bold">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">Posted on 3 Days ago</a>
                                        </small>
                                        <h5 class="fw-bold mt-10 title">
                                            <a href="page-single-post-5.html">AI With Fingerprint</a>
                                        </h5>
                                        <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                            changed the way we work.
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
                            <div class="swiper-slide">
                                <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                    <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                        <img src="assets/img/blog/5.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body px-0">
                                        <small class="d-block date mt-10 fs-10px fw-bold">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">Posted on 3 Days ago</a>
                                        </small>
                                        <h5 class="fw-bold mt-10 title">
                                            <a href="page-single-post-5.html">NFT Game! New Oppoturnity</a>
                                        </h5>
                                        <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                            changed the way we work.
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section> --}}
        <!-- ====== end Popular Posts ====== -->

    </main>
    <!--End-Contents-->
@endsection
