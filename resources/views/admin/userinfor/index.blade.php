@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Account</h3>
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
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0 m-0">
                <a href="#" class="btn btn-success mt-2 mb-2 btn-add-cinema" data-bs-toggle="modal" data-bs-target="#addCinema">Thêm mới</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">BirthDay</th>
                        <th scope="col" class="text-center">CCCD</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Phone</th>
                        <th scope="col" class="text-center">Role</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($users as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->UserID}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->Name}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->BirthDay}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->CCCD}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->Email}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->CCCD}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->role_name}}</td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-secondary edit-userinfor-btn" data-bs-toggle="modal" data-bs-target="#editCinema" data-userinfor-id="{{$row->UserID}} ">Edit</a>
                            </td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-danger delete-userinfor-btn" data-bs-toggle="modal" data-bs-target="#deleteCinema" data-userinfor-id="{{$row->UserID}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection