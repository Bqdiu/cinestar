@extends ('layout');

@section('main-content')


<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 d-flex justify-content-center" style="position:relative">
            <div class="type-movie-box">
                <div class="type-movie"><span class="txt">2D</span></div>
                <div class="age"><span class="num">{{$PhimItem->regulation->AgeRegulationName}}</span><span class="txt">{{$PhimItem->regulation->Object}}</span></div>
            </div>

            <img style="width:85%;border-radius:5px" src="/imgMovie/{{$PhimItem->Thumbnail}}" alt="">
        </div>
        <div class="col-md-7">
            <h2 class="text-white" style="font-weight:1000;margin-bottom:20px">{{$PhimItem->Title}}</h2>
            <ul class="info-detail">
                <li>
                    <span><img class="span-icon" src="/img/icon-tag.svg" alt=""></span>
                    <span class="text-white">{{$PhimItem->Genre}}</span>
                </li>
                <li>
                    <span><img class="span-icon" src="/img/icon-clock.svg" alt=""></span>
                    <span class="text-white">{{$PhimItem->Duration}}</span>
                </li>

                <li>
                    <span class="span-icon" style="color:yellow"><i class="fas fa-globe-asia" style="padding-left:4px"></i></span>
                    <span class="text-white">{{$PhimItem->Language}}</span>
                </li>
                <li>
                    <span class="span-icon"><img style="width:24px;height:24px" src="/img/subtitle.svg" alt=""></span>
                    <span class="text-white">{{$PhimItem->Country}}</span>
                </li>
                <li>
                    <span class="span-icon"><i class="fas fa-user-check" style="color:yellow;padding-left:4px"></i></span>
                    <span class="text-black" style="background:yellow">{{$PhimItem->regulation->Content}}</span>
                </li>
            </ul>
            <h4 class="text-white" style="font-weight:1000;margin-top:20px">Mô Tả</h4>
            <ul class="info-detail text-white" style="font-size:14px">
                <li>
                    <span>Đạo diễn:</span>
                    <span>{{$PhimItem->Director}}</span>
                </li>
                <li>
                    <span>Diễn viên:</span>
                    <span>{{$PhimItem->Actor}}</span>
                </li>
                <li>
                    <span>Khởi chiếu:</span>
                    <span>{{$PhimItem->ReleaseDate}}</span>
                </li>
            </ul>
            <h4 class="text-white" style="font-weight:1000;margin-top:3.2rem;">NỘI DUNG PHIM</h4>
            <p class="text-white" style="width:85%">{{$PhimItem->Description}}</p>

            <div class="trailer-link" style="margin-top:3.2rem">
                <a href="{{$PhimItem->trailer_url}}" class="w-100 text-center link-text-btn" style="margin:auto;font-size:20px;border:1px solid yellow;padding:20px;border-radius:10px;color:yellow"><img style="width:37px;height:37px" src="https://cinestar.com.vn/assets/images/icon-play-vid.svg" alt=""> Xem trailer</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="text-white text-center" style="font-weight:1000;margin-bottom:20px;margin-top:100px;margin-bottom:50px">LỊCH CHIẾU</h2>
    <div class="show-date-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slider">
                <div id="swiper-slide-item-1" data-swiper-slide="swiper-slide-item-1" class="swiper-slide-item active">
                    <p class="date">08/05</p>
                    <p class="day">Thứ Sáu</p>
                </div>
            </div>
        </div>

    </div>
    <div class="shtime-body">
        <h2 class="text-white" style="font-weight:1000;margin-left:auto;margin-right:auto">DANH SÁCH RẠP</h2>
        <!-- Example single danger button -->
        <div class="btn-group select-city" style="margin-left:auto;margin-right:auto">
            <button type="button select-city-btn" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-map-marker-alt"></i> <span class="an-select-selection-item">Hồ Chí Minh</span>
            </button>
            <ul class="dropdown-menu city-options">
                @foreach($City as $k=>$v)
                <li class="dropdown-item city-option-menu" data-city-name="{{$v->CityName}}"><span class="city-option-item">{{$v->CityName}}</span></li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="shtime-ft">
        <div class="cinestar-item collapseItem active" data-cinestar-collapse-item="cinestar-item-1" id="cinestar-item-1">
            <div class="cinestar-heading collapseHeading">
                <span class="tittle">Cinestar Quốc Thanh</span>
                <i class="fas fa-angle-down text-white icon"></i>
            </div>
            <div class="cinestar-body collapseBody">
                <p class="addr">271 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành Phố Hồ Chí Minh</p>
                <ul class="list-info">
                    <li class="item-info">
                        <div class="tt text-white">Standard</div>
                        <ul class="list-time">
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                            <li class="item-time text-white">08:20</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection