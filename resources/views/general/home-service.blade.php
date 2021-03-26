<section class="chuong-trinh-dich-vu">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="title">@lang('messages.service-title1')</h2><img src="img/line.png" alt="line">
						</div>
						@foreach ($dichvuhome as $item)
							<div class="col-md-6">
								<div class="item"><img src="{{$urlfile.'/'.$item->image}}" alt="{{$item->image}}">
									<div class="item-content">
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
										<a class="see-more" href="duhocsinh">@lang('messages.xemchitiet')</a>
									</div>
								</div>
							</div>
						@endforeach
						
					</div>
				</div>
			</section>