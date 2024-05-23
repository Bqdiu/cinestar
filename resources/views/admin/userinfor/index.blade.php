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
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">BirthDay</th>
                        <th scope="col" class="text-center">CCCD</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Phone</th>
                        <th scope="col" class="text-center">Role</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($users as $row)
                        <tr>
                            @if($row->UserID != 43)
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
                                <td scope="row" class="align-middle">
                                    <a class="col btn btn-primary reset-password-btn" data-bs-toggle="modal" data-bs-target="#resetPassword" data-userinfor-id="{{$row->UserID}}">Reset </a>
                                </td>
                            @endif
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
                <form action="{{route('editUserInfor')}}" method="post" enctype="multipart/form-data">

                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="editUserID" name="editUserID">
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="BirthDay" class="form-label">BirthDay</label>
                            <input type="date" class="form-control" id="BirthDay" name="BirthDay">
                        </div>
                        <div class="mb-3">
                            <label for="CCCD" class="form-label">CCCD</label>
                            <input type="text" class="form-control" id="CCCD" name="CCCD" placeholder="CCCD">
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="Phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Phone number">
                        </div>
                        <div class="mb-3">
                            <label for="edit_role_name" class="form-label">Role</label>
                            <select class="form-control" name="edit_role_id" id="edit_role_name">
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

    {{-- Delete modal --}}
    <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('deleteUser')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa tài khoản</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="deleteUserID" name="deleteUserID">
                        <p>Bạn có chắc chắn muốn xóa tài khoản này không?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add modal --}}
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('addUser')}}" method="post" enctype="multipart/form-data">

                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Create User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="addUserID" name="addUserID">
                        <div class="mb-3">
                            <label for="addName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="addName" name="addName" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="addUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="addUsername" name="addUsername" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="addPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="addPassword" name="addPassword" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="addBirthDay" class="form-label">BirthDay</label>
                            <input type="date" class="form-control" id="addBirthDay" name="addBirthDay">
                        </div>
                        <div class="mb-3">
                            <label for="addCCCD" class="form-label">CCCD</label>
                            <input type="text" class="form-control" id="addCCCD" name="addCCCD" placeholder="CCCD">
                        </div>
                        <div class="mb-3">
                            <label for="addEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="addEmail" name="addEmail" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="addPhone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="addPhone" name="addPhone" placeholder="Phone number">
                        </div>
                        <div class="mb-3">
                            <label for="add_role_name" class="form-label">Role</label>
                            <select class="form-control" name="add_role_id" id="add_role_name">
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                        <input type="submit" class="btn btn-primary" value="Submit"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection