<section class="home-gioi-thieu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="title">@lang('messages.gioithieu-title1')</h2>
							<p>@lang('messages.gioithieu-title2')</p>
							<p>@lang('messages.gioithieu-title3')</p>
						</div>
						@foreach ($gioithieuhome as $item)
						<div class="col-6 col-md-3 item"><img src="{{$urlfile.'/'.$item->image}}" alt="{{$item->image}}">
								<h3 class="sub-title">
									@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp
							   </h3>
								<p>
									@php
										 if (App::getLocale() == 'vi') {
											echo($item->noidung);
										}else{
											echo($item->noidungjp);
										}
									@endphp
								</p>
							</div>
						@endforeach
						
					</div>
				</div>
			</section>