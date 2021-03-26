<section class="cam-nhan-hoc-vien">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2 class="title">@lang('messages.feel-title1')</h2><img src="img/line.png" alt="line">
						</div>
						<div class="col-12 swiper-container">
							<div class="swiper-wrapper">
								@foreach ($camnhan as $item)
								<div class="swiper-slide">
										<div class="item">
											<div class="box-content">
												<p>
													@php
													if (App::getLocale() == 'vi') {
														echo($item->noidung);
													}else{
														echo($item->noidungjp);
													}
												@endphp
												</p>
												<div class="user-detail">
													<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="user"></div>
													<div class="detail">
														<h3>{{$item->tenhocvien}}</h3>
														<p>
															@php
																if (App::getLocale() == 'vi') {
																	echo($item->nganhnghe);
																}else{
																	echo($item->nganhnghejp);
																}
															@endphp
														</p>
													</div>
												</div>
											</div>
											<div class="watermark"><img src="img/logo.png" alt="logo"><img src="img/quote-sign.png" alt="quote-sign"></div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						<div class="pagination"></div>
					</div>
				</div>
			</section>