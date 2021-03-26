@php
	$dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','asc')->get();
	$mxh = DB::table('zm_mxhs')->where('stt','=','1')->orderBy('id','desc')->get();
	$hoidap = DB::table('zm_hoidaps')->where('stt','=','1')->orderBy('id','desc')->take(4)->get();
	$tintuc = DB::table('zm_tintucs')->where('stt','=','1')->take(4)->orderBy('id','desc')->get();
	$menu = DB::table('zm_menu')->where('stt', '=', '1')->orderBy('id','asc')->get();
@endphp
<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 menu-footer">
						<div class="item col-lg-3 col-md-4 col-12">
							<h3 class="footer-title">@lang('messages.footer-title7')</h3>
							<div class="footer-content">
								@foreach ($menu as $item)
								<p class="mdi mdi-menu-right"><a href="{{$item->link}}">
								@php
									if (App::getLocale() == 'vi') {
										echo($item->ten);
									}else{
										echo($item->tenjp);
									}
								@endphp</a></p>
								@endforeach	
							</div>
						</div>
						<div class="item col-lg-3 col-md-4 col-12">
							<h3 class="footer-title">@lang('messages.footer-title1')</h3>
							<div class="footer-content">
								<p class="mdi mdi-menu-right"><a href="gioithieu">@lang('messages.footer-title2')</a></p>
								@if (App::getLocale() == 'vi')
									<p class="mdi mdi-menu-right"><a href="/giayphep">Giấy phép</a></p>
								@else
									<p class="mdi mdi-menu-right"><a href="/giayphep">ライセンス</a></p>
								@endif
								<p class="mdi mdi-menu-right"><a href="/sodotochuc">@lang('messages.layout-sodotochuc-1')</a></p>
								<p class="mdi mdi-menu-right"><a href="/gioithieucongty">@lang('messages.layout-gioithieucongty-1')</a></p>

							</div>
						</div>
						<div class="item col-lg-3 col-md-4 col-12">
							<h3 class="footer-title">@lang('messages.footer-title3')</h3>
							<div class="footer-content">
								@foreach ($hoidap as $item)
									<p class="mdi mdi-menu-right">
									<a href="hoidap">
										@php
											if (App::getLocale() == 'vi') {
												echo(str_limit($item->hoi,45));
											}else{
												echo(str_limit($item->hoijp,45));
											}
										@endphp
									</a></p>
								@endforeach	
							</div>
						</div>
						<div class="item col-lg-3 col-md-4 col-12">
							<h3 class="footer-title">@lang('messages.footer-title4')</h3>
							<div class="footer-content">
								@foreach ($tintuc as $item)
									<p class="mdi mdi-menu-right">
										<a href="tintuc/{{$item->slug}}">
										@php
											if (App::getLocale() == 'vi') {
												echo(str_limit($item->ten,38));
											}else{
												echo(str_limit($item->tenjp,38));
											}
										@endphp
										</a>
									</p>
								@endforeach	
							</div>
						</div>
						<div class="item col-lg-3 col-md-4 col-12">
							<h3 class="footer-title">@lang('messages.footer-title5')</h3>
							<div class="footer-content">
								<p style="padding: 0; text-transform: uppercase"><a href="/giayphep"><span style="font-weight: 700;">789/lđtnxh-gp</span><span>, @lang('messages.footer-title6')</span></a></p><a href="giayphep"><img src="img/icon-footer.png" alt="icon-footer"></a>
								
							</div>
						</div>
					</div>
					<div class="col-12 footer-fb">
						<img src="img/icon_face@2x.png" alt="facebook" width="69" height="69" style="margin-right: 20px;">
						<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
						{{-- @foreach ($fbfooter as $item)
							<div class="footer-fb-item">
								<div class="footer-fb-item-left">
									<img src="{{$urlfile.'/'.$item->image}}" alt="logo" width="40" height="40">
								</div>
								<div class="footer-fb-item-right">
									<p>{{$item->ten}}</p>
									<p><div class="fb-like" data-href="{{$item->link}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
									</p>
								</div>
							</div>
						@endforeach --}}
						@foreach ($fbfooter as $item)
							<div class="fb-page" data-href="{{$item->link}}" data-tabs="timeline" data-width="220" data-height="62" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="false"><blockquote cite="{{$item->link}}" class="fb-xfbml-parse-ignore"><a href="{{$item->link}}"></a></blockquote></div>
						@endforeach
					</div>
					{{-- <div class="col-12" style="text-align: center;padding:10px 0">
						<img class="logo" src="img/logo-footer.png" alt="logo-footer">
					</div> --}}
					@foreach ($dclienhe as $item)
					<div class="col-md-6 col-lg-3">
						<div class="item">
						<h3 class="footer-title">
							@php
								if (App::getLocale() == 'vi') {
									echo($item->ten);
								}else{
									echo($item->tenjp);
								}
							@endphp
						</h3>
							<div class="footer-content">
								<p class="mdi mdi-home">
									@php
										if (App::getLocale() == 'vi') {
											echo($item->diachi);
										}else{
											echo($item->diachijp);
										}
									@endphp
								</p>
								<p class="mdi mdi-phone">{{$item->dienthoai}}</p>
								@if ($item->fax=='')
									<p class="mdi mdi-fax" style="display: none">{{$item->fax}}</p>
								@else
									<p class="mdi mdi-fax">{{$item->fax}}</p>
								@endif
								<p class="mdi mdi-email">{{$item->email}}</p>
								@if ($item->website=='')
									<p class="mdi mdi-cisco-webex"  style="display: none">{{$item->website}}</p>
								@else
								<p class="mdi mdi-web">{{$item->website}}</p>
								@endif
							
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12 copyright-inner">
							<p>COPYRIGHT © 2019 MIRAIHUMAN. ALL RIGHT RESERVED.</p>
							<div class="social">
								<a class="mdi mdi-web" href="/"></a>
								@php
									$i=0;
								@endphp
								@foreach ($mxh as $item)
									@if ($i<=0)
										<a class="mdi mdi-facebook" href="{{$item->link}}" target="_blank"></a>
									@elseif($i<=1)
										<a class="mdi mdi-youtube" href="{{$item->link}}" target="_blank"></a>
									@endif
								@php
									$i++;
								@endphp
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
</html>