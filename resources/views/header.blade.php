<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="{{asset('/css/appCine.css')}}" rel="stylesheet"/>

    <title>Home</title>
  </head>
  <body>
    <header class="container-fluid" >
        <div class="container">
            <div class="row" style="height: 80px;border-bottom:1px solid grey">
                <div class="col-md-2" style="display:flex;align-items:center">
                    <img src="img/header-logo.png" style="width: 130px; height:46px" alt="">
                </div>
                <div class="col-md-4" style="display: flex; align-items:center;gap:1px;justify-content:center" >
                    
                    <a href="#datve" class="btn btn--pri" >
                        <div class="d-flex w-100">
                            <img style="margin-right:10px;" src="/img/ic-ticket.svg" alt="">
                            <span class="mt-1" style="font-size: 14px; font-family: 'Anton',sans-serif;">ĐẶT VÉ NGAY</span>
                        </div>
                      
                    </a>
                </div>
                <div class="col-md-6" style="display: grid; align-items:center">
                    
                        <div class="container d-flex" style="align-items: center;justify-content:space-around">
                            <form action=""style="display:flex">
                                <input type="text" placeholder="Tìm phim, rạp, vé, tin tức,..." class="input-search">
                                <button class="btn btn-search-submit" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="signin-signup-text">
                                <p style="color:white;margin:auto"><i class="far fa-user-circle"></i> <a class="link-text"style="text-decoration:none;" href="#login">Đăng Nhập</a> / <a class="link-text"style="text-decoration:none;" href="#register">Đăng ký</a></p>
                            </div>
                            <div class="language">
                                <p style="color: white;margin:auto"><img src="https://cinestar.com.vn/assets/images/footer-vietnam.svg" alt=""> VN</p>
                            </div>
                        </div>
                    
                </div>
                
            </div>
            <div class="row">
                <div class="container d-flex" style="height: 50px;justify-content:space-between">
                    <div style="display:grid;align-items:center">
                        <a class="link-text" href="#rap"><i class="fas fa-map-marker-alt"></i> Chọn rạp</a>
                    </div>
                    <div style="display:flex;justify-content:space-between;width:35%">
                        <a class="link-text" href="">Khuyến mãi</a>
                        <a class="link-text" href="">Thuê sự kiện</a>
                        <a class="link-text" href="">Dịch vụ khác</a>
                        <a class="link-text" href="">Giới thiệu</a>
                    </div>
                </div>
            </div>
        </div>
       
    </header>
   <div class="container">
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/biet-doi-san-ma.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/thanh-xuan-18x2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/civil-war.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   </div>
