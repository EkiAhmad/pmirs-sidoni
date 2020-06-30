<style>

</style>
@extends('pendonor/template')
@section('content')
	<!-- Begin Page Content -->
<link rel="stylesheet" type="text/css" href="https:///cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">	

<style type="text/css">
	#tabs{
		background: white;
	    color: #eee;
	}
	#tabs h6.section-title{
	    color: #eee;
	}

	#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
	    color: #e74a3b;
	    background-color: transparent;
	    border-color: transparent transparent #f3f3f3;
	    border-bottom: 4px solid !important;
	    font-size: 20px;
	    font-weight: bold;
	}
	#tabs .nav-tabs .nav-link {
	    border-top-left-radius: .25rem;
	    border-top-right-radius: .25rem;
	    color: #eee;
	    font-size: 20px;
	}
	.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
		border-bottom: 4px solid !important;
	}
</style>

<div class="container-fluid">
	<div class="jumbotron p-4 p-md-5 text-white rounded bg-gradient-primary">
          {{-- <img src="{{ asset('assets_landing/img/base.png')}}"> --}}
    <div class="col-md-12 px-0">
	    <div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
	        <div class="col-auto d-none d-lg-block">
	          	{{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> --}}
          		{{-- <img class="img-profile img-fluid rounded-circle" src="{{ asset('assets_admin/img/s.jpg')}}" width="140" height="140"> --}}
              @php
                $cek_img = $data->result->profile->user_image == null ? asset('assets_login/images/user(3).png') : $data->result->profile->user_image;
              @endphp
          		<img class="img-profile img-fluid rounded-circle" src="{{ $cek_img }}" width="140" height="140">
	        </div>
	        <div class="col p-4 d-flex flex-column position-static">
		        <strong class="d-inline-block mb-2">{{$data->result->profile->Kode}}</strong>
		        <h3 class="mb-0">{{$data->result->profile->Nama}}</h3>
	          	{{-- <div class="mb-1 text-muted">Nov 12</div>
	          	<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
	          	<a href="#" class="stretched-link">Continue reading</a> --}}
	        </div>
	    </div>
    </div>
    <div class="col-md-6 px-0">
        <a class="btn btn-danger" href="#chgProf" role="button"><i class="fas fa-edit fa-fw"></i> Ubah</a>
        <a class="btn btn-danger" href="#" role="button"><i class="fas fa-certificate fa-fw"></i> &nbsp; No Badge | {{$data->result->profile->htjumlahdonor}}x Donor <i class="fas fa-angle-double-right fa-fw"></i></a>
    </div>	
  </div>
  <div class="row">
	    <div class="col-lg-6">
        	<p class="d-flex justify-content-center">Terakhir Donor</p>
        	@if (empty($data->result->profile->Tgl))
        		<p class="d-flex justify-content-center"><i>(Belum Pernah)</i></p>
        	@else
	        	<p class="d-flex justify-content-center"><strong>{{$data->result->profile->Tgl['hari']}}</strong></p>
	        	<p class="d-flex justify-content-center"><strong>{{$data->result->profile->Tgl['tgl']}} {{$data->result->profile->Tgl['bulan']}} {{$data->result->profile->Tgl['tahun']}}</strong></p>
        	@endif
	    </div><!-- /.col-lg-4 -->
	    <div class="col-lg-6">
        	<p class="d-flex justify-content-center">Donor Selanjutnya</p>
        	@if (empty($data->result->profile->tglkembali))
        		<p class="d-flex justify-content-center"><i>(Belum Pernah)</i></p>
        	@else
	        	<p class="d-flex justify-content-center"><strong>{{$data->result->profile->tglkembali['hari']}}</strong></p>
	        	<p class="d-flex justify-content-center"><strong>{{$data->result->profile->tglkembali['tgl']}} {{$data->result->profile->tglkembali['bulan']}} {{$data->result->profile->tglkembali['tahun']}}</strong></p>
	        @endif
	    </div>
    </div>
    <div class="row">
      	<div class="col-lg-12">
      		<ul class="list-group">
      			{{-- <a href="#" class="btn"><li class="list-group-item"><i class="fas fa-id-card fa-fw float-left"></i> &nbsp; Info Kartu Donor <i class="fas fa-angle-double-right fa-fw float-right"></i></li></a></a> --}}
      			<a href="#myModal" class="btn"><li class="list-group-item">Riwayat Donor<i class="fas fa-history fa-fw float-left"></i> &nbsp;  <i class="fas fa-angle-double-right fa-fw float-right"></i></li></a>

      			<a href="#chgPass" class="btn"><li class="list-group-item"><i class="fas fa-user-lock fa-fw float-left"></i> &nbsp; Ubah Kata Sandi <i class="fas fa-angle-double-right fa-fw float-right"></i></li></a></a>
      		</ul>
      		<hr>
      		{{-- <ul class="list-group">
      			<a href="#" class="btn"><li class="list-group-item"><i class="fas fa-file-alt fa-fw float-left"></i> &nbsp; Pertanyaan atau Saran <i class="fas fa-angle-double-right fa-fw float-right"></i></li></a></a>
      			<a href="#" class="btn"><li class="list-group-item"><i class="fas fa-comments fa-fw float-left"></i> &nbsp; Perlu Bantuan? <i class="fas fa-angle-double-right fa-fw float-right"></i></li></a></a>
      			<a href="#" class="btn"><li class="list-group-item"><i class="fas fa-sign-out-alt fa-fw float-left"></i> &nbsp; Keluar <i class="fas fa-angle-double-right fa-fw float-right"></i></li></a></a>
      		</ul> --}}
    	</div>
    </div>
</div>
<!-- Modal Riwayat Pendonor -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b><i class="fa fa-info-circle"></i> Riwayat Pendonor</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
   
      </div>
      <div class="modal-body">
          @if(!empty($riwayat->result))
            <table class="table table-hover">
              <tbody>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Tempat</th>
                <th scope="col">Instansi</th>
                <th scope="col">Tanggal</th>
              </tr>
              
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($riwayat->result as $key => $value)
                    <tr>
                      <td>
                        {{ $no++ }}
                      </td> 
                      <td>
                        {{ $value->tempat }}
                      </td>
                      <td>
                        {{ $value->Instansi }}
                      </td>
                      <td>
                        {{ $value->Tgl }}
                      </td>

                    </tr>
                   </tbody>
                  
                  @endforeach
              
            </table>
            @else
                <center>Tidak ada riwayat donor...</center>
            @endif
      </div>

    </div>
  </div>
</div>

<!-- Modal Ubah Kata Sandi -->
<div class="modal fade" id="chgPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
			    {{-- <button type="button" class="btn btn-secondary" id="cok">Check</button> --}}
			<div class="modal-header">
			    <b><i class="fa fa-info-circle"></i>&nbsp; Ubah Kata Sandi</b>
			    <button type="button" class="close" id="close-modal-chgpass" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
			</div>
		    <div class="modal-body">
		        <form method="POST" name="pass" id="ganti_password">
		        	<div class="input-group mb-3">
				    	{{-- <label for="email">Kata sandi lama:</label> --}}
				  		<input type="password" class="form-control" required name="user_password" placeholder="Kata sandi lama" id="pwdLama">
				  		<div class="input-group-append">
					    	<button class="btn btn-secondary show-hide-1"><i class="fa fa-eye fa-fw show-hide-icon-1"></i></button>
					    </div>
				  	</div>
				  	<div class="input-group mb-3">
					    {{-- <label for="pwd">Kata sandi baru:</label> --}}
					    <input type="password" class="form-control" required name="user_passwordc" placeholder="Kata sandi baru" id="pwdBaru">
					    <div class="input-group-append">
					    	<button class="btn btn-secondary show-hide-2"><i class="fa fa-eye fa-fw show-hide-icon-2"></i></button>
					    </div>
				  	</div>
				  	<div class="input-group mb-3">
					    {{-- <label for="pwd">Konfirmasi kata sandi baru:</label> --}}
					    <input type="password" class="form-control" required name="password_baru" placeholder="Konfirmasi kata sandi baru" id="pwdKbaru">
					    <div class="input-group-append">
					    	<button class="btn btn-secondary show-hide-3"><i class="fa fa-eye fa-fw show-hide-icon-3"></i></button>
					    </div>
				  	</div>
				  	<button type="submit" class="btn btn-danger btn-lg btn-block">Submit</button>				  	
				</form>
		    </div>
    	</div>
  	</div>
</div>


<!-- Modal Ubah Profil -->
<div class="modal fade" id="chgProf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
			    {{-- <button type="button" class="btn btn-secondary" id="cok">Check</button> --}}
			<div class="modal-header">
			    <b><i class="fa fa-info-circle"></i>&nbsp; Ubah Profil</b>
			    <button type="button" class="close" id="close-modal-chgprof" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
			</div>
		    <div class="modal-body">
				<ul class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-profil-tab" data-toggle="pill" href="#pills-profil" role="tab" aria-controls="pills-profil" aria-selected="true" style="color: #e74a3b;font-size: 20px;">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-alamat-tab" data-toggle="pill" href="#pills-alamat" role="tab" aria-controls="pills-alamat" aria-selected="false" style="color: #e74a3b;font-size: 20px;">Alamat</a>
					</li>
				</ul>				
		        <form method="POST" name="prof" id="update_profile">
		        	<div class="tab-content" id="pills-tabContent" style="margin-top: 3%;">
		        		<div class="tab-pane fade show active" id="pills-profil" role="tabpanel" aria-labelledby="pills-profil-tab">
				        	<div class="form-group mb-3">
								<div class="row justify-content-center">
									<div class="col-3 text-center">
						            @php
										$cek_img = $data->result->profile->user_image == null ? asset('assets_login/images/user(3).png') : $data->result->profile->user_image;
						            @endphp
						          		<img class="img-profile img-fluid rounded-circle profile-preview" src="{{ $cek_img }}" width="140" height="140">
						          	<div class="form-group">
									    {{-- <label for="user_image">Ubah Foto Profil</label> --}}
									    {{-- <input type="file" class="form-control-file" id="user_image" name="user_image" accept=".jpg,.jpeg.,.gif,.png"> --}}
									</div>	
									</div>
								</div>		        		
				        	</div>
						  	<div class="form-group mb-3">
						    	<label for="Nama">Nama</label>
						  		<input type="text" class="form-control" required name="Nama" placeholder="Nama Lengkap" id="Nama" value="{{$data->result->profile->Nama}}">
						  	</div>
						  	<div class="form-group mb-3">
							    <label for="TempatLhr">Tempat Lahir</label>
							    <input type="text" class="form-control" required name="TempatLhr" placeholder="Tempat Lahir" id="TempatLhr" value="{{$data->result->profile->TempatLhr}}">
						  	</div>
						  	<div class="form-group mb-3">
							    <label for="TglLhr">Tanggal Lahir</label>
							    <input type="date" class="form-control" required name="TglLhr" placeholder="Konfirmasi kata sandi baru" id="TglLhr" value="{{$data->result->profile->TglLhr}}">
						  	</div>
						  	<div class="form-group mb-3">
							    <label for="Jk">Jenis Kelamin</label>
							    <div>
								    <div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="0" {{ ($data->result->profile->Jk == "0") ? "checked" : "" }}>
										<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="1" {{ ($data->result->profile->Jk == "1") ? "checked" : "" }}>
										<label class="form-check-label" for="inlineRadio2">Perempuan</label>
									</div>
							    </div>
						  	</div>
						  	<div class="form-group mb-3">
							    <label for="Pekerjaan">Pekerjaan</label>
		                        <select class="custom-select" name="Pekerjaan">
			                        @foreach (Helper::get_pekerjaan() as $value)
			                        	<option {{ ($data->result->profile->Pekerjaan == strtoupper($value) ) ? "selected" : "" }} value="{{ strtoupper($value) }}">{{ $value }}</option>
			                        @endforeach
		                        </select> 
							</div>
							<div class="form-group mb-3">
							    <label for="telp2">Telepon/HP</label>
							    <input type="text" class="form-control" required name="telp2" placeholder="Telepon/HP" id="telp2" value="{{$data->result->profile->telp2}}">
							</div>
							<div class="form-group mb-3">
							    <label for="Email">Email</label>
							    <input type="email" class="form-control" required name="Email" placeholder="Email" id="Email" value="{{$data->result->profile->Email}}">
							</div>
						</div>
						<div class="tab-pane fade" id="pills-alamat" role="tabpanel" aria-labelledby="pills-alamat-tab">
							<div class="form-group mb-3">
							    <label for="Alamat">Alamat KTP</label>
							    <input type="text" class="form-control" required name="Alamat" placeholder="Alamat" id="Alamat" value="{{$data->result->profile->Alamat}}">
							</div>
							<div class="form-group mb-3">
							    <label for="kecamatan">Kecamatan</label>
							    <input type="text" class="form-control" required name="kecamatan" placeholder="Kecamatan" id="kecamatan" value="{{$data->result->profile->kecamatan}}">
							</div>
							<div class="form-group mb-3">
							    <label for="kelurahan">Kelurahan/Desa</label>
							    <input type="text" class="form-control" required name="kelurahan" placeholder="Kelurahan" id="kelurahan" value="{{$data->result->profile->kelurahan}}">
							</div>
							<div class="form-group mb-3">
							    <label for="KodePos">Kode Pos</label>
							    <input type="text" class="form-control" required name="KodePos" placeholder="Kode Pos" id="KodePos" value="{{$data->result->profile->KodePos}}">
							</div>
						</div>
				  		<button type="submit" class="btn btn-danger btn-lg btn-block">Submit</button>
					</div>	
				</form>
		    </div>
    	</div>
  	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
jQuery(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");

	jQuery('.btn[href^=#]').click(function(e){
		e.preventDefault();
		var href = jQuery(this).attr('href');
		jQuery(href).modal('toggle');
	});


	$('.show-hide-1').on('click', function(event) {
		event.preventDefault();
		if ($('#pwdLama').attr("type") == "password" ){
			$('#pwdLama').attr('type', 'text');
            $('.show-hide-icon-1').removeClass( "fa-eye" );
            $('.show-hide-icon-1').addClass( "fa-eye-slash" );
		} else if ($('#pwdLama').attr("type") == "text") {
			$('#pwdLama').attr('type', 'password');
            $('.show-hide-icon-1').removeClass( "fa-eye-slash" );
            $('.show-hide-icon-1').addClass( "fa-eye" );
		}
	});

	$('.show-hide-2').on('click', function(event) {
		event.preventDefault();
		if ($('#pwdBaru').attr("type") == "password" ){
			$('#pwdBaru').attr('type', 'text');
            $('.show-hide-icon-2').removeClass( "fa-eye" );
            $('.show-hide-icon-2').addClass( "fa-eye-slash" );
		} else if ($('#pwdBaru').attr("type") == "text") {
			$('#pwdBaru').attr('type', 'password');
            $('.show-hide-icon-2').removeClass( "fa-eye-slash" );
            $('.show-hide-icon-2').addClass( "fa-eye" );
		}
	});

	$('.show-hide-3').on('click', function(event) {
		event.preventDefault();
		if ($('#pwdKbaru').attr("type") == "password" ){
			$('#pwdKbaru').attr('type', 'text');
            $('.show-hide-icon-3').removeClass( "fa-eye" );
            $('.show-hide-icon-3').addClass( "fa-eye-slash" );
		} else if ($('#pwdKbaru').attr("type") == "text") {
			$('#pwdKbaru').attr('type', 'password');
            $('.show-hide-icon-3').removeClass( "fa-eye-slash" );
            $('.show-hide-icon-3').addClass( "fa-eye" );
		}
	});

	$('#ganti_password').on('submit', function(event) {
		event.preventDefault();
		if ($('#pwdBaru').val() != $('#pwdKbaru').val()) {
			toastr.error('Password baru dan Konfirmasi password harus sama');
		}else{
			$.post('{{ url('pendonor/profile/ganti_password') }}', {"_token" : "{{ csrf_token() }}", data: $('#ganti_password').serializeArray()}, function(data, textStatus, xhr) {
				console.log(data);
				// console.log(data.response.message);
				if (data.response.status == false || data.response.status == 'false') {
					// $('.toast-body').html(data.response.message);
					toastr.error(data.response.message);
				}

				if (data.response.status == true || data.response.status == 'true') {
					// $('#pwdLama').val('');
					// $('#pwdBaru').val('');
					// $('#pwdKbaru').val('');
					toastr.success(data.response.message);
					location.reload();
				}
			});
		}		
	});

	$('#update_profile').on('submit', function(event) {
		event.preventDefault();
		$.post('{{ url('pendonor/profile/ganti_profil') }}', {"_token" : "{{ csrf_token() }}", data: $('#update_profile').serializeArray()}, function(data, textStatus, xhr) {
			console.log(data);
			if (data.response.status == true || data.response.status == 'true') {
				// $('#pwdLama').val('');
				// $('#pwdBaru').val('');
				// $('#pwdKbaru').val('');
				$('#close-modal-chgprof').click();
				toastr.success(data.response.message);
				location.reload();
			}

			if (data.response.status == false || data.response.status == 'false') {
				// $('.toast-body').html(data.response.message);
				toastr.error(data.response.message);
			}
		});
	});
	
	$('#chgPass').on('hidden.bs.modal', function(event) {
		event.preventDefault();
		$('#pwdLama').val('');
		$('#pwdBaru').val('');
		$('#pwdKbaru').val('');
	});

	function readURL(input) {
		if (input.files && input.files[0]) {
		var reader = new FileReader();

			reader.onload = function(e) {
				$('.profile-preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#user_image").change(function() {
		readURL(this);
	});

});  
  
</script>
  	<!-- /.container-fluid -->
@endsection