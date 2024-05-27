<div>
    <div class="acc-prf-block">
        <p class="acc-prf-block-title">Thông tin cá nhân</p>
        <div class="acc-prf-form re-form">
            <form action="">
                <div class="f-list row">
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Họ và tên</label>
                        <div class="w-full relative mb-input undefined">
                            <input type="text" name="FullName" value="{{Auth::user()->Name}}" class="re-input">
                        </div>
                    </div>
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Ngày sinh</label>
                        <div class="w-full relative mb-input undefined">
                            <input class="re-input" name="BirthDay" value="{{Auth::user()->BirthDay}}" type="date" required="" style="padding: .6rem;">
                        </div>
                    </div>
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Số điện thoại</label>
                        <div class="w-full relative mb-input undefined">
                            <input class="re-input" name="PhoneNumber" value="{{Auth::user()->Phone}}" type="tel" required="">
                        </div>
                    </div>
                    <div class="f-item col col-6">
                        <label for="" class="re-label">Email</label>
                        <div class="w-full relative mb-input undefined">
                            <input class="re-input" name="Email" value="{{Auth::user()->Email}}" type="email" required="">
                        </div>
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
        <div class="acc-prf-form re-form">
            <form action="">
                <div class="f-list row">
                    <div class="f-item cols">
                        <label for="" class="re-label">Mật khẩu cũ <span style="color:red">*</span></label>
                        <div class="w-full relative mb-input undefined">
                            <input type="password" name="OldPassword" class="re-input" require>
                        </div>
                    </div>
                    <div class="f-item cols">
                        <label for="" class="re-label">Mật khẩu mới <span style="color:red">*</span></label>
                        <div class="w-full relative mb-input undefined">
                            <input type="password" name="NewPassword" class="re-input" require>
                        </div>
                    </div>
                    <div class="f-item cols">
                        <label for="" class="re-label">Xác thực mật khẩu <span style="color:red">*</span></label>
                        <div class="w-full relative mb-input undefined">
                            <input type="password" name="RetypePassword" class="re-input" require>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn--pri" style="margin-top: 1rem">
                    <span class="txt">Đổi mật khẩu</span>
                </button>
            </form>
        </div>
    </div>
</div>