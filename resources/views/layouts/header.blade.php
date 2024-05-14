<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/a597e9f72c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/summernote/summernote-bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
</head>

<body>
    <div class="sidebar">
        <a href="#">
            <img src="{{ asset('/img/header-logo.png') }}" alt="logo"  class="logo">
        </a>  
        <a href="/admin/dashboard" >Dashboard</a>
        <a href="/admin/movie/index" >Movie</a>
        <a href="/admin/cinema/index" >Cinema</a>
        <a href="/admin/moviestatus/index" >Movie status</a>
    </div>

    <div class="content">
        <div class="row">
          <div class="col-md-12 d-flex">
              <div class="dropdown ms-auto dropdown_btn">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="far fa-user-circle"></i>
                      <span>{{Auth::user()->Name}}</span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="/admin/logout">Logout</a></li>
                  </ul>
              </div>
          </div>
        </div>
        <div class="row">
