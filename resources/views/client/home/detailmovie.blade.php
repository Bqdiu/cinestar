@extends ('layout');

@section('main-content')


<div class="container mt-3">
    <div class="row">
        <div class="col-md-5 d-flex justify-content-center" style="position:relative">
            <div class="type-movie-box">
                <div class="type-movie"><span class="txt">2D</span></div>
                <div class="age"><span class="num">{{$PhimItem->AgeRegulationName}}</span><span class="txt">{{$PhimItem->Object}}</span></div>
            </div>
      
        <img style="width:85%;border-radius:5px" src="/imgMovie/{{$PhimItem->Thumbnail}}" alt="">
        </div>
        <div class="col-md-7">
        <h2 class="text-white" style="font-weight:1000;margin-bottom:20px" >{{$PhimItem->Title}}</h2>
       <ul class="info-detail">
        <li>
            <span><img class="span-icon" src="/img/icon-tag.svg" alt=""></span>
            <span class="text-white">{{$PhimItem->Genre}}</span>
        </li>
        <li>
            <span><img class="span-icon" src="/img/icon-clock.svg" alt=""></span>
            <span class="text-white">{{$PhimItem->Duration}}</span>
        </li>

        <li>
            <span class="span-icon" style="color:yellow"><i class="fas fa-globe-asia" style="padding-left:4px"></i></span>
            <span class="text-white">{{$PhimItem->Language}}</span>
        </li>
        <li>
            <span class="span-icon"><img style="width:24px;height:24px" src="/img/subtitle.svg" alt=""></span>
            <span class="text-white">{{$PhimItem->Country}}</span>
        </li>
        <li>
            <span class="span-icon"><i  class="fas fa-user-check" style="color:yellow;padding-left:4px"></i></span>
            <span class="text-black" style="background:yellow">{{$PhimItem->Content}}</span>
        </li>
       </ul>
       <h4 class="text-white" style="font-weight:1000;margin-top:20px">Mô Tả</h4>
       <ul class="info-detail text-white" style="font-size:14px">
        <li>
            <span>Đạo diễn:</span>
            <span>{{$PhimItem->Director}}</span>
        </li>
        <li>
            <span>Diễn viên:</span>
            <span>{{$PhimItem->Actor}}</span>
        </li>
        <li>
            <span>Khởi chiếu:</span>
            <span>{{$PhimItem->ReleaseDate}}</span>
        </li>
       </ul>
       <h4 class="text-white" style="font-weight:1000;margin-top:3.2rem;">NỘI DUNG PHIM</h4>
       <p class="text-white" style="width:85%">{{$PhimItem->Description}}</p>
        
       <div class="trailer-link" style="margin-top:3.2rem">
       <a href="{{$PhimItem->trailer_url}}" class="w-100 text-center link-text-btn" style="margin:auto;font-size:20px;border:1px solid yellow;padding:20px;border-radius:10px;color:yellow"><img style="width:37px;height:37px" src="https://cinestar.com.vn/assets/images/icon-play-vid.svg" alt=""> Xem trailer</a>
       </div>
        </div>
    </div>
</div>
<div class="container">
<h2 class="text-white text-center" style="font-weight:1000;margin-bottom:20px;margin-top:100px" >LỊCH CHIẾU</h2>

@endsection