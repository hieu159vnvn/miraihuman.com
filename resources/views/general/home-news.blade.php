<section class="home-news">
				<div class="container">
					<div class="text-center">
						<h2 class="title">@lang('messages.new-title1')</h2>
					</div>
					<div class="row">
						<div class="col-md-6">
							@foreach ($tintuc as $item)
								<div class="main-news">
								<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="img"></div>
									<div class="hashtag-wrap"><a class="hashtag" href="tintuc">@lang('messages.new-title2')</a><a class="hashtag" href="tintuc">@lang('messages.new-title3')</a><a class="hashtag" href="tintuc">@lang('messages.new-title8')</a></div><a class="sub-title" href="tintuc/{{$item->slug}}">
										@php
											if (App::getLocale() == 'vi') {
												echo($item->ten);
											}else{
												echo($item->tenjp);
											}
										@endphp
									</a>
									<p>
										@php
											if (App::getLocale() == 'vi') {
												echo($item->description);
											}else{
												echo($item->descriptionjp);
											}
										@endphp
									</p>
									<a class="see-more" href="tintuc/{{$item->slug}}">@lang('messages.xemthem')</a>
							@endforeach
							</div><a class="hashtag hashtag-old" href="tintuc">@lang('messages.new-title4')</a>
							@foreach ($tintucorther as $item)
								<div class="old-news">
									<div class="posted">{{date('d-m-Y', strtotime($item->created_at))}}</div><a class="old-title" href="tintuc/{{$item->slug}}">
									@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp
									</a>
								</div>
							@endforeach
						</div>
						<div class="col-md-6">
							@php
								$tintuc = DB::table('zm_tintucs')->where([['stt','=','1'],['id_loaitintuc','=','1']])->skip(1)->take(2)->orderBy('id','desc')->get();
								$tintucorther = DB::table('zm_tintucs')->where([['stt','=','1'],['id_loaitintuc','=','1']])->skip(1)->take(4)->orderBy('id','asc')->get();
							@endphp
							@foreach ($tintuc as $item)
								<div class="sub-news">
									<div class="img-wrap"><img src="{{$urlfile.'/'.$item->image}}" alt="hoat-dong (1).jpg"></div>
									<div class="right">
										<div class="hashtag-wrap"><a class="hashtag" href="tintuc">@lang('messages.new-title5')</a><a class="hashtag" href="tintuc">@lang('messages.new-title6')</a></div><a class="sub-title" href="tintuc/{{$item->slug}}">@php
											if (App::getLocale() == 'vi') {
												echo($item->ten);
											}else{
												echo($item->tenjp);
											}
										@endphp</a>
										<p>@php
											if (App::getLocale() == 'vi') {
												echo($item->description);
											}else{
												echo($item->descriptionjp);
											}
										@endphp</p><a class="see-more" href="tintuc/{{$item->slug}}">@lang('messages.xemthem')</a>
									</div>
								</div>
							@endforeach
							<a class="hashtag hashtag-old" href="tintuc">@lang('messages.new-title7')</a>
							@foreach ($tintucorther as $item)
								<div class="old-news">
									<div class="posted">{{date('d-m-Y', strtotime($item->created_at))}}</div><a class="old-title" href="tintuc/{{$item->slug}}">@php
											if (App::getLocale() == 'vi') {
												echo($item->ten);
											}else{
												echo($item->tenjp);
											}
										@endphp</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</section>