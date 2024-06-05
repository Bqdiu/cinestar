@if($idStatus == 1 || $idStatus == 2 || $idStatus == 4)
<div class="heading">
  <h1>{{$Title->StatusName}}</h1>
</div>
<div class="container mb-5">
  <div class="row">
    @if(isset($CountPhim) && $CountPhim > 0)
    @foreach($PhimTheoRap as $k=>$v)
    <div class="col-md-6">
      <div class="row mb-3">
        <div class="col-md-6"><a class="thumbnail-movie" href="/detailmovie/{{$v->MovieID}}?CityID={{$v->CityID}}"><img style="width:100%;" src="/imgMovie/{{$v->Thumbnail}}" alt=""></a></div>
        <div class="col-md-6">
          <p class="text-white" style="font-weight:1000;margin-bottom:20px">{{$v->Title}} ({{$v->AgeRegulationName}})</p>
          <div style="font-size:14px;">
            <p>
              <span><img class="span-icon m-0" src="/img/icon-tag.svg" alt=""></span>
              <span class="text-white ">{{$v->Genre}}</span>
            </p>
            <p>
              <img class="span-icon m-0" src="/img/icon-clock.svg" alt="">
              <span class="text-white mr-1">{{$v->Duration}}</span>
              <span class="span-icon m-0" style="color:yellow"><i class="fas fa-globe-asia" style="padding-left:4px"></i></span>
              <span class="text-white mr-1">{{$v->Language}}</span>
              <span class="span-icon m-0"><img style="width:24px;height:24px" src="/img/subtitle.svg" alt=""></span>
              <span class="text-white mr-1">{{$v->Country}}</span>
            </p>
          </div>
          <p style="font-size:14px">
            <span class="span-icon m-0"><i class="fas fa-user-check" style="color:yellow;padding-left:4px"></i></span>
            <span class="text-white">{{$v->Content}}</span>
          </p>
          <?php $date = 1 ?>

          @foreach(\App\Models\Showinfor::getDateOFShow($idRap,$v->MovieID) as $keyShow=>$valueShow)

          <div class="movieShow active" id="movieShow-{{$date}}-{{$v->MovieID}}">
            <div class="movie-collapse d-flex w-100 justify-content-between" data-movie-show="movieShow-{{$date}}-{{$v->MovieID}}">
              <p class="text-white" id="clickItem">Ngày: {{ \Carbon\Carbon::createFromFormat('Y-m-d', $valueShow->ShowDate)->format('d/m/Y') }}</p>
              <p class="text-white d-grid align-items-center"><i class="fas fa-angle-up icon"></i></p>
            </div>
            <div class="content-movieShow mt-2">
              <p class="text-white mb-2">STANDARD</p>
              <div class="row">

                @foreach(\App\Models\Showinfor::getStartTimeOFShow($idRap,$valueShow->ShowDate,$v->MovieID) as $keyTime=>$valueTime)

                <a href="/detailmovie/{{$v->MovieID}}?ShowID={{$valueTime->ShowID}}&CityID={{$valueTime->cinemahall->cinema->CityID}}&ShowDate={{$valueTime->ShowDate}}" class="col-md-3 movie-show-item"><span>{{ \Carbon\Carbon::createFromFormat('H:i:s', $valueTime->StartTime)->format('H:i') }}</span></a>

                @endforeach



              </div>
            </div>

          </div>

          <?php $date = $date + 1 ?>
          @endforeach
          @if($idStatus == 2)
          <div class="movies-rp-noti"><img src="/img/movie-updating.png" alt=""><span class="text-white">Chưa có suất chiếu</span></div>
          @endif

        </div>
      </div>
    </div>
    @endforeach
    @else
    <div class="col-md-12">
      <div class="w-100 d-grid justify-content-center align-items-center">
        <img style="filter: brightness(0) invert(1);" src="/img/movie-updating.png" alt="">
        <h1 style="color:yellow;text-align:center">ĐANG CẬP NHẬT</h1>
      </div>
    </div>
    @endif
  </div>
</div>


@endif

<script>
  $(document).ready(function() {
    $('.thumbnail-movie').each(function() {
      // Tìm href của phần tử .movie-show-item đầu tiên trong phần tử cha
      const firstHref = $(this).closest('.col-md-6').next().find('.movie-show-item').first().attr('href');
      if (firstHref) {
        // Gán href mới cho .thumbnail-movie
        $(this).attr('href', firstHref);
      }
    });
  });
</script>