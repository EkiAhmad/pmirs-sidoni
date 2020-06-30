@extends('admin/template')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
     
    </div>

    <!-- Content Row -->
<!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Stok Darah</h6>
            </div>
            <div class="card-body" style="background-color: #eaeaea;">
               <div class="row">
                @foreach ($query as $key => $value)
                  <div class="col-sm-3">
                    <div class="card border-secondary mb-2" style="max-width: 24rem;">
                      <div class="card-header card text-white bg-info mb-3"><center><h4>Goldar {{ $value['gol_darah'][0]->golongan_name }}</h4></center>
                      </div>
                      <div class="card-body text-secondary" style="height: 505px;">
                        <div class="row">
                          <div class="col-sm-12">
                              <h5><b>Produk Darah</b></h5>
                            </div>
                            @foreach ($value['gol_darah'] as $keys => $values)
                              <div class="col-sm-8">
                                <h6 class="card-title">{{ $values->produk_name }}</h6>
                              </div>
                              <div class="col-sm-4 float-right">
                                <h6 class="card-title">{{ $values->stock_jumlah }}</h6>
                              </div>
                            @endforeach
                        </div>                        
                      </div>

                    </div>
                </div>
                @endforeach
                </div>
              </div> 
            </div>
          </div>

        </div>

      <!-- Pie Chart -->
  <!-- /.container-fluid -->
@endsection
