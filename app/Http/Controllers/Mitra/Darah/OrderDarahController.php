<?php

namespace App\Http\Controllers\Mitra\Darah;

use App\Helper\Helper_js as js;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

//load eloquent

class OrderDarahController extends Controller
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

    protected $title = 'App | Order Darah'; //tag title html
    protected $url = 'mitra.order.darah'; //url di route/web
    protected $breadcumb = 'Order Darah'; //breadcumb
    protected $prefix_file = 'admin.darah.order.';

    public function index()
    {

        $data = [
            //bawaan jangan dihapus
            'title' => $this->title,
            'url'   => url($this->url),
            'breadcumb' => $this->breadcumb,
            'js'        => js::use_js([]),
        ];
        // dd($data);
        return view($this->prefix_file . 'index', $data);
    }
}
