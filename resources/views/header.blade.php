<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="{{asset('/css/appCine.css')}}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">


    <link rel="shortcut icon" href="/img/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title><?php echo $pageTitle; ?></title>
</head>

<body class="bg-linear">
    <header class="m-0 p-0 container-fluid header-cinestar --second">
        <div class="container">
            <div class="row" style="height: 80px;border-bottom:1px solid grey">
                <div class="col-md-2" style="display:flex;align-items:center">
                    <a href="/"> <img src="/img/header-logo.png" style="width: 130px; height:46px" alt=""></a>
                </div>
                <div class="col-md-4" style="display: flex; align-items:center;gap:1px;justify-content:center">

                    <a href="/movie" class="btn btn--pri">
                        <div class="d-flex w-100">
                            <img style="margin-right:10px;" src="/img/ic-ticket.svg" alt="">
                            <span class="mt-1" style="font-size: 14px; font-family: 'Anton',sans-serif;">ĐẶT VÉ NGAY</span>
                        </div>

                    </a>
                </div>
                <div class="col-md-6" style="display: grid; align-items:center">

                    <div class="container d-flex" style="align-items: center;justify-content:space-around">

                        <form action="{{route('search')}}" style="display:flex" method="post">
                            @csrf
                            <input type="text" name="key" placeholder="Tìm phim,rạp,..." class="input-search" value="{{$key ?? ''}}">
                            <button class="btn btn-search-submit" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        @if(Auth::check())
                        <input id="userID" type="hidden" value="{{Auth::user()->UserID}}" />
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" style="background:transparent;border:0px" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-user-circle"></i>
                                <span>{{Auth::user()->Name}}</span>

                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </div>
                        @else
                        <input id="userID" type="hidden" value="43" />
                        <p style="color:white;margin:auto"><i class="far fa-user-circle"></i> <a class="link-text" style="text-decoration:none;" href="/login">Đăng Nhập</a> / <a class="link-text" style="text-decoration:none;" href="/register">Đăng ký</a></p>
                        @endif
                        <div class="language">
                            <p style="color: white;margin:auto"><img src="https://cinestar.com.vn/assets/images/footer-vietnam.svg" alt=""> VN</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row navba" style="position:relative">
                <div class="container d-flex menu-cinema" style="height: 50px;justify-content:space-between">
                    <div class="chon-Rap" style="display:grid;align-items:center">
                        <div class="link-text icon-chonRap"><i class="fas fa-map-marker-alt "></i> Chọn rạp</div>
                        <ul class="row cinema-list">

                            @foreach($Rap as $k=>$v)
                            <li class="col-md-3"><a class="link-text" href="/book-tickets/{{$v->CinemaID}}">{{$v->Name}}</a></li>
                            @endforeach


                        </ul>
                    </div>
                    <div style="display:flex;justify-content:space-between;width:35%">
                        <a class="link-text" href="{{ route('promotion') }}">Khuyến mãi</a>
                        <a class="link-text" href="">Thuê sự kiện</a>
                        <a class="link-text" href="{{ route('services') }}">Dịch vụ khác</a>
                        <a class="link-text" href="{{ route('aboutus') }}">Giới thiệu</a>
                    </div>

                </div>

            </div>

        </div>

    </header>