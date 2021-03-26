
<section class="home-banner">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						@php
							$i=0;
						@endphp
							@foreach ($banner as $item)
							@if ($i<=0)
							<a href="{{$item->link}}">
								<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="orther"></div>
							</a>
							@elseif ($i<=1)
							<div class="swiper-slide">
								<a href="{{$item->link}}">
									<div class="img-wrap banner-img-1"><img src="{{$urlfile.'/'.$item->image}}" alt="home-slide-1"></div>
									<div class="container banner-inner banner-inner-1">
										<div class="row transformY-center">
											<div class="col-6 banner-item-1">
												<div class="banner-title">
													<p>@lang('messages.banner-title1')</p>
													<h2 class="title">@lang('messages.banner-title2')</h2>
												</div>
												<div class="banner-content">
													<div class="flex-box">
														<div>100%</div>
														<div>
															<p><strong>@lang('messages.banner-title3')</strong> @lang('messages.banner-title4')</p>
															<p>@lang('messages.banner-title5')</p>
															<p>@lang('messages.banner-title6')</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
							@elseif($i<=2)
							<div class="swiper-slide">
								<a href="{{$item->link}}">
									<div class="img-wrap banner-img-2"><img src="{{$urlfile.'/'.$item->image}}" alt="home-slide-2"></div>
									<div class="container banner-inner">
										<div class="row transformY-center">
											<div class="col-8 banner-item-2">
												<div class="banner-title">
													<h2 class="title">@lang('messages.banner2-title1')</h2>
													<p>@lang('messages.banner2-title2')</p>
													<div class="line"></div>
												</div>
												<div class="banner-content">
													<p>@lang('messages.banner2-title3')</p>
													<p>@lang('messages.banner2-title4')</p>
											</div>
										</div>
									</div>
								</div>
								</a>
							</div>
							@elseif($i<=3)
							<div class="swiper-slide">
								<a href="{{$item->link}}">
								<div class="img-wrap banner-img-3"><img src="{{$urlfile.'/'.$item->image}}" alt="slide-2"></div>
								<div class="container banner-inner">
									<div class="row transformY-center">
										<div class="col-5 banner-item-3">
											<div class="banner-title">
												<h2 class="title"><span>@lang('messages.banner3-title1')</span></h2>
												<p>@lang('messages.banner3-title2')</p>
											</div>
											<div class="banner-content">
												<p>@lang('messages.banner3-title3')</p>
												<p>@lang('messages.banner3-title4')</p>
											</div>
										</div>
									</div>
								</div>
								</a>
							</div>
							@elseif ($i>4)
							<div class="swiper-slide">
								<a href="{{$item->link}}">
								<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="orther"></div>
								</a>
							</div>
							@endif
							@php
									$i++;
							@endphp
							@endforeach		
					</div>
				</div>
				<div class="pagination"></div>
			</section>