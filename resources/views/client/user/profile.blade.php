@extends ('layout')
<link href="{{asset('/css/profile.css')}}" rel="stylesheet" />
<?php
$pageTitle = "Profile";
?>
@section('main-content')
@if(Auth::check())
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
                                <p class="name">{{Auth::user()->Name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="acc-sbar-block">
                        <div class="acc-menu">
                            <div class="acc-menu-slider">
                                <div class="swiper-container">
                                    <div class="swiper rows">
                                        <div class="swiper-wrapper" style="height: 40%">
                                            <div class="swiper-slide cols active" id="swiper-slide-1">
                                                <a class="acc-menu-link" data-swiper-wrapper="swiper-slide-1">
                                                    <img src="https://cinestar.com.vn/assets/images/ic-user-circle.svg" alt="">
                                                    <span class="txt">Thông tin khách hàng</span>
                                                </a>
                                            </div>
                                            <div class="swiper-slide cols" id="swiper-slide-2">
                                                <a class="acc-menu-link" data-swiper-wrapper="swiper-slide-2">
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

                </div>
            </div>
        </div>
    </div>
    @else
    @endif
    @endsection