<section class="back-2-top">
			<div class="btn-back-2-top"></div>
		</section>
		<section class="stuff-hoi-dap">
			<div class="logo"><img src="img/logo-none-sologan.png" alt="logo-none-sologan"></div>
			<div class="sidebar-wrap sidebar-hoi-dap">
				<div class="sidebar-title">@lang('messages.footer-title3')</div>
				<nav class="sidebar-inner">
					<li><a href="kysu">@lang('messages.layout-kysu')</a></li>
					<li><a href="dieuduong">@lang('messages.layout-dieuduong')</a></li>
					<li><a href="thuctapsinh">@lang('messages.layout-thuctapsinh')</a></li>
				</nav>
			</div>
			<div class="sidebar-wrap sidebar-ho-tro">
				<div class="sidebar-title">@lang('messages.home-scroll1')</div>
				<nav class="sidebar-inner">
					<li><a href="hoidap">@lang('messages.home-scroll2')</a></li>
				</nav>
			</div>
			<div class="dang-ky-ngay sidebar-title"><img src="img/icon-resume.png" alt="icon-resume"><a href="http://dangky.miraihuman.com/">@lang('messages.home-scroll3')</a></div>
			<div class="lien-he-ngay sidebar-title"><img src="img/icon-phone.png" alt="icon-phone">
				<p>@lang('messages.home-scroll4')</p>
				<form class="form-lien-he-ngay" method="post" action="store">
						{{ csrf_field() }}
					<div class="form-item">
						<input type="text" id="name" name="hovaten" placeholder="@lang('messages.home-scroll5')" value="{{ old('hovaten') }}" required>
					</div>
					<div class="form-item">
						<input type="text" id="phone" name="sodienthoai" placeholder="@lang('messages.home-scroll6')" value="{{ old('sodienthoai') }}" required>
					</div>
					<input class="btn-so-yeu-li-lich" type="submit" value="@lang('messages.layout-lienhe13')">
				</form>
			</div>
		</section>