@extends('layouts.news')

@section('head')
	<meta property="og:image" content="{{ asset(Voyager::image($statistic->image)) }}">
@endsection

@section('content')
	<!--Contents-->
	<main class="blog-page style-5">
		<!-- ====== start all-news ====== -->
		<section class="all-news section-padding pt-50 blog bg-transparent style-3">
			<div class="container">
				<div class="blog-details-slider mb-30">
					<div class="section-head text-center mb-30 style-5">
						<h2 class="mb-20 color-000"> {{ $statistic->title }} </h2>
						<small class="d-block date text">
							<a href="#" class="text-uppercase border-end brd-gray pe-3 me-1 color-blue5 fw-bold">
								<span class="">
									Admin
								</span>
							</a>
							<i class="bi bi-clock me-1"></i>
							<span class="op-8">{{ $statistic->created_at->format('Y-m-d') }}</span>
						</small>
						<div class="mt-3">
							@foreach(json_decode($statistic->tags) as $tag)
								<span class="bg-light rounded-3 px-2 py-1 text-capitalize" style="font-size: 12px">{{ $tag->value }}</span>
							@endforeach
						</div>
					</div>
					<div class="content-card">
						<div class="img">
							<img src="{{ Voyager::image($statistic->image) }}" alt="">
						</div>
					</div>
				</div>
				<div class="row gx-4 gx-lg-5">
					<div class="col-lg-8">

						<div class="blog-content-info">
							<div class="text mb-10 color-666 text-custom">
								{!! $statistic->body !!}
							</div>
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
								@foreach ($randomStats as $rStat)
									<a href="{{ route('news.show', $rStat->slug) }}"
										class="post-card pb-3 mb-3 border-bottom brd-gray">
										<div class="img me-3">
											<img src="{{ Voyager::image($rStat->image) }}" alt="">
										</div>
										<div class="inf">
											<h6> {{ $rStat->title }} </h6>
											<p> {{ Str::limit(strip_tags($rStat->body), 50) }}... [read more]</p>
										</div>
									</a>
								@endforeach
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
