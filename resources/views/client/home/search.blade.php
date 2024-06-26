@extends('layout')
<?php
$pageTitle = "Cinestar - Tìm Kiếm";
?>
@section('main-content')
<div class="container" style="margin-top:20px">
  <div class="row">
    @if($Phim->count()!=0)
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
                  @if($item->IDStatus == 2)
                  <a href="/detailmovie/{{$item->MovieID}}" class="btn btn--pri w-100">Tìm Hiểu</a>
                  @elseif($item->IDStatus == 1)
                  <a href="/detailmovie/{{$item->MovieID}}" class="btn btn--pri w-100">Đặt Phim</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>

    </div>
    @endforeach
    @else
    <div class="box"><i class="fas fa-film"></i>
      <p class="mb-0"> Không tìm thấy phim cần tìm...</p>
    </div>
    @endif


  </div>
</div>
@endsection