@extends('layouts.admin')
@section('main-content')
    <div class="row">
            <h3 class="text-center">Thống kê doanh thu</h3>
            <form autocomplete="off" style="padding: 10px">
                @csrf
                 <div class="row">
                    <p class="col-6">Từ ngày: <input type="date" id="start_time" name="start_time" class="form-control"></p>
                    <p class="col-6">Đến ngày: <input type="date" id="end_time" name="end_time" class="form-control"></p>
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
