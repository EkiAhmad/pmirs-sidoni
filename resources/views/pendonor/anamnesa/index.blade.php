@extends('pendonor/template')
@section('content')
<style type="text/css">
/*.custom-control-label:before{
  background-color:red;
}*/
.custom-control-input:checked~.custom-control-label::before{
  background-color:#e74a3b;
  border-color: #e74a3b;
}
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
border-bottom-color:rosybrown;
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
.error
{
color:red;
font-family:verdana, Helvetica;
} 
</style>
    <!-- Begin Page Content -->
    <link rel="stylesheet" type="text/css" href="https:///cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css">
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $breadcumb }}</h1>
    </div>
 
</div>
<div class="col-12">
    <a class="btn btn-back-partisipasi" href="{{ route('pendonor.kegiatan')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>

    <!-- Lembar Isian Start -->
    <div class="data-lembar-isian">
        <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                  <div class="card-header">
                        <h4>Lembar Isian</h4>
                        <h6><small>Mohon untuk menjawab pertanyaan</small></h6>
                  </div>
                  <div class="card-body">
                    
                    <div class="col-sm-12">
                        <button id="select-all" class="btn btn-danger">Select All</button>
                <form id="#form1" method="POST" action="{{ url('pendonor/anamnesa/getdata') }}">
                    {{ csrf_field() }}    
                    <input type="hidden" name="event_id" value="{{ $event_id }}">
                        @php
                            $result2 = array();                      
                        @endphp
                       @if ($data->response->status)
                            @php
                                $jumlah_anamnesa = count($data->result);
                                $result = $data->result;
                            @endphp
                            @foreach ($result as $key => $value)
                       
                                @if($key == 0)
                                    <p><b>{{ $value->kategori_judul }}</b></p>
                                @elseif($result[$key]->kategori_id != $result[$key - 1]->kategori_id)
                                        <p><b>{{ $value->kategori_judul }}</b></p>
                                @endif
                                <p>{{ $value->pertanyaan_isi }}</p>
                                   {{--  <div class="btn-radio">
                                    <input type="radio" name="anamnesa[{{$value->pertanyaan_id}}]" id="option1{{$value->pertanyaan_id}}" data-ya ="{{ $key }}" class="a" value="ya">
                                    <label class="btn btn-primary" for="option1{{$value->pertanyaan_id}}">Ya</label>
                                    </div>
                                    <div class="btn-radio">
                                    <input type="radio" name="anamnesa[{{$value->pertanyaan_id}}]" id="option2{{$value->pertanyaan_id}}" data-tidak = "{{ $key }}" class="b" value="tidak">
                                            <label class="btn btn-primary" for="option2{{$value->pertanyaan_id}}">Tidak</label>
                                    </div> --}}
                                    <div class="custom-control custom-radio">
                                        <input type ="radio" class="custom-control-input" id="customRadioYa{{$key}}" required="required" name="anamnesa[{{$value->pertanyaan_id}}]"  value="ya">
                                        <label class="custom-control-label" for="customRadioYa{{$key}}">YA</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type ="radio" name="anamnesa[{{$value->pertanyaan_id}}]" class="b custom-control-input" id="customRadioTidak{{$key}}" value="tidak">
                                        <label class="custom-control-label" for="customRadioTidak{{$key}}">Tidak</label>
                                    </div>
                                <hr>
                            @endforeach
    
                        @else
                            <div class="col-8 mx-auto">
                                    <div class="text-center">Belum ada data</div>
                                </div>
                        @endif
                        <input type = "submit" class="btn btn-danger submit-anamnesa p-2 px-3" value="Submit">

                    </form>
     
                   
                        <hr>
                    </div>
         
                  </div>
                </div>
           
            </div>
        </div>
    <!-- Button trigger modal -->
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.js"></script>
    <script>
    $(document).ready(function($) {
        // $('#form1').submit(function() {
        //     if ($('input:radio', this).is(':checked')) {
        //         return true;
        //     } else {
        //         alert('Please select something!');
        //         return false;
        //     }
        // });
        $('#select-all').click(function(){
            $('.b').prop('checked', true);
        });
        
        
        $('.alert-warning').hide();
      
    });

    </script>
@endsection