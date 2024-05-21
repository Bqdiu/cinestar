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