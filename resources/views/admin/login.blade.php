<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Mitra RS SIDONI</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{ asset('assets_admin/img/icon/favicon_rs.png' ) }}" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/animate/animate.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/animsition/css/animsition.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/select2/select2.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/daterangepicker/daterangepicker.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/main.css')}}">
  <!--===============================================================================================-->
</head>
<style>
  .focus-input100::before {
    background: #004286;
  }

  .focus-input100::after {
    color: #004286;
  }
</style>

<body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="post" action="{{ url('mitra/postLogin') }}">
          @csrf
          <span class="login100-form-title p-b-26">
            Selamat Datang
          </span>
          <span class="login100-form-title p-b-48">
            <img style="height: auto; width: 200px;" src="{{ asset('assets_landing/img/icon/logo_rs.png') }}" alt="blog">
          </span>

          <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
            <input class="input100" type="text" name="email">
            <span class="focus-input100" data-placeholder="Email"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn" style="background: #004286;">
                  Login
              </button>
            </div>
          </div>

          <div class="text-center p-t-115">
            <span class="txt1">
              Don’t have an account?
            </span>

            <a href="{{ url('mitra/register') }}" class="txt2" href="#">
              Sign Up
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/vendor/animsition/js/animsition.min.jss')}}"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{ asset('assets_login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/vendor/select2/select2.min.js')}}"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{ asset('assets_login/vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/vendor/countdowntime/countdowntime.js')}}"></script>
  <!--===============================================================================================-->
  <script src="{{ asset('assets_login/js/main.js')}}"></script>


</body>

</html>
