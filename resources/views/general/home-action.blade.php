<section class="down-chevron text-center"><img src="img/icon-down-chevron.png" alt="icon-down-chevron"></section>
			<section class="hoat-dong-mirai" data-aos="zoom-in" data-aos-duration="1000">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="title">@lang('messages.action-title1')</h2><img src="img/line.png" alt="line">
						</div>
						<div class="col-12 slide-hoat-dong">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									@foreach ($hinhanh as $item)
										@php
											$ha_array = json_decode($item->hinhanh);
										@endphp
										<div class="swiper-slide">
											<a href="hinhanh/{{$item->slug}}" class="img-wrap"> <img src="{{$urlfile.'/'.$ha_array[0]}}" alt="{{$item->slug}}"></a>
										</div>
									@endforeach
								</div>
							</div>
							<div class="pagination"></div>
						</div>
					</div>
				</div>
			</section>