@extends ('layout')
<?php
$pageTitle = "Đăng Ký";
?>
@section('main-content')
<div class="container mt-5 mb-lg-5" style="height: fit-content" ;>
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="container w-50 card o-hidden border-0 shadow-lg" style="border: 1px solid black">
                <ul class="nav nav-pills nav-justified mb-3 mgt" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-login" href="/login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-register" href="/register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->
                <!-- Pills content -->
                <form action="/registerSubmit" method="post">
                    @csrf
                    <div class="text-center mb-3">
                        <p class="text-white">Sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <a href="{{route('google-auth')}}"><i class="fab fa-google" style="color: #f3ea28;"></i></a>
                        </button>
                        
                    </div>
                    <p class="text-center text-white">or:</p>
                    <!-- Name input -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" name="Name" placeholder="Your name">
                        <label for="floatingName">Họ và tên</label>
                        @error('Name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Day of birth -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingDOF" name="BirthDay" placeholder="Date of birth">
                        <label for="floatingDOF">Ngày sinh</label>
                        @error('BirthDay')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingNumber" name="Phone" placeholder="08081508">
                        <label for="floatingNumber">Số điện thoại</label>
                        @error('Phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Username input -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingUsername" name="Username" placeholder="dieucobap2003">
                        <label for="floatingUsername">Tên đăng nhập</label>
                        @error('Username')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- CCCD/CMND input -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingID" name="CCCD" placeholder="Your ID">
                        <label for="floatingID">CCDD/CMND</label>
                        @error('CCCD')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" name="Email" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                        @error('Email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Password input -->
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPW" name="Password" placeholder="Password">
                        <label for="floatingPW">Mật khẩu</label>
                        @error('Password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Repeat Password input -->
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingRPW" name="rp_password" placeholder="Vetify">
                        <label for="floatingRPW">Xác thực mật khẩu</label>
                        @error('rp_password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label text-white" for="registerCheck">
                            I have read and agree to the terms
                        </label>
                    </div>



                    <!-- Submit button -->
                    <button type="submit" class="btn w-100 btn-block mb-3" style="background-color:#f3ea28">Sign up</button>
                </form>
                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                <!-- Pills content -->

            </div>
        </div>
    </div>
    @endsection