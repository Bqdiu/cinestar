@extends('layouts.admin')
@section('main-content')
    <div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Movie Status</h3>
            </div>
        </div>
        <div class="row">
            <input id="searchMovieStatus" class="form-control mr-sm-2" type="search" placeholder="Search" name="searchMovieStatus">
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">ID</th>
                        <th scope="col" class="text-center">Status name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($movie_status as $row)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{$row->IDStatus}}</th>
                            <td scope="row" class="text-center align-middle">{{$row->StatusName}}</td>
                            <td scope="row" class="align-middle">
                                <a class="col btn btn-secondary edit-status-btn" data-bs-toggle="modal" data-bs-target="#editStatusMovie" data-status-id="{{$row->IDStatus}} ">Edit</a>
                                <a class="col btn btn-danger delete-status-btn" data-bs-toggle="modal" data-bs-target="#deleteStatusMovie" data-status-id="{{$row->IDStatus}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Edit modal --}}
    <div class="modal fade" id="editStatusMovie" tabindex="-1" aria-labelledby="editStatusMovieLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('editMovieStatus')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="editStatusLabel">Sửa trạng thái phim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" id="editStatusID" name="editStatusID">
                            <label for="status_name" class="form-label">Trạng thái phim</label>
                            <input type="text" class="form-control" id="status_name" name="status_name" placeholder="Tên trạng thái phim">
                            <div class="text-danger" id="error_status_name"></div>
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
    <div class="modal fade" id="deleteStatusMovie" tabindex="-1" aria-labelledby="deleteStatusMovieLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('deleteMovieStatus')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa trạng thái phim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="deleteStatusID" name="deleteStatusID">
                        <p>Bạn có chắc chắn muốn xóa trạng thái phim này không?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(session('mess'))
        <script>
            alert("{{ session('mess') }}");
        </script>          
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
@endsection