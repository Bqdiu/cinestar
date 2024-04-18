@if($idStatus == 1 || $idStatus == 2 || $idStatus == 4)

<div class="heading">
  <h1>{{$Title->StatusName}}</h1>
</div>
<div class="container">
  <div class="row">
    @foreach($PhimTheoRap as $k=>$v)
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6"><a href="/detailmovie/{{$v->MovieID}}"><img style="width:100%;height:90%" src="/imgMovie/{{$v->Thumbnail}}" alt=""></a></div>
        <div class="col-md-6">
          <p class="text-white" style="font-weight:1000;margin-bottom:20px">{{$v->Title}} ({{$v->AgeRegulationName}})</p>
          <p><span><img class="span-icon" src="/img/icon-tag.svg" alt=""></span>
            <span class="text-white">{{$v->Genre}}</span> <span></p>
            <p><img class="span-icon" src="/img/icon-clock.svg" alt=""></span>
            <span class="text-white">{{$v->Duration}}</span></p>
          <p>  <span class="span-icon" style="color:yellow"><i class="fas fa-globe-asia" style="padding-left:4px"></i></span>
            <span class="text-white">{{$v->Language}}</span>
            <span class="span-icon"><img style="width:24px;height:24px" src="/img/subtitle.svg" alt=""></span>
            <span class="text-white">{{$v->Country}}</span></p>

           
          
        </div>
      </div>
    </div>
   @endforeach
  </div>

</div>


@endif