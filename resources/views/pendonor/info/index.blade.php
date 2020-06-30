@extends('pendonor/template')
@section('content')
<style>
    .card-horizontal {
        display: flex;
        flex: 1 1 auto;
    }
</style>
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $breadcumb }}</h1>
    </div>

    <!-- Content Row -->
    <div class="container-fluid">
    <div class="row">
        @for ($i = 0; $i < 1; $i++)
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="http://via.placeholder.com/300x180" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

</div>
  <!-- /.container-fluid -->
@endsection