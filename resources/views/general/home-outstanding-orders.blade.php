
    <section class="don-hang-noi-bat">
				<div class="container">
					<div class="text-center">
						<h2 class="title">@lang('messages.dhnb-title1')</h2>
					</div>
					<div class="row">
                        @php
                            $i=0;
                        @endphp
                        @foreach ($donhangnoibat as $dh)
                            @if($i<=0)
                                <div class="col-md-6 col-lg-3">
                                    <div class="item item-1">
                                        <h3 class="sub-title sub-title-1">{{$dh->tendonhang}}</h3>
                                        <div class="item-content">
                                            <p>@lang('messages.dhnb-title6') {{str_limit($dh->nganhnghe_vn,17)}}</p>
                                            <p>@lang('messages.dhnb-title2') {{$dh->noilamviec}}</p>
                                            <p>@lang('messages.dhnb-title3') {{$dh->soluongtuyen}}</p>
                                            <p>@lang('messages.dhnb-title4') {{$dh->luongcoban}}</p>
                                            <p>@lang('messages.dhnb-title5') {{$dh->ngaytuyenbd}}</p><a class="see-more" href="donhang/{{$dh->id}}">@lang('messages.xemchitiet')</a>
                                            <div class="parallelogram"><img src="img/co-khi.jpg" alt="co-khi"></div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($i<=1)
                                <div class="col-md-6 col-lg-3">
                                    <div class="item item-1">
                                        <h3 class="sub-title sub-title-1">{{$dh->tendonhang}}</h3>
                                        <div class="item-content">
                                            <p>@lang('messages.dhnb-title6') {{str_limit($dh->nganhnghe_vn,17)}}</p>
                                            <p>@lang('messages.dhnb-title2') {{$dh->noilamviec}}</p>
                                            <p>@lang('messages.dhnb-title3') {{$dh->soluongtuyen}}</p>
                                            <p>@lang('messages.dhnb-title4') {{$dh->luongcoban}}</p>
                                            <p>@lang('messages.dhnb-title5') {{$dh->ngaytuyenbd}}</p><a class="see-more" href="donhang/{{$dh->id}}">@lang('messages.xemchitiet')</a>
                                            <div class="parallelogram"><img src="img/homedieu-duong.jpg" alt="co-khi"></div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($i<=2)
                            <div class="col-md-6 col-lg-3">
                                <div class="item item-1">
                                    <h3 class="sub-title sub-title-1">{{$dh->tendonhang}}</h3>
                                    <div class="item-content">
                                        <p>@lang('messages.dhnb-title6') {{str_limit($dh->nganhnghe_vn,17)}}</p>
                                        <p>@lang('messages.dhnb-title2') {{$dh->noilamviec}}</p>
                                        <p>@lang('messages.dhnb-title3') {{$dh->soluongtuyen}}</p>
                                        <p>@lang('messages.dhnb-title4') {{$dh->luongcoban}}</p>
                                        <p>@lang('messages.dhnb-title5') {{$dh->ngaytuyenbd}}</p><a class="see-more" href="donhang/{{$dh->id}}">@lang('messages.xemchitiet')</a>
                                        <div class="parallelogram"><img src="img/sua-chua-o-to-2.jpg" alt="co-khi"></div>
                                    </div>
                                </div>
                            </div>
                            @elseif($i<=3)
                            <div class="col-md-6 col-lg-3">
                                <div class="item item-1">
                                    <h3 class="sub-title sub-title-1">{{$dh->tendonhang}}</h3>
                                    <div class="item-content">
                                        <p>@lang('messages.dhnb-title6') {{str_limit($dh->nganhnghe_vn,17)}}</p>
                                        <p>@lang('messages.dhnb-title2') {{$dh->noilamviec}}</p>
                                        <p>@lang('messages.dhnb-title3') {{$dh->soluongtuyen}}</p>
                                        <p>@lang('messages.dhnb-title4') {{$dh->luongcoban}}</p>
                                        <p>@lang('messages.dhnb-title5') {{$dh->ngaytuyenbd}}</p><a class="see-more" href="donhang/{{$dh->id}}">@lang('messages.xemchitiet')</a>
                                        <div class="parallelogram"><img src="img/xay-dung.jpg" alt="co-khi"></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @php
                                    $i++;
                            @endphp
                        @endforeach
					</div>
				</div>
			</section>