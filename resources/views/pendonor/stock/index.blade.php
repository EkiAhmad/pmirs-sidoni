@extends('pendonor/template')
@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $breadcumb }}</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        @for ($i = 0; $i < 3; $i++)
            <div class="col-4">
              <div class="card mb-3 position-sticky" style="top:93px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title {{ $i }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>

</div>
  <!-- /.container-fluid -->
@endsection