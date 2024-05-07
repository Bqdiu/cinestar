<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <!-- Add CSS libraries such as Bootstrap here -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('/css/adminLogin.css')}}" rel="stylesheet"/>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <img src="{{asset('/img/admin_logo.png')}}" alt="" style="width: 300px; height:200px; margin-bottom: -20px;">
            </div>
            <h2>Admin Panel</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="login now" class="form-btn">
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
</body>
</html>