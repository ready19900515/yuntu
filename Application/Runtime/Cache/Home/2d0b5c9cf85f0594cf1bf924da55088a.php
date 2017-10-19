<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="register-box-body">
    <p class="login-box-msg">注册一个新用户</p>
    <form action="/yun/index.php/Home/Common/login/register.html" method="post">
        <div class="form-group has-feedback">
            <input type="text" name="nickname" class="form-control" placeholder="昵称" />
            <span class="glyphicon glyphicon-leaf form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="用户名" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="密码" />
            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="repassword" class="form-control" placeholder="确认密码" />
            <span class="glyphicon glyphicon-check form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="邮箱" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="mobile" class="form-control" placeholder="手机号码" />
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="text" name="verify" class="form-control" placeholder="验证码" style="width:200px;" />
            <span class="glyphicon glyphicon-qrcode form-control-feedback" style="right:120px;"></span>
            <img class="verify" src="<?php echo U(verify);?>" alt="验证码" onClick="this.src=this.src+'?'+Math.random()" />
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="agree" value="1"> 我同意 <a href="#">网站安全协议</a>
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">点击注册</button>
            </div><!-- /.col -->
        </div>
    </form>
    <a href="login.html" class="text-center">我已经注册了账户</a>
</div>
</body>
</html>