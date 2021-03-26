{{-- <section class="page-banner"><img src="img/slide-2.png" alt="slide-2"></section> --}}
<section class="breadcrumb">
	<div class="container">
		<div class="row">
				<div class="col-12">
						<div class="breadcrumbs">
							<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
							<a class="breadcrumb__step" href="hinhanh">@lang('messages.layout-hinhanh1')</a>
						</div>
				</div>
		</div>
	</div>
</section>
<section class="hinh-anh-album">
	<div class="container">
		<div class="text-center">
			<h2 class="title">@lang('messages.layout-hinhanh2')</h2>
		</div>
		<div class="hinh-anh-album-content">
			@foreach ($hinhanh as $item)
				@php
					$ha_array = json_decode($item->hinhanh);
				@endphp
				<figure class="hinh-anh-album-wrap">
					<a href="hinhanh/{{$item->slug}}" class="{{$item->slug}}">
						<div class="hinh-anh-album-img">
							<img src="{{$urlfile.'/'.$ha_array[0]}}" alt="{{$item->slug}}">
						</div>
						<figcaption class="hinh-anh-album-title">
							@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp
						</figcaption>
					</a>	
				</figure>
			@endforeach
		</div>
	</div>
</section>
