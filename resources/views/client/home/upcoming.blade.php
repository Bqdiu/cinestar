@extends ('layout')
<?php
$pageTitle = "Cinestar - PHIM SẮP CHIẾU";
?>
@section('main-content')
<div class="heading">
  <h1>PHIM SẮP CHIẾU</h1>
</div>
<div class="container">
  <div class="row">
    @foreach($Phim as $k=>$item)
    <div class="col-md-3">
      <a style="text-decoration:none" href="/detailmovie/{{$item->MovieID}}">

        <div class="card" style="width: 18rem;height:700px;position:relative;">
          <div class="type-movie-box" style="left:0px">
            <div class="type-movie" style="height:50px;width:50px"><span class="txt">2D</span></div>
            <div class="age" style="height:50px;width:50px"><span class="num" style="font-size:12px">{{$item->regulation->AgeRegulationName}}</span><span class="txt" style="letter-spacing: .2rem;">{{$item->regulation->Object}}</span></div>
          </div>
          <img src="/imgMovie/{{$item->Thumbnail}}" style="border-radius:5px" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title text-white text-center" style="height:40px">{{$item->Title}}</h6>
            <div class="d-inlinegrid w-100 bottom-card" style="margin-top:40px">
              <div class="row">
                <div class="col-md-6" style="margin:auto">
                  <a href="{{$item->trailer_url}}" class="w-100 text-center link-text" style="margin:auto;"><img src="https://cinestar.com.vn/assets/images/icon-play-vid.svg" alt="">Xem trailer</a>
                </div>
                <div class="col-md-6">

                  <a href="/detailmovie/{{$item->MovieID}}" class="btn btn--pri w-100">TÌM HIỂU</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </a>

    </div>
    @endforeach

  </div>
</div>
@endsection