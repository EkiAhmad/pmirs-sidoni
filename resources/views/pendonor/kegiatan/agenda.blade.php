<div class="row">
    @if ($data->response->status)
    {{-- {{ dd($data->result) }} --}}
        @if (count($data->result->data_kegiatan) > 0 )
        <h3 style="font-weight:700;">&nbsp;&nbsp;Bulan  {{$data->result->data_kegiatan[0]->day['bulan'] }} </h3>
            @foreach ($data->result->data_kegiatan as $key => $value)
            {{-- {{dd($value)}} --}}
<div class="col-12 data-kegiatan" data-id="{{ Hashids::encode($value->id) }}" data-slug="{{ Helper::get_slug($value->title) }}" data-date="{{$value->day['hari'].', '.$value->day['tgl'].' '.$value->day['bulan']}}" data-time="{{$value->time_start .' - '. $value->time_end}}" data-location=" {{$value->location}}" data-title="{{ $value->title }}" data-type="{{ $value->TYPE }}" data-fulldate="{{ $value->date_start }}">
    <div class="card mb-3" >
                        <div class="card-body border rounded" style="cursor: pointer;">
                            <div class="row">
                                <div class="col-3 text-center p-0">
                                    <h5 class="card-title color-hari"> {{ $value->day['hari']}} </h5>
                                    <h3 class="card-subtitle mb-2 color-tgl"> {{$value->day['tgl']}} </h3>
                                    @if ($value->TYPE == 'UMUM')
                                        <h6 class="type-color-umum">{{$value->TYPE}}</h6>    
                                    @else
                                        <h6 class="type-color-tertutup">{{$value->TYPE}}</h6>
                                    @endif
                                    
                                </div>
                                <div class="col-9">
                                    <h4 class="card-text h-title-card color-title">{{$value->title}}</h4>
                                    <p class="color-alamat">{{$value->location}}</p>
                                    <p class="color-jam m-0">{{$value->time_start .' - '. $value->time_end}} WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="text-center">Belum ada data</div>
            </div>
        @endif
        
    @else
        <div class="col-12">
            <button class="btn btn-danger btn-refresh"> Refresh Halaman ini </div>
        </div>
        <script>
            alert('{{ $data->response->message }}')
        </script>
    @endif
</div>