<style>
    @media only screen and (max-width: 600px) {
     .btn-join {
         font-size: 14px;
     }
      }
    </style>
<header class="header">
    <div class="container">
        <div class="row flexbox-center">
            <div class="col-lg-2 col-md-3 col-6">
                <div class="logo">
                    <a href="#home"><img src="{{ url('assets_landing/img/icon/logo_sidoni_3.png') }}" class="icon-header-sidoni" alt="logo sidoni" /></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-6">
                <div class="responsive-menu"></div>
                <div class="mainmenu" style="float: left;width: 100%;">
                    <ul id="primary-menu">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#feature">Features</a></li>
                        <li><a class="nav-link" href="#video">Videos</a></li>
                        <li><a class="nav-link" href="#product">Products</a></li>
                        <li><a class="nav-link" href="#contact">Contact Us</a></li>
                        <li style="float: right; "><a onMouseOver="this.style.color='#fff'"  style="background: #ff2626; border:none; padding-top: 10px; padding-bottom: 10px; margin-left:0px;" class=" appao-btn  btn-join" href="{{ url('mitra') }}">Join SIDONI RS</a></li>
                        <li style="float: right; "><a onMouseOver="this.style.color='#fff'"  style="background: #ff2626; border:none; padding-top: 10px; padding-bottom: 10px; margin-left:0px; margin-right:10px;" class=" appao-btn  btn-join" href="{{ url('pendonor/auth/login') }}">Pendonor</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>