<section class="lien-ket">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12 text-center">
                    <h2 class="title">@lang('messages.scholl-title1')</h2><img src="img/line.png" alt="line">
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($truonghoc as $item)
                            <div class="swiper-slide">
                                <a href="{{$item->link}}">
                                    <div class="box-img"><img class="scholl-img" src="{{$urlfile.'/'.$item->image}}" alt="{{$item->image}}"" /></div>
                                    <p>
                                        @php
                                            if (App::getLocale() == 'vi') {
                                                echo($item->ten);
                                            }else{
                                                echo($item->tenjp);
                                            }
                                        @endphp
                                    </p>
                                </a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
</section>