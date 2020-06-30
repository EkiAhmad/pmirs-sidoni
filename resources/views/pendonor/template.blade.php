
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ $title ?? '' }}</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets_admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}
  <link href="{{ asset('assets_admin/css/font-googleleapis.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Custom styles for this template-->
  <link href="{{ asset('assets_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets_admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <!-- custom css-->
  <link href="{{ asset('assets_admin/css/custom-sidoni.css') }}" rel="stylesheet">
  <!-- Custom Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('assets_landing/img/icon/icon_sidoni_title.png' ) }}" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{ asset('assets_admin/vendor/jquery/jquery.min.js')}}"></script>
  
  <!-- Page level custom scripts -->
  @if (!empty($js))
      @foreach ($js[0] as $key => $value)
      <script src="{{ $value }}"></script>   
      @endforeach
  @endif
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('pendonor/sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow position-sticky" style="top:0;z-index:1">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          @include('pendonor/header')

        @yield('content')

      </div>
      <!-- End of Main Content -->

      @include('pendonor/footer')
      <footer class="sticky-footer bg-white footer-fixed-bottom-rs-sidoni">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sidoni {{date('Y')}}</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{url('')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js""></script> --}}
  <script src="{{ asset('assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets_admin/js/sb-admin-2.min.js')}}"></script>
 
  
</body>
<!-- Footer -->

</html>
