<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <center>
    <h3> <b>欢迎注册</b> </h3>
    <b>已有账号,<a href="{{url('/user/login')}}">登陆</a></b> 
    </center>
    
    <form class="form-horizontal" role="form" action="{{url('/user/reg')}}" method="post"> 
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="user_name" placeholder="请输入用户名">
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="firstname" name="email" placeholder="请输入邮箱">
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">手机号</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="tel" placeholder="请输入手机号">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="lastname" name="pwd" placeholder="请输入密码">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="lastname" name="pwd1" placeholder="确认密码">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">注册</button>
            </div>
        </div>
    </form>
</body>
</html>