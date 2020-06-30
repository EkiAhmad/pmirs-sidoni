<?php

namespace App\Http\Controllers\Pendonor;

use Illuminate\Http\Request;
use App\Helper\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;

//load eloquent

class KegiatanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        DB::enableQueryLog();
    }

    protected $title = 'App | Kegiatan Donor Darah'; //tag title html
    protected $url = 'pendonor.kegiatan'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'Kegiatan Donor Darah'; //breadcumb
    protected $prefix_file = 'pendonor/kegiatan/'; //nama file di resource

    public function index(Request $request)
    {
        if (session()->has('user') == false) {
            return redirect('pendonor/auth/login')
                ->withError('error');
        }

        $get_session = session('user');
        // dd($get_session);
        //load js yang dipakai, sebelumnya register dlu di Helper_js
        $js = []; //isi jsmu
        $data = [
            //bawaan jangan dihapus
            'title' => $this->title,
            'url'   => url($this->url),
            'breadcumb' => $this->breadcumb,
            'js' => js::use_js($js),
            //load
            'data' => $this->data()->original,
            'persetujuan' => $this->persetujuan()->original,

        ];
        return view($this->prefix_file . 'index', $data);
    }

    public function data()
    {
        $get_session = session('user');
        $kode = $get_session['Kode'];
        $path = 'api/v2/beranda/' . $kode;
        $data = json_decode(Helper::url_api($path));
        // dd($data);
        $today = date('Y-m-d');
        if ($data->response->status) {
            $arr_data = [];
            foreach ($data->result->data_kegiatan as $key => $value) {

                if ($value->date_end == $today) {
                    $value->day = Helper::get_date_indonesia($value->date_start);
                    $arr_data[] = $value;
                }
                // dd($value)
            }
            $data->result->data_kegiatan = $arr_data;
        }
        // dd(session('user'));


        return response()->json($data);
    }

    public function persetujuan()
    {

        $path = 'api/amenesa/persetujuan';
        $data = json_decode(Helper::url_api($path));
        // dd($data);

        if ($data->response->status) {
            // dd($data);
            return response()->json($data);
        }
    }
}
