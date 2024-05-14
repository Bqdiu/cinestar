@foreach($Cinema as $cKey=>$cValue)
<div class="cinestar-item collapseItem active mt-3" id="cinestar-item-{{$cKey}}">
    <div class="cinestar-heading collapseHeading" data-cinestar-collapse-item="cinestar-item-{{$cKey}}">
        <span class="tittle">{{$cValue->Name}}</span>
        <i class="fas fa-angle-down text-white icon"></i>
    </div>
    <div class="cinestar-body collapseBody">
        <p class="addr">{{$cValue->Address}}</p>
        <ul class="list-info">
            <li class="item-info">

                @if(!$ShowTime[$cValue->CinemaID]->isEmpty())
                <div class="tt text-white">Standard</div>
                <ul class="list-time">
                    @foreach($ShowTime[$cValue->CinemaID] as $timeValue)
                    <li class="item-time" data-show-time-item="{{$timeValue->ShowID}}">{{ \Carbon\Carbon::createFromFormat('H:i:s', $timeValue->StartTime)->format('H:i') }}</li>
                    @endforeach
                </ul>
                @else
                <div class="none-time">
                    <img src="/img/movie-updating.png" alt="">
                    <div class="tt">Hiện chưa có lịch chiếu</div>
                </div>
                @endif
            </li>
        </ul>
    </div>
</div>
@endforeach