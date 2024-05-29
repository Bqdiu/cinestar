@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Show Infor</h3>
                @if(session('mess'))
                    <div class="alert alert-success alert_hide">
                        {{session('mess')}}
                    </div>
                    
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger alert_hide">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               @if(session('error'))
                    <div class="alert alert-danger alert_hide">
                        {{session('error')}}
                    </div>
                    
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0 m-0">
                <a href="#" class="btn btn-success mt-2 mb-2 btn-add-user" data-bs-toggle="modal" data-bs-target="#addUser">Thêm mới</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center align-center">Show date</th>
                        <th scope="col" class="text-center align-center">Start time</th>
                        <th scope="col" class="text-center align-center">End time</th>
                        <th scope="col" class="text-center align-center">Cinema Hall</th>
                        <th scope="col" class="text-center align-center">Movie</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($show_infor as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->ShowID}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->ShowDate}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->StartTime}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->EndTime}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->Name}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->Title}}</td>
                                <td scope="row" class="align-middle">
                                    <a class="col btn btn-secondary edit-ticketprice-btn" data-bs-toggle="modal" data-bs-target="#editUser" data-ticketprice-id="{{$row->UserID}} ">Edit</a>
                                </td>
                                <td scope="row" class="align-middle">
                                    <a class="col btn btn-danger delete-ticketprice-btn" data-bs-toggle="modal" data-bs-target="#deleteUser" data-ticketprice-id="{{$row->UserID}}">Delete</a>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection