@extends('layouts.admin')
@section('main-content')
<div class="container-fluid mt-3 border-top">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Movie Status</h3>
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
                <a href="#" class="btn btn-success mt-2 mb-2 btn-add-movie" data-bs-toggle="modal" data-bs-target="#addMovie">Thêm mới</a>
            </div>
        </div>
        <div class="row">
            <input id="searchMovie" class="form-control mr-sm-2" type="search" placeholder="Search" name="searchMovie">
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-left">ID</th>
                        <th scope="col" class="text-left">Title</th>
                        <th scope="col" class="text-left">Thumbnail</th>
                        <th scope="col" class="text-left">Description</th>
                        <th scope="col" class="text-left">Duration</th>
                        <th scope="col" class="text-left">Language</th>
                        <th scope="col" class="text-left">ReleaseDate</th>
                        <th scope="col" class="text-left">Country</th>
                        <th scope="col" class="text-left">Genre</th>
                        <th scope="col" class="text-left">Trailer</th>
                        <th scope="col" class="text-left">Director</th>
                        <th scope="col" class="text-left">Actor</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    @foreach($movie as $row)
                    <tr>
                        <th scope="row" class="text-left">{{$row->MovieID}}</th>
                        <td scope="row" class="text-left">{{$row->Title}}</td>
                        <td scope="row" class="text-left">
                            <img src="{{ asset('/imgMovie/' . $row->Thumbnail) }}" width="50" height="50">
                        </td>
                        <td scope="row" class="text-left">{{$row->Description}}</td>
                        <td scope="row" class="text-left">{{$row->Duration}}</td>
                        <td scope="row" class="text-left">{{$row->Language}}</td>
                        <td scope="row" class="text-left">{{$row->ReleaseDate}}</td>
                        <td scope="row" class="text-left">{{$row->Country}}</td>
                        <td scope="row" class="text-left">{{$row->Genre}}</td>
                        <td scope="row" class="text-left">{{$row->trailer_url}}</td>
                        <td scope="row" class="text-left">{{$row->Director}}</td>
                        <td scope="row" class="text-left">{{$row->Actor}}</td>
                        <td scope="row">
                            <a class="col btn btn-secondary edit-movie-btn" data-bs-toggle="modal" data-bs-target="#editMovie" data-movie-id="{{$row->MovieID}} ">Edit</a>
                        </td>
                        <td scope="row">
                            <a class="col btn btn-danger delete-movie-btn" data-bs-toggle="modal" data-bs-target="#deleteMovie" data-movie-id="{{$row->MovieID}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    {{-- Edit modal --}}
    <div class="modal fade" id="editMovie" tabindex="-1" aria-labelledby="editMovieLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('editMovie')}}" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Edit movie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="editMovieID" name="editMovieID">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            <div class="text-danger" id="error_title"></div>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <img id="loadThumbnail" width="80" height="80">
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="descripton" class="form-label">Description</label>
                            <textarea class="form-control" id="descripton" name="descripton" rows="3" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="number" class="form-control" id="duration" name="duration" placeholder="Thời lượng">
                        </div>
                        <div class="mb-3">
                            <label for="language" class="form-label">Language</label>
                            <input type="text" class="form-control" id="language" name="language" placeholder="Language">
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release Date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Release Date">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" placeholder="Thể loại">
                        </div>
                        <div class="mb-3">
                            <label for="trailer_url" class="form-label">Trailer URL</label>
                            <input type="url" class="form-control" id="trailer_url" name="trailer_url" placeholder="trailer_url">
                        </div>
                        <div class="mb-3">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                        </div>
                        <label for="actor" class="form-label">Actor</label>
                            <textarea class="form-control" id="actor" name="actor" rows="3" placeholder="Actor"></textarea>
                        <div class="mb-3">
                            <label for="regulation_name" class="form-label">Regulation</label>
                            <select class="form-control" name="regulation_id" id="regulation_name">
                                
                            </select>
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
    {{-- Delete modal --}}
    <div class="modal fade" id="deleteMovie" tabindex="-1" aria-labelledby="deleteMovieLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('deleteMovie')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa phim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="deleteMovieID" name="deleteMovieID">
                        <p>Bạn có chắc chắn muốn xóa phim này không?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add movie modal --}}
    <div class="modal fade" id="addMovie" tabindex="-1" aria-labelledby="addMovieLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="#" method="post" enctype="multipart/form-data">
    
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title">Add movie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" id="addMovieID" name="addMovieID">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            <div class="text-danger" id="error_title"></div>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Thumbnail">
                        </div>
                        <div class="mb-3">
                            <label for="descripton" class="form-label">Description</label>
                            <textarea class="form-control" id="descripton" name="descripton" rows="3" placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="number" class="form-control" id="duration" name="duration" placeholder="Thời lượng">
                        </div>
                        <div class="mb-3">
                            <label for="language" class="form-label">Language</label>
                            <input type="text" class="form-control" id="language" name="language" placeholder="Language">
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release Date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Release Date">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" placeholder="Thể loại">
                        </div>
                        <div class="mb-3">
                            <label for="trailer_url" class="form-label">Trailer URL</label>
                            <input type="url" class="form-control" id="trailer_url" name="trailer_url" placeholder="trailer_url">
                        </div>
                        <div class="mb-3">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" id="director" name="director" placeholder="Director">
                        </div>
                        <label for="actor" class="form-label">Actor</label>
                            <textarea class="form-control" id="actor" name="actor" rows="3" placeholder="Actor"></textarea>
                        <div class="mb-3">
                            <label for="regulation_name" class="form-label">Regulation</label>
                            <select class="form-control" name="regulation_id" id="regulation_name">
                                
                            </select>
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