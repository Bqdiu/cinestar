@extends ('layout')
<link href="{{asset('/css/profile.css')}}" rel="stylesheet" />
<?php
$pageTitle = "Profile";
?>
@section('main-content')
<div class="container" style="padding-top: 3rem">
    <div class="prof-wr">
        <div class="prof-wr row">
            <div class="side-bar col col-2">
                <div class="acc-sbar">
                    <div class="acc-sbar-block">
                        <div class="about-user">
                            <div class="ava">
                                <img class="rounded-[100%]" src="https://cinestar.monamedia.net/assets/images/ic-header-auth.svg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Admin bro</p>
                            </div>
                        </div>
                    </div>
                    <div class="acc-sbar-block">
                        <div class="acc-menu">
                            <div class="acc-menu-slider">
                                <div class="swiper-container">
                                    <div class="swiper rows">
                                        <div class="swiper-wrapper" style="height: 40%">
                                            <div class="swiper-slide cols active">
                                                <a class="acc-menu-link" href="/profile">
                                                    <img src="https://cinestar.com.vn/assets/images/ic-user-circle.svg" alt="">
                                                    <span class="txt">Thông tin khách hàng</span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide cols">
                                                <a class="acc-menu-link" href="/history">
                                                    <img src="https://cinestar.com.vn/assets/images/acc-menu-3.svg" alt="">
                                                    <span class="txt">Lịch sử mua hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="acc-sbar-block">
                    <div class="act-logout">
                        <a class="logout" href="/logout">
                            <span class="ic">
                                <img src="https://cinestar.com.vn/assets/images/ic-logout.svg" alt="">
                            </span>
                            <span class="txt">
                                Đăng xuất
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="prof-main cols col-10">
            <div class="sec-heading">
                <h2 class="heading">THÔNG TIN KHÁCH HÀNG</h2>
            </div>
            <div class="acc-prf">
                <div>
                    <div class="acc-prf-block">
                        <p class="acc-prf-block-title">Thông tin cá nhân</p>
                        <div class="acc-prf-form re-form">
                            <form action="">
                                <div class="f-list row">
                                    <div class="f-item col col-6">
                                        <label for="" class="re-label">Họ và tên</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input type="text" class="re-input">
                                        </div>
                                    </div>
                                    <div class="f-item col col-6">
                                        <label for="" class="re-label">Ngày sinh</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input class="re-input " type="date" required="" style="padding: .6rem;">
                                        </div>
                                    </div>
                                    <div class="f-item col col-6">
                                        <label for="" class="re-label">Số điện thoại</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input class="re-input " type="tel" required="">
                                        </div>
                                    </div>
                                    <div class="f-item col col-6">
                                        <label for="" class="re-label">Số điện thoại</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input class="re-input " type="email" required="">
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
                                        <label for="" class="re-label">Mật khẩu cũ</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input type="text" class="re-input">
                                        </div>
                                    </div>
                                    <div class="f-item cols">
                                        <label for="" class="re-label">Mật khẩu mới</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input type="text" class="re-input">
                                        </div>
                                    </div>
                                    <div class="f-item cols">
                                        <label for="" class="re-label">Xác thực mật khẩu</label>
                                        <div class="w-full relative mb-input undefined">
                                            <input type="text" class="re-input">
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
            </div>
        </div>
    </div>
</div>
@endsection