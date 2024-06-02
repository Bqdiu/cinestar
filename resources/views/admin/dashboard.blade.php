@extends('layouts.admin')
@section('main-content')
    <div class="nav nav-tabs">
        <div class="nav-item">
            <a href="#MovieChart" class="nav-link active" data-toggle="tab">THỐNG KÊ DOANH THU PHIM</a>
        </div>
        <div class="nav-item">
            <a href="#UserChart" class="nav-link" data-toggle="tab">THỐNG KÊ CHI TIÊU KHÁCH HÀNG</a>
        </div>
    </div>

    <div class="tab-content">
        <div id="MovieChart" class="container tab-pane active">
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
                        <div class="col-4">
                            <label for="year" class="form-label">Năm:</label>
                            <select class="form-control" name="yearSelect" id="yearSelect">
                                @for ($i = $year_old->year; $i <= $year_new->year; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm text" value="Filter"
                        style="margin-top:15px">
                </form>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <canvas id="MovieRevenueChart" width="400" height="300"></canvas>
                </div>
            </div>
        </div>

        <div id="UserChart" class="container tab-pane">
            <div class="row">
                <div class="col-md-8">
                    <canvas id="UserExpenseChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
