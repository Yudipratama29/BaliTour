<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BaliTour</title>
    <!-- Include Bootstrap CSS (replace with your actual path if not using CDN) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 400px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-logo {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-logo h1 {
            color: #007bff;
            margin-bottom: 0;
        }

        .login-logo img {
            max-width: 50%; /* Adjust the size as needed */
        }

        .login-box-msg {
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-control-feedback {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
        }

        .btn-login {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="login-box">
            <div class="login-header">
                <div class="login-logo">
                    <img src="https://github.com/Yudipratama29/balitour/blob/main/Img/Logo/Logo%20PNG.png?raw=true" alt="BaliTour Logo">
                    <h1>BaliTour</h1>
                </div>
                <h4>Atur Liburanmu Bersama Kami</h4>
            </div>
            
            <div class="login-box-body">
                <p class="login-box-msg">Silahkan login</p>

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form role="form" method="post" action="/login">
                    @csrf
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" autofocus>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <a id="my_btn_show_pass" href="javascript:void(0)" class="form-control-feedback">
                            <i class="glyphicon glyphicon-eye-close"></i>
                        </a>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 btn-login">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xs-12">
                            <span>Belum punya akun?</span>
                            <a href="/register" class="btn btn-link">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (replace with your actual path if not using CDN) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
