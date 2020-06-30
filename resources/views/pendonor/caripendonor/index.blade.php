<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pencarian Pendonor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="http://157.230.254.70:2425/pmi_cms/assets/jquery.js"></script>
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<style>
input[type="date"]::before { 
  content: attr(data-placeholder);
  width: 100%;
}



/* hide our custom/fake placeholder text when in focus to show the default
 * 'mm/dd/yyyy' value and when valid to show the users' date of birth value.
 */
input[type="date"]:focus::before,
input[type="date"]:valid::before { display: none }
  #loader.background {
  /*position: absolute;*/
  top: 60px;
  bottom: 62px;
  left: 0;
  right: 0;
 /* background: rgba(245,245,245,.9);*/
  z-index: 99999;
}
#loader .dots{
  height: 40px;
/*  position: absolute;*/
  top: 65%;
  left: 50%;
  margin: -10px 0 0 -10px;
   
}
#loader .dots span{
  -webkit-transition: all 6000ms ease;
  transition: all 6000ms ease;
  background: rgba(198,12,48,.5);
  height: 15px;
  width: 15px;
  margin: 0 0px 0 0;
  display: inline-block;
  border-radius: 50%;
  animation: wave 1.3s ease  infinite;
  -webkit-animation: wave 1.3s ease infinite;
}  

#loader .dots span:nth-child(1){  
    animation-delay: 0;
    -webkit-animation-delay: 0;
}
#loader .dots span:nth-child(2){  
    animation-delay: 100ms;
    -webkit-animation-delay: 100ms;
}
#loader .dots span:nth-child(3){  
    animation-delay: 200ms;
    -webkit-animation-delay: 200ms;
}

@-webkit-keyframes wave{
  0%, 40%, 100% { 
    -webkit-transform: translate(0, 0); 
    transform: translate(0, 0);
    background-color: rgba(198,12,48,.5);    
  }
  10% { 
    -webkit-transform: translate(0, -15px); 
    transform: translate(0, -15px); 
    background-color: rgba(198,12,48,1);    
  }  
}

@keyframes wave{
  0%, 40%, 100% { 
    -webkit-transform: translate(0, 0); 
    transform: translate(0, 0);
    background-color: rgba(198,12,48,.5);    
  }
  10% { 
    -webkit-transform: translate(0, -15px); 
    transform: translate(0, -15px); 
    background-color: rgba(198,12,48,1);    
  }  
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* base */
body,html{
    background-color: #fff;
    color: #1E1E2C;
    font-weight: 400;
    line-height: 1.2;
    font-family:'Inter', Arial, Helvetica, sans-serif;
}
h1{
    color: #1E1E2C;
    padding-top: 40px;
}
.margin-top-24{
    margin-top: 24px;
}
.margin-top-16{
    margin-top: 16px;
}
.margin-top-12{
    margin-top: 12px;
}
.margin-top-8{
    margin-top: 8px;
}

.padding-lr-33{
    padding-left:33px;
    padding-right:33px;
}
.padding-lr-27{
    padding-left:27px;
    padding-right:27px;
}
.padding-lr-21{
    padding-left:21px;
    padding-right:21px;
}
.padding-lr-15{
    padding-left:15px;
    padding-right:15px;
}
.padding-lr-9{
    padding-left:9px;
    padding-right:9px;
}
.padding-all-25{
    padding: 25px;
}

.margin-lr-auto{
    margin: 0 auto;
}

::placeholder {
    color: #CFCFCF;
}
.border-1{
    border: 1px solid rgba(30,30,44,.10)
}
.base{
    background:#fff;
    border-radius: 6px;
    box-shadow: 0 0.125rem 0.1875rem 0 rgba(0,0,0,.11);
    width: 100%;
    /* height: 100%; */

}
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}
input[type="text"],input[type="date"]{
    width: 100%;
    height: 48px;
    background-color: #F3F4F5;
    border-radius: 4px;
    color:inherit;
    font-family: 'Inter', Arial, Helvetica, sans-serif;
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 16px;

}
label{
    display: block;
    font-size: 16px;
    font-weight: normal;
    line-height: 1.5;
    margin-bottom: 0;
    letter-spacing: .3px;
}
.inputGroup label{
    color: #777777;
    margin-bottom: 8px;
}
.selection {
  display: inline-block;
  position: relative;
  padding-left: 33px;
  margin-bottom: 15px;
  cursor: pointer;
  font-size: 19px;
  font-weight: 500;
  color:#1E1E2C!important;
}
.selection input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.selection__bulat {
  position: absolute;
  top: 2px;
  left: 0;
  height: 24px;
  width: 24px;
  background: #e8e8e8;
  border: 1.4px solid rgba(30,30,44,.10)
}
.selection--radio .selection__bulat {
  border-radius: 50%;
}
.selection:hover input ~ .selection__bulat,
.selection input:focus ~ .selection__bulat {
  background: #cfcfcf;
}
.selection input:checked ~ .selection__bulat {
  background: #004286;
  color: #fff;
}
.selection:hover input:not([disabled]):checked ~ .selection__bulat,
.selection input:checked:focus ~ .selection__bulat {
  background:  #002952;
}
.selection input:disabled ~ .selection__bulat {
  background: #F3F4F5;
  opacity: 0.6;
  pointer-events: none;
}
.selection__bulat:after {
  content: '';
  position: absolute;
  display: none;
}
.selection input:checked ~ .selection__bulat:after {
  display: block;
}
.selection--radio .selection__bulat:after {
  left: 7px;
  top: 7px;
  height: 8px;
  width: 8px;
  border-radius: 50%;
  background: #fff;
}
.selection--radio input:disabled ~ .selection__bulat:after {
  background: #7b7b7b;
}

.selection--goldar{
    padding-right: 6px;
    padding-left: 0px;
}
.selection--goldar .selection__bulat {
    background-color: #ffffff;
    border-radius: 4px;
    line-height: 1.8;
    position: relative;
    text-align: center;
    width: 48px;
    height: 36px;
}

/* base hum */
.wrapper{
    width: 990px;
}
.head{
    width:1400px;
    height: 50px;
    background-color: #ededed;
    
}
.act{
    margin-top:21px;
}
.btn2{
    position: relative;
    padding: 0 30px;
    height: 48px;
    /* min-width: 190px; */
    font-size: 16px;
    font-weight: 700;
    line-height: 2.3;
    vertical-align: middle;
    text-align: center;
    text-decoration: none;
    color: #fff;
    cursor: pointer;
    background-color: #E60013;
    border-radius: 5px;
    transition: background-color .2s cubic-bezier(.8,0,.2,1);
}
.btn.secondary{
    background-color: #DDDDDD;
    color: #1E1E2C;
    height: 40px;
    padding:0px 18px;
}
/* L I S T */
.list{
    border: 1.4px solid rgba(30,30,44,.10);
    box-shadow: none;
}
.list .list-kode{
    color: #004286;
    font-size: 19px;
    font-weight: 600;
}
.list .list-pendonor{
    font-size: 22px;
    font-weight: 500;
    text-transform: uppercase;
}
.list .list-goldar{
    color: #EB535C;
}
.list .list-pekerjaan{
    color: #EB535C;
    text-transform: capitalize;
}
.list .list-alamat{
    color: #777777;
    font-size: 17px;
    font-weight: 300;
}
/*  */

/* S O R T */
.sort .sort-act{
    cursor: pointer;
    font-size: 16px;
    font-weight: 500;
}
.sort a.sort-act:hover{
    color: #777777;
}
.sort a.sort-act:active{
    color: #CED9E8;
}
/*  */

/* S P I N N E R */
.spinner{
    position: relative;
    display: inline-block;
    width: 70px;
    height: 70px;
    border-radius: 50p
}
.spinner::before{
    position: absolute;
    content: "";
    width: 70px;
    height: 70px;
    border-radius: 70px;
    box-shadow: inset -5px 0 0 5px #EB535C;
    clip: rect(0, 70px, 35px, 0);
    animation: spin 1s infinite ease;

}
/*  */
@media screen and (max-width: 576px) {
    .head{
        width:100%;
        height:56px;
    }
    h1{
        display:none;
    }
    label{
        font-size:14px;
    }
    .wrapper{
        width:100%;
    }
    .act{
        margin-top:-34px;
    }
    .padding-all-25{
        padding:12px;
    }
    input[type="text"], input[type="date"]{
        font-size:16px;
        height:40px;
        margin-bottom:12px;
    }
    .selection{
        font-size:16px;
    }
    .selection__bulat{
        height:20px;
        width:20px;
    }
    .selection--radio .selection__bulat:after{
        left: 6px;
        top: 6px;
        height: 6px;
        width: 6px;
    }
    .selection--goldar .selection__bulat{
        line-height: 2;
    }
    .margin-top-24{
        margin-top: 14px;
    }
    .margin-top-16{
        margin-top: 8px;
    }
    .margin-top-8{
        margin-top: 4px;
    }
    .btn2{
        width:100%;
    }
    .btn2.secondary{
        margin-top:12px;
    }
    /* L I S T */
    .list .list-kode{
        font-size: 14px;
    }
    .list .list-pendonor{
        font-size: 17px;
    }
    .list .list-alamat{
        color: #777777;
        font-size: 14px;
        font-weight: 300;
    }
    /*  */
}
.tanggallahir{
    color:#bf728a;
    font-size: 17px;
    font-weight: 350;
}
.jenis_kelamin{
    color:#bf728a;
    font-size: 15px;
    font-weight: 350;
}
@media screen and (min-width: 768px) and (max-width: 991px)  {
    .wrapper{
        margin:0 25%;
        
    }
}
@media screen and (min-width: 992px) and (max-width: 1025px) {
    .wrapper{
        margin:0 6%;
        width:1256px;
    }
}
/*
@media screen and(max-width: 992px) {

}

@media screen and(max-width: 1200px) {

} */
</style>
<body>
    <div class="head margin-lr-auto">
  
  <div class="row">
    <div class="col-md-4">
          <a class="navbar-brand" style="padding-top: 12px; color: #9b3241; padding-left: 10px;" href="#">
              SIDONI APP
          </a>
    </div>
    <div class="col-md-4" style="text-align: right; padding-right: 15px" >
      
    </div>
    <div class="col-md-4" style="text-align: right; padding-top: 4px">
      <a href="{{ url('pendonor/auth/login') }}" class=""><button class="btn btn-outline-primary" style="margin-right: 150px;height: 42px;"><i class="fa fa-user"></i> Login Pendonor</button></a>
         
    
    </div>
  </div>

 

        {{-- <h1 class="text-center">Pencarian pendonor</h1> --}}
    </div>
    <div class="wrapper padding-lr-9 margin-lr-auto">
    <form>
        {{ csrf_field() }}
        <div class="act base padding-all-25 margin-lr-auto">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-12 inputGroup">
                    <label for="keynama">Nama Pendonor</label>
                    <input  name="Nama" id="keynama" type="text" class="border-1 padding-lr-9" placeholder="Isi nama pendonor">
                </div>
                <div class="col-lg-4 col-sm-4 col-12 inputGroup">
                    <label for="tglLahir">Tanggal lahir</label>
                    <input max="2002-12-30" name="TglLhr" id="keyaTglLhr datepicker"  data-placeholder="Date of birth" type="date" name="" class="border-1 padding-lr-9" >
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-12 inputGroup">
                    <label for="">Jenis kelamin <small><i>(opsional)</i></small></label>
                    <label class="selection selection--radio" style="margin-right: 22px;">Laki-laki
                        <input type="radio" name="JK" value="0"/>
                        <div class="selection__bulat"></div>
                    </label>
                    <label class="selection selection--radio">Perempuan
                        <input type="radio" name="JK" value="1"/>
                        <div class="selection__bulat"></div>
                    </label>
                </div>
                <div class="col-lg-5 col-sm-5 col-12 inputGroup">
                    <label for="">Golongan Darah <small><i>(opsional)</i></small></label>
                    <label class="selection selection--goldar">
                        <input type="radio" name="GolDarah" value="A">
                        <div class="selection__bulat">A</div>
                    </label>
                    <label class="selection selection--goldar">
                        <input type="radio" name="GolDarah" value="B">
                        <div class="selection__bulat">B</div>
                    </label>
                    <label class="selection selection--goldar">
                            <input type="radio" name="GolDarah" value="AB">
                            <div class="selection__bulat">AB</div>
                        </label>
                    <label class="selection selection--goldar">
                        <input type="radio" name="GolDarah" value="O">
                        <div class="selection__bulat">O</div>
                    </label>
                    <label class="selection selection--goldar">
                        <input type="radio" name="GolDarah" value="">
                        <div class="selection__bulat" style="width: 116px">Tidak tahu</div>
                    </label>
                </div>
                <div class="col-lg-3 col-sm-3 col-12 text-right">
                    <button id="btn-search" id="btn-search" class="btn2 margin-top-24">Cari Pendonor</button>
                </div>
            </div>            
        </div>
    </form>
        <!-- <div class="sort padding-all-25">
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-12">
                    <a class="sort-act">Kode pendonor</a>
                </div>
                <div class="col-lg-3 col-sm-3 col-12">
                    <a class="sort-act">Nama pendonor</a>
                </div>
            </div>
        </div> -->
        <br>
        
        <div id="notfound" style="color:grey">
          <div align="center"><b>Data Not Found...</b></div>
        </div>
       
          <div class="tot_record" align="center"><b></b></div>
       
        <br>
        <center>
            <div id="loader" class="background">
                <div class="dots container">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </center><br>
        <div id="results" class="content">
         
        </div>
        <div class="paginatoin-area" style="padding-top: 20px;">
             <div class="row">
                <div class="col-lg-12 col-md-12">
                   {{--  <form action="{{ url('pendonor/cari/data')}}" method="POST">
                        {{ csrf_field() }}    
                        <input type="hidden" name="post" value="2">
                        <input class="btn btn-primary" type="submit" value="Page 2">
                    </form> --}}
                    <ul class="pagination-box text-center">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
</body>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script>
$(document).ready(function(){
  $(window).scroll(function(){
    var sticky = $('.sticky'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });
    $(function(){
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
       });
      var $loading = $('#loader').hide();
                   //Attach the event handler to any element
                   $(document)
                     .ajaxStart(function () {
                        
                         $loading.show();
                         $('#notfound').hide();
                         $('.tot_record').hide();

                     })
                   .ajaxStop(function () {
                       
                        $loading.hide();
                    });  
    function loading(){
        $(document)
            .ajaxStart(function () {
            
                $loading.show();
                $('#notfound').hide();
                $('.tot_record').hide();

            })
        .ajaxStop(function () {
            
            $loading.hide();
        });  
    }
      $("#view").hide(); 
      $('#notfound').hide(); 
      $("#btn-search").click(function(e){ 
          $(this).html("Sedang mencari...").attr("disabled", "disabled"); 
          e.preventDefault();
          var data = $('form').serialize();
       
          $.ajax({
                 url:  "{{ url('pendonor/cari/data') }}", 
                 type: "POST",
                 data: data, 
                 dataType: "json",            
                 success: function(response){
                    console.log(response.result);
                   // $("#view").show();
                   $("#btn-search").html("SEARCH").removeAttr("disabled");              
                   // $("#view").html(response.hasil);  
                   var data_pendonor ='';
                   var riwayat_tglperiksa,riwayat_kodependonorlama, riwayat_kodependonor;
                   var status = response.status;
                   var nomer = [];
                   nomer = 0;
                   // var index = detail_pendonor.indexOf(undefined);
                   // if(index !== -1){
                   //     detail_pendonor[index] = '';
                   // }
                   // console.log(detail_pendonor);
                   if(status==true){
                      var cek = response.result;
                      
                      if(cek != 0 ){
                          for (const [key, value] of Object.entries(cek)) {
                                //var barcode = "Hello";
                                //   console.log(barcode);
                                        // var cek_jk = value.Jk==0? "(L)" : "(P)";
                                                data_pendonor +='<div class="base list margin-top-12 padding-all-25"><div class="row"> <div class="col-lg-3 col-sm-3 col-12"> <div class="list-kode"><center>'+value.Kode+'</center></div> </div>  <div class="col-lg-6 col-sm-6 col-12">  <div class="list-pendonor">'+value.Nama+'<span class="list-goldar"><b> ('+value.GolDarah+')</b></span></div><div class="list-pekerjaan margin-top-8">'+value.Pekerjaan+'</div><div class="list-alamat margin-top-16">'+value.Alamat+'</div> </div>'+ '<div align="right">'+value.image_barcode+'</div>'+'</div>'+
                                                '</div>';
                                                                  

                          }
                          $(".pagination-box").html('<nav aria-label="Page navigation example"><ul class="pagination"><li class="page-item"><a class="page-link" href="#">Previous</a></li><li class="page-item"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>');
                          $('#results').show();
                          var total_record = response.total;
                          $('.tot_record').show();
                          $('.tot_record').html("<b>" + "Found total " + total_record + " records.." + "</b>").css('color','grey');
                          document.getElementById('results').innerHTML=data_pendonor;
                          $('#notfound').hide();

                    }else{
                    // console.log('empty');
                          $('#notfound').show();
                           $('.tot_record').hide();
                          $('#results').hide();
                      }
                  
                    var id;

                    $('a').click(function() {
                         id = $(this).data('id'); 
                         console.log(id);
                    });
                    $('.test').click(function(event) {
                        console.log('oke');
                    });

                    $('a.terms').click(function (e) {
                        var id = $(this).data('id');
                        console.log(id);
                        var detaill = '/cari/data/carikode/detail_pendonor/' + id;
                        
                        window.open(detaill);
                                            
                    });


                }else{
                    toastr.error(status.message);
                    document.getElementById('results').innerHTML=null;
                }


                 },      
                 error: function (xhr, ajaxOptions, thrownError) { 
                   toastr.error('Terjadi Kesalahan');
                   // window.onload = timedRefresh(2000);

                }
        });
        });


        let pageno = $('.pagination-box').attr('data-ci-pagination-page');
        // console.log(pageno);
        // loadPagination(pageno);
        $('.pagination-box').on('click','a',function(e){
            e.preventDefault(); 
            pageno = $(this).attr('data-ci-pagination-page');
            // console.log(pageno);
            loading();
            loadPagination(pageno);
            
        });
        function loadPagination(pagno){
            // console.log(min,max, sorting, kategori);
            var nama = $('#keynama').val();
            var tgllahir = $('#keyaTglLhr').val();
            var goldarah = $('input[name="GolDarah"]:checked').val();
            var jk = $('input[name="JK"]:checked').val();
            $.ajax({
                type: "POST",
                url: "/cari/data"+pagno,
                data : {Nama: nama, JK:jk, GolDarah:goldarah, TglLhr:tgllahir},
                dataType: "json",
                success: function (response) {   
                    var cek = response.result.data;
                    var data_pendonor =  ''; 
                    console.log(cek.length);               
                    for (const [key, value] of Object.entries(cek)) {
                        // var cek_jk = value.Jk==0? "(L)" : "(P)";
                        data_pendonor +='<div class="base list margin-top-12 padding-all-25">'+
                                            '<div class="row"> <div class="col-lg-3 col-sm-3 col-12">'+
                                                '<div class="list-kode">'+
                                                    '<center>'+value.Kode+'<br>'+
                                                        '<div class="tanggallahir">'+value.TglLhr +'</div>'+
                                                    '</center>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="col-lg-6 col-sm-6 col-12">'+
                                                '<div class="list-pendonor">'+
                                                    value.Nama+
                                                    '<span class="list-goldar"><b> ('+value.GolDarah+')</b></span>'+
                                                '</div>'+
                                                '<div class="list-pekerjaan margin-top-8">'+value.Pekerjaan+'</div>'+
                                                '<div class="list-alamat margin-top-16">'+value.Alamat+'</div>'+
                                            '</div>'+
            
                                            '</div>'+
                                        '</div>';
                                                                

                    }

                    // $('a.terms').click(function (e) {
                    //     var id = $(this).data('id');
                    //     console.log(id);
                    //     var detaill = '/cari/data' + id;
                        
                    //     window.open(detaill);
                                            
                    // });
                    $('html, body').animate(
                        {
                        scrollTop: $($('#results')).offset().top,
                        // scrollLeft($("#dt-pasien"))
                        },
                        500,
                        'linear'
                    );
                    document.getElementById('results').innerHTML=data_pendonor;
                    $(".pagination-box").html(response.paginate);

                }
            });
        }

    });
  function timedRefresh(timeoutPeriod) {
      setTimeout("location.reload(true);",timeoutPeriod);
  }
</script>

</html>
