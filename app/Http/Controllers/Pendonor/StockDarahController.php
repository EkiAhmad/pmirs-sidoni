<?php

namespace App\Http\Controllers\Pendonor;

use Illuminate\Http\Request;
use App\Helper\Helper_js as js;
use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

//load eloquent

class StockDarahController extends Controller
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

    protected $title = 'App | Stok Darah'; //tag title html
    protected $url = 'pendonor.stok'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'Stok Darah'; //breadcumb
    protected $prefix_file = 'pendonor/stock/'; //nama file di resource

    public function index()
    {
        //load js yang dipakai, sebelumnya register dlu di Helper_js
        $js = []; //load jsmu
        $data = [
            //bawaan jangan dihapus
            'title' => $this->title,
            'url'   => url($this->url),
            'breadcumb' => $this->breadcumb,
            'js' => js::use_js($js),
            //data
            'data' => $this->data()->original
        ];
        // dd($data);
        return view($this->prefix_file . 'index', $data);
    }

    public function data()
    {
        $path = 'api/v1/stock_darah';
        $data = json_decode(Helper::url_api($path));

        return response()->json($data);
    }
}