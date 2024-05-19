<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reset password</div>

                    <div class="card-body">
                        <p>Đây là email để đặt lại mật khẩu</p>

                        <a href="{{ route('resetPassword', $token) }}" class="btn btn-primary">Nhấn vào đây để đặt lại mật khẩu</a>

                        <p>Nếu không đặt lại mật khẩu hãy bỏ qua yêu cầu này</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center">Cinestar</p>
</body>
</html>