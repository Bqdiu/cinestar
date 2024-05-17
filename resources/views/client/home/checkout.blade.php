@extends ('layout')
<?php
$pageTitle = "Thanh Toán";
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
                    <li class="process-item process-cus active">
                        <p class="link"><span class="num">2</span><span class="txt">Thanh toán</span></p>
                    </li>
                    <li class="process-item process-cus">
                        <p class="link"><span class="num">3</span><span class="txt">Thông tin vé phim </span></p>
                    </li>
                </ul>
            </div>
            <div class="checkout-customer-content row">
                <div class="checkout-cus-left col col-6" data-aos="fade-up">
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

                </div>
                <div class="checkout-cus-right col col-6" data-aos="fade-up">
                    <div class="form-checkout-cus">
                        <div class="form-main">
                            <div class="inner-info">
                                <div class="inner-info-row bill-coundown-custom">
                                    <p class="ct" style="font-weight:700">LẬT MẶT 7: MỘT ĐIỀU ƯỚC (K)</p>
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
                                    <p class="tt">Phim dành cho khán giả từ dưới 13 tuổi với điều kiện xem cùng cha, mẹ hoặc người giám hộ.</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row cinestar-br">
                                    <p class="ct">Cinestar Quốc Thanh</p>
                                    <p class="dt">271 Nguyễn Trãi, Phường Nguyễn Cư Trinh, Quận 1, Thành Phố Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row time-line">
                                    <p class="tt">Thời gian</p>
                                    <p class="ct"><span class="time">22:40 </span><span class="date1">Thứ Sáu 17/05/2024</span></p>
                                </div>
                            </div>
                            <div class="inner-info">
                                <div class="inner-info-row room">
                                    <p class="tt">Phòng chiếu</p>
                                    <p class="ct">04</p>
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