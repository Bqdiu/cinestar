function check_login()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var flag = true;
    if(username.length == 0)
    {
        flag = false;
        document.getElementById('errorPasswordLogin').innerHTML = "Vui lòng nhập thông tin đăng nhập";
    }
    if(password.length == 0)
    {
        flag = false;
        document.getElementById('errorPassowrdLogin').innerHTML = "Vui lòng nhập mật khẩu";
    }
    if(flag == true)
        document.getElementById('loginForm').submit();
}