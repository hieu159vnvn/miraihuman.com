<section class="dao-tao-giao-duc">
				<div class="container">
					<div class="row" data-aos="zoom-out-right" data-aos-duration="1000" data-aos-delay="500" data-aos-anchor=".hoat-dong-mirai .img-wrap" data-aos-anchor-placement="top-center">
						<div class="col-12 text-center">
							<h2 class="title">@lang('messages.educate-title1')</h2><img src="img/line.png" alt="line">
							<div class="content">
								@foreach ($daotaohome as $item)
								@php
									if (App::getLocale() == 'vi') {
										echo($item->noidung);
									}else{
										echo($item->noidungjp);
									}
								@endphp
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>