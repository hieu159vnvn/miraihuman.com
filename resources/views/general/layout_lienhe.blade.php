<section class="page-banner"><img src="{{$urlfile.'/'.$bannerpage->image}}" alt="slide-2"></section>
			<section class="breadcrumb">
				<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="breadcrumbs">
										<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
										<a class="breadcrumb__step" href="lienhe">@lang('messages.layout-lienhe1')</a>
									</div>
							</div>
					</div>
				</div>
			</section>
			<section class="contact">
				<div class="container">
					<div class="text-center">
						<h2 class="title">@lang('messages.layout-lienhe1')</h2>
						<p>@lang('messages.layout-lienhe2')</p>
						<p>@lang('messages.layout-lienhe3')</p>
					</div>
					<div class="row">
						<div class="col-md-3 padding-0">
							<div class="contact-wrap">
								@foreach ($dclienhe as $item)
								<div class="item">
										<h3 class="item-title">
											@php
												if (App::getLocale() == 'vi') {
													echo($item->ten);
												}else{
													echo($item->tenjp);
												}
											@endphp
										</h3>
										<p class="mdi mdi-map-marker">{{$item->diachi}}</p>
										<p class="mdi mdi-phone">{{$item->dienthoai}}</p>
									</div>
								@endforeach
							</div>
						</div>
						<div class="col-md-9">
							<div class="maps">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.885689624953!2d106.73300971417142!3d10.74329256274364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175257802175f77%3A0xc66eb0394d7b9fcb!2sMirai%20Human!5e0!3m2!1svi!2s!4v1569634429025!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
						</div>
						<div class="col-12">
							<form class="row contact-form" method="post" action="lienhe/store">
								{{ csrf_field() }}
								<div class="form-item col-md-6">
									<label for="name">@lang('messages.layout-lienhe4')</label>
									<input type="text" name="hovaten" placeholder="@lang('messages.layout-lienhe9')" value="{{ old('hovaten') }}" required>
								</div>
								<div class="form-item col-md-6">
									<label for="email">@lang('messages.layout-lienhe5')</label>
									<input type="text" name="email" placeholder="exemple@email.com"  value="{{ old('email') }}" required>
								</div>
								<div class="form-item col-md-6">
									<label for="title">@lang('messages.layout-lienhe6')</label>
									<input type="text" name="tieude" placeholder="@lang('messages.layout-lienhe10')"  value="{{ old('tieude') }}" >
								</div>
								<div class="form-item col-md-6">
									<label for="phone">@lang('messages.layout-lienhe7')</label>
									<input type="text" name="sodienthoai" placeholder="@lang('messages.layout-lienhe11')"  value="{{ old('sodienthoai') }}">
								</div>
								<div class="form-item col-12">
									<label for="content">@lang('messages.layout-lienhe8')</label>
									<textarea id="content" name="noidung" placeholder="@lang('messages.layout-lienhe12')" value="{{ old('noidung') }}" required></textarea>
								</div>
								<div class="col-12" style="text-align: right">
									<input class="contact-send" type="submit" value="@lang('messages.layout-lienhe13')">
								</div>
							</form>
							<p style="text-align:center;font-size: 24px;
							background-color: antiquewhite;
							margin-top: 10px;">{{ session('status') }}</p>
						</div>
					</div>
				</div>
			</section>