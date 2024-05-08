@extends ('layout');

@section('main-content')
<input type="hidden" name="idRap" id="idRap" value="{{$RapTheoID->CinemaID}}">
<div class="container mt-2">
    <div class="row" style="max-height:230px">
        <div class="col-md-4">
            <img src="/imgCinema/{{$RapTheoID->Thumbnail}}" alt="" style="width:103%;height:100%">
        </div>
        <div class="col-md-8" style="background:linear-gradient(106deg, rgba(102, 51, 153, .8), rgba(51, 102, 204, .8) 102.69%);flex:1;display:grid;align-items:center">
            <div class="d-flex flex-column ms-5">
                <p class="titleCinema">{{$RapTheoID->Name}}</p>
                <p class="txtAddress"><i class="fas fa-map-marker-alt" style="color:yellow;margin-right:5px"></i> {{$RapTheoID->Address}}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex text-white justify-content-lg-around align-items-center slide-SuatChieu">

            <div class="slide-PhimDangChieu click">
                <span>Phim Đang Chiếu</span>
            </div>
            <div class="slide-PhimSapChieu">
                <span>Phim Sắp Chiếu</span>
            </div>
            <div class="slide-SuatChieuDacBiet">
                <span>Suất Chiếu Đặc Biệt</span>
            </div>
            <div class="slide-BangGiaVe">
                <span>Bảng giá Vé</span>
            </div>


        </div>
    </div>
</div>
<div class="container" id="content-Movie-selector">

</div>

@endsection