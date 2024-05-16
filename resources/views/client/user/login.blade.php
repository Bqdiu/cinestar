@extends ('layout')
<?php
$pageTitle = "Đăng Nhập";
?>
@section('main-content')

<div class="container mt-5 mb-lg-5" style="height: fit-content" ;>


    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="container w-50 card o-hidden border-0 shadow-lg" style="border: 1px solid black">
                <ul class="nav nav-pills nav-justified mb-3 mgt" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" href="/login" aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" href="/register" aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->
                <!-- Pills content -->

                <form action="/loginSubmit" method="post" id="loginForm">
                    @csrf
                    <div class="text-center mb-3">
                        <p style="color: white;">Sign in with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <a href="{{route('google-auth')}}"><i class="fab fa-google" style="color: #f3ea28;"></i></a>
                        </button>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f" style="color: #f3ea28;"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter" style="color: #f3ea28;"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github" style="color: #f3ea28;"></i>
                        </button>
                    </div>

                    <p class="text-center" style="color: white">or:</p>

                    <!-- Email input -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <label for="floatingInput">User name</label>
                        <span class="text-danger" id="errorUsernameLogin"></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-floating mgb-20">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <span class="text-danger" id="errorPasswordLogin"></span>
                    </div>




                    <!-- 2 column grid layout -->
                    <div class="row mb-4 mt-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                <label class="form-check-label" for="loginCheck" style="color: white"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!" style="color: #acacac">Forgot password?</a>
                        </div>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-block mb-4 w-100" style="background-color:#f3ea28">Sign in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p class="text-white">Not a member? <a href="#!" style="color: #acacac">Register</a></p>
                    </div>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- Pills content -->

            </div>
        </div>
        <!-- Pills navs -->


    </div>

</div>

@endsection