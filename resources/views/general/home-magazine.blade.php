<section >
    <div class="container">
        <div class="magazine-wrap">
			<div class="magazine-title">
				<p>@lang('messages.layout-magazine')</p>
			</div>
			<div class="magazine" >
				<div class="swiper-container">
					<div class="swiper-wrapper">
						@foreach ($magazine as $item)
							<div class="swiper-slide">
								<a class="magazine-item" href="{{$item->link}}" target="_blank">
									@if ($item->image)
										<img class="magazine-img"  src="{{$urlfile.'/'.$item->image}}" alt="">
									@else
										<img class="magazine-img"  src="https://via.placeholder.com/239x134" alt="">
									@endif
								</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="pagination"></div>
    </div>
</section>