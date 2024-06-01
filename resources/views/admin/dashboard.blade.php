@extends('layouts.admin')
@section('main-content')
    <div class="row">
            <h3 class="text-center">THỐNG KÊ DOANH THU PHIM</h3>
            <form autocomplete="off" style="padding: 10px">
                @csrf
                 <div class="row">
                     <div class="col-4">
                             <label for="movie_status_name" class="form-label">Phim:</label>
                             <select class="form-control" name="movie_id" id="movie_name">
 
                             </select>
                     </div>
                    {{-- Chọn năm --}}
                    <div class="col-4">
                        <label for="year" class="form-label">Năm:</label>
                        <select class="form-control" name="year" id="year">
                            @for ($i = 2021; $i <= 2025; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm text" value="Filter">
                

            </form>
    </div>

    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
    
@endsection
