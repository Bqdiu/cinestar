@extends('layout')
<?php $pageTitle = "Thông tin vé phim";
$thu = [
    'Monday' => 'Thứ Hai',
    'Tuesday' => 'Thứ Ba',
    'Wednesday' => 'Thứ Tư',
    'Thursday' => 'Thứ Năm',
    'Friday' => 'Thứ Sáu',
    'Saturday' => 'Thứ Bảy',
    'Sunday' => 'Chủ Nhật',
]; ?>

@section('main-content')
<div class="container mt-5">
    <div class="row">
        @foreach($Ticket as $t)
        <div class="col-md-4">
            <div class="form-checkout-cus">
                <div class="form-main">
                    <div class="inner-info">
                        <div class="inner-info-row cinestar-br">
                            <div class="row mb-2">
                                <div class="col-md-5"> <img src="/img/header-logo.png" style="width: 130px; height:46px" alt=""></div>
                                <div class="col-md-7 d-flex align-items-center mt-2">
                                    <span class="ct" style="font-weight:545; position:relative;left: -17px;bottom: -3px;">{{ str_replace('Cinestar', '', $t->show_infor->cinemaHall->cinema->Name) }}</span>
                                </div>

                            </div>

                            <p class="dt">{{$t->show_infor->cinemaHall->cinema->Address}}</p>
                        </div>
                    </div>

                    <div class="inner-info">
                        <div class="inner-info-row bill-coundown-custom">
                            <p class="ct" style="font-weight:700">{{$t->show_infor->movie->Title}}</p>
                        </div>
                    </div>
                    <div class="inner-info">
                        <div class="inner-info-row">
                            <p class="tt">{{$t->show_infor->movie->regulation->Content}}</p>
                        </div>
                    </div>

                    <div class="inner-info">
                        <div class="inner-info-row time-line">
                            <p class="tt">Thời gian</p>

                            <p class="ct"><span class="time">{{ \Carbon\Carbon::parse($t->show_infor->StartTime)->format('H:i') }}
                                </span><span class="date1">{{ $thu[date('l', strtotime($t->show_infor->ShowDate))] }} {{ date('d/m/Y', strtotime($t->show_infor->ShowDate)) }}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inner-info">
                                <div class="inner-info-row room">
                                    <p class="tt">Phòng chiếu</p>
                                    <p class="ct">{{substr($t->show_infor->cinemaHall->Name,-2)}}</p>
                                </div>


                            </div>
                            <div class="inner-info">


                                <div class="inner-info-row type-position">
                                    <p class="tt">Loại ghế</p>
                                    <p class="ct">{{$t->cinema_seat->typeOfSeat->SeatTypeName}}</p>
                                </div>

                                <div class="inner-info-row num-position">
                                    <p class="tt">Số ghế</p>

                                    <p class="ct">

                                        <span> {{$t->cinema_seat->RowPosition . sprintf('%02d', $t->cinema_seat->ColumnPosition)}} </span>

                                    </p>

                                </div>


                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php $qrcode_url = url('booking-movie-detail?BookingID=' . $t->BookingID)  ?>
                            {{QrCode::size(160)->generate($qrcode_url)}}
                        </div>
                    </div>


                </div>
                <div class="form-footer">
                    <div class="inner-info">
                        <div class="inner-info-row total">
                            <p class="tt">Tổng Tiền</p>
                            <p class="ct">45,000VNĐ</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection