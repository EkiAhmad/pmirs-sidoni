<?php

namespace App\Http\Controllers\Mitra;

use App\Helper\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $title = 'App | Dashboard'; //tag title html
    protected $url = 'mitra.dashboard'; //url di route/web
    protected $breadcumb = 'Dashboard'; //breadcumb
    protected $prefix_file = 'admin.';

    public function index()
    {
        $data = [
            //bawaan jangan dihapus
            'title'     => $this->title,
            'url'       => url($this->url),
            'breadcumb' => $this->breadcumb,
            'js'        => js::use_js(['chart']),
        ];
        // dd($data);
        return view($this->prefix_file . 'content', $data);
    }
}
