@php
	 $donhang = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where('donhangs.stt', '=', '1')->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->take(10)->get();
	$tintuc = DB::table('zm_tintucs')->where('stt','=','1')->take(2)->orderBy('id','desc')->get();
	$tintucxemnhieu = DB::table('zm_tintucs')->where('stt','=','1')->skip(2)->take(2)->orderBy('id','desc')->get();
@endphp
<section class="page-banner"><img src="img/slide-2.png" alt="slide-2"></section>
			<section class="breadcrumb">
				<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="breadcrumbs">
										<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
										<a class="breadcrumb__step" href="tintuc">@lang('messages.layout-giayphep')</a>
									</div>
							</div>
					</div>
				</div>
			</section>
			<section class="news-detail">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="post-wrap">
								@if (App::getLocale() == 'vi')
									<img src="img/image.png" alt="giay-phep" style="width:100%">
								@else
									<img src="img/giayphep-dich.png" alt="giay-phep" style="width:100%">
								@endif
							</div>
							<div class="line"></div>

						</div>

					</div>
				</div>
			</section>