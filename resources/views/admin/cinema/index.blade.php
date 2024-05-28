@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Cinema</h3>
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
            <input id="searchCinema" class="form-control mr-sm-2" type="search" placeholder="Search" name="searchCinema">
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Thumbnail</th>
                        <th scope="col" class="text-center">Address</th>
                        <th scope="col" class="text-center">TotalCinemaHalls</th>
                        <th scope="col" class="text-center">City</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($cinemas as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->CinemaID}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->Name}}</td>
                            <td scope="row" class="text-center align-middle">
                                <img src="{{ asset('/imgCinema/' . $row->Thumbnail) }}" width="150" height="150">
                            </td>
                            <td scope="row" class="text-center align-middle">{{$row->Address}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->TotalCinemaHalls}}</td>
                            <td scope="row" class="text-center align-middle">{{$row->CityName}}</td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-secondary edit-cinema-btn" data-bs-toggle="modal" data-bs-target="#editCinema" data-cinema-id="{{$row->CinemaID}} ">Edit</a>
                            </td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-danger delete-cinema-btn" data-bs-toggle="modal" data-bs-target="#deleteCinema" data-cinema-id="{{$row->CinemaID}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Add movie modal --}}
    <div class="modal fade" id="addCinema" tabindex="-1" aria-labelledby="addCinemaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('addCinema')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Add Cinema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="addCinemaID" name="addCinemaID">
                        <div class="mb-3">
                            <label for="add_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="add_name" name="add_name" placeholder="Name">
                            <div class="text-danger" id="error_title"></div>
                        </div>
                        <div class="mb-3">
                            <label for="add_thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="add_thumbnail" name="add_thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="add_address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="add_address" name="add_address" placeholder="Address">
                        </div>
                        <div class="mb-3">
                            <label for="add_toltalcinemahalls" class="form-label">Toltal Cinema Halls</label>
                            <input type="number" class="form-control" id="add_toltalcinemahalls" name="add_toltalcinemahalls" placeholder="Toltal Cinema Halls">
                        </div>
                        <div class="mb-3">
                            <label for="add_city" class="form-label">City</label>
                            <select class="form-control" name="add_city_id" id="add_city_name">

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
     {{-- Delete modal --}}
     <div class="modal fade" id="deleteCinema" tabindex="-1" aria-labelledby="deleteCinemaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('deleteCinema')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa rạp</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="deleteCinemaID" name="deleteCinemaID">
                        <p>Bạn có chắc chắn muốn xóa rạp này không?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit modal --}}
    <div class="modal fade" id="editCinema" tabindex="-1" aria-labelledby="editCinemaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('editCinema')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Edit Cinema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="CinemaID" name="CinemaID">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="CinemaName" name="CinemaName" placeholder="Name">
                            <div class="text-danger" id="error_title"></div>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <img id="loadThumbnail" width="80" height="80">
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                        <div class="mb-3">
                            <label for="toltalcinemahalls" class="form-label">Toltal Cinema Halls</label>
                            <input type="number" class="form-control" id="toltalcinemahalls" name="toltalcinemahalls" placeholder="Toltal Cinema Halls">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <select class="form-control" name="city_id" id="city_name">

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