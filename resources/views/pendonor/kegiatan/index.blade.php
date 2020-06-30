@extends('pendonor/template')
@section('content')
<style type="text/css">
.btn-block {
    padding: 1.2% 0; 
    /* define values in pixels / Percentage or em. whatever suits 
       your requirements */
}
    /* Styles for wrapping the search box */
.card-header{
        background-color:#dde1e7bf;
        border-bottom-style: solid ;
        border-bottom-width: 3px ;
        color: white;
        font-weight: 100px;
        border-bottom: solid #98a3ca;
    }
    h5{
        color: #e97373; 
    }
    h6{
        color:grey;
    }
    h4{
        color: #6e5353;
    }
.main {
    width: 100%;
    margin: 10px auto;
}

/* Bootstrap 4 text input with search icon */
input[type="date"]::before{
   color: #ffffff;
   content: attr(placeholder) ": ";
}
input[type="date"]:focus::before {
   content: "" !important;
}
.has-search .form-control {
    padding-left: 2.375rem;
}
.card-header {
    color:
black;
background-color:
#e8e8e8;
border-bottom: solid 2px;
border-bottom-color: currentcolor;
border-bottom-color:#e74a3b;
}
.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group>.btn:first-child {
    margin-left: 0;
}
.btn-group-vertical>.btn.active, .btn-group-vertical>.btn:active, .btn-group-vertical>.btn:focus, .btn-group>.btn.active, .btn-group>.btn:active, .btn-group>.btn:focus {
    z-index: 2;
}
.btn-group-vertical>.btn, .btn-group>.btn {
    position: relative;
    float: left;
}
.btn-primary.active, .btn-primary:active, .open>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #025aa5;
    background-image: none;
    border-color: #01549b;
}
.btn.active, .btn:active {
    background-image: none;
    outline: 0;
}
.btn-primary {
    color: #fff;
    background-color: #0275d8;
    border-color: #0275d8;
}
.btn {
    display: inline-block;
    padding: .375rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    border-radius: .25rem;
}
label {
    display: inline-block;
    margin-bottom: .5rem;
}
[role=button], a, area, button, input, label, select, summary, textarea {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
}


.btn-check,
.btn-radio{
  position: relative;
  display: inline-block;
}
.btn-check input[type="checkbox"],
.btn-radio input[type="radio"] {
  position: absolute;
  clip: rect(0,0,0,0);            
}

.btn-check input[type="checkbox"]:checked + .btn,
.btn-radio input[type="radio"]:checked + .btn {
    color: #fff;
    background-color: #025aa5;
    background-image: none;
    border-color: #01549b;
    background-image: none;
    outline: 0;
}

.btn-check input[type="checkbox"]:focus + .btn,
.btn-check input[type="checkbox"]:hover + .btn,
.btn-radio input[type="radio"]:focus + .btn,
.btn-radio input[type="radio"]:hover + .btn{
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
    color: #fff;
    background-color: #025aa5;
    border-color: #01549b;
}       
.btn-primary {
    color: #714a4a;
    background-color:white;
    border-color: grey;
  
}
.btn-check input[type="checkbox"]:checked:focus + .btn,
.btn-check input[type="checkbox"]:checked:hover + .btn,
.btn-radio input[type="radio"]:checked:focus + .btn,
.btn-radio input[type="radio"]:checked:hover + .btn{
    color: #fff;
    background-color: #014682;
    border-color: #01315a;
}   
.bg-notification{
    text-align: center; background-color: yellow; padding: 20px 50px; color: black; border-radius: 10px;
} 
</style>
    <!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800" style="font-weight:800;">{{ $breadcumb }}</h1>
    </div>
    <!-- Agenda Content Row Start -->
    @include('pendonor.kegiatan.agenda')
    <!-- Agenda Content Row End -->
</div>
{{-- {{ dd(session('user')['Tgl'] == null ? 'oke':   ,session('user')['tglkembali']) }} --}}
    <!-- ikut partisipasi Start-->
    @include('pendonor.kegiatan.partisipasi')
    <!-- ikut partisipasi End -->

    <!-- persetujuan Start -->
    @include('pendonor.kegiatan.persetujuan')
    <!-- persetujuan End -->
    
 
<script type="text/javascript">

    $(document).ready(function($) {
        {{ empty(session('user')) ? url('pendonor/auth/login'):url('pendonor/kegiatan') }}
        $('.data-partisipasi').hide();
        $('.data-persetujuan').hide();
        $('.data-lembar-isian').hide();
        $('.btn-back-kegiatan').hide();   
        $('.btn-back-partisipasi').hide();   
    
        $('.data-kegiatan').click(function(e) {
            var dateNow = $(this).data("fulldate");
            var date = $(this).data("date");
            var time = $(this).data("time");
            var location = $(this).data("location");
            var title = $(this).data('title');
            var type = $(this).data('type');
            var event_id = $(this).data("id");
            var slug = $(this).data("slug");
            var tglkembali = '{{ !empty(session('user')['tglkembali']) ? session('user')['tglkembali'] : '0000-00-00' }}';
            var tgl_donor = '{{ !empty(session('user')['Tgl']) ? session('user')['Tgl'] : '0000-00-00'}}';
            var dataagenda = '{{ !empty($data->result->data_agenda) ? true : false }}';
            console.log(tglkembali, tgl_donor, dataagenda);
            $('#date').html('&nbsp;&nbsp;&nbsp;' + date);
            $('#time').html('&nbsp;&nbsp;&nbsp;' + time);
            $('#location').html('&nbsp;&nbsp;&nbsp;' + location);
            $('#title').html(' ' + title);
            $('#type').html(' ' + type);
            $('#btn-setuju').attr("href","anamnesa/" + slug +"/" + event_id); 
            if(tglkembali >= dateNow){  
                $('#notification').html('<i class="fa fa-info-circle" style="font-size:20px"></i> Anda telah melakukan donor pada '+tgl_donor+', donor selanjutnya bisa dilakukan pada ' + tglkembali);
                $('#notification').addClass('bg-notification');
                $('.btn-partisipation').addClass('disabled');

            }else if(date < dateNow){
                $('#notification').html('Kegiatan Donor sudah selesai');
                $('#notification').addClass('bg-notification');
            } else if(dataagenda){
                $('#notification').html('<i class="fa fa-info-circle" style="font-size:20px"></i> Anda sudah memiliki kegiatan ');
                $('#notification').addClass('bg-notification');
                $('.btn-partisipation').attr('id', 'btn-partisipasi');
                $('.btn-partisipation').addClass('disabled');
            }else if(type == "TERTUTUP"){
                $('#notification').html('<i class="fa fa-info-circle" style="font-size:20px"></i> Kegiatan ini bersifat tertutup dan hanya berlaku untuk pegawai/petugas/entitas ' + title);
                $('#notification').addClass('bg-notification');
                $('.btn-partisipation').attr('id', 'btn-partisipasi');
                $('#btn-partisipasi').click(function(event) {
                    $('.data-persetujuan').show();
                    $('.btn-back-partisipasi').show(); 
                    $('.btn-back-kegiatan').hide();   
                    $('.data-partisipasi').hide();     
                });
            }else{
                $('#notification').html('');
                $('#notification').removeClass('bg-notification');
                $('.btn-partisipation').attr('id', 'btn-partisipasi');
                $('#btn-partisipasi').click(function(event) {
                    $('.data-persetujuan').show();
                    $('.btn-back-partisipasi').show();   
                    $('.btn-back-kegiatan').hide();   
                    $('.data-partisipasi').hide();     
                });
            }
            $('.data-partisipasi').show();
            $('.btn-back-kegiatan').show();   
            $('.data-kegiatan').hide();  
        
            
        });
      
    
        $(".btn-refresh").click(function(e){
            location.reload();
        });
        $(".btn-back-kegiatan").click(function(){
            $('.data-kegiatan').show();
            $('.data-partisipasi').hide();
            $('.data-persetujuan').hide();
            $('.data-lembar-isian').hide();   
            $('.btn-back-kegiatan').hide();   
        });
        $(".btn-back-partisipasi").click(function(){
            $('.data-kegiatan').hide();
            $('.data-partisipasi').show();
            $('.btn-back-kegiatan').show();   
            $('.data-persetujuan').hide();
            $('.data-lembar-isian').hide();   
            $('.btn-back-partisipasi').hide();   
        });
        $('.btn-batal').click(function(){
            $('.data-kegiatan').show();
            $('.data-partisipasi').hide();
            $('.data-persetujuan').hide();
            $('.data-lembar-isian').hide();   
            $('.btn-back-kegiatan').hide();   
            $('.btn-back-partisipasi').hide();   
        });
          window.history.pushState(null, "", window.location.href);        

          window.onpopstate = function() {

              window.history.pushState(null, "", window.location.href);

          };
    });


</script>
  <!-- /.container-fluid -->
@endsection