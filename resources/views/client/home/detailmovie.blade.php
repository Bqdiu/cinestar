@extends('layout')

@section('main-content')
<div class="container mt-3" data-movie-id="{{$MovieID}}" id="movie">
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
@if($PhimItem->IDStatus == 1)
<div class="container">
    <h2 class="text-white text-center" style="font-weight:1000;margin-bottom:20px;margin-top:100px;margin-bottom:50px">LỊCH CHIẾU</h2>
    <div class="show-date-swiper">
        <div class="swiper-wrapper">
            <?php
            $thu = [
                'Monday' => 'Thứ Hai',
                'Tuesday' => 'Thứ Ba',
                'Wednesday' => 'Thứ Tư',
                'Thursday' => 'Thứ Năm',
                'Friday' => 'Thứ Sáu',
                'Saturday' => 'Thứ Bảy',
                'Sunday' => 'Chủ Nhật',
            ]; ?>
            @foreach($ShowInfor as $sKey => $sValue)
            <div class="swiper-slider">
                <div id="swiper-slide-item-{{$sKey}}" data-swiper-slide="swiper-slide-item-{{$sKey}}" class="swiper-slide-item {{ $sKey == 0 ? 'active' : '' }}">
                    <p class="date" data-date="{{$sValue->ShowDate}}">{{ date('d/m', strtotime($sValue->ShowDate)) }}</p>
                    <p class="day">{{ $thu[date('l', strtotime($sValue->ShowDate))] }}</p>
                </div>
            </div>
            @endforeach

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
                <li class="dropdown-item city-option-menu {{ $k == 0 ? 'active' : '' }}" data-city-id="{{$k=$k+1}}" data-city-name="{{$v->CityName}}"><span class="city-option-item">{{$v->CityName}}</span></li>

                @endforeach
            </ul>
        </div>

    </div>
    <div class="shtime-ft">

    </div>
    <div class="container">
        <div class="tickett-wr">
            <div class="ticket-heading sec-heading">
                <h2 class="heading">CHỌN LOẠI VÉ</h2>
            </div>
        </div>
        <div class="ticket-container relative">
            <div class="ticket-ct">
                <div class="combo-content">
                    <div class="combo-list row">
                        <div class="combo-item col col-md-4">
                            <div class="food-box">
                                <div class="content">
                                    <div class="content-top">
                                        <p class="name sub-title cursor-pointer m-0">Người lớn</p>
                                        <div class="desc">
                                            <p class="m-0">ĐƠN</p>
                                        </div>
                                        <div class="price sub-title ">
                                            <p class="m-0">45,000 VNĐ</p>
                                        </div>
                                    </div>


                                    <div class="content-bottom">
                                        <div class="count" data-count-id="count-1" id="count-1">
                                            <div class="count-btn count-minus">
                                                <i class="fas fa-minus icon"></i>
                                            </div>
                                            <p class="count-number m-0">0</p>
                                            <div class="count-btn count-plus">
                                                <i class="fas fa-plus icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="combo-item col col-md-4">
                            <div class="food-box">
                                <div class="content">
                                    <div class="content-top">
                                        <p class="name sub-title cursor-pointer m-0">Người lớn</p>
                                        <div class="desc">
                                            <p class="m-0">ĐƠN</p>
                                        </div>
                                        <div class="price sub-title ">
                                            <p class="m-0">45,000 VNĐ</p>
                                        </div>
                                    </div>


                                    <div class="content-bottom">
                                        <div class="count" data-count-id="count-1" id="count-1">
                                            <div class="count-btn count-minus">
                                                <i class="fas fa-minus icon"></i>
                                            </div>
                                            <p class="count-number m-0">0</p>
                                            <div class="count-btn count-plus">
                                                <i class="fas fa-plus icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sec-seat">
        <div class="seat">
            <div class="container">
                <div class="seat-wr">
                    <div class="seat-heading sec-heading">
                        <h2 class="heading">CHỌN GHẾ - RẠP 03</h2>
                    </div>
                </div>
                <div class="seat-indicator-scroll">
                    <div class="seat-block relative custom-cursor-on-hover">
                        <div class="seat-screen" data-aos="fade-up"><img src="/img/img-screen.png" alt="">
                            <div class="txt">Màn hình</div>
                        </div>
                        <div class="seat-main" data-aos="fade-up">
                            <div class="minimap-container ">
                                <div class="minimap" style="width: 130px; height: 76px;">
                                    <div class="minimap-viewport" style="width: 130px; height: 76px; left: 0px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 0px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 5px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 9px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 14px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 18px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 23px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 28px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 32px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 37px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 115px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 122px; top: 41px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 115px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 122px; top: 46px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 115px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 122px; top: 51px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 46px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 54px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 84px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 115px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 122px; top: 55px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 8px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 15px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 23px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 31px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 38px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 61px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 69px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 76px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 92px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 99px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 107px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 115px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 8px; height: 5px; left: 122px; top: 60px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 15px; height: 6px; left: 8px; top: 64px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 15px; height: 6px; left: 23px; top: 64px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 15px; height: 6px; left: 92px; top: 64px;"></div>
                                    <div class="minimap-children" style="position: absolute; width: 15px; height: 6px; left: 115px; top: 64px;"></div>
                                </div>
                                <div>
                                    <div class="seat-table">
                                        <table class="seat-table-inner">
                                            <tr>
                                                <td class="seat-name-row">A</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single choosing "><img src="/img/seat.svg" alt=""><span class="seat-name">A12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single custom-cursor-on-hover"><img src="/img/seat.svg" alt=""><span class="seat-name">A04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A03</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">A01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">B</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single custom-cursor-on-hover"><img src="/img/seat.svg" alt=""><span class="seat-name">B08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B03</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">B01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">C</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C03</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">C01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">D</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D03</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">D01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">E</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E03</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">E01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">F</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F08</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1 first-vip">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F07</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F06</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F05</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F04</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F03</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F02</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-1 last-vip">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">F01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">G</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G08</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2 seat-vip-row-middle-first">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G07</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G06</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G05</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G04</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G03</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G02</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-2 seat-vip-row-middle-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">G01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">H</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H08</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3 seat-vip-row-middle-first">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H07</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H06</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H05</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H04</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H03</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H02</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-3 seat-vip-row-middle-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">H01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">J</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J08</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4 seat-vip-row-middle-first">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J07</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J06</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J05</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J04</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J03</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J02</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-4 seat-vip-row-middle-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">J01</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">K</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K14</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K13</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K10</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 first-vip seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K09</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K08</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K07</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K06</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K05</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K04</span></div>
                                                </td>
                                                <td class="seat-td seat-vip seat-vip-row-5 last-vip seat-vip-row-last">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K03</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">K01</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">L</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L14</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L13</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L03</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">L01</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">M</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M14</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M13</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M03</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">M01</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">N</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N14</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N13</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N09</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N06</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N03</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">N01</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">O</td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O13</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O12</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O11</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O10</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O09</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O08</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O07</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O06</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O05</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O04</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O03</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O02</span></div>
                                                </td>
                                                <td class="seat-td">
                                                    <div class="seat-wr seat-single "><img src="/img/seat.svg" alt=""><span class="seat-name">O01</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="seat-name-row">P</td>
                                                <td class="seat-td seat-couple">
                                                    <div class="seat-wr "><img src="/img/seat-couple-w.svg" alt=""><span class="seat-name">P04</span></div>
                                                </td>
                                                <td class="seat-td seat-couple">
                                                    <div class="seat-wr "><img src="/img/seat-couple-w.svg" alt=""><span class="seat-name">P03</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class=""></td>
                                                <td class="seat-td seat-couple">
                                                    <div class="seat-wr "><img src="/img/seat-couple-w.svg" alt=""><span class="seat-name">P02</span></div>
                                                </td>
                                                <td class=""></td>
                                                <td class="seat-td seat-couple">
                                                    <div class="seat-wr "><img src="/img/seat-couple-w.svg" alt=""><span class="seat-name">P01</span></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="seat-note">
                    <li class="note-it">
                        <div class="image"> <img src="/img/seat.svg" alt=""></div><span class="txt">Ghế Thường</span>
                    </li>
                    <li class="note-it note-it-couple">
                        <div class="image"><img src="/img/seat-couple-w.svg" alt=""></div><span class="txt">Ghế Đôi (2 Người)</span>
                    </li>
                    <li class="note-it">
                        <div class="image"><img src="/img/seat.svg" alt="" class="seat-choosing"></div><span class="txt">Ghế chọn</span>
                    </li>
                    <li class="note-it">
                        <div class="image"> <img src="/img/seat.svg" alt="" class="seat-disable"></div><span class="txt">Ghế đã đặt</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
@else
<div class="container" style="margin-top:100px;margin-bottom:100px;font-size:36px">
    <div class="box"><i class="fas fa-film"></i>
        <p class="mb-0"> Hiện chưa có lịch chiếu</p>
    </div>
</div>
@endif

@endsection