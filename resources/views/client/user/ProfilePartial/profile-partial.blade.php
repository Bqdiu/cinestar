<div>
    <div class="acc-prf-block">
        <p class="acc-prf-block-title">Thông tin cá nhân</p>

        <div class="acc-prf-form re-form">
            <form id="formUpdateInfo" action="/update-infor" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="f-list row">
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Họ và tên</label>
                        <div class="w-full relative mb-input undefined">
                            <input id="FullName" type="text" name="FullName" value="{{Auth::user()->Name}}" class="re-input">
                        </div>
                        <span class="text-danger mt-1" id="errorFullName"></span>

                    </div>
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Ngày sinh</label>
                        <div class="w-full relative mb-input undefined">
                            <input id="Birthday" class="re-input" name="BirthDay" value="{{Auth::user()->BirthDay}}" type="date" required="" style="padding: .6rem;">
                        </div>
                        <span class="text-danger mt-1" id="errorBirthday"></span>

                    </div>
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Số điện thoại</label>
                        <div class="w-full relative mb-input undefined">
                            <input id="PhoneNumber" class="re-input" name="PhoneNumber" value="{{Auth::user()->Phone}}" type="tel" required="">
                        </div>
                        <span class="text-danger mt-1" id="errorPhoneNumber"></span>

                    </div>
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Email</label>
                        <div class="w-full relative mb-input undefined">
                            <input id="Email" class="re-input" name="Email" value="{{Auth::user()->Email}}" type="email" required="">
                        </div>
                        <span class="text-danger mt-1" id="errorEmail"></span>

                    </div>
                </div>
                <button type="submit" class="btn btn--pri" style="margin-top: 1rem">
                    <span class="txt">Lưu thông tin</span>
                </button>
            </form>
        </div>
    </div>
</div>

<div style="margin-top: 23px">
    <div class="acc-prf-block">
        <p class="acc-prf-block-title">Đổi mật khẩu</p>
        <input type="hidden" value="{{Auth::user()->Password}}">
        <div class="acc-prf-form re-form">
            <form id="changePassword" action="/change-pass" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="f-list row">
                    <div class="f-item cols">
                        <label for="" class="re-label">Mật khẩu cũ <span style="color:red">*</span></label>
                        <div class="w-full relative mb-input undefined">
                            <input type="password" id="OldPassword" name="OldPassword" class="re-input" require>
                        </div>
                        <span class="text-danger mt-1" id="errorOldPassword"></span>

                    </div>
                    <div class="f-item cols">
                        <label for="" class="re-label">Mật khẩu mới <span style="color:red">*</span></label>
                        <div class="w-full relative mb-input undefined">
                            <input type="password" id="NewPassword" name="NewPassword" class="re-input" require>
                        </div>
                        <span class="text-danger mt-1" id="errorNewPassword"></span>

                    </div>
                    <div class="f-item cols">
                        <label for="" class="re-label">Xác thực mật khẩu <span style="color:red">*</span></label>
                        <div class="w-full relative mb-input undefined">
                            <input type="password" id="RetypePassword" name="RetypePassword" class="re-input" require>
                        </div>
                        <span class="text-danger mt-1" id="errorRetypePassword"></span>

                    </div>
                </div>
                <button type="submit" class="btn btn--pri" style="margin-top: 1rem">
                    <span class="txt">Đổi mật khẩu</span>
                </button>
            </form>
        </div>
    </div>
</div>

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
                            <div class="profile btn btn-xemthem custom-cursor-on-hover OK"><span class="txt">OK</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-close popupClose"><i class="fas fa-times icon"></i></div>
    </div>
</div>