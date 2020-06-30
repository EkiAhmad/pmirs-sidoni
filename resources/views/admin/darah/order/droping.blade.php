<div class="show_orangbanyak">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Bank Darah RS</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Tanggal Permintaan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Diberikan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inputEmail3">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 text-right" style="padding-right: 40px">
                <button type = "button" class = "btn btn-success" data-toggle = "modal" data-target="#new"><i class="fa fa-eye"></i> Lihat Pesanan</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 p-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Goldar A</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Goldar B</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Goldar C</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Goldar D</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><br>
                        <div class="row">
                            <div class="col-sm-12">  
                                <div class="card">
                                    <h5 class="card-header text-left">Jenis Darah</h5>
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <label for="inputEmail3" class="col-form-label">AHF</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">Cryoprecipitated AHF</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                    <div class="number-input" id="number">
                                                        <button type="button" class="step minus"></button>
                                                        <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                        <button type="button" class="step plus"></button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                    <h5 class="card-header text-left">Jenis Darah</h5>
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <label for="inputEmail3" class="col-form-label">FFP</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">FFP: Fresh Frozen Plasma</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                    <div class="number-input" id="number">
                                                        <button type="button" class="step minus"></button>
                                                        <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                        <button type="button" class="step plus"></button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                    <h5 class="card-header text-left">Jenis Darah</h5>
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <label for="inputEmail3" class="col-form-label">FP</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">FP: Fresh Plasma</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                    <div class="number-input" id="number">
                                                        <button type="button" class="step minus"></button>
                                                        <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                        <button type="button" class="step plus"></button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                    <h5 class="card-header text-left">Jenis Darah</h5>
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <label for="inputEmail3" class="col-form-label">Lekosit Aferesis</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">LEKOSIT AFERESIS</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                    <div class="number-input" id="number">
                                                        <button type="button" class="step minus"></button>
                                                        <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                        <button type="button" class="step plus"></button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                    <h5 class="card-header text-left">Jenis Darah</h5>
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <label for="inputEmail3" class="col-form-label">LP</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">LP: Liquid Plasma</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                    <div class="number-input" id="number">
                                                        <button type="button" class="step minus"></button>
                                                        <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                        <button type="button" class="step plus"></button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                    <h5 class="card-header text-left">Jenis Darah</h5>
                                    <div class="card-body">
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <label for="inputEmail3" class="col-form-label">PRC</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">PRC: Packed Red Cell</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4 text-left">
                                                <div align="right">
                                                    <div class="number-input" id="number">
                                                        <button type="button" class="step minus"></button>
                                                        <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                        <button type="button" class="step plus"></button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
                    <div class="row">
                        <div class="col-sm-12">  
                            <div class="card">
                                <h5 class="card-header text-left">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">AHF</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <center>
                                            <label for="inputEmail3" class="col-form-label">Cryoprecipitated AHF</label>
                                            </center>
                                        </div>
                                        <div class="col-sm-4">
                                            <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" style="margin-top:12px">  
                            <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">AHF</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <center>
                                            <label for="inputEmail3" class="col-form-label">Cryoprecipitated AHF</label>
                                            </center>
                                        </div>
                                        <div class="col-sm-4">
                                            <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12" style="margin-top:12px">  
                            <div class="card">
                            <h5 class="card-header">Jenis Darah</h5>
                            <div class="card-body">
                                {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                <div class="row">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">FP</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <center>
                                            <label for="inputEmail3" class="col-form-label">FP: Fresh Plasma</label>
                                            </center>
                                        </div>
                                        <div class="col-sm-4">
                                            <div align="right">
                                            <div class="number-input" id="number">
                                                <button type="button" class="step minus"></button>
                                                <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                <button type="button" class="step plus"></button>
                                            </div>
                                            </div>
                                        </div>      
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                        <div class="col-sm-12" style="margin-top:12px">  
                            <div class="card">
                            <h5 class="card-header">Jenis Darah</h5>
                            <div class="card-body">
                                {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                <div class="row">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">Lekosit Aferesis</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <center>
                                            <label for="inputEmail3" class="col-form-label">LEKOSIT AFERESIS</label>
                                            </center>
                                        </div>
                                        <div class="col-sm-4">
                                            <div align="right">
                                            <div class="number-input" id="number">
                                                <button type="button" class="step minus"></button>
                                                <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                <button type="button" class="step plus"></button>
                                            </div>
                                            </div>
                                        </div>      
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                        <div class="col-sm-12" style="margin-top:12px">  
                            <div class="card">
                            <h5 class="card-header">Jenis Darah</h5>
                            <div class="card-body">
                                {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                <div class="row">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">LP</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <center>
                                            <label for="inputEmail3" class="col-form-label">LP: Liquid Plasma</label>
                                            </center>
                                        </div>
                                        <div class="col-sm-4">
                                            <div align="right">
                                            <div class="number-input" id="number">
                                                <button type="button" class="step minus"></button>
                                                <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                <button type="button" class="step plus"></button>
                                            </div>
                                            </div>
                                        </div>      
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                        <div class="col-sm-12" style="margin-top:12px">  
                            <div class="card">
                            <h5 class="card-header">Jenis Darah</h5>
                            <div class="card-body">
                                {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                <div class="row">
                                        <div class="col-sm-4">
                                            <label for="inputEmail3" class="col-form-label">PRC</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <center>
                                            <label for="inputEmail3" class="col-form-label">PRC: Packed Red Cell</label>
                                            </center>
                                        </div>
                                        <div class="col-sm-4">
                                            <div align="right">
                                            <div class="number-input" id="number">
                                                <button type="button" class="step minus"></button>
                                                <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                <button type="button" class="step plus"></button>
                                            </div>
                                            </div>
                                        </div>      
                                </div>
                            </div>
            
                            </div>
                        
                        </div>
                    </div>  
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <br>
                        <div class="row">
                            <div class="col-sm-12">  
                                <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">AHF</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">Cryoprecipitated AHF</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                                </div>
                                            </div>      
                                    </div>
                                </div>
                
                                </div>

                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">AHF</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">Cryoprecipitated AHF</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                                </div>
                                            </div>      
                                    </div>
                                </div>
                
                                </div>
                            
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">FP</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">FP: Fresh Plasma</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                                </div>
                                            </div>      
                                    </div>
                                </div>
                
                                </div>
                            
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Lekosit Aferesis</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">LEKOSIT AFERESIS</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                                </div>
                                            </div>      
                                    </div>
                                </div>
                
                                </div>
                            
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">LP</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">LP: Liquid Plasma</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                                </div>
                                            </div>      
                                    </div>
                                </div>
                
                                </div>
                            
                            </div>
                            <div class="col-sm-12" style="margin-top:12px">  
                                <div class="card">
                                <h5 class="card-header">Jenis Darah</h5>
                                <div class="card-body">
                                    {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                    <div class="row">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">PRC</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <center>
                                                <label for="inputEmail3" class="col-form-label">PRC: Packed Red Cell</label>
                                                </center>
                                            </div>
                                            <div class="col-sm-4">
                                                <div align="right">
                                                <div class="number-input" id="number">
                                                    <button type="button" class="step minus"></button>
                                                    <input class="quantity" data-min="0" min="0" value="0" type="number">
                                                    <button type="button" class="step plus"></button>
                                                </div>
                                                </div>
                                            </div>      
                                    </div>
                                </div>
                
                                </div>
                            
                            </div>
                        </div>  
                        </div>
                </div>
                <div style="margin-top: 12px">
                        <button type="button" class="btn btn-success click-proses">Proses</button>  
                </div>               
            </div>
        </div>       
    </form>
</div>

<!-- Modal: modalCart -->
<div class = "container">
    <div class = "modal fade" id = "new" role = "dialog">
        <div class = "modal-dialog modal-lg">
            <div class = "modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pesanan yang anda pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class = "modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Cryoprecipitated AHF</td>
                                <td>X3</td>
                                <td>399.000.00</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>FP: Fresh Plasma</td>
                                <td>X10</td>
                                <td>1000.000,00</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>LP: Liquid Plasma</td>
                                <td>X6</td>
                                <td>699.000,00</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>PRC: Packed Red Cell</td>
                                <td>X2</td>
                                <td>299.000,00</td>
                            </tr>
                            <tr class="total">
                                <th scope="row"></th>
                                <td>Total</td>
                                <td>X19</td>
                                <td>2.100.000,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-danger" data-dismiss = "modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
         $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
          var $input = $(this).parent().find('input');
          $input.val(parseInt($input.val()) + 1);
          $input.change();
          return false;
        });
    });
</script>