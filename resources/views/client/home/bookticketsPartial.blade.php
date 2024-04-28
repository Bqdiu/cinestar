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
            <div class="col-md-6"><a href="/detailmovie/{{$v->MovieID}}"><img style="width:100%;" src="/imgMovie/{{$v->Thumbnail}}" alt=""></a></div>
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
                <div id="movie-collapse-1-{{$v->MovieID}}" data-collapse-id="movie-collapse-1-{{$v->MovieID}}" class="movie-collapse d-flex w-100 justify-content-between" data-movie-id="content-movieShow-1-{{$v->MovieID}}">
                  <p class="text-white" id="clickItem">Ngày: 19/04/2024</p>
                  <p class="text-white d-grid align-items-center"><i class="fas fa-angle-up"></i></p>
                </div>
                <div id="content-movieShow-1-{{$v->MovieID}}" class="content-movieShow mt-2">
                    <p class="text-white">STANDARD</p>
                    <div class="row">
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a>
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a>
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a>
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a> 
                                 
                    </div>
                </div>
                
              </div>
              <div class="movieShow">
                <div id="movie-collapse-2-{{$v->MovieID}}" data-collapse-id="movie-collapse-2-{{$v->MovieID}}" class="movie-collapse d-flex w-100 justify-content-between" data-movie-id="content-movieShow-2-{{$v->MovieID}}">
                  <p class="text-white" id="clickItem">Ngày: 20/04/2024</p>
                  <p class="text-white d-grid align-items-center"><i class="fas fa-angle-up"></i></p>
                </div>
                <div id="content-movieShow-2-{{$v->MovieID}}" class="content-movieShow mt-2">
                    <p class="text-white">STANDARD</p>
                    <div class="row">
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a>
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a>
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a>
                    <a href="" class="col-md-3 movie-show-item"><span>09:25</span></a> 
                                 
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