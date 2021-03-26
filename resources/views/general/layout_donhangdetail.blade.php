@php
	 $donhang = DB::table('donhangs')->join('nganhnghes', 'donhangs.nganhnghe_id', '=', 'nganhnghes.id')->where('donhangs.stt', '=', '1')->select('donhangs.*','nganhnghes.nganhnghe_vn as nganhnghe_vn')->orderBy('donhangs.id','desc')->take(12)->get();
	 $fbfooter = DB::table('zm_fbfooter')->where('stt', '=', '1')->orderBy('id','desc')->get();
@endphp
<section class="page-banner"><img src="{{$urlfile.'/'.$bannerpage->image}}" alt="slide-2"></section>
			<section class="breadcrumb">
				<div class="container">
					<div class="row">
							<div class="col-12">
									<div class="breadcrumbs">
										<a class="breadcrumb__step breadcrumb__step--active" href="/">@lang('messages.trangchu')</a>
										<a class="breadcrumb__step" href="vieclam">@lang('messages.layout-donhangdetail1')</a>
										<a class="breadcrumb__step" href="donhang/{{$donhangdetail->id}}">{{$donhangdetail->nganhnghe_vn}}</a>
									</div>
							</div>
					</div>
				</div>
			</section>
			<section class="tuyen-dung">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
						<h2 class="sub-title color-title">[ {{$donhangdetail->tendonhang}} ] {{$donhangdetail->nganhnghe_vn}}</h2>
							<div class="line"></div>
							<table class="table-tuyen-dung">
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail2')</td>
									<td>{{$donhangdetail->noilamviec}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail3')</td>
									<td>{{$donhangdetail->nganhnghe_vn}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail4')</td>
									<td>{{$donhangdetail->thoigian}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail5')</td>
									<td>{{$donhangdetail->luongcoban}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail6')</td>
									<td>{{$donhangdetail->khautru}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail7')</td>
									<td>{{$donhangdetail->luongthuclanh}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail8')</td>
									<td>{{$donhangdetail->ngaytuyenbd}}</td>
								</tr>
								{{-- <tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail9')</td>
									<td>{{$donhangdetail->soluongtuyen}}</td>
								</tr> --}}
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail10')</td>
									<td>{{$donhangdetail->dukienxc}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail11')</td>
									<td>{{$donhangdetail->trinhdo}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail12')</td>
									<td>{{$donhangdetail->yeucau}}</td>
								</tr>
								<tr>
									<td class="fw-700">@lang('messages.layout-donhangdetail13')</td>
									<td>@lang('messages.layout-donhangdetail14') 20~28</td>
								</tr>
							</table>
							<div class="line"></div>
							<div class="button-wrap">
								<a href="http://dangky.miraihuman.com/"class="btn-so-yeu-li-lich">@lang('messages.layout-donhangdetail15')</a>
								{{-- <a href="https://drive.google.com/file/d/1jvvV2kL-sdpGvVhaNhG1Wu85_qfo0DWj/view?usp=sharing"><button class="btn-ung-tuyen-ngay">tải cv</button></a> --}}
							</div>
						</div>
						<div class="col-md-3">
							<div class="viec-lam-mirai">
								<h3 class="sub-title color-title">@lang('messages.vieclammirai')</h3>
								<nav class="list-viec-lam">
									@foreach ($donhang as $item)
									<li><a class="new" href="donhang/{{$item->id}}">[ {{$item->tendonhang}} ] - {{$item->nganhnghe_vn}}</a></li>
									@endforeach
								</nav>
							</div>
						</div>
					</div>
				</div>
			</section>
			{{-- <section class="tuyen-dung-popup">
				<h3 class="sub-title color-title">upload cv
					<div class="mdi mdi-close"></div>
				</h3>
				<form class="tuyen-dung-form" method="post" action="/uploadh" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-item">
						<label for="name">Họ và tên</label>
						<input type="text" id="name" name="hovaten" placeholder="Nhập họ và tên"  value="{{ old('hovaten') }}" required>
					</div>
					<div class="form-item">
						<label for="email">Email</label>
						<input type="text" id="email" name="email" placeholder="exemple@email.com"  value="{{ old('email') }}" required>
					</div>
					<div class="form-item">
						<label for="title">Tiêu đề</label>
						<input type="text" id="title" name="tieude" placeholder="Nhập tiêu đề" value="{{ old('tieude') }}" required>
					</div>
					<div class="form-item">
						<label for="phone">Số điện thoại</label>
						<input type="text" id="phone" name="sodienthoai" placeholder="Nhập Số điện thoại" value="{{ old('sodienthoai') }}" required>
					</div>
					<div class="form-item">
						<label for="content">Nội dung</label>
						<textarea id="content" name="noidung" placeholder="Nhập nội dung..." value="{{ old('noidung') }} "required></textarea>
					</div>
					<div class="custom-input-file">
						<input type="file" id="file-cv" name="thumb">
						<label for="file-cv">Chọn file CV (định dạng PNG,JPG,JPEG)</label>
					</div>
					<input style="display:none" type="text" id="tendonhang" name="tendonhang" value="[ {{$donhangdetail->tendonhang}} ] {{$donhangdetail->nganhnghe_vn}}" >
					<div class="form-item" style="display:block;text-align:center">
						<button class="btn-ung-tuyen-ngay">ứng tuyển ngay</button>
					</div>
				</form>
			</section> --}}
			<div class="tuyen-dung-popup-background"></div>
