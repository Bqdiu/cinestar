@if($idStatus == 1 || $idStatus == 2 || $idStatus == 4)
<div class="heading">
  <h1>{{$Title->StatusName}}</h1>
</div>
<div class="container mb-5">
  <div class="row">
    @if(isset($CountPhim) && $CountPhim > 0)
      @foreach($PhimTheoRap as $k=>$v)
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6"><a href="/detailmovie/{{$v->MovieID}}"><img style="width:100%;height:90%" src="/imgMovie/{{$v->Thumbnail}}" alt=""></a></div>
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
                <span class="span-icon m-0"><i  class="fas fa-user-check" style="color:yellow;padding-left:4px"></i></span>
                <span class="text-white">{{$v->Content}}</span>
              </p>
              <div class="movieShow">
                <div class="movie-collapse d-flex w-100 justify-content-between">
                  <p class="text-white">Ngày: 19/04/2024</p>
                  <p class="text-white d-grid align-items-center"><i class="fas fa-angle-up"></i></p>
                </div>
                <div class="content-movieShow ">
                <p class="text-white">STANDARD</p>
                <div class="row">
                  <div class="col-md-3 p-0 ms-2 mt-1 mb-1 me-1" style="width:auto">
                    <span class="movie-show-item active">09:25</span>
                  </div>
                  <div class="col-md-3 p-0 m-1" style="width:auto">
                    <span class="movie-show-item">09:25</span>
                  </div>
                  <div class="col-md-3 p-0 m-1" style="width:auto">
                    <span class="movie-show-item">09:25</span>
                  </div>
                  <div class="col-md-3 p-0 m-1" style="width:auto">
                    <span class="movie-show-item">09:25</span>
                  </div>
                  
                </div>
                </div>
                
              </div>
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
