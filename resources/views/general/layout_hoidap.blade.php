<section class="page-banner"><img src="{{$urlfile.'/'.$bannerpage->image}}" alt="slide-2"></section>
			<section class="breadcrumb">
				<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="breadcrumbs">
										<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
										<a class="breadcrumb__step" href="gioithieu">@lang('messages.layout-hoidap')</a>
									</div>
							</div>
					</div>
				</div>
			</section>
			<section class="hoi-dap">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<nav class="sidebar">
								@php
									$i=1;
								@endphp
								@foreach ($loaihoidap as $item)
									<li onclick="openCity('nhom{{$i}}')">	
									@php
										if (App::getLocale() == 'vi') {
											echo($item->tenloai);
										}else{
											echo($item->tenloaijp);
										}
									@endphp</li>
								@php
									$i++;
								@endphp
								@endforeach
							</nav>
						</div>
						<div class="col-md-9 hoidap" id="nhom1">
							<div class="hoi-dap-content">
                                <h3 class="sub-title">@lang('messages.layout-hoidap')</h3>
                                @foreach ($nhom1 as $item)
                                    <div class="item">
										<div class="item-title">	
											@php
												if (App::getLocale() == 'vi') {
													echo($item->hoi);
												}else{
													echo($item->hoijp);
												}
											@endphp
										</div>
											<div class="item-content">
												<p>
												@php
													if (App::getLocale() == 'vi') {
														echo($item->dap);
													}else{
														echo($item->dapjp);
													}
												@endphp</p>
											</div>
										</div>
                                @endforeach
							</div>
						</div>
						<div class="col-md-9 hoidap" id="nhom2" style="display: none">
							<div class="hoi-dap-content">
                                <h3 class="sub-title">@lang('messages.layout-hoidap')</h3>
                                @foreach ($nhom2 as $item)
                                    <div class="item">
										<div class="item-title">@php
												if (App::getLocale() == 'vi') {
													echo($item->hoi);
												}else{
													echo($item->hoijp);
												}
											@endphp</div>
											<div class="item-content">
												<p>@php
													if (App::getLocale() == 'vi') {
														echo($item->dap);
													}else{
														echo($item->dapjp);
													}
												@endphp</p>
											</div>
										</div>
                                @endforeach
							</div>
						</div>
						<div class="col-md-9 hoidap" id="nhom3" style="display: none">
							<div class="hoi-dap-content">
                                <h3 class="sub-title">@lang('messages.layout-hoidap')</h3>
                                @foreach ($nhom3 as $item)
                                    <div class="item">
										<div class="item-title">@php
												if (App::getLocale() == 'vi') {
													echo($item->hoi);
												}else{
													echo($item->hoijp);
												}
											@endphp</div>
											<div class="item-content">
												<p>@php
													if (App::getLocale() == 'vi') {
														echo($item->dap);
													}else{
														echo($item->dapjp);
													}
												@endphp</p>
											</div>
										</div>
                                @endforeach
							</div>
						</div>
						<div class="col-md-9 hoidap" id="nhom4" style="display: none">
							<div class="hoi-dap-content">
                                <h3 class="sub-title">@lang('messages.layout-hoidap')</h3>
                                @foreach ($nhom4 as $item)
                                    <div class="item">
										<div class="item-title">@php
												if (App::getLocale() == 'vi') {
													echo($item->hoi);
												}else{
													echo($item->hoijp);
												}
											@endphp</div>
											<div class="item-content">
												<p>@php
													if (App::getLocale() == 'vi') {
														echo($item->dap);
													}else{
														echo($item->dapjp);
													}
												@endphp</p>
											</div>
										</div>
                                @endforeach
							</div>
						</div>
						<div class="col-md-9 hoidap" id="nhom5" style="display: none">
							<div class="hoi-dap-content">
                                <h3 class="sub-title">@lang('messages.layout-hoidap')</h3>
                                @foreach ($nhom5 as $item)
                                    <div class="item">
										<div class="item-title">@php
												if (App::getLocale() == 'vi') {
													echo($item->hoi);
												}else{
													echo($item->hoijp);
												}
											@endphp</div>
											<div class="item-content">
												<p>@php
													if (App::getLocale() == 'vi') {
														echo($item->dap);
													}else{
														echo($item->dapjp);
													}
												@endphp</p>
											</div>
										</div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			
<script>
	function openCity(cityName) {
	  var i;
	  var x = document.getElementsByClassName("hoidap");
	  for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	  }
	  document.getElementById(cityName).style.display = "block";  
	}
</script>