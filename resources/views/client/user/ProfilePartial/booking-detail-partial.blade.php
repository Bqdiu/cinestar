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
<div class="history mb-[12px] cursor-pointer block text-white btn-back"> <i class="fas fa-chevron-left fa-xs"></i> Trở về</div>
<div class="mt-5">
    <div class="row d-flex m-auto">
        @foreach($Ticket as $t)
        <div class="col-md-12 col-12">
            <div class="form-checkout-cus">
                <div class="form-main">
                    <div class="inner-info">
                        <div class="inner-info-row cinestar-br">
                            <div class="row mb-2">
                                <div class="col-md-4 col-5 "> <img src="/img/header-logo.png" style="width: 130px; height:46px" alt=""></div>
                                <div class="col-md-8 col-7 d-flex align-items-center mt-2">
                                    <span class="ct responsive">{{ str_replace('Cinestar', '', $t->show_infor->cinemaHall->cinema->Name) }}</span>
                                </div>

                            </div>

                            <p class="dt">{{$t->show_infor->cinemaHall->cinema->Address}}</p>
                        </div>
                    </div>
                    <div class="inner-info">
                        <div class="inner-info-row bill-coundown-custom">
                            <p class="ct" style="font-weight:700">{{$Booking->showinfor->movie->Title}}</p>
                        </div>
                    </div>
                    <div class="inner-info">
                        <div class="inner-info-row">
                            <p class="tt">{{$Booking->showinfor->movie->regulation->Content}}</p>
                        </div>
                    </div>
                    <!-- <div class="inner-info">
                        <div class="inner-info-row cinestar-br">
                            <p class="ct">{{$Booking->showinfor->cinemaHall->cinema->Name}}</p>
                            <p class="dt">{{$Booking->showinfor->cinemaHall->cinema->Address}}</p>
                        </div>
                    </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-12 mb-1">
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
                                        <p class="ct">{{$ticket->Quantity}}</p>
                                    </div>
                                    <div class="inner-info-row type-ticket">
                                        <p class="tt">Loại vé</p>
                                        @if($ticket->TicketID == 2)
                                        <p class="ct">{{$ticket->ticket_price->TicketName }}</p>
                                        @else
                                        <p class="ct">{{ ucwords(mb_strtolower($ticket->ticket_price->TicketName )) }}</p>
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
                            <div class="col-md-8 col-12">
                                <?php $qrcode_url = url('booking-movie-detail?BookingID=' . $t->BookingID)  ?>
                                {{QrCode::size(160)->generate($qrcode_url)}}
                            </div>
                        </div>
                    </div>


                </div>
                <div class="form-footer">
                    <div class="inner-info">
                        <div class="inner-info-row total">
                            <p class="tt">Tổng Tiền</p>
                            <p class="ct">{{ number_format($Booking->TotalPrice, 0, ',', ',') }}VNĐ</p>
                            <input id="TotalPrice" type="hidden" value="{{$Booking->TotalPrice}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>