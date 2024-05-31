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
                <a href="#" class="btn btn-success mt-2 mb-2 btn-add-showinfor" data-bs-toggle="modal" data-bs-target="#addShowInfor">Thêm mới</a>
            </div>
        </div>
        <div class="row" style="padding-bottom: 20px">
            <input id="searchShow" class="form-control mr-sm-2" type="search" placeholder="Search" name="searchShow">
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center align-middle">Show date</th>
                        <th scope="col" class="text-center align-middle">Start time</th>
                        <th scope="col" class="text-center align-middle">End time</th>
                        <th scope="col" class="text-center align-middle">Cinema Hall</th>
                        <th scope="col" class="text-center align-middle">Movie</th>
                        <th scope="col" class="text-center align-middle">Cinema</th>
                        <th class="text-center align-middle"></th>
                        <th class="text-center align-middle"></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($show_infor as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->ShowID}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->ShowDate}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->StartTime}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->EndTime}}</td>
                            <td scope="row" class="text-center align-middle">{{ optional($row->cinemahall)->Name }}</td>
                            <td scope="row" class="text-center align-middle">{{optional($row->movie)->Title}}</td>
                            <td scope="row" class="text-center align-middle">{{optional(optional($row->cinemahall)->cinema)->Name}}</td>
                            <td scope="row" class="text-center align-middle">
                                <a class="col btn btn-secondary edit-showinfor-btn" data-bs-toggle="modal" data-bs-target="#editShow" data-showinfor-id="{{$row->ShowID}} ">Edit</a>
                            </td>
                            <td scope="row" class="text-center align-middle">
                                <a class="col btn btn-danger delete-showinfor-btn" data-bs-toggle="modal" data-bs-target="#deleteShow" data-showinfor-id="{{$row->ShowID}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Edit modal --}}
    <div class="modal fade" id="editShow" tabindex="-1" aria-labelledby="editShowLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('editShow')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Edit Show</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="editShowInforID" name="editShowInforID">
                        <div class="mb-3">
                            <label for="name" class="form-label">Show Date</label>
                            <input type="date" class="form-control" id="editShowDate" name="editShowDate">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Start time</label>
                            <input type="time" class="form-control" id="editStartTime" name="editStartTime">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">End time</label>
                            <input type="time" class="form-control" id="editEndTime" name="editEndTime">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Cinema</label>
                            <select class="form-control" name="edit_cinema_id" id="edit_cinema_name">

                            </select>
                        </div>
                       <div class="mb-3">
                            <label for="city" class="form-label">Cinema Hall</label>
                            <select class="form-control" name="edit_cinemahall_id" id="edit_cinemahall_name">

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Movie</label>
                            <select class="form-control" name="edit_movie_id" id="edit_movie_name">

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
    {{-- add modal --}}
    <div class="modal fade" id="addShowInfor" tabindex="-1" aria-labelledby="addShowInforLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('addShow')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Add Show</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="addShowInforID" name="addShowInforID">
                        <div class="mb-3">
                            <label for="name" class="form-label">Show Date</label>
                            <input type="date" class="form-control" id="addShowDate" name="addShowDate">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Start time</label>
                            <input type="time" class="form-control" id="addStartTime" name="addStartTime">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">End time</label>
                            <input type="time" class="form-control" id="addEndTime" name="addEndTime">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Cinema</label>
                            <select class="form-control" name="add_cinema_id" id="add_cinema_name">

                            </select>
                        </div>
                       <div class="mb-3">
                            <label for="city" class="form-label">Cinema Hall</label>
                            <select class="form-control" name="add_cinemahall_id" id="add_cinemahall_name">

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Movie</label>
                            <select class="form-control" name="add_movie_id" id="add_movie_name">

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

    {{-- delete modal --}}
    <div class="modal fade" id="deleteShow" tabindex="-1" aria-labelledby="deleteShowLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('deleteShow')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa xuất chiếu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="deleteShowID" name="deleteShowID">
                        <p>Bạn có chắc chắn muốn xóa xuất chiếu này không?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection