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
                            <td scope="row" class="text-center align-middle">{{$row->Phone}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->role_name}}</td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-secondary edit-userinfor-btn" data-bs-toggle="modal" data-bs-target="#editUser" data-userinfor-id="{{$row->UserID}} ">Edit</a>
                            </td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-danger delete-userinfor-btn" data-bs-toggle="modal" data-bs-target="#deleteUser" data-userinfor-id="{{$row->UserID}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Edit modal --}}
    <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="editUserID" name="editUserID">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editName" name="editName" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="editBirthDay" class="form-label">BirthDay</label>
                            <input type="date" class="form-control" id="editBirthDay" name="editBirthDay">
                        </div>
                        <div class="mb-3">
                            <label for="movie_status_name" class="form-label">Movie Status</label>
                            <select class="form-control" name="movie_status_id" id="movie_status_name">
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                        <input type="submit" class="btn btn-primary" value="Edit"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection