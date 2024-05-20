@extends('layout')
<link href="{{asset('/css/promotion.css')}}" rel="stylesheet" />
<?php
$pageTitle = "Servies";
?>
@section('main-content')
<div class="container">
    <div class="enter-heading sec-heading" style="margin-top: 0">
        <h1 class="heading" style="margin-top: 30px">TẤT CẢ CÁC GIẢI TRÍ</h1>
    </div>
    <div class="enter-content">
        <ul class="list">
            <li class="item" data-aos="fade-up">
                <a class="bg" style="border-radius: unset;" href="">
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Service/service-1.png" alt="" />
                </a>
            </li>
            <li class="item" data-aos="fade-up"> 
                <a class="bg" style="border-radius: unset;" href="">
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Service/Rectangle_3463983.png" alt="" />
                </a>
            </li>
            <li class="item" data-aos="fade-up"> 
                <a class="bg" style="border-radius: unset;" href="">
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/wysiwyg/CMSPage/Service/bowling-dt-2.png" alt="" />
                </a>
            </li>
            <li class="item" data-aos="fade-up">
                <a class="bg" style="border-radius: unset;" href="">
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/wysiwyg/CMSPage/Service/billards-dt-2.png" alt="" />
                </a>
            </li>
            <li class="item" data-aos="fade-up">
                <a class="bg" style="border-radius: unset;" href=""> 
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/wysiwyg/CMSPage/Service/opera-dt-2.png" alt="" />
                </a>
            </li>
            <li class="item" data-aos="fade-up">
                <a class="bg" style="border-radius: unset;" href="">
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/wysiwyg/CMSPage/Service/gym-dt-2.png" alt="" />
                 </a>
            </li>
            <li class="item" data-aos="fade-up">
                <a class="bg" style="border-radius: unset;" href="">
                    <img class="img-enter-des" src="https://api-website.cinestar.com.vn/media/wysiwyg/CMSPage/Service/coffee-dt-2.png" alt="" />
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection