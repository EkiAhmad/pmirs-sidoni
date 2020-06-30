<?php

namespace App\Http\Controllers\Pendonor;

use Illuminate\Http\Request;
use App\Helper\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\Helper;
use Hashids;
use Hashids\Hashids as HashidsHashids;
use Validator;

//load eloquent

class AnamnesaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        DB::enableQueryLog();
        if (session()->has('user') == false) {
            return redirect('pendonor/auth/login')
                ->withError('error');
        }
    }

    protected $title = 'App | Anamnesa'; //tag title html
    protected $url = 'pendonor.anamnesa'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'Anamnesa'; //breadcumb
    protected $prefix_file = 'pendonor/anamnesa/'; //nama file di resource

    public function index($slug, $id)
    {
        $cek_kegiatan = Hashids::decode($id);
        //cek punya agenda?
        $get_session = session('user');
        $kode = $get_session['Kode'];
        $path = 'api/v2/beranda/' . $kode;
        $data = json_decode(Helper::url_api($path));

        $agenda = $data->result->data_agenda;
        if (!empty($cek_kegiatan) && empty($agenda)) {
            //load js yang dipakai, sebelumnya register dlu di Helper_js
            $js = []; //load jsmu
            $data = [
                //bawaan jangan dihapus
                'title' => $this->title,
                'url'   => url($this->url),
                'breadcumb' => $this->breadcumb,
                'js' => js::use_js($js),
                'data' => $this->data()->original,
                'event_id' => $id
            ];

            // dd($data);
            return view($this->prefix_file . 'index', $data);
        } else {
            return redirect(route('pendonor.agenda'))->with('message', 'Anda sudah mempunyai agenda');
        }
    }
    public function data()
    {

        $kode = '3603DGABD000585';
        $path = 'api/v2/anamnesa/get_pertanyaan/' . $kode;
        $data = json_decode(Helper::url_api($path));
        $result = array();
        // dd($data);
        if ($data->response->status) {
            // foreach ($data->result as $key => $value) {
            //     $result[$value->kategori_judul][] = $value;
            // }
            return response()->json($data);
        }
    }

    public function action_anamnesa(Request $request)
    {
        $data = $request->all();
        $pertanyaan_id = [];
        $jawaban_id = [];
        foreach ($data['anamnesa'] as $key => $value) {
            $pertanyaan_id[] = $key;
            $jawaban_id[] = $value;
        }
        $insert = [
            'pertanyaan_id' => $pertanyaan_id,
            'jawaban' => $jawaban_id,
            'event_id' => Hashids::decode($data['event_id'])[0],
            'jawaban_users_id' => session('user')['Kode']
        ];
        $path = 'api/amenesa/jawaban';
        $data = json_decode(Helper::url_api($path, $insert));
        // dd($data);

        return redirect('pendonor/agenda');


        // dd($insert);
    }
}
