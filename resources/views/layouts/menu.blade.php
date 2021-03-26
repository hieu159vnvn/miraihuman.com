@php
	$logo = DB::table('zm_logos')->take(1)->orderBy('id','desc')->get();
	$dclienhe = DB::table('zm_dclienhes')->where('stt','=','1')->orderBy('id','asc')->get();
@endphp
<header>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="header-top-inner">
							<div class="header-left">
							
								@php
									$i=0;
								@endphp
								@foreach ($dclienhe as $item)
								@if ($i<=0)
									<p><span class="mdi mdi-email"></span><span>{{$item->email}}</span></p>
									<p><span class="mdi mdi-phone"></span><span>Hotline: {{$item->dienthoai}}</span></p>
								@endif
								@php
									$i++;
								@endphp
								@endforeach
							</div>
							@foreach($logo as $item)
							<div class="header-logo"><a href="/"><img src="{{$urlfile.'/'.$item->image}}" alt="logo-desktop"><img src="img/logo.png" alt="logo-mobile"></a></div>
							@endforeach
							<div class="header-right">
								<form class="search-box" role="search">
									<input type="search" name="search" class="form-control search-input" placeholder="@lang('messages.searchbox')" autocomplete="off">
								</form>
								<div class="language-bar">
									<a href="getlocale/vi"><img src="img/flag-vn.png" alt="vn"></a>
									<a href="getlocale/jp"><img src="img/flag-jp.png" alt="jp"></a>
								
								</div>
								<script>
									$(document).ready(function(){
										 var engine1 = new Bloodhound({
											 remote: {
												 url: '/search/name?value=%QUERY%',
												 wildcard: '%QUERY%'
											 },
											 datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
											 queryTokenizer: Bloodhound.tokenizers.whitespace
										 });
										 $(".search-input").typeahead({
											 hint: true,
											 highlight: true,
											 minLength: 1
										 }, [
											 {
												 source: engine1.ttAdapter(),
												 name: 'students-name',
												 display: function(data) {
													 return data.name;
												 },
												 templates: {
													 empty: [
														 'Nothing found'
													 ],
													
													 suggestion: function (data) {
														 return '<a href="/donhang/' + data.id + '" class="list-group-item">' + data.nganhnghe_vn + '<br></br></a>';
														 
													 }
												 }
											 }, 
										 ]);
									 });
								 </script>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12" style="display:flex">
							<div class="toggle-menu"><span></span><span></span><span></span><span></span><span></span><span></span></div>
						</div>
						<div class="header-bottom-inner">
							<nav class="navbar-left">
								<a class="active" href="/"><span class="mdi mdi-home"></span><span>TRANG CHỦ</span></a>
							@foreach ($menu1 as $item)
								<a href="{{$item->link}}">
									@php
										if (App::getLocale() == 'vi') {
											echo($item->ten);
										}else{
											echo($item->tenjp);
										}
									@endphp
								</a>
							@endforeach
							</nav>
							<nav class="navbar-right">
								@foreach ($menu2 as $item)
									<a href="{{$item->link}}">
										@php
											if (App::getLocale() == 'vi') {
												echo($item->ten);
											}else{
												echo($item->tenjp);
											}
										@endphp
									</a>
								@endforeach
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
	@if(session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	@endif