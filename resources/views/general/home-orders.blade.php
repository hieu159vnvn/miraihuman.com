<script>
	$(document).ready(function(){
	
		$(document).on('click', '.pagination a', function(event){
		event.preventDefault(); 
		var page = $(this).attr('href').split('page=')[1];
		fetch_data(page);
		});
	
		function fetch_data(page)
		{
			$.ajax({
			url:"/vieclam/fetch_data?page="+page,
			success:function(data)
			{
			var b="";
			var a = data.data.forEach(element => {
				b = b + '<div class="row content-item">'+
										'<div class="col-md-6"><a href="donhang/'+ element.id +'">[ '+ element.tendonhang +'] '+ element.nganhnghe_vn +'</a></div>'+
										'<div class="col-4 col-md-2">'+ element.trinhdo +'</div>'+
										'<div class="col-4 col-md-2">'+ element.luongcoban +'</div>'+
										'<div class="col-4 col-md-2"><a href="donhang/'+ element.id +'">'+ element.noilamviec +'</a></div>'+
									'</div>';
			});
			$('.tabs-content-wrap').html(b);
			}
			});     
		}
	});
</script>
<section class="viec-lam">
	<div class="container">
		<div class="row">
			<div class="col-12 viec-lam-title">
				<h2 class="title">@lang('messages.vieclam-title1')</h2>
				<nav class="viec-lam-tabs">
					<li  class="active" tabs="dieu-duong-ho-ly">@lang('messages.vieclam-title4')</li>
					<li  tabs="tai-nhat-ban">@lang('messages.vieclam-title2')</li>
					<li tabs="ky-su-thong-dich-vien">@lang('messages.vieclam-title3')</li>
					<li tabs="dac-dinh">@lang('messages.vieclam-title11')</li>
				</nav>
			</div>
			<div class="col-12 tabs-content">
				<div class="row content-header">
					<div class="col-md-6">@lang('messages.vieclam-title5')</div>
					<div class="col-4 col-md-2">@lang('messages.vieclam-title6')</div>
					<div class="col-4 col-md-2">@lang('messages.vieclam-title7')</div>
					<div class="col-4 col-md-2">@lang('messages.vieclam-title8')</div>
				</div>
				<div class="tabs-content-wrap active" tabs="dieu-duong-ho-ly">
					@foreach ($dieuduong as $dh)
						<div class="row content-item">
							<div class="col-md-6"><a href="donhang/{{$dh->id}}">[{{$dh->tendonhang}}] {{$dh->nganhnghe_vn}}</a></div>
							<div class="col-4 col-md-2">{{$dh->trinhdo}}</div>
							<div class="col-4 col-md-2">{{$dh->luongcoban}}</div>
							<div class="col-4 col-md-2"><a href="donhang/{{$dh->id}}">{{$dh->noilamviec}}</a></div>
						</div>
					@endforeach
				</div>
				<div class="tabs-content-wrap" tabs="tai-nhat-ban">
						@foreach ($thuctap as $dh)
							<div class="row content-item">
								<div class="col-md-6"><a href="donhang/{{$dh->id}}">[{{$dh->tendonhang}}] {{$dh->nganhnghe_vn}}</a></div>
								<div class="col-4 col-md-2">{{$dh->trinhdo}}</div>
								<div class="col-4 col-md-2">{{$dh->luongcoban}}</div>
								<div class="col-4 col-md-2"><a href="donhang/{{$dh->id}}">{{$dh->noilamviec}}</a></div>
							</div>
						@endforeach
					</div>
				<div class="tabs-content-wrap " tabs="ky-su-thong-dich-vien">
					@foreach ($kysu as $dh)
					<div class="row content-item">
						<div class="col-md-6"><a href="donhang/{{$dh->id}}">[{{$dh->tendonhang}}] {{$dh->nganhnghe_vn}}</a></div>
						<div class="col-4 col-md-2">{{$dh->trinhdo}}</div>
						<div class="col-4 col-md-2">{{$dh->luongcoban}}</div>
						<div class="col-4 col-md-2"><a href="donhang/{{$dh->id}}">{{$dh->noilamviec}}</a></div>
					</div>
					@endforeach
				</div>
				<div class="tabs-content-wrap " tabs="dac-dinh">
					@foreach ($dacdinh as $dh)
					<div class="row content-item">
						<div class="col-md-6"><a href="donhang/{{$dh->id}}">[{{$dh->tendonhang}}] {{$dh->nganhnghe_vn}}</a></div>
						<div class="col-4 col-md-2">{{$dh->trinhdo}}</div>
						<div class="col-4 col-md-2">{{$dh->luongcoban}}</div>
						<div class="col-4 col-md-2"><a href="donhang/{{$dh->id}}">{{$dh->noilamviec}}</a></div>
					</div>
					@endforeach
				</div>
				<div class="row content-bottom">
					<div class="col-lg-7 bottom-left">
						<p>@lang('messages.vieclam-title9')</p>
						<div class="info">
						@foreach ($thongtinlienlac as $item)
						<p><span class="mdi mdi-email"></span><span>Email: {{$item->email}}</span></p>
							<p><span class="mdi mdi-phone"></span><span>Hotline: {{$item->dienthoai}}</span></p>
						@endforeach
						</div>
						
					</div>
					<div class="col-lg-5 bottom-right">
						<div class="tabs-pagination">{!!$thuctap->links()!!}<a class="see-all" href="vieclam">@lang('messages.vieclam-title10')</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>