<div class="col-12">
    <a class="btn btn-back-partisipasi"><i class="fas fa-arrow-left"></i> Kembali</a>
</div>
<div class="data-persetujuan">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                @php
                    $data_persetujuan = $persetujuan->result;
                @endphp
                <div class="card">
                    <div class="card-header">
                            <h4>Persetujuan Tindakan Medis (Pengambilan Darah)</h4>
                            <h6><small>Mohon untuk membaca pernyataan secara menyeluruh</small></h6>
                    </div>
                    <div class="card-body">
                        @php
                            $dataa = $data_persetujuan->persetujuan_content;
                            echo html_entity_decode($dataa);
                        @endphp
                        <div class="col-sm-12"></div>
                        <p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-secondary btn-block btn-batal"><b>Batal</b></button>
                                </div>
                                <div class="col-sm-6">
                                   <a id="btn-setuju" href="" class="btn btn-danger btn-block btn_setuju"><b>Saya setuju</b></a>
                                </div>
                            </div>
                        </p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>