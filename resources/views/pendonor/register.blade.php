
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
  /*basic reset*/
* {margin: 0; padding: 0;}

html {
  height: 100%;
  /*Image only BG fallback*/
  background: #e9e9e9;
}

body {
  font-family: montserrat, arial, verdana;
  overflow-x: hidden;
}
/*form styles*/
.steps {
    width: 675px;
  margin: 50px auto;
  position: relative;
}

.steps fieldset {
  background: white;
  border: 0 none;
  border-radius: 3px;
  box-shadow: 0 17px 41px -21px rgb(0, 0, 0);
  padding: 20px 30px;
  border-top: 9px solid #e74a3b;
  padding: 13px 44px;
  border-top: 9px solid #065da7;
  box-sizing: border-box;
  width: 78%;
  height: 100%;
  margin: -80px -15px;
  
  /*stacking fieldsets above each other*/
  position: absolute;
}
/*Hide all except first fieldset*/
.steps fieldset:not(:first-of-type) {
  display: none;
}
/*inputs*/
.steps label{
  color: #333333;
  text-align: left !important;
  font-size: 15px;
  font-weight: 200;
  padding-bottom: 0px;
  padding-top: 0px;
  display: inline-block;
}


.steps input, .steps textarea, .steps select {
  outline: none;
  display: block;
  width: 80%;
  margin: 0 0 20px;
  padding: 7px 15px;
  border: 1px solid #d9d9d9;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #837E7E;
  font-family: "Roboto";
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 14px;
  font-wieght: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}

.steps input:focus, .steps textarea:focus{
  color: #333333;
  border: 1px solid #e74a3b;
}

.error1{
   -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-box-shadow: 0 0 0 transparent;
  -webkit-box-shadow: 0 0 0 transparent;
  box-shadow: 0 0 0 transparent;
  position: absolute;
  left: 405px;
  margin-top: -58px;
  padding: 0 10px;
  height: 39px;
  display: block;
  color: #ffffff;
  background: #e62163;
  border: 0;
  font: 14px Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;
  line-height: 39px;
  white-space: nowrap;
  z-index: 10;
}

.error1:before{
    width: 0;
  height: 0;
  left: -8px;
  top: 14px;
  content: '';
  position: absolute;
  border-top: 6px solid transparent;
  border-right: 8px solid #e62163;
  border-bottom: 6px solid transparent;
  z-index: 10;
}

.error-log{
    margin: 5px 5px 5px 0;
  font-size: 19px;
  position: relative;
  bottom: -2px;
}

.question-log {
  margin: 5px 1px 5px 0;
  font-size: 15px;
  position: relative;
  bottom: -2px;
  }

/*buttons*/
.steps .action-button, .action-button {
  width: 100px !important;
  background: #e74a3b;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 4px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px auto;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
  display: block;
}

.steps .next, .steps .submit{
    float: left;
}

.steps .previous{
  float:left;
}

.steps .action-button:hover, .steps .action-button:focus, .action-button:hover, .action-button:focus {
  color: #fff;
  background-color: :#c82333;
  border-color: #bd2130;
}

.steps .explanation{
display: block;
  clear: both;
  width: 540px;
  background: #f2f2f2;
  position: relative;
  margin-left: -30px;
  padding: 22px 0px;
  margin-bottom: -10px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  top: 10px;
  text-align: center;
  color: #333333;
  font-size: 12px;
  font-weight: 200;
  cursor:pointer;
}


/*headings*/
.fs-title {
  text-transform: uppercase;
     margin: 0 0 5px;
     line-height: 1;
     color: #e74a3b;
     /*color: #0667b1;*/
     font-size: 18px;
    font-weight: 400;
    text-align:center;
    margin-right: 105px;
}
.fs-subtitle {
  font-weight: normal;
  font-size: 13px;
  color: #837E7E;
  margin-bottom: 20px;
  text-align: center;
  margin-right: 105px;
}
/*progressbar*/
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  /*CSS counters to number the steps*/
  counter-reset: step;
  width:100%;
  text-align: center;
}
#progressbar li {
  list-style-type: none;
    color: rgb(51, 51, 51);
  text-transform: uppercase;
  font-size: 9px;
  width: 20%;
  float: left;
  position: relative;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 20px;
  line-height: 20px;
  display: block;
  font-size: 10px;
  color: #333;
  background: white;
  border-radius: 3px;
  margin: 0 auto 5px auto;
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
#progressbar li.active:before,  #progressbar li.active:after{
  background: #e74a3b;
  color: white;
}


/* my modal */

.modal p{
  font-size: 15px;
  font-weight: 100;
  font-family: sans-serif;
  color: #3C3B3B;
  line-height: 21px;
}

.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  width: 50%;
  max-width: 630px;
  min-width: 320px;
  height: auto;
  z-index: 2000;
  visibility: hidden;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.modal.modal-show {
  visibility: visible;
}
.lt-ie9 .modal {
  top: 0;
  margin-left: -315px;
}

.modal-content {
  background: #ffffff;
  position: relative;
  margin: 0 auto;
  padding: 40px;
  border-radius: 3px;
}

.modal-overlay {
  background: #000000;
  position: fixed;
  visibility: hidden;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition-property: visibility, opacity;
  -o-transition-property: visibility, opacity;
  -webkit-transition-property: visibility, opacity;
  transition-property: visibility, opacity;
  -moz-transition-delay: 0.5s, 0.1s;
  -o-transition-delay: 0.5s, 0.1s;
  -webkit-transition-delay: 0.5s, 0.1s;
  transition-delay: 0.5s, 0.1s;
  -moz-transition-duration: 0, 0.5s;
  -o-transition-duration: 0, 0.5s;
  -webkit-transition-duration: 0, 0.5s;
  transition-duration: 0, 0.5s;
}
.modal-show .modal-overlay {
  visibility: visible;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
  opacity: 0.6;
  -moz-transition: opacity 0.5s;
  -o-transition: opacity 0.5s;
  -webkit-transition: opacity 0.5s;
  transition: opacity 0.5s;
}

/*slide*/
.modal[data-modal-effect|=slide] .modal-content {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -moz-transition: all 0.5s 0;
  -o-transition: all 0.5s 0;
  -webkit-transition: all 0.5s 0;
  transition: all 0.5s 0;
}
.modal[data-modal-effect|=slide].modal-show .modal-content {
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
  -moz-transition: all 0.5s 0.1s;
  -o-transition: all 0.5s 0.1s;
  -webkit-transition: all 0.5s;
  -webkit-transition-delay: 0.1s;
  transition: all 0.5s 0.1s;
}
.modal[data-modal-effect=slide-top] .modal-content {
  -moz-transform: translateY(-300%);
  -ms-transform: translateY(-300%);
  -webkit-transform: translateY(-300%);
  transform: translateY(-300%);
}
.modal[data-modal-effect=slide-top].modal-show .modal-content {
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -webkit-transform: translateY(0);
  transform: translateY(0);
}


/* RESPONSIVE */

/* moves error logs in tablet/smaller screens */

@media (max-width:1000px){

/*brings inputs down in size */
.steps input, .steps textarea {
  outline: none;
  display: block;
  width: 100% !important;
  }

  /*brings errors in */
  .error1 {
  left: 345px;
  margin-top: -58px;
}




}


@media (max-width:675px){
/*mobile phone: uncollapse all fields: remove progress bar*/

.steps {
  width: 100%;
  margin: 50px auto;
  position: relative;
}

#progressbar{
  display:none;
}
/*move error logs */
.error1 {
  position: relative;
  left: 0 !important;
  margin-top: 24px;
  top: -11px;
}

.error1:before {
  width: 0;
  height: 0;
  left: 14px;
  top: -14px;
  content: '';
  position: absolute;
  border-left: 6px solid transparent;
  border-bottom: 8px solid #e62163;
  border-right: 6px solid transparent;
  }

/*show hidden fieldsets */
.steps fieldset:not(:first-of-type) {
  display: block;
}

.steps fieldset{
  position:relative;
  width: 100%;
  margin:0 auto;
  margin-top: 45px;
}

.steps .next, .steps .previous{
  display:none;
}

.steps .explanation{
  display:none;
}

.steps .submit {
  float: right;
  margin: 28px auto 10px;
  width: 100% !important;
}

}



/* Info */
.info {
  width: 300px;
  margin: 35px auto;
  text-align: center;
  font-family: 'roboto', sans-serif;
}

.info h1 {
  margin: 0;
  padding: 0;
  font-size: 28px;
  font-weight: 400;
  color: #333333;
  padding-bottom: 5px;

}
.info span {
  color:#666666;
  font-size: 13px;
  margin-top:20px;
}
.info span a {
  color: #666666;
  text-decoration: none;
}
.info span .fa {
  color: rgb(226, 168, 16);
  font-size: 19px;
  position: relative;
  left: -2px;
}

.info span .spoilers {
  color: #999999;
  margin-top: 5px;
  font-size: 10px;
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
  width:100%;
  padding : 0px 0;
}
.banner-sec{
  background: url(../../assets_landing/img/base.png) no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 0px 0px 0; padding:0;
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
  /*padding: 50px 30px; */
  position:relative;
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
.navbar2{
  background-color: #3d3c3417 !important;
  width: 100%;
  height: 50px;
  padding-top: 5px;
}
</style>
<!-- <div class="info">
  <h1>Register Pendonor</h1>
</div> -->



<!-- Modal -info -->
<!-- <div class="container">
<div id="modal-3" class="modal" data-modal-effect="slide-top">
  <div class="modal-content">
    <h2 class="fs-title">Score Index</h2>
    <h3 class="fs-subtitle">Getting the most out of your data</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis consectetur ligula. Morbi dapibus tellus a ipsum sollicitudin aliquet. Phasellus id est lacus. Pellentesque a elementum velit, a tempor nulla. Mauris mauris lectus, tincidunt et purus rhoncus, eleifend convallis turpis. Nunc ullamcorper bibendum diam, vitae tempus dolor hendrerit iaculis. Phasellus tellus elit, feugiat vel mi et, euismod varius augue. Nulla a porttitor sapien. Donec vestibulum ac nisl sed bibendum. Praesent neque ipsum, commodo eget venenatis vel, tempus sit amet ante. Curabitur vel odio eget urna dapibus imperdiet sit amet eget felis. Vestibulum eros velit, posuere a metus eget, aliquam euismod purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
  </div>
</div>
</div> -->
<body>
<nav class="navbar2 navbar-light bg-light">
  <div class="row">
    <div class="col-md-4">
          <a class="navbar-brand" href="#" style="padding-top: 5px; color: #9b3241; padding-left: 10px;"> 
              SIDONI APP
          </a>
    </div>
    <div class="col-md-4" style="text-align: right; padding-right: 15px" >
      
    </div>
    <div class="col-md-4" style="text-align: right; padding-right: 19px">
        <a href="{{ url('pendonor/cari') }}" class=""><button class="btn btn-danger"><i class="fa fa-search"></i> Cari Pendonor</button></a>
        <a href="{{ url('pendonor/auth/login') }}" class=""><button class="btn btn-outline-primary"><i class="fa fa-user"></i> Login Pendonor</button></a>
    </div>
  </div>

 
</nav>
<section class="login-block fill-height">
  <div class="row">
        <div class="col-md-4 login-sec">
      <form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ url('pendonor/auth/proses_register') }}" method="POST" novalidate="">
  <ul id="progressbar">

  </ul>  <!-- USER INFORMATION FIELD SET --> 
  @csrf

  <fieldset>
    <h2 class="fs-title">Data Diri Pendonor</h2>
    <h3 class="fs-subtitle">Daftarkan diri anda disini !</h3>
        
    <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          
        
          <input id="nama_id" value="{{ old('Nama') }}" name="Nama"  type="text" placeholder="Nama Lengkap" required="" oninvalid="this.setCustomValidity('Please Enter valid email')" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
      
          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="TempatLhr" required="required" type="text" value="" placeholder="Tempat Lahir" data-rule-required="true" required="" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
      
        
          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="TglLhr" required="required" type="date" value="" placeholder="" data-rule-required="true" required="" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        

        
          <select class="custom-select" name="JK" required="true" >
                <option value="" selected>Pilih jenis kelamin...</option>
                <option value="0">Laki-laki</option>
                <option value="1">Perempuan</option>
               
              </select>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
    
       
          <input maxlength="14" onkeypress="return isNumber(event)" minlength="10" name="telp2" required="required" type="text" value="" placeholder="Ex.0812388889" data-rule-required="true" required="" >
     
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

        <div class="hs_firstname field hs-form-field">
        
       
         
          <select class="custom-select" name="Pekerjaan" required="">
                <option selected value="">Pilih Pekerjaan...</option>
                @foreach (Helper::get_pekerjaan() as $value)
                  <option value={{ $value }}>{{ $value }}</option>
                @endforeach
               
          </select> 
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        
    <!-- End What's Your First Name Field -->

    <!-- End What's Your Email Field -->


    <!-- End Total Number of Constituents in Your Database Field -->
    <input type="button" data-page="1" name="next" class="next action-button" id="next_awal" value="Selanjutnya" />
    <!-- <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3"><i class="question-log fa fa-question-circle"></i> What Is This?</div> -->
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Data Alamat</h2>
    <h3 class="fs-subtitle">Masukkan Alamat pribadi sesuai KTP anda!</h3>
      <!-- Begin Total Number of Donors in Year 1 Field -->
            <!-- Begin What's Your Email Field -->
            <small id="msg_email"></small>
        <div class="hs_email field hs-form-field">
         

          <input id="email_id" data-msg-required="#check" name="Email" required="required" type="email" value="" placeholder="Alamat Email" required="required" >
          <small id="check"></small>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
          

          <input id="email_required" name="Alamat" required="required" type="text" value="" placeholder="Alamat KTP" data-rule-required="true" data-msg-required="Alamat KTP" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
          {{-- <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Kecamatan *</label> --}}

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="kecamatan" required="required" type="text" value="" placeholder="Kecamatan" data-rule-required="true" data-msg-required="kecamatan" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
          {{-- <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Kelurahan *</label> --}}

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="kelurahan" required="required" type="text" value="" placeholder="Kelurahan" data-rule-required="true" data-msg-required="Kelurahan" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
          {{-- <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Kode Pos *</label> --}}

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" onkeypress="return isNumber(event)" name="KodePos" required="required" type="text" value="" placeholder="Kode Pos" minlength="5" data-rule-required="true" data-msg-required="Kodepos" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" style="margin-right:10px; " value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" id="check_button" value="Next" />
    <!-- <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div> -->
  </fieldset>


  <!-- RETENTION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Data Akun</h2>
    <h3 class="fs-subtitle">Password Akun Anda!</h3>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
          <div class="hs_firstname field hs-form-field">
        
          {{-- <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Password *</label> --}}

          <input id="password" name="user_password" required="required" type="password" value="" placeholder="Password" data-rule-required="true" data-msg-required="Password harus diisi" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
        
          {{-- <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Ulangi Password *</label> --}}

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="password_confirm" required="required" type="password" value="" placeholder="Ulangi Password" data-rule-required="true" data-msg-required="Password harus diisi" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <br><br><br>
    <input class="hs-button primary large" type="submit" value="Daftar">
    <!-- <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div> -->
</fieldset>

</form>
    </div>

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
              <img class="d-block img-fluid" src="{{ url('assets_landing/img/hand-sidoni-2.png') }}" alt="First slide" style=" margin-top: 132px; margin-left: -24px;">
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

    <div class="col-md-6">
  
    </div>
  </div>
</section>  
</body>
    <script src="{{ asset('assets_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    /* Fundraising Grader
*
* Something I created for work, had to 
* minify the js  
* because some is personal code I don't * like to share.
*
* Generic Copyright, yadda yadd yadda
*
* Plug-ins: jQuery Validate, jQuery 
* Easing
*/

  function isNumber(evt) {
      var iKeyCode = (evt.which) ? evt.which : evt.keyCode
      if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
          return false;

      return true;
  }  
$(document).ready(function(){

    @if (Session::has('message_register'))   
      toastr.info("{{ Session::get('message_register') }}");
    @endif
  // jQuery('.steps').validate({
  //           rules : {
  //               user_password : {
  //                   required  : true,
  //                   minlength : 6
  //               },
  //               password_confirm : {
  //                   required  : true,
  //                   minlength : 6,
  //                   equalTo : "#password"
  //               }
  //           },
  //           messages:{
  //               user_password: {
  //               required  : "password tidak boleh kosong",
  //               minlength : "password minimal 6 character"
  //               },
  //               password_confirm: {
  //               required  : "password tidak boleh kosong",
  //               minlength : "password minimal 6 character",
  //               equalTo   : "Password harus sama"
  //               },
  //           }
  //   });
    $.fn.duplicateEmail = function(element){
          var Email = $('#email_id').val();
          var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
          $.ajax({
            type: "POST",
            url: '{{url('pendonor/auth/checkemail')}}',
            data: {"_token": "{{ csrf_token() }}",
                  "Email": Email},
            dataType: "json",
            success: function(res) {
               var isValid =Email.match(validEmail),isInternet = Email.match(/@.*\./);
               if(Email == ""){
                  $('#check').text('Email Masih Kosong').css('color','red');
               }
               else if(!isValid){
                  $('#check').text('Email Not Valid').css('color','red');
               }
                else if(res.exists){
                   $('#check').text('Email Address Not Available').css('color','red');
                 
                   $("#check_button").attr('disabled','true');
                   $("#email_id").focus();
                
                }else{
                     $('#check').text('Email Address Available').css('color','green');
                 
                  $("#check_button").removeAttr('disabled');
                }
            },
            error: function (jqXHR, exception) {

            }
          });
    }
    $('#email_id').keyup(function(){
      $.fn.duplicateEmail();
    });
    $('#telp_id').keyup(function(){
      var phone = $('#telp_id').val();
      var str = phone.slice(0,2);
      console.log(str);
        if(str != 08 )
        {
          $('#check_phone').html('Please enter a valid phone number.').css('color','red');
          $('#next_awal').attr('disabled', 'true');
        }
        else{
          $('#check_phone').html('');
          $('#next_awal').removeAttr('disabled', 'true');
        }
    });
  
        

  var current_fs,next_fs,previous_fs;
  var left,opacity,scale;var animating;
  $(".steps").validate({
    errorClass:'invalid',
    errorElement:'span',
    errorPlacement:function(error,element){
      error.insertAfter(element.next('span').children());
    },highlight:function(element){$(element).next('span').show();
  },unhighlight:function(element){$(element).next('span').hide();}});
  $(".next").click(function(){$(".steps").validate({
    errorClass:'invalid',errorElement:'span',errorPlacement:function(error,element){
      error.insertAfter(element.next('span').children());},
      highlight:function(element){
        $(element).next('span').show();
      },
      unhighlight:function(element){
        $(element).next('span').hide();}});
  if((!$('.steps').valid())){return true;
  }
if(animating)return false;
animating=true;
current_fs=$(this).parent();next_fs=$(this).parent().next();
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
next_fs.show();current_fs.animate({opacity:0},
  {
    step:function(now,mx){
      scale=1-(1-now)*0.2;left=(now*50)+"%";
      opacity=1-now;current_fs.css({'transform':'scale('+scale+')'});
      next_fs.css({'left':left,'opacity':opacity});},
      duration:800,complete:function(){
        current_fs.hide();animating=false;
      },
      easing:'easeInOutExpo'});
      });$(".submit").click(function(){
        $(".steps").validate({
          errorClass:'invalid',errorElement:'span',
          errorPlacement:function(error,element){
            error.insertAfter(element.next('span').children());},
            highlight:function(element){$(element).next('span').show();},
            unhighlight:function(element){$(element).next('span').hide();}});
        if((!$('.steps').valid())){return false;}
if(animating)return false;animating=true;current_fs=$(this).parent();next_fs=$(this).parent().next();$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");next_fs.show();current_fs.animate({opacity:0},{step:function(now,mx){scale=1-(1-now)*0.2;left=(now*50)+"%";opacity=1-now;current_fs.css({'transform':'scale('+scale+')'});next_fs.css({'left':left,'opacity':opacity});},duration:800,complete:function(){current_fs.hide();animating=false;},easing:'easeInOutExpo'});});$(".previous").click(function(){if(animating)return false;animating=true;current_fs=$(this).parent();previous_fs=$(this).parent().prev();$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");previous_fs.show();current_fs.animate({opacity:0},{step:function(now,mx){scale=0.8+(1-now)*0.2;left=((1-now)*50)+"%";opacity=1-now;current_fs.css({'left':left});previous_fs.css({'transform':'scale('+scale+')','opacity':opacity});},duration:800,complete:function(){current_fs.hide();animating=false;},easing:'easeInOutExpo'});});});jQuery(document).ready(function(){jQuery("#edit-submitted-acquisition-amount-1,#edit-submitted-acquisition-amount-2,#edit-submitted-cultivation-amount-1,#edit-submitted-cultivation-amount-2,#edit-submitted-cultivation-amount-3,#edit-submitted-cultivation-amount-4,#edit-submitted-retention-amount-1,#edit-submitted-retention-amount-2,#edit-submitted-constituent-base-total-constituents").keyup(function(){calcTotal();});});function calcTotal(){var grade=0;var donorTotal=Number(jQuery("#edit-submitted-constituent-base-total-constituents").val().replace(/,/g,""));if(donorTotal)
{donorTotal=parseFloat(donorTotal);}
else
{donorTotal=0;}
grade+=getBonusDonorPoints(donorTotal);var acqAmount1=Number(jQuery("#edit-submitted-acquisition-amount-1").val().replace(/,/g,""));var acqAmount2=Number(jQuery("#edit-submitted-acquisition-amount-2").val().replace(/,/g,""));var acqTotal=0;if(acqAmount1){acqAmount1=parseFloat(acqAmount1);}else{acqAmount1=0;}
if(acqAmount2){acqAmount2=parseFloat(acqAmount2);}else{acqAmount2=0;}
if(acqAmount1>0&&acqAmount2>0){acqTotal=((acqAmount2-acqAmount1)/ acqAmount1*100).toFixed(2);}else{acqTotal=0;}
jQuery("#edit-submitted-acquisition-percent-change").val(acqTotal+'%');grade+=getAcquisitionPoints(acqTotal);console.log(grade);var cultAmount1=Number(jQuery("#edit-submitted-cultivation-amount-1").val().replace(/,/g,""));var cultAmount2=Number(jQuery("#edit-submitted-cultivation-amount-2").val().replace(/,/g,""));var cultTotal=0;if(cultAmount1){cultAmount1=parseFloat(cultAmount1);}else{cultAmount1=0;}
if(cultAmount2){cultAmount2=parseFloat(cultAmount2);}else{cultAmount2=0;}
if(cultAmount1>0&&cultAmount2>0){cultTotal=((cultAmount2-cultAmount1)/ cultAmount1*100).toFixed(2);}else{cultTotal=0;}
jQuery("#edit-submitted-cultivation-percent-change1").val(cultTotal+'%');grade+=getAcquisitionPoints(cultTotal);var cultAmount3=Number(jQuery("#edit-submitted-cultivation-amount-3").val().replace(/,/g,""));var cultAmount4=Number(jQuery("#edit-submitted-cultivation-amount-4").val().replace(/,/g,""));if(cultAmount3){cultAmount3=parseFloat(cultAmount3);}else{cultAmount3=0;}
if(cultAmount4){cultAmount4=parseFloat(cultAmount4);}else{cultAmount4=0;}
if(cultAmount3>0&&cultAmount4>0){cultTotal2=((cultAmount4-cultAmount3)/ cultAmount3*100).toFixed(2);}else{cultTotal2=0;}
jQuery("#edit-submitted-cultivation-percent-change2").val(cultTotal2+'%');grade+=getAcquisitionPoints(cultTotal2);var retAmount1=Number(jQuery("#edit-submitted-retention-amount-1").val().replace(/,/g,""));var retAmount2=Number(jQuery("#edit-submitted-retention-amount-2").val().replace(/,/g,""));var retTotal=0;if(retAmount1){retAmount1=parseFloat(retAmount1);}else{retAmount1=0;}
if(retAmount2){retAmount2=parseFloat(retAmount2);}else{retAmount2=0;}
if(retAmount1>0&&retAmount2>0){retTotal=(retAmount2 / retAmount1*100).toFixed(2);}else{retTotal=0;}
jQuery("#edit-submitted-retention-percent-change").val(retTotal+'%');grade+=getAcquisitionPoints(retTotal);jQuery("#edit-submitted-final-grade-grade").val(grade+' / 400');}
function getAcquisitionPoints(val)
{if(val<1)
{return 0;}
else if(val>=1&&val<6)
{return 50;}
else if(val>=6&&val<11)
{return 60;}
else if(val>=11&&val<16)
{return 70;}
else if(val>=16&&val<21)
{return 75;}
else if(val>=21&&val<26)
{return 80;}
else if(val>=26&&val<31)
{return 85;}
else if(val>=31&&val<36)
{return 90;}
else if(val>=36&&val<41)
{return 95;}
else if(val>=41)
{return 100;}}
function getCultivationGiftPoints(val)
{if(val<1)
{return 0;}
else if(val>=1&&val<4)
{return 50;}
else if(val>=4&&val<7)
{return 60;}
else if(val>=7&&val<10)
{return 70;}
else if(val>=10&&val<13)
{return 75;}
else if(val>=13&&val<16)
{return 80;}
else if(val>=16&&val<21)
{return 85;}
else if(val>=21&&val<26)
{return 90;}
else if(val>=26&&val<51)
{return 95;}
else if(val>=51)
{return 100;}}
function getCultivationDonationPoints(val)
{if(val<1)
{return 0;}
else if(val>=1&&val<6)
{return 50;}
else if(val>=6&&val<11)
{return 60;}
else if(val>=11&&val<16)
{return 70;}
else if(val>=16&&val<21)
{return 75;}
else if(val>=21&&val<26)
{return 80;}
else if(val>=26&&val<31)
{return 85;}
else if(val>=31&&val<36)
{return 90;}
else if(val>=36&&val<41)
{return 95;}
else if(val>=41)
{return 100;}}
function getRetentionPoints(val)
{if(val<1)
{return 0;}
else if(val>=1&&val<51)
{return 50;}
else if(val>=51&&val<56)
{return 60;}
else if(val>=56&&val<61)
{return 70;}
else if(val>=61&&val<66)
{return 75;}
else if(val>=66&&val<71)
{return 80;}
else if(val>=71&&val<76)
{return 85;}
else if(val>=76&&val<81)
{return 90;}
else if(val>=81&&val<91)
{return 95;}
else if(val>=91)
{return 100;}}
function getBonusDonorPoints(val)
{if(val<10001)
{return 0;}
else if(val>=10001&&val<25001)
{return 10;}
else if(val>=25001&&val<50000)
{return 15;}
else if(val>=50000)
{return 20;}}
var modules={$window:$(window),$html:$('html'),$body:$('body'),$container:$('.container'),init:function(){$(function(){modules.modals.init();});},modals:{trigger:$('.explanation'),modal:$('.modal'),scrollTopPosition:null,init:function(){var self=this;if(self.trigger.length>0&&self.modal.length>0){modules.$body.append('<div class="modal-overlay"></div>');self.triggers();}},triggers:function(){var self=this;self.trigger.on('click',function(e){e.preventDefault();var $trigger=$(this);self.openModal($trigger,$trigger.data('modalId'));});$('.modal-overlay').on('click',function(e){e.preventDefault();self.closeModal();});modules.$body.on('keydown',function(e){if(e.keyCode===27){self.closeModal();}});$('.modal-close').on('click',function(e){e.preventDefault();self.closeModal();});},openModal:function(_trigger,_modalId){var self=this,scrollTopPosition=modules.$window.scrollTop(),$targetModal=$('#'+_modalId);self.scrollTopPosition=scrollTopPosition;modules.$html.addClass('modal-show').attr('data-modal-effect',$targetModal.data('modal-effect'));$targetModal.addClass('modal-show');modules.$container.scrollTop(scrollTopPosition);},closeModal:function(){var self=this;$('.modal-show').removeClass('modal-show');modules.$html.removeClass('modal-show').removeAttr('data-modal-effect');modules.$window.scrollTop(self.scrollTopPosition);}}}
modules.init();
  </script>