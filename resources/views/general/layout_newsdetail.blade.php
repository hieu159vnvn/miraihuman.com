@php
	 $donhang = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where('donhangs.stt', '=', '1')->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->take(10)->get();
	$tintuc = DB::table('zm_tintucs')->where('stt','=','1')->take(2)->orderBy('id','desc')->get();
	$tintucxemnhieu = DB::table('zm_tintucs')->where('stt','=','1')->skip(2)->take(2)->orderBy('id','desc')->get();
	$fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
	$menu1 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->take(4)->get();
    $menu2 = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','desc')->take(4)->get();
@endphp
<section class="page-banner" style="display: none"><img src="{{$urlfile.'/'.$newsdetail->image}}" alt="slide-2"></section>
			<section class="breadcrumb">
				<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="breadcrumbs">
										<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
										<a class="breadcrumb__step" href="tintuc">@lang('messages.new-title1')</a>
										<a class="breadcrumb__step" href="tintuc/{{$newsdetail->slug}}">{{$newsdetail->ten}}</a>
									</div>
							</div>
					</div>
				</div>
			</section>
			<section class="news-detail">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="post-wrap">
								<h2 class="sub-title">{{$newsdetail->ten}}</h2>
								<div class="posted">{{$newsdetail->created_at}}</div>
								<div class="post-content">
										{!!$newsdetail->noidung!!} 
										{{-- {{htmlspecialchars_decode($newsdetail->noidung)}} --}}
								</div>
							</div>
							<div class="fb-like" data-href="http://miraihuman.com/tintuc/{{$newsdetail->slug}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
							<div class="line"></div>
							<div class="viec-lam-mirai">
								<h3 class="sub-title color-title">@lang('messages.vieclammirai')</h3>
								<nav class="list-viec-lam">
									@foreach ($donhang  as $item)
									<li><a class="new" href="/donhang/{{$item->id}}">[ {{$item->tendonhang}} ] - {{$item->nganhnghe_vn}}</a></li>
									@endforeach
								</nav>
							</div>
						</div>
						<div class="col-md-3">
							<div class="other-news">
								<h3 class="sub-title">@lang('messages.newdetail-1')</h3>
								@foreach ($tintuc as $item)
									<div class="sub-news">
										<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="{{$item->slug}}"></div><a class="sub-title" href="tintuc/{{$item->slug}}">{{$item->ten}}</a>
										<div class="posted">{{$item->created_at}}</div>
										<div class="news-content">
											<p>{{$item->description}}</p>
										</div>
									</div>
								@endforeach
							</div>
							<div class="other-news">
								<h3 class="sub-title">@lang('messages.newdetail-2')</h3>
								@foreach ($tintucxemnhieu as $item)
									<div class="sub-news">
										<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="{{$item->slug}}"></div><a class="sub-title" href="tintuc/{{$item->slug}}">{{$item->ten}}</a>
										<div class="posted">{{$item->created_at}}</div>
										<div class="news-content">
											<p>{{$item->description}}</p>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<script>
				$('.post-content p img').each(function () {
				  $(this).attr('src', 'http://noibo.miraihuman.com' + $(this).attr('src')).css({ 
        display: "block", 
        margin: "16px auto 0"
        });
				  $(this).parent().append("<p style='text-align:center;font-style:italic'>" + $(this).attr('alt') + "</p>");
				});
			  </script>