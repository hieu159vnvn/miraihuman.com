{{-- <section class="page-banner"><img src="img/slide-2.png" alt="slide-2"></section> --}}
<section class="breadcrumb">
	<div class="container">
		<div class="row">
				<div class="col-12">
						<div class="breadcrumbs">
							<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
							<a class="breadcrumb__step"  href="hinhanh">@lang('messages.layout-hinhanh')</a>
							<a class="breadcrumb__step" href="hinhanh/{{$imgdetail->slug}}">
							@php
								if (App::getLocale() == 'vi') {
									echo($imgdetail->ten);
								}else{
									echo($imgdetail->tenjp);
								}
							@endphp</a>
						</div>
				</div>
		</div>
	</div>
</section>
<section class="hinh-anh">
	<div class="container">
		<div class="text-center">
			<h2 class="title">@lang('messages.layout-hinhanh')</h2>
		</div>
		<div class="row">
			<div class="col-12 hinh-anh-wrap">
				@php
					$ha_array = json_decode($imgdetail->hinhanh);
				@endphp
				@foreach ($ha_array as $item1)
					<div class="img-wrap"><a href="{{$urlfile.'/'.$item1}}" data-fancybox="images"><img src="{{$urlfile.'/'.$item1}}" alt="{{$urlfile.'/'.$item1}}"></a></div>
				@endforeach
			</div>
		</div>
	</div>
</section>
