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
<input id="BookingID" value="{{$Booking->BookingID}}" type="hidden">
<input id="FullName" value="{{$Booking->FullName}}" type="hidden">
<input id="PhoneNumber" value="{{$Booking->PhoneNumber}}" type="hidden">
<input id="Email" value="{{$Booking->Email}}" type="hidden">
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


                    <li class="process-item process-">
                        <p class="link"><span class="num">2</span><span class="txt">Thanh toán</span></p>
                    </li>

                    <li class="process-item process-cus">
                        <p class="link"><span class="num">3</span><span class="txt">Thông tin vé phim </span></p>
                    </li>
                </ul>
            </div>
            <div class="checkout-customer-content row">
                <div class="checkout-cus-left col col-6" data-aos="fade-up">


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
                                    <input id="TotalPrice" type="hidden" value="{{$Booking->TotalPrice}}">
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