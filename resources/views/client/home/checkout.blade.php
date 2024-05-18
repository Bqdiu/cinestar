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
                    <li class="process-item process-cus">
                        <p class="link"><span class="num">2</span><span class="txt">Thanh toán</span></p>
                    </li>
                    <li class="process-item process-cus">
                        <p class="link"><span class="num">3</span><span class="txt">Thông tin vé phim </span></p>
                    </li>
                </ul>
            </div>
            <div class="checkout-customer-content row">
                <div class="checkout-cus-left col col-6" data-aos="fade-up">
                    <div class="form-cus">
                        <form class="form">
                            <div class="form-list">
                                <div class="form-it">
                                    <div class="relative w-full mb-[10px]">
                                        <div class="form-it">
                                            <p class="form-label text-white  " style="font-size:14px">Họ và tên <span class="text-error">*</span></p>
                                            <div class="relative"><input type="text" placeholder="Họ và tên" class="form-control input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-it">
                                    <div class="relative w-full mb-[10px]">
                                        <div class="form-it">
                                            <p class="form-label text-white  " style="font-size:14px">Số điện thoại <span class="text-error">*</span></p>
                                            <div class="relative"><input type="text" placeholder="Số điện thoại" class="form-control input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-it">
                                    <div class="relative w-full mb-[10px]">
                                        <div class="form-it">
                                            <p class="form-label text-white  " style="font-size:14px">Email <span class="text-error">*</span></p>
                                            <div class="relative"><input type="text" placeholder="Email" class="form-control input"></div>
                                        </div>
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
                                    <div class="btn btn-submit btn--pri">Tiếp tục</div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="checkout-cus-right col col-6" data-aos="fade-up">
                    <div class="form-checkout-cus">
                        <div class="form-main">
                            <div class="inner-info">
                                <div class="inner-info-row bill-coundown-custom">
                                    <p class="ct" style="font-weight:700">{{$Show->movie->Title}}</p>
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
                                    <p class="tt">{{$Show->movie->regulation->Content}}</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row cinestar-br">
                                    <p class="ct">{{$Show->cinemaHall->cinema->Name}}</p>
                                    <p class="dt">{{$Show->cinemaHall->cinema->Address}}</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row time-line">
                                    <p class="tt">Thời gian</p>

                                    <p class="ct"><span class="time">{{ \Carbon\Carbon::parse($Show->StartTime)->format('H:i') }}
                                        </span><span class="date1">{{ $thu[date('l', strtotime($Show->ShowDate))] }} {{ date('d/m/Y', strtotime($Show->ShowDate)) }}</span></p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row room">
                                    <p class="tt">Phòng chiếu</p>
                                    <p class="ct">{{substr($Show->cinemaHall->Name,-2)}}</p>
                                </div>
                                <div class="inner-info-row num-ticket">
                                    <p class="tt">Số vé</p>
                                    <p class="ct">2</p>
                                </div>
                                <div class="inner-info-row type-ticket">
                                    <p class="tt">Loại vé</p>
                                    <p class="ct">Người Lớn</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row type-position">
                                    <p class="tt">Loại ghế</p>
                                    <p class="ct">Ghế Thường</p>
                                </div>
                                <div class="inner-info-row num-position">
                                    <p class="tt">Số ghế</p>
                                    <p class="ct"> A03, A04</p>
                                </div>
                            </div>

                        </div>
                        <div class="form-footer">
                            <div class="inner-info">
                                <div class="inner-info-row total">
                                    <p class="tt">Số tiền cần thanh toán</p>
                                    <p class="ct">90,000VND</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection