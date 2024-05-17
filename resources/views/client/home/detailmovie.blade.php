@extends('layout')
<?php
$pageTitle = $PhimItem->Title;
?>
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
    <div class="container ticket-cointainer">
        <div class="tickett-wr">
            <div class="ticket-heading sec-heading">
                <h2 class="heading">CHỌN LOẠI VÉ</h2>
            </div>
        </div>
        <div class="ticket-container relative">
            <div class="ticket-ct">
                <div class="combo-content">
                    <div class="combo-list row">
                        @foreach($TicketPrice as $tpKey=>$tpValue)
                        <div class="combo-item col col-md-4">
                            @if($tpValue->TicketID == 2)
                            <div class="popup popup-noti  " id="popup-2">
                                <div class=" popup-overlay"></div>
                                <div class="popup-main">
                                    <div class="popup-main-wrapper">
                                        <div class="popup-over">
                                            <div class="popup-wrapper">
                                                <div class="popup-noti-wr">
                                                    <p class="popup-noti-des text-white mb-0">Bạn đang mua hạng vé đặc biệt dành cho HSSV, U22 hoặc người cao tuổi. Vui lòng mang theo CCCD hoặc thẻ HSSV có dán ảnh để xác minh trước khi vào rạp. Nhân viên rạp có thể từ chối không cho bạn vào xem nếu không thực hiện đúng quy định này. Trân trọng cảm ơn</p>
                                                    <div class="popup-noti-extra">
                                                        <div class="popup-noti-ctr">
                                                            <div class="btn btn-xemthem close"><span class="txt">Hủy</span></div>
                                                        </div>
                                                        <div class="popup-noti-ctr">
                                                            <div class="btn btn-xemthem ok"><span class="txt">Đồng ý</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popup-close popupClose"><i class="fas fa-times icon"></i></div>
                                </div>
                            </div>
                            @endif
                            <div class="food-box " id="food-box-{{$tpValue->TicketID}}">
                                <div class="content">
                                    <div class="content-top">
                                        <p class="name sub-title cursor-pointer m-0">{{$tpValue->TicketName}}</p>
                                        <div class="desc">
                                            <p class="m-0">{{$tpValue->typeOfSeat->SeatTypeName}}</p>
                                        </div>
                                        <div class="price sub-title ">
                                            <p class="m-0">{{ number_format($tpValue->TicketPrice,0,',')}} VNĐ</p>
                                        </div>
                                    </div>


                                    <div class="content-bottom">
                                        <div class="count" data-ticket-id="{{$tpValue->TicketID}}" id="{{$tpValue->TicketID}}" data-popup-id="popup-{{$tpValue->TicketID}}">
                                            <div class=" count-btn count-minus">
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
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sec-seat">

    </section>
    <div class="popup popup-noti --w7 ">
        <div class="popup-overlay"></div>
        <div class="popup-main">
            <div class="popup-main-wrapper">
                <div class="popup-over">
                    <div class="popup-wrapper">
                        <div class="popup-noti-wr">
                            <p class="popup-noti-title mb-0">LƯU Ý !</p>
                            <p class="popup-noti-des text-white m-0"></p>
                            <div class="popup-noti-ctr">
                                <div class="btn btn-xemthem custom-cursor-on-hover OK"><span class="txt">OK</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-close popupClose"><i class="fas fa-times icon"></i></div>
        </div>
    </div>
</div>
<div class="dt-bill bill-fixed bill-custom sticky">
    <div class="container">
        <div class="bill-wr" data-aos="fade-up">
            <div class="bill-left">
                <h4 class="name-combo">{{$PhimItem->Title}}</h4>
                <ul class="list">
                    <li class="item "><span class="cinema-name txt">Cinestar Quốc Thanh</span></li>
                    <li class="item cinema-hall-info"></li>

                </ul>
            </div>
            <div class="bill-custom-right">
                <div class="bill-coundown">
                    <p class="txt">Thời gian giữ vé:</p>
                    <div class="bill-time"><span class="item" id="timer">05:00 </span></div>
                </div>
                <div class="bill-right">
                    <div class="price"><span class="txt">Tạm tính </span><span class="num">0 VNĐ</span></div><a class="btn btn--pri  opacity-40 pointer-events-none">Đặt vé</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container" style="margin-top:100px;margin-bottom:100px;font-size:36px">
    <div class="box"><i class="fas fa-film"></i>
        <p class="mb-0"> Hiện chưa có lịch chiếu</p>
    </div>
</div>
@endif

@endsection