@extends('layout')

@section('main-content')
<div class="container">
   <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/biet-doi-san-ma.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/thanh-xuan-18x2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/civil-war.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" style="left:-150px" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" style="right:-150px" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   </div>

@foreach($Status as $statusItem)

@if($statusItem->IDStatus != 3)
<?php
    $chunks = array_chunk(array_filter($Phim, function ($phim) use ($statusItem) {
      return $phim->IDStatus == $statusItem->IDStatus;
  }), 4);
    ?>
<div class="heading">
  <h1>{{$statusItem->StatusName}}</h1>
</div>
<div class="container">
<div id="carousel{{$statusItem->IDStatus}}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">

  <div class="carousel-inner">
  
    @foreach($chunks as $chunk)
    <div class="carousel-item {{$loop->first? 'active':''}}">
      <div class="row">
        @foreach($chunk as $k => $item)
        @if($item->IDStatus == $statusItem->IDStatus )
        <div class="col-md-3">
          <a style="text-decoration:none" href="/detailproduct/{{$item->MovieID}}">
              <div class="card" style="width: 18rem;height:600px">
                    <img src="{{$item->Thumbnail}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6 class="card-title text-white text-center" >{{$item->Title}}</h6>
                      <div class="d-inlinegrid w-100 bottom-card" style="margin-top:40px">
                          <div class="row">
                            <div class="col-md-6" style="margin:auto">
                                <a href="{{$item->trailer_url}}" class="w-100 text-center link-text" style="margin:auto;"><img src="https://cinestar.com.vn/assets/images/icon-play-vid.svg" alt="">Xem trailer</a>
                            </div>
                          <div class="col-md-6">
                                <a href="" class="btn btn--pri w-100">ĐẶT VÉ</a>
                          </div>
                      </div>
                    </div>
              </div>
            </div>
          </a>
       
        </div>
        @endif
        @endforeach
     
      </div>
    </div>

@endforeach
  
  
  </div>
  <button class="carousel-control-prev" style="left:-150px" type="button" data-bs-target="#carousel{{$statusItem->IDStatus}}" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" style="right: -150px" type="button" data-bs-target="#carousel{{$statusItem->IDStatus}}" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="carousel-indicators" style="position:relative">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  </div>
</div>
<div class="d-flex justify-content-center"style="margin-bottom:200px">
  <a href="" class="btn-xemthem">XEM THÊM</a>
</div>
@endif
@endforeach

@endsection