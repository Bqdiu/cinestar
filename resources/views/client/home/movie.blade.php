@extends ('layout')
<?php
$pageTitle = "Mua Vé Xem Phim";
?>
@section('main-content')
@foreach($Status as $statusItem)

@if($statusItem->IDStatus != 3 && $statusItem->IDStatus != 4)
<?php
$i = 0;
$chunks = $Phim->filter(function ($phim) use ($statusItem) {
  return $phim->IDStatus == $statusItem->IDStatus;
})->chunk(4);
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
                        @if($item->IDStatus == 1)
                        <a href="/detailmovie/{{$item->MovieID}}" class="btn btn--pri w-100">ĐẶT VÉ</a>
                        @elseif($item->IDStatus == 2)
                        <a href="/detailmovie/{{$item->MovieID}}" class="btn btn--pri w-100">Tìm Hiểu</a>
                        @endif
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
      <?php $i = $i + 1; ?>
      @endforeach
      <div class="carousel-indicators" style="margin-bottom:0px">
        @for($p=0;$p<$i;$p=$p+1) @if($p==0) <button type="button" data-bs-target="#carousel{{$statusItem->IDStatus}}" data-bs-slide-to="{{$p}}" class="active" aria-current="true" aria-label="Slide {{$p}}"></button>
          @else
          <button type="button" data-bs-target="#carousel{{$statusItem->IDStatus}}" data-bs-slide-to="{{$p}}" aria-current="true" aria-label="Slide {{$p}}"></button>
          @endif
          @endfor

      </div>

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
</div>

<div class="d-flex justify-content-center" style="margin-bottom:90px">
  <?php
  if ($statusItem->IDStatus == 1) {
    $status = '/movie/showing';
  } else {
    $status = '/movie/upcoming';
  }
  ?>
  <a href="{{$status}}" class="btn-xemthem">XEM THÊM</a>
</div>


@endif
@endforeach
@endsection