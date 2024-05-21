@extends ('layout')
<?php
$pageTitle = "Thanh Toán";

$thu = [
    'Monday' => 'Thứ Hai',
    'Tuesday' => 'Thứ Ba',
    'Wednesday' => 'Thứ Tư',
    'Thursday' => 'Thứ Năm',
    'Friday' => 'Thứ Sáu',
    'Saturday' => 'Thứ Bảy',
    'Sunday' => 'Chủ Nhật',
];
?>

@section('main-content')
<section class="checkout checkout-customer ht">
    <div class="container">
        <div class="checkout-customer-wr">
            <div class="mb-[12px] cursor-pointer block text-white"> <i class="fas fa-chevron-left fa-xs"></i> Quay lại</div>
            <div class="checkout-back"> <span class="ic ani-f"><img src="/assets/images/ic-back.svg" alt=""></span><span class="ic ani-s"><img src="/assets/images/ic-back.svg" alt=""></span><span class="txt">Quay lại</span></div>
            <div class="checkout-customer-heading sec-heading" data-aos="fade-up">
                <h2 class="heading !text-center min-[700px]:!text-left"></h2>
                <ul class="process">
                    <li class="process-item process-cus active">
                        <p class="link"><span class="num">1 </span><span class="txt">Thông tin khách hàng</span></p>
                    </li>
                    @if(Auth::user()->UserID != 43)
                    <li class="process-item process-cus active">
                        <p class="link"><span class="num">2</span><span class="txt">Thanh toán</span></p>
                    </li>
                    @else
                    <li class="process-item process-">
                        <p class="link"><span class="num">2</span><span class="txt">Thanh toán</span></p>
                    </li>
                    @endif
                    <li class="process-item process-cus">
                        <p class="link"><span class="num">3</span><span class="txt">Thông tin vé phim </span></p>
                    </li>
                </ul>
            </div>
            <div class="checkout-customer-content row">
                <div class="checkout-cus-left col col-6" data-aos="fade-up">
                    @if(Auth::user()->UserID == 43)
                    <div class="form-cus">

                        <form class="form" id="UpdateInfor" action="/updateInforBooking" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="BookingID" value="{{$Booking->BookingID}}" type="hidden">
                            <div class="form-list">
                                <div class="form-it">
                                    <div class="relative w-full mb-[10px]">
                                        <div class="form-it">
                                            <p class="form-label text-white  " style="font-size:14px">Họ và tên <span class="text-error">*</span></p>
                                            <div class="relative"><input type="text" id="FullName" name="FullName" placeholder="Họ và tên" class="form-control input"></div>
                                        </div>

                                        <span class="text-danger mt-1" id="errorFullName"></span>

                                    </div>
                                </div>
                                <div class="form-it">
                                    <div class="relative w-full mb-[10px]">
                                        <div class="form-it">
                                            <p class="form-label text-white  " style="font-size:14px">Số điện thoại <span class="text-error">*</span></p>
                                            <div class="relative"><input type="tel" id="PhoneNumber" name="PhoneNumber" placeholder="Số điện thoại" class="form-control input"></div>
                                        </div>

                                        <span class="text-danger mt-1" id="errorPhoneNumber"></span>

                                    </div>
                                </div>
                                <div class="form-it">
                                    <div class="relative w-full mb-[10px]">
                                        <div class="form-it">
                                            <p class="form-label text-white  " style="font-size:14px">Email <span class="text-error">*</span></p>
                                            <div class="relative"><input type="email" id="Email" name="Email" placeholder="Email" class="form-control input"></div>
                                        </div>

                                        <span class="text-danger mt-1" id="errorEmail"></span>

                                    </div>
                                </div>
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                    <label class="form-check-label" for="loginCheck" style="color: white"> Đảm bảo mua vé đúng số tuổi quy định. </label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                    <label class="form-check-label" for="loginCheck" style="color: white"> Đồng ý với <a class="link" target="_blank" href="#">điều khoản của Cinestar.</a> </label>
                                </div>

                                <div class="form-it">
                                    <button class="btn btn-submit btn--pri" type="submit">Tiếp tục</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    @else
                    <div class="form-payment">

                        <form class="form" action="">
                            <div class="form-list">
                                <div class="form-it inner-radio inner-radio-white"><input class="form-control" type="radio" id="payment1" name="input-checkout-payment" hidden=""><label class="form-label" for="payment1"> <span class="img"><img src="/img/img-momo.png" alt=""></span>
                                        <p class="text mb-0">Thanh toán qua Momo</p>
                                    </label></div>
                                <div class="form-it inner-radio inner-radio-white"><input class="form-control" type="radio" id="payment2" name="input-checkout-payment" hidden=""><label class="form-label custom-cursor-on-hover" for="payment2"> <span class="img"><img src="/img/img-card.png" alt=""></span>
                                        <p class="text">Thanh toán qua Thẻ nội địa</p>
                                    </label></div>
                                <div class="form-it inner-radio inner-radio-white"><input class="form-control" type="radio" id="payment3" name="input-checkout-payment" hidden=""><label class="form-label" for="payment3"> <span class="img"><img src="/img/img-card.png" alt=""></span>
                                        <p class="text">Thanh toán qua thẻ quốc tế</p>
                                    </label></div>
                            </div>

                            <div class="form-it">
                                <div class="btn btn-submit btn--pri h-[41px]  opacity-30 pointer-events-none">Thanh toán</div>
                            </div>
                        </form>
                    </div>
                    @endif

                </div>
                <div class="checkout-cus-right col col-6" data-aos="fade-up">
                    <div class="form-checkout-cus">
                        <div class="form-main">
                            <div class="inner-info">
                                <div class="inner-info-row bill-coundown-custom">
                                    <p class="ct" style="font-weight:700">{{$Booking->showinfor->movie->Title}}</p>
                                    <div class="bill-coundown-custom">
                                        <p class="txt mb-0" style="font-weight:550">Thời gian giữ vé:</p>
                                        <div class="bill-coundown !w-[68px]">
                                            <div class="bill-time">
                                                <p id="timerCheckout" style="font-weight:600">05:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row">
                                    <p class="tt">{{$Booking->showinfor->movie->regulation->Content}}</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row cinestar-br">
                                    <p class="ct">{{$Booking->showinfor->cinemaHall->cinema->Name}}</p>
                                    <p class="dt">{{$Booking->showinfor->cinemaHall->cinema->Address}}</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row time-line">
                                    <p class="tt">Thời gian</p>

                                    <p class="ct"><span class="time">{{ \Carbon\Carbon::parse($Booking->showinfor->StartTime)->format('H:i') }}
                                        </span><span class="date1">{{ $thu[date('l', strtotime($Booking->showinfor->ShowDate))] }} {{ date('d/m/Y', strtotime($Booking->showinfor->ShowDate)) }}</span></p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row room">
                                    <p class="tt">Phòng chiếu</p>
                                    <p class="ct">{{substr($Booking->showinfor->cinemaHall->Name,-2)}}</p>
                                </div>

                                @foreach($TypeTicketList as $ticket)

                                <div class="inner-info-row num-ticket">
                                    <p class="tt">Số vé</p>
                                    <p class="ct">{{$ticket['Quantity']}}</p>
                                </div>
                                <div class="inner-info-row type-ticket">
                                    <p class="tt">Loại vé</p>
                                    @if($ticket['TicketTypeID'] == 2)
                                    <p class="ct">{{$ticket['Name'] }}</p>
                                    @else
                                    <p class="ct">{{ ucwords(mb_strtolower($ticket['Name'])) }}</p>
                                    @endif
                                </div>

                                @endforeach


                            </div> @foreach($TicketType[$Booking->BookingID] as $seatTypeID => $seatType)
                            <div class="inner-info">


                                <div class="inner-info-row type-position">
                                    <p class="tt">Loại ghế</p>
                                    <p class="ct">{{$seatType->SeatTypeName}}</p>
                                </div>

                                <div class="inner-info-row num-position">
                                    <p class="tt">Số ghế</p>

                                    <p class="ct">
                                        @foreach($Ticket as $tValue)
                                        @if($tValue->cinema_seat->SeatTypeID == $seatType->SeatTypeID)
                                        <span> {{$tValue->cinema_seat->RowPosition . sprintf('%02d', $tValue->cinema_seat->ColumnPosition)}} </span>
                                        @endif
                                        @endforeach
                                    </p>

                                </div>


                            </div>
                            @endforeach
                        </div>
                        <div class="form-footer">
                            <div class="inner-info">
                                <div class="inner-info-row total">
                                    <p class="tt">Số tiền cần thanh toán</p>
                                    <p class="ct">{{ number_format($Booking->TotalPrice, 0, ',', ',') }}VNĐ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection