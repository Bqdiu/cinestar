<div class="form-payment">

    <form class="form" id="FormPayment" action="/payment" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <div class="form-list">
            <div class="form-it inner-radio inner-radio-white"><input class="form-control" value="momo" type="radio" id="payment1" name="input-checkout-payment" hidden=""><label class="form-label" for="payment1"> <span class="img"><img src="/img/img-momo.png" alt=""></span>
                    <p class="text mb-0">Thanh toán qua Momo</p>
                </label></div>
            <div class="form-it inner-radio inner-radio-white"><input class="form-control" value="vnpay" type="radio" id="payment2" name="input-checkout-payment" hidden=""><label class="form-label custom-cursor-on-hover" for="payment2"> <span class="img"><img src="/img/img-card.png" alt=""></span>
                    <p class="text">Thanh toán qua VNPAY</p>
                </label></div>
            <div class="form-it inner-radio inner-radio-white"><input class="form-control" type="radio" id="payment3" name="input-checkout-payment" hidden=""><label class="form-label" for="payment3"> <span class="img"><img src="/img/img-card.png" alt=""></span>
                    <p class="text">Thanh toán qua thẻ quốc tế</p>
                </label></div>
        </div>

        <div class="form-it">
            <button type="submit" class="btn btn-submit btn--pri h-[41px]  opacity-30 pointer-events-none" name="payUrl">Thanh toán</button>
        </div>
    </form>
</div>