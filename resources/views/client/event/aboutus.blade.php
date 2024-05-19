@extends('layout')
<link href="{{asset('/css/promotion.css')}}" rel="stylesheet" />
<?php
$pageTitle = "About";
?>
@section('main-content')
<div class="container">
    <div class="ht-qc">
        <div class="ht-qc-br"> <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ht-qc-br.jpg" alt="" />
        </div>
        <div class="ht-qc-content">
            <h2 class="heading">HỆ THỐNG CỤM RẠP TRÊN TOÀN QUỐC</h2>
            <p class="des">Cinestar là một trong những hệ thống rạp chiếu phim được yêu thích nhất tại Việt Nam, cung cấp nhiều mô hình giải trí hấp dẫn bao gồm Các Cụm Rạp Chiếu Phim hiện đại, Nhà hát, Khu vui chơi trẻ em Kidzone, Bowling,
                Billiards, Games, Phòng Gym, Nhà Hàng, và Phố Bia C'Beer. Với mục tiêu trở thành điểm đến giải trí cho mọi gia đình Việt Nam, Cinestar đang được biết đến là cụm rạp ủng hộ phim Việt, góp phần phát triển điện
                ảnh Việt. Không chỉ chiếu các bộ phim bom tấn quốc tế, Cinestar còn đồng hành cùng các nhà làm phim Việt Nam, đưa những tác phẩm điện ảnh đặc sắc của Việt Nam đến gần hơn với khán giả.&nbsp;</p>
        </div>
    </div>
    <div class="ht-as">
        <div class="ht-as-heading sec-heading">
            <h2 class="heading">SỨ MỆNH</h2>
        </div>
        <div class="ht-as-list au-row" style="">
            <div class="ht-as-item au-col au-col-4">
                <div class="ht-as-wr">
                    <p class="num">01</p>
                    <h3 class="ht-as-name">Góp phần tăng trưởng thị phần điện ảnh, văn hóa, giải trí của người Việt Nam</h3>
                </div>
            </div>
            <div class="ht-as-item au-col au-col-4">
                <div class="ht-as-wr">
                    <p class="num">02</p>
                    <h3 class="ht-as-name">Phát triển dịch vụ xuất sắc với mức giá tối ưu, phù hợp với thu nhập người Việt Nam.</h3>
                </div>
            </div>
            <div class="ht-as-item au-col au-col-4">
                <div class="ht-as-wr">
                    <p class="num">03</p>
                    <h3 class="ht-as-name">Mang nghệ thuật điện ảnh, văn hóa Việt Nam hội nhập quốc tế.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="gallery">
        <div class="gallery-item" id="0">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/01-Quoc-Thanh-masthead.jpg" data-fancybox="gallery0" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/01-Quoc-Thanh-masthead.jpg" alt="Cinestar Quốc Thanh"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Quốc Thanh</h2>
            </div>
        </div>
        <div class="gallery-item" id="1">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/03-Hai_Ba_Trung_masthead.jpg" data-fancybox="gallery1" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/03-Hai_Ba_Trung_masthead.jpg" alt="Cinestar Hai Bà Trưng (TP.HCM)"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Hai Bà Trưng (TP.HCM)</h2>
            </div>
        </div>
        <div class="gallery-item" id="2">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/05_sinh_vien_masthead.jpg" data-fancybox="gallery2" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/05_sinh_vien_masthead.jpg" alt="Cinestar Sinh Viên (Bình Dương)"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Sinh Viên (Bình Dương)</h2>
            </div>
        </div>
        <div class="gallery-item" id="3">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/06_My_Tho_masthead.jpg" data-fancybox="gallery3" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/06_My_Tho_masthead.jpg" alt="Cinestar Mỹ Tho"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Mỹ Tho</h2>
            </div>
        </div>
        <div class="gallery-item" id="4">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/07_Kien_Giang_masthead.jpg" data-fancybox="gallery4" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/07_Kien_Giang_masthead.jpg" alt="Cinestar Kiên Giang"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Kiên Giang</h2>
            </div>
        </div>
        <div class="gallery-item" id="5">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/08_Lam_Dong_masthead.jpg" data-fancybox="gallery5" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/08_Lam_Dong_masthead.jpg" alt="Cinestar Lâm Đồng"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Lâm Đồng</h2>
            </div>
        </div>
        <div class="gallery-item" id="6">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/02-Da_Lat_masthead.jpg" data-fancybox="gallery6" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/02-Da_Lat_masthead.jpg" alt="Cinestar Đà Lạt"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Đà Lạt</h2>
            </div>
        </div>
        <div class="gallery-item" id="7">
            <div class="gallery-item-wrap">
                <div class="gallery-item-images">
                    <a href="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/04_Hue_masthead.jpg" data-fancybox="gallery7" class="gallery-item-image">
                    <img src="https://cinestar-api.monamedia.net/media/wysiwyg/CinemaImage/04_Hue_masthead.jpg" alt="Cinestar Huế"/></a>
                </div>
            </div>
            <div class="gallery-item-content">
                <h2 class="heading">Cinestar Huế</h2>
            </div>
        </div>
    </div>

    <div class="ts">
        <div class="container">
            <div class="sec-heading" data-aos="fade-up">
                <h2 class="heading">TRỤ SỞ CỦA CHÚNG TÔI</h2>
                <p class="des">Các phòng chiếu được trang bị các thiết bị tiên tiến như hệ thống âm thanh vòm, màn hình rộng và độ phân giải cao, tạo nên hình ảnh sắc nét và âm thanh sống động.</p>
            </div>
            <div class="ts-slider" data-aos="fade-up">
                <div class="swiper-container">
                    <div class="swiper rows">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide col">
                                <div class="ts-wr">
                                    <div class="ts-img">
                                        <img class="ts-img-des" src="https://cinestar-api.monamedia.net/pub/template/assets/images/ts-img-2.jpg" alt="">
                                    </div>
                                    <div class="ts-content">
                                        <h3 class="ts-name heading">TRỤ SỞ | HEADQUARTER</h3>
                                        <ul class="ct-tt">
                                            <li>
                                                <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ts-1.svg" alt="" />
                                                <a href="https://maps.app.goo.gl/d7S3pWtnwCc7P2Dy5" target="_blank">135
                                Hai Bà Trưng, Phường Bến Nghé, Quận 1</a>
                                            </li>
                                            <li>
                                                <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ts-2.svg" alt="" />
                                                <a href="mailto:marketing.cinestar@gmail.com">marketing.cinestar@gmail.com</a>
                                            </li>
                                            <li>
                                                <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ts-3.svg" alt="" />
                                                <a href="tel:028 7300 7279">028 7300 7279</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div

<div class="container">
    <div class="contact-branch-wr">
        <div class="contact-branch-heading sec-heading" data-aos="fade-up">
            <div class="heading">
                <h1>HỆ THỐNG CÁC CỤM RẠP</h1>
            </div>
            <div class="desc">
                <p class="txt">Các phòng chiếu được trang bị các thiết bị tiên tiến như hệ thống âm thanh vòm, màn hình rộng và độ phân giải cao, tạo nên hình ảnh sắc nét và âm thanh sống động.</p>
            </div>
        </div>
        <div class="contact-branch-body row">
            <div class="contact-branch-left col col-6" data-aos="fade-up">
                <div class="image">
                    <img src="https://api-website.cinestar.com.vn/media/wysiwyg/CMSPage/Abouts/Tru_o_ng_Sa_1.png" alt="" />
                </div>
            </div>
            <div class="contact-branch-right col col-6">
                <div class="branch-list address-list collapseBlockJS">
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">TRỤ SỞ | HEADQUATER </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/to93g9tniRvHtVUj6" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg" alt="" />
                        </span>
                        <span class="txt">135 Hai Bà Trưng, Phường Bến Nghé, Quận 1</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="mailto:marketingcinestar@gmail.com">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-mail.svg" alt="" />
                        </span>
                        <span class="txt">marketingcinestar@gmail.com</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="tel:028 7300 7279">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-call.svg" alt="" />
                        </span>
                        <span class="txt"> 028 7300 7279</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR HAI BÀ TRƯNG </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg" alt="" />
                        </span>
                        <span class="txt">5 phòng chiếu với 725 ghế.</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/to93g9tniRvHtVUj6" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg" alt="" />
                        </span>
                        <span class="txt">135 Hai Bà Trưng, Phường Bến Nghé, Quận 1</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR QUỐC THANH </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">6 phòng chiếu với 930
                            ghế.</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" target="_blank" href="https://maps.app.goo.gl/tfkaz5GB3dMWmm8q9">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">271 Nguyễn Trãi, Phường Nguyễn
                            Cư Trinh, Quận
                            1</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR STUDENT (BÌNH DƯƠNG) </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">6 phòng chiếu với 1592 ghế</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/WinCcQWMzSpnsSEy6" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">Nhà văn hóa Sinh Viên, ĐHQG Thành phố Hồ Chí
                            Minh</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR HUẾ </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">8 phòng chiếu với 1200
                            ghế</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/TU3fyNWzC36uWHvY6" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">25 Hai Bà Trưng, Phường Vĩnh
                            Ninh, TP.Huế</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR MỸ THO </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">5 phòng chiếu với 912
                            ghế</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/yzmcyxYB8FJRqY2J8" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">52 Đinh Bộ Lĩnh, Phường 3, TP.
                            Mỹ Tho</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR KIÊN GIANG </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">4 phòng chiếu với 750
                            ghế</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/GGS6svQTco68Nfy89" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">TTTM Rạch Sỏi, Phường Rạch
                            Sỏi, TP. Rạch Giá</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR LÂM ĐỒNG </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">4 phòng chiếu với 853 ghế</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/4CB8q19tGKuG18vGA" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">713 QL20, Liên Nghĩa Đức Trọng, Lâm Đồng</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="branch-item address-item collapseItem" data-aos="fade-up">
                        <div class="address-box">
                            <div class="branch-heading address-box-head collapseHead">
                                <h4 class="sub-tittle">CINESTAR ĐÀ LẠT </h4>
                                <!-- <i class="fa-solid fa-angle-down icon">
            </i> -->
                            </div>
                        
                            <div class="career-item-footer">
                                <ul class="list">
                                    <li class="item">
                                        <a class="link" href="javascript:;">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-room.svg"
                                alt="" />
                        </span>
                        <span class="txt">&nbsp;6 phòng chiếu với 1592 ghế</span>
                    </a>
                                    </li>
                                    <li class="item">
                                        <a class="link" href="https://maps.app.goo.gl/ac87TGs9pcoREvQVA" target="_blank">
                        <span class="ic">
                            <img src="https://cinestar-api.monamedia.net/pub/template/assets/images/ic-branch-map.svg"
                                alt="" />
                        </span>
                        <span class="txt">Quảng trường Lâm Viên, TP. Đà Lạt</span>
                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection