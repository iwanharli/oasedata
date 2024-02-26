@extends('layouts.news')

@section('content')
	<!--Contents-->
	<main class="blog-page style-5 color-4">
		<!-- ====== start all-news ====== -->
		<section class="all-news section-padding blog bg-transparent style-3">
			<div class="container">
				<div class="row gx-11 gx-lg-11">
					<div class="col-lg-8">
						@foreach ($statistics as $statistic)
							<div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
								<div class="row">
									<div class="col-lg-5">
										<div class="img img-cover">
											{{-- <a href="{{ route('news.show', $news->slug) }}"> --}}
											<img src="{{ Voyager::image($statistic->image) }}" class="radius-7" alt="...">
											{{-- </a> --}}
										</div>
									</div>
									<div class="col-lg-7">
										<div class="card-body p-0">
											<small class="d-block date text">
												<a href="#"
													class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">
													statistic </a>
												<i class="bi bi-clock me-1"></i>
												<a href="{{ route('statistic.show', $statistic->slug) }}" class="op-8">
													{{ $statistic->created_at->format('Y-m-d') }}
												</a>
											</small>
											<a href="{{ route('statistic.show', $statistic->slug) }}"
												class="card-title mb-10">{{ $statistic->title }}</a>
											<p class="fs-13px color-666">{{ Str::limit(strip_tags($statistic->body), 150) }}
												... [read more]</p>
											<div class="auther-comments d-flex flex-column small justify-content-between op-9 gap-2">
												<div>
													@foreach(json_decode($statistic->tags) as $tag)
														<span class="bg-light rounded-3 px-2 py-1">{{ $tag->value }}</span>
													@endforeach
												</div>
												<div class="l_side d-flex align-items-center">
													<span
														class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue4 p-2 me-2 text-white">
														a
													</span>
													<small class="text-muted">By</small> &nbsp; Admin
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
						
						{{-- Pagination --}}
						@if($statistics->lastPage() > 1)
							<div class="pagination style-5 color-4 justify-content-center mt-60">
								{{-- Prev Page --}}
								@if($statistics->currentPage() > 1)
									<a href="{{ $statistics->previousPageUrl() }}">
										<span class="text"><i class="fas fa-chevron-left"></i> prev </span>
									</a>
								@endif

								@for($i = 1; $i <= $statistics->lastPage(); $i++)
									<a href="{{ $statistics->url($i) }}" class="{{ ($statistics->currentPage() == $i) ? 'active' : '' }}">
										<span>{{ $i }}</span>
									</a>
								@endfor

								{{-- Next Page --}}
								@if($statistics->currentPage() < $statistics->lastPage())
									<a href="{{ $statistics->nextPageUrl() }}">
										<span class="text">next <i class="fas fa-chevron-right"></i> </span>
									</a>
								@endif
							</div>
						@endif
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
									Statistik lainnya
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
