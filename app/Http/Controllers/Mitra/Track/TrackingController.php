<?php

namespace App\Http\Controllers\Mitra\Track;

use App\Helper\Helper_js as js;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

//load eloquent

class TrackingController extends Controller
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

    protected $title = 'App | Tracking Darah'; //tag title html
    protected $url = 'mitra/track/'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'Tracking Darah'; //breadcumb
    protected $prefix_file = 'admin/tracking/';

    public function index()
    {
        //load js yang dipakai, sebelumnya register dlu di Helper_js
        $js = [
            'map'
        ];
        $data = [
            //bawaan jangan dihapus
            'title' => $this->title,
            'url'   => url($this->url),
            'breadcumb' => $this->breadcumb,
            'js' => js::use_js($js)
        ];
        // dd($data);
        return view($this->prefix_file . 'index', $data);
    }
}
