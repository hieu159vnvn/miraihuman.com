<section class="video-slide">
    <div class="container">
        <div class="row">
			<div class="col-12 text-center">
				<h2 class="title">@lang('messages.video-title1')</h2><img src="img/line.png" alt="line">
			</div>
            
            <div class="col-lg-8 col-md-6 col-12">
                <div class="swiper-container bottom-swiper">
                    <div class="swiper-wrapper">
						@if (App::getLocale() == 'vi')
							@foreach ($video as $item)
							<div class="swiper-slide">
								<figure>
									<iframe width="100%" height="500px" src="{{$item->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</figure>
							</div>
							@endforeach
						@else
							@foreach ($videojp as $item)
							<div class="swiper-slide">
								<figure>
									<iframe width="100%" height="500px" src="{{$item->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</figure>
							</div>
							@endforeach
						@endif
                    </div>
                </div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="swiper-container top-swiper">
					<div class="swiper-wrapper" >
						@if (App::getLocale() == 'vi')
							@foreach ($video as $item)
								<div class="swiper-slide w100i">
									<p>{{$item->ten}}</p>
								</div>
							@endforeach
						@else
							@foreach ($videojp as $item)
								<div class="swiper-slide w100i">
									<p>{{$item->ten}}</p>
								</div>
							@endforeach
						@endif
					</div>
					<div class="line"></div>
				</div>
			</div>
        </div>
    </div>
</section>