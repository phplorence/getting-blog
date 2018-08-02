<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{URL::asset('images/favicon.ico')}}" type="image/ico"/>
    <title>My Just For Fun</title>
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/custom.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
</head>
<body class="login">
<div class="login_wrapper">
    <div class="col-md-6 formLogin">
        <h2>Login</h2>
        <p>Don't have an account? Create your account, it takes less than a minute</p>
        <form>
            <div class="form-group has-feedback">
                <input type="text" name="email" class="form-control" placeholder="Username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="email" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox">
                        <label class="">
                            <input type="checkbox">
                            <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false"
                                 style="position: relative;">
                                <input type="checkbox" name="remember"
                                       style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                <ins class="iCheck-helper"
                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                            </div>
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="checkbox">
                        <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false"
                             style="position: relative;">
                            <input type="checkbox" name="remember"
                                   style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                            <ins class="iCheck-helper"
                                 style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                        </div>
                        Forgot Password?
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-5">
                    <button type="submit" class="btn buttonLogin">LOGIN</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-xs-7">
                <div class="checkbox">
                    Or login with
                </div>
            </div>
            <div class="col-xs-5">
                <div class="checkbox">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
    </div>
</div>
</body>
</html>
https://www.uplabs.com/posts/login-icons