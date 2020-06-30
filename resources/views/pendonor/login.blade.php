
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>App | Masuk atau Register Pendonor</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="https:///cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



</head>
<style>
  /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/

/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
  margin-top: -20px;
  margin-left: 25px;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}
.row{
  margin-right: 0px;
  margin-bottom: -27px;
  height: auto;
}
/*inputs*/
#msform input, #msform textarea, #msform select, #msform option {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
.appao-btn .fa {
    font-size: 40px;
    padding-top: 6px;
}

.appao-btn .sekarang-txt {
    display: block;
}

.appao-btn .download-button {
    display: block;
    border: none;
    margin: 0 5px;
    padding: 5px 5px 5px;
}

.header.sticky .mainmenu li a.appao-btn,
.mainmenu li a.appao-btn,
.appao-btn {
    border: 1px solid #fff;
    color: #fff;
    border-radius: 5px;
    padding: 6px 25px;
    display: inline-flex;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: 500;
    font-size: 18px;
}
a .appao-btn .btn-join:hover {
    background: #fff;
}
#msform .action-button {
    width: 100px;
    background: #034ec3c7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #034ec3c7;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #e74a3b;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 40px;
    margin-top: -16px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    /*color: white;*/
    text-transform: uppercase;
    font-size: 9px;
    width: 33.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}
body{
  background-color: #fbfafa;
}
#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 23px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #2536bf;

    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}
.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #ee0979;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}
      @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
      html, body {
        height: 100%;
      }
    .fill-height {
        min-height: 85%;
        height:auto !important; /* cross-browser */
        height: 85%; /* cross-browser */
      }
    .login-block{
      background: #DE6262;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to bottom, #FFF, #FFFFFF57); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    float:left;
    width:97%;
    padding : 0px 0;
    }
    .banner-sec{
      background: url(../../assets_landing/img/base.png) no-repeat left bottom;
      background-size:cover;
      border-radius: 0 0px 0px 0;
      padding:0;
      height: 100%;
      display: inline-block;
      }
    .container{
      background:#fff;
      border-radius: 10px;
      box-shadow:15px 20px 0px rgba(0,0,0,0.1);
    }
    .carousel-inner{
      border-radius:0 10px 10px 0;
    }
    .carousel-caption{
      text-align:left; left:5%;
    }
    .login-sec{
      padding: 50px 30px;
      position:relative;
      background-color: #fbfafa;
    }
    .login-sec .copy-text{
      position:absolute;
      width:80%;
      bottom:20px;
      font-size:13px;
      text-align:center;
    }
    .login-sec .copy-text i{color:#FEB58A;
    }
    .login-sec .copy-text a{color:#E36262;
    }
    .login-sec h2{margin-bottom:8px; font-weight:800; font-size:30px; color:#4854B6;
    }
    .login-sec h3{margin-bottom:30px; font-weight:700; font-size:20px; color:#4854B6; margin-left: 10px;
    }

    .login-sec h2:after{
      /*content:" "; */
      width:100px;
      height:5px;
      background:#C7CADF;
      display:block;
      margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto
    }
    .login-sec h3:after{
      /*content:" "; */
      width:100px;
      height:5px;
      background:#C7CADF;
      display:block;
      margin-top:10px; border-radius:3px; margin-left:auto;margin-right:auto
    }
    .btn-login{
      background: #DE6262;
      color:#fff;
      font-weight:600;
    }
    .banner-text{
      width:100%;
      position:absolute;
      bottom:100px;

    }
    .banner-text h2{
      color:#fff; font-weight:600;
    }
    .banner-text h2:after{
      content:" ";
      width:100px;
      height:5px;
      background:#FFF;
      display:block;
      margin-top:20px;
      border-radius:3px;
    }
    .banner-text p
    {
      color:#fff;
    }
    .container{
      max-width: 100%;
      border-radius: 0px;
    }
    .navbar{
      background-color: #3d3c3417 !important;
    }
    .title{
      color: white;
    }
    .col-md-12{
      margin-top: -60px;
    }
    .field-icon {
      float: right;
      margin-left: -5px;
      margin-right: 10px;
      margin-top: -45px;
      position: relative;
      z-index: 2;
    }
    .navbar2{
      background-color: white !important;
      width: 100%;
      height: 50px;
      padding-top: 5px;
      border: 1.5px solid #eae1e1;
    }
</style>
<body bgcolor="#f7f7f7">
<nav class="navbar2 navbar-light bg-light">
  <div class="row">
    <div class="col-md-4">
          <a class="navbar-brand" style="color:rgba(144, 28, 44, 0.9);" href="#">
            {{-- <img src="{{ url('assets_landing/img/icon/icon_sidoni_title.png') }}" width="5%" /> --}}
              &nbsp&nbspSIDONI APP
          </a>
    </div>
    <div class="col-md-4" style="text-align: right; padding-right: 15px" >

    </div>
    <div class="col-md-4" style="text-align: right; padding-right: 19px">
        <a href="{{ url('pendonor/cari') }}" class=""><button class="btn btn-danger"><i class="fa fa-search"></i> Cari Pendonor</button></a>

    </div>
  </div>


</nav>
<section class="login-block fill-height">

  <div class="row">
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 {{-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  </ol> --}}
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                        <div class="row">
                        <div class="col-md-6">
                      <img class="d-block img-fluid" src="{{ url('assets_landing/img/hand-sidoni-2.png') }}" alt="First slide" style=" margin-top: 180px; margin-left: -45px">
                    </div>
                    <div class="col-md-6">
                    <div class="carousel-caption d-none d-md-block">
                      <div class="banner-text">
                        <h1>Sidoni - Aplikasi Donor Darah Indonesia</h1>
                          <p>Dengan aplikasi ini pendonor akan terkoneksi secara real time tidak hanya sekedar melihat
                              jadwal kegiatan donor terdekat maupun stok darah, pendonor juga dapat melihat riwayat donasi
                              darah sebelumnya (untuk data yang telah terverifikasi). </p>
                          <a href="https://play.google.com/store/apps/details?id=com.pmi.tangerang" > <img style="height: auto; width: 45%;" src="{{ url('assets_login/images/google_play_store.png') }}" alt=""></a>
                          <a href="https://apps.apple.com/id/app/sidoni-aplikasi-donor-darah/id1487058219?l=id" > <img style="height: auto; width: 45%;" src="{{ url('assets_login/images/apple_app_store.png') }}" alt=""></a>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </div>
  </div>
  <div class="col-md-4 login-sec">
     {{-- form login --}}

    <div class="show-login" style="margin-top: -35px">
       <div align="center"><img src="{{ url('assets_landing/img/icon/icon_sidoni_title.png') }}" width="20%" /></div>
      <h3 style="color: #b61322; margin-top: 10px" class="text-center">Login Sidoni</h3>
      @if (!empty(Session::get('message')))
        <div class="alert alert-danger">
          {{ session('message') }}

        </div>
      @endif
       @if (!empty(Session::get('msg_cek_email')))
          <div class="alert alert-warning">
            {{ session('msg_cek_email') }}

          </div>
        @endif

      <form id="msform" style="margin-top: -10px;" action="{{ url('pendonor/auth/proses_login') }}" method="post">
        @csrf

        <input type="text" name="user_username" placeholder="Kode Pendonor"/>
        <input type="password" name="user_password" id="myInput" placeholder="Password"/> <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="myFunction()" ></span>


 {{--          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            <small>Lupa kata sandi</small>
          </label> --}}
        {{-- <a href="{{route('pendonor.kegiatan')}}" class="action-button" >Login</a> --}}
          {{-- <input type="submit" class="action-button" value="Login"/> --}}
          <button type="submit" class="btn btn-danger btn-lg btn-block">Masuk</button>

        <br><br>

      </form>
      <div class="form-check text-center">
            <label class="form-check-label">
            <a href="{{ url('pendonor/auth/lupa_sandi') }}">Lupa kata sandi?</a> | <a href="{{ url('pendonor/auth/register') }}">Daftar Sekarang</a>
          </label>
        </div>
    </div>

      {{-- form register --}}
      {{-- <div class="copy-text text-center">Created by PMI Tangerang</div> --}}
  </div>
</div>

</section>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets_admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets_admin/js/sb-admin-2.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script type="text/javascript">


  function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
  }

  function isNumber(evt) {
      var iKeyCode = (evt.which) ? evt.which : evt.keyCode
      if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
          return false;

      return true;
    }
  $(document).ready(function(){
        @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('konfirmasi'))
        toastr.success("{{ Session::get('konfirmasi') }}");
        @endif
        $('.show-register').hide();
        $('.daftar-now').click(function(event) {
        $('.show-register').fadeIn();
        $('.show-login').hide();
        });
        $('.login-now').click(function(event) {
        $('.show-register').hide();
        $('.show-login').fadeIn();
        });

    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
      if(animating) return false;
      animating = true;

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.5;
          //2. bring next_fs from the right(50%)
          left = (now * 0)+"%";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
          });
          next_fs.css({'left': left, 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });

    $(".previous").click(function(){
      if(animating) return false;
      animating = true;

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //de-activate current step on progressbar
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = ((1-now) * 0)+"%";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({'left': left});
          previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        },
        duration: 800,
        complete: function(){
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });

    $(".submit").click(function(){
      return false;
    })
  });
</script>
</body>

</html>
