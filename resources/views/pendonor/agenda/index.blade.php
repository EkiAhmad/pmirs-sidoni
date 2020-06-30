<head><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"></head>
@extends('pendonor/template')
@section('content')
<style type="text/css">
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
    .blockquote-footer::before {
    content: "";
    }
    a {
    color: #67587d;
    text-decoration: none;
    }
    .btn {
    font-weight: 400;
    color:#67587d;
    text-align: left;
    }
    .btn:hover {
    color:
    #2b399b;
    text-decoration: none;
    }
    .agenda{
        color : black;
    }

    .block {
      display: block;
      width: 100%;
      border: 2px;
      border-radius: 5px;
      background-color: #CD5C5C;
      color:white;
      font-weight: bold;
      padding: 14px 28px;
      font-size: 20px;
      cursor: pointer;
      text-align: center;
    }

</style>
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $breadcumb }}</h1>
    </div>
    @if (!empty(Session::get('message_agenda')))
    <div class="alert alert-info">
      {{ session('message_agenda') }}

    </div>
    @endif
    @php
        $data_agenda = $data->result->data_agenda;

    @endphp
    <!-- Content Row -->
    <div class="row">
        <div class="col-12 mt-3">
          @if (session('message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('message')}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
            <div class="card">
              <div class="card-header">
                 @if ($data_agenda)
                    <form id="form" action="{{ url('pendonor/agenda/cancel')}}" method="POST" style="float:right;">
                      {{ csrf_field() }}
                      <input type="hidden" name="pendonor" value="{{ $data_agenda->agenda_pendonor }}">
                      <input type="hidden" name="kegiatan_id" value="{{ $data_agenda->agenda_kegiatan_id }}">
                      <button class="btn btn-danger" name="archive" onclick="alert_batal()" style="color: white" type="button">
                          <i class="fa fa-close"></i>
                              Batalkan Agenda
                      </button>
                    </form>
                    <h4>{{$data_agenda->title}}</h4>
                    <h6>{{$data_agenda->location}}</h6>
                    <h5>{{$data_agenda->time_start .' - '. $data_agenda->time_end}} WIB</h5>

                  @else
                        <div class="col-8 mx-auto">
                            <div class="text-center agenda">Belum donor Darah?</div>
                        </div>
                  @endif

              </div>

              <div class="card-body">

        <div class="col-sm-12">

          @if ($data_agenda)
                <div class="list-group" id="list1">

                  {{-- <a target="_blank" href="http://maps.google.com/?q=-6.4024844,106.7942405" class="list-group-item">
                  <div class="row">
                      <div class="col-md-6">
                          <i class="fa fa-map-marker"></i> Tunjukan Arah
                          <footer class="blockquote-footer">Petunjuk alamat kegiatan donor darah </footer>
                      </div>
                      <div class="col-md-6">

                      </div>
                   </div>
                  </a> --}}

                <a href="#myModal"  class="list-group-item btn"> <i class="fa fa-exclamation-circle"></i> Persiapan sebelum donor darah
                  <footer class="blockquote-footer">Petunjuk sebelum donor darah </footer>
                 </a>
                <a href="{{ url('pendonor/agenda/cetak_anamnesa') }}" target="_blank" class="list-group-item"><i class="fa fa-print"></i> Print Anamnesa
                  <footer class="blockquote-footer">Cetak form anamnesa </footer>
                </a>

                </div>
          @else
                  <a class="block" href="{{ route('pendonor.kegiatan') }}" role="button">Atur jadwal donor</a>
          @endif
        </div>

              </div>
            </div>

        </div>
    </div>
<!-- Button trigger modal -->

</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b><i class="fa fa-info-circle"></i> Petunjuk</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>

      </div>
      <div class="modal-body">

      </div>

    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script>
jQuery(document).ready(function() {
  $('.button').click(function(event) {
swal({
  buttons: {
    cancel: true,
    confirm: true,
  },
});
    });

  jQuery('.btn[href^=#]').click(function(e){
    e.preventDefault();
    var href = jQuery(this).attr('href');
    jQuery(href).modal('toggle');
  });



});
$('#form').on('submit', function(e) {
    var form = this;
    e.preventDefault();

    swal({
        title: "Please confirm",
        text: "Please confirm you would like to pay for this invoice",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#96d25f',
        confirmButtonText: 'Yes, pay invoice',
        cancelButtonText: "Cancel",
        closeOnConfirm: true,
        closeOnCancel: true
    },
    function() {
        form.submit();
    });
});

function alert_batal() {
    event.preventDefault(); // prevent form submit
    var form = event.target.form; // storing the form
            swal({
      title: "Apakah Anda ingin membatalkan Agenda ini?",
      text: "(hapus jika anda sudah tidak ingin mengikuti agenda ini)",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "YA",
      cancelButtonText: "TIDAK",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        form.submit();
      } else {
       swal({
        title: 'Terima kasih!',
        text: 'terima kasih masih ingin mengikuti agenda ini.',
        timer: 3000,
        showCancelButton: false,
        showConfirmButton: false
      }).then(
        function () {},
        // handling the promise rejection
        function (dismiss) {
          if (dismiss === 'timer') {
            //console.log('I was closed by the timer')
          }
        }
      )
      }
    });
}
</script>
  <!-- /.container-fluid -->
@endsection
