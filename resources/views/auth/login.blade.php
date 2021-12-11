<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>A4 Log In</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/icon-48x48.png')}}" type="image/png">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

    <!-- Utilities css -->
    <link rel="stylesheet" href="{{ asset('assets/css/Util.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

</head>

<body>
    
    <div class="login-outer-wrapper-box" style="background-image: url({{ asset('assets/img/login-bg.jpg')}});">
        <div class="login-form-wrapper">
            <form action="{{ route('login') }}"  method="POST"  id="login-form">
                   @csrf
                <div class="login-g-wrapper">

                    <div class="login-lf-wrapper">
                        <div class="top-part">
                            <a href="#" class="site-logo">
                                 <img src="{{ asset('assets/img/login-left-img.png')}}" alt="">
                            </a>
                            <div class="input-inside">
                                <input id="username" type="text" class="input form-control" name="email" value="" maxlength="510" data-validation="required" placeholder=" UserEmail" data-validation-error-msg="Username is required.">
                                <span class="input-icon"><img src="{{ asset('assets/img/user.png')}}" alt=""></span>
                            </div>
                            <div class="input-inside">
                                <input type="password" class="input form-control" name="password" id="txtPassword" value="" maxlength="510" autocomplete="off" placeholder="Password">
                                <span class="input-icon"><img src="{{ asset('assets/img/lock.png')}}" alt=""></span>
                            </div>
                            <div class="login-button">
                                <button type="submit">Login</button>
                            </div>
                           
                        </div>
                       
                    </div> <!-- ./login-lf-wrapper -->

                    <div class="login-rg-wrapper">
                        <img src="{{ asset('assets/img/login-right-img.png')}}" alt="">
                        <div class="trans-content-wrapper">
                            <p>Manage your account from<br> anywhere with</p>
                        </div>
                    </div> <!-- ./login-rg-wrapper -->
                </div>
            </form>
        </div>
    </div>



    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>