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
    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">

</head>

<body>
    <div class="sidebar">
        <a href="#">
            <img src="{{ asset('/img/header-logo.png') }}" alt="logo"  class="logo">
        </a>  
        @if(Auth::user()->role_id == 1)
            <a href="/admin/dashboard" ><h5>Dashboard</h5></a>
            <a href="/admin/userinfor/index" ><h5>Account</h5></a>
            <a href="/admin/ticketprice/index" ><h5>Ticket price</h5></a>
            <a href="/admin/showinfor/index" ><h5>Show info</h5></a>
            <a href="/admin/cinema/index" ><h5>Cinema</h5></a>
            <a href="/admin/movie/index" ><h5>Movie</h5></a>
            <a href="/admin/moviestatus/index" ><h5>Movie status</h5></a>
            <a href="/admin/booking/index" ><h5>Booking</h5></a>
        @elseif(Auth::user()->role_id == 2)
            <a href="/admin/dashboard" ><h5>Dashboard</h5></a>
            <a href="/admin/showinfor/index" ><h5>Show info</h5></a>
            <a href="/admin/ticketprice/index" ><h5>Ticket price</h5></a>
            <a href="/admin/booking/index" ><h5>Booking</h5></a>

        @else
            <a href="/admin/dashboard" ><h5>Dashboard</h5></a>
            <a href="/admin/booking/index" ><h5>Booking</h5></a>

        @endif
        
    </div>

    <div class="content">
        <div class="row">
          <div class="col-md-12 d-flex">
              <div class="dropdown ms-auto dropdown_btn">
                  <button class="btn dropdown-toggle btn-profile" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="far fa-user-circle"></i>
                      <span>{{Auth::user()->Name}}</span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="/admin/logout">Logout</a></li>
                  </ul>
              </div>
          </div>
        </div>
        <div class="row">
