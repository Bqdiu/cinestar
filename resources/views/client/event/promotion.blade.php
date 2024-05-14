@extends('layout')
<link href="{{asset('/css/promotion.css')}}" rel="stylesheet" />
@section('main-content')
<div class="container">
    <div class="promation-banner ht">
        <div class="pro-img">
            <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Member/Rectangle_1899.png" alt="" />
        </div>
    </div>
</div>
<div class="container">
    <div class="promotion-movie-wr">
        <div class="promotion-movie-list pro-row pb-80">
            <div class="promotion-it col" >
                <div class="promotion-content">
                    <div class="head">
                        <h4 class="sub-tittle" style="font-weight: bold">C’STUDENT -&nbsp; 45K CHO HỌC SINH SINH VIÊN&nbsp;</h4>
                        <p class="desc">Đồng giá 45K/2D cho HSSV/GV/U22 cả tuần tại mọi cụm rạp Cinestar</p>
                    </div>
                    <div class="inner">
                        <p class="tt">Điều kiện </p>
                        <ul class="list object">
                            <li>HSSV xuất trình thẻ HSSV hoặc CCCD từ dưới 22 tuổi.</li>
                            <li>Giảng viên/ giáo viên xuất trình thẻ giảng viên.&nbsp;</li>
                        </ul>
                    </div>
                    <div class="inner">
                        <p class="tt">Lưu ý</p>
                        <ul class="list note">
                            <li>Mỗi thẻ mua được một vé.</li>
                            <li>Không áp dụng cho các ngày Lễ, Tết, hoặc suất chiếu có phụ thu từ nhà phát hành phim.
                            </li>
                        </ul>
                    </div><a href="/movie" title="ĐẶT VÉ NGAY" class="btn btn--pri">ĐẶT VÉ NGAY</a>
                </div>
            </div>
            <div class="promotion-it col" >
                <div class="promotion-image">
                    <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/c_student.png" alt="" />
                </div>
            </div>
        </div>
        <div class="promotion-movie-list pro-row pb-80">
            <div class="promotion-it col" >
                <div class="promotion-image">
                    <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/C_TEN.png" alt="" />
                </div>
            </div>
            <div class="promotion-it col" >
                <div class="promotion-content">
                    <div class="head">
                        <h4 class="sub-tittle" style="font-weight: bold">C'TEN - HAPPY HOUR - 45K/ 2D MỐC 10H&nbsp;&nbsp;</h4>
                        <p class="desc">Áp dụng giá 45K/ 2D và 55K/ 3D cho khách hàng xem phim trước 10h sáng và sau 10h tối.</p>
                    </div>
                    <div class="inner">
                        <p class="tt">Điều kiện </p>
                        <ul class="list object">
                            <li>Khách hàng là thành C’FRIEND hoặc C’VIP của Cinestar.</li>
                            <li>Áp dụng tại App/Web Cinestar hoặc mua trực tiếp tại rạp.</li>
                        </ul>
                    </div>
                    <div class="inner">
                        <p class="tt">Lưu ý</p>
                        <ul class="list note">
                            <li>Không áp dụng cho các ngày lễ/tết.</li>
                        </ul>
                    </div><a href="/movie" title="ĐẶT VÉ NGAY" class="btn btn--pri">ĐẶT VÉ NGAY</a>
                </div>
            </div>
        </div>
        <div class="promotion-movie-list pro-row pb-80">
            <div class="promotion-it col" >
                <div class="promotion-content">
                    <div class="head">
                        <h4 class="sub-tittle">C'MONDAY - HAPPY DAY - ĐỒNG GIÁ 45K/ 2D</h4>
                        <p class="desc">Đồng giá 45K/2D, 55K/3D vào thứ 2 hàng tuần</p>
                    </div>
                    <div class="inner">
                        <p class="tt">Điều kiện </p>
                        <ul class="list object">
                            <li>Áp dụng cho các suất chiếu vào ngày thứ 2 hàng tuần.</li>
                            <li>Mua vé trực tiếp tại App/Web Cinestar hoặc mua trực tiếp tại rạp.&nbsp;</li>
                        </ul>
                    </div>
                    <div class="inner">
                        <p class="tt">Lưu ý</p>
                        <ul class="list note">
                            <li>Không áp dụng cho các ngày lễ/tết</li>
                        </ul>
                    </div><a href="/movie" title="ĐẶT VÉ NGAY" class="btn btn--pri">ĐẶT VÉ NGAY</a>
                </div>
            </div>
            <div class="promotion-it col" >
                <div class="promotion-image">
                    <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Member/monday_1_.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="promotion-movie-list pro-row pb-80">
            <div class="promotion-it col" >
                <div class="promotion-image">
                    <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/C_MEMBER.png" alt="" />
                </div>
            </div>
            <div class="promotion-it col" >
                <div class="promotion-content">
                    <div class="head">
                        <h4 class="sub-tittle" style="font-weight: bold">C'MEMBER - HAPPY MEMBER’S DAY - GIÁ CHỈ 45K/ 2D&nbsp;</h4>
                        <p class="desc">Áp dụng giá 45K/ 2D và 55K/ 3D cho khách hàng là thành viên Cinestar vào ngày thứ 4 hàng tuần.&nbsp;</p>
                    </div>
                    <div class="inner">
                        <p class="tt">Điều kiện </p>
                        <ul class="list object">
                            <li>Khách hàng là thành C’FRIEND hoặc C’VIP của Cinestar.</li>
                            <li>Áp dụng tại App/Web Cinestar hoặc mua trực tiếp tại rạp.</li>
                        </ul>
                    </div>
                    <div class="inner">
                        <p class="tt">Lưu ý</p>
                        <ul class="list note">
                            <li>Giảm thêm 10% giá trị hóa đơn bắp nước cho chủ thẻ C’FRIEND và 15% cho chủ thẻ C’VIP.
                            </li>
                            <li>Không áp dụng cho các ngày lễ/tết.</li>
                        </ul>
                    </div><a href="/movie" title="ĐẶT VÉ NGAY" class="btn btn--pri">ĐẶT VÉ NGAY</a>
                </div>
            </div>
        </div>
        <div class="promotion-movie-list pro-row pb-80">
            <div class="promotion-it col" >
                <div class="promotion-content">
                    <div class="head">
                        <h4 class="sub-tittle" style="font-weight: bold">C’PURPLE DAY - NHẬN VOUCHER 0 ĐỒNG&nbsp;</h4>
                        <p class="desc">Vào thứ 3 - tuần cuối mỗi tháng, Khách hàng đi xem phim mặc trang phục tím (áo, váy, quần, túi xách, nón, giày), mua vé xem phim được tặng 01 voucher xem phim 0 đồng</p>
                    </div>
                    <div class="inner">
                        <p class="tt">Điều kiện </p>
                        <ul class="list object">
                            <li>Áp dụng khi mua vé online hoặc mua trực tiếp tại rạp.</li>
                        </ul>
                    </div>
                    <div class="inner">
                        <p class="tt">Lưu ý</p>
                        <ul class="list note">
                            <li>Không áp dụng cho các ngày lễ/tết.</li>
                        </ul>
                    </div><a href="/movie" title="ĐẶT VÉ NGAY" class="btn btn--pri">ĐẶT VÉ NGAY</a>
                </div>
            </div>
            <div class="promotion-it col" >
                <div class="promotion-image">
                    <img src="https://api-website.cinestar.com.vn/media/.renditions/wysiwyg/CMSPage/Promotions/C_PURPLE_DAY.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection