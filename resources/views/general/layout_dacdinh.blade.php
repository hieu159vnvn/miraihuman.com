<section class="page-banner"><img src="{{$urlfile.'/'.$bannerpage->image}}" alt="slide-2"></section>
			<section class="breadcrumb">
				<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="breadcrumbs">
										<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
										<a class="breadcrumb__step" href="dacdinh">@lang('messages.layout-dacdinh')</a>
									</div>
							</div>
					</div>
				</div>
			</section>
			<section class="news">
				<div class="container">
					<div class="text-center">
						<h2 class="title">@lang('messages.layout-tintuc2')</h2>
					</div>
					<div class="row">
						{{-- <div class="col-12">
							<nav class="navbar-center">
								<li class="active"><a href="tintuc">@lang('messages.layout-tintuc3')</a></li>
								<li><a href="thuctapsinh">@lang('messages.layout-thuctapsinh')</a></li>
								<li><a href="dieuduong">@lang('messages.layout-dieuduong')</a></li>
								<li><a href="kysu">@lang('messages.layout-kysu')</a></li>
							</nav>
						</div> --}}
						{{-- @foreach ($tintuc as $item)
							<div class="col-md-6">
								<div class="main-news">	
									<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="co-khi"></div><a class="sub-title" href="tintuc/{{$item->slug}}">	
									@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp</a>
									<div class="posted">{{$item->created_at}}</div>
									<div class="news-content">
										@php
											if (App::getLocale() == 'vi') {
												echo($item->description);
											}else{
												echo($item->descriptionjp);
											}
										@endphp
									</div>
								</div>
							</div>
						@endforeach
						
						<div class="col-md-6">
							<div class="row">
								@foreach ($tintucorther as $item)
									<div class="col-md-6">
										<div class="sub-news">
											<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="co-khi"></div><a class="sub-title" href="tintuc/{{$item->slug}}">@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp</a>
											<div class="posted">{{$item->created_at}}</div>
											<div class="news-content">
													@php
											if (App::getLocale() == 'vi') {
												echo($item->description);
											}else{
												echo($item->descriptionjp);
											}
										@endphp
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						@php
							$tintucorther = DB::table('zm_tintucs')->where([['stt','=','1'],['id_loaitintuc','=','5']])->skip(5)->take(4)->orderBy('id','desc')->get();
						@endphp --}}
						@foreach ($tintuc as $item)
						<div class="col-md-3">
							<div class="sub-news">
								<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="co-khi"></div><a class="sub-title" href="tintuc/{{$item->slug}}">@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp</a>
								<div class="posted">{{$item->created_at}}</div>
								<div class="news-content">
											@php
											if (App::getLocale() == 'vi') {
												echo($item->description);
											}else{
												echo($item->descriptionjp);
											}
										@endphp
								</div>
							</div>
						</div>
						@endforeach
						{{-- <div class="col-12">
							<div class="tabs-pagination"><a class="first-page isDisabled" href="/"><span class="mdi mdi-chevron-double-left"></span></a><a class="back-page isDisabled" href="/"><span class="mdi mdi-chevron-left"></span></a><a class="current-page" href="/">1</a><a href="/">2</a><a href="/">3</a><a class="next-page" href="/"><span class="mdi mdi-chevron-right"></span></a><a class="last-page" href="/"><span class="mdi mdi-chevron-double-right"></span></a></div>
						</div> --}}
						<div class="col-12">
							{!!$tintuc->links()!!}
						</div>
					</div>
				</div>
			</section>