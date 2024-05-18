@extends ('layout')
<?php
$pageTitle = "Reset password";
?>
@section('main-content')

<div class="container mt-5 mb-lg-5" style="height: fit-content" ;>


    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="container w-50 card o-hidden border-0 shadow-lg" style="border: 1px solid black">
                
                <!-- Pills navs -->
                <!-- Pills content -->

                <form action="{{route('resetPasswordPost')}}" method="post" id="resetPasswordPostForm">
                    @csrf
                    <input type="text" name="token" hidden value="{{$token}}">
                    <legend style="color:#b8b828">Email address</legend>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" placeholder="email">
                        <label for="floatingInput">Enter your email</label>
                    </div>
                    <legend style="color:#b8b828">Enter new password</legend>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control"  name="password" placeholder="password">
                        <label for="floatingInput">Enter new password</label>
                    </div>
                    <legend style="color:#b8b828">Comfirm password</legend>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="password_comfirmation" placeholder="password comfirm">
                        <label for="floatingInput">Enter your email</label>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-block mb-4 w-100" style="background-color:#f3ea28">Submit</button>
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

                @if (session()->has('error'))
                <div class="alert alert-error">
                    {{session('error')}}
                </div>
                @endif

                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                <!-- Pills content -->

            </div>
        </div>
        <!-- Pills navs -->


    </div>

</div>

@endsection