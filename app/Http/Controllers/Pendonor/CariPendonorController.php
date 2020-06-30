<?php

namespace App\Http\Controllers\pendonor;

use Illuminate\Http\Request;
use App\Helper\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Helper\Helper;

use Milon\Barcode\DNS1D;

use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;


//load eloquent

class CariPendonorController extends Controller
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

    protected $title = 'App | Sidoni Info'; //tag title html
    protected $url = 'pendonor.info'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'Info - Berita - Edukasi Galeri'; //breadcumb
    protected $prefix_file = 'pendonor/caripendonor/'; //nama file di resource

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
           
        ];
        // dd($data);
        return view($this->prefix_file . 'index', $data);
    }

    public function data(Request $request)
    {
        $post = $request->all();
        // unset($post['_token']);
        // dd($post);
        // $post = [
        //     'Nama' => 'samin'
        // ];

        $path = 'api/cari_kode_paginate';
        $get_data = json_decode(Helper::url_api($path, $post))->result;
        foreach ($get_data->data as $key => $value) {
            $value->image_barcode = '<img src="data:image/png;base64,'. DNS1D::getBarcodePNG($value->Kode, "C128").'" alt="barcode" width="200px" height="60px"/>';
        }
        $perpage = 10;
        $current_page = isset($post['page']) ? $post['page'] : 1;
        $offset = $current_page == 1 ? 1 : ($perpage * ($current_page - 1)) + 1;
        $data = [
            'status' => true,
            'result' => array_slice($get_data->data, $offset, $perpage, true),
            'page' => $current_page,
            'page_limit' => $perpage,
            'fetched' => count(array_slice($get_data->data, $offset, $perpage, true)),
            'total' => $get_data->jumlah_data
        ];
        // dd($data);
        // $results = new \Illuminate\Pagination\LengthAwarePaginator($get_data, 1, $data->jumlah_data, 10, 1, ["path" => "search"]);
        // $paginate = paging($get_data, $data->jumlah_data, '10' ?: '10');
        // dd($get_data);
        // $data = [];
        // for ($i = 0; $i <  5; $i++) {
        //     $data[] = $data->result->data[$i];
        // }
        return response()->json($data);
        //return response()->json($paginator->make($data, count($data), Input::get('limit') ?: '5'));
    }
}
