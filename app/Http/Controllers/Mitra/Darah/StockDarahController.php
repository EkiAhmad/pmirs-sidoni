<?php

namespace App\Http\Controllers\Mitra\Darah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;
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
    protected $url = 'mitra.darah.'; //url di route/web (ambil prefiknya)
    protected $breadcumb = 'Stok Darah'; //breadcumb
    protected $prefix_file = 'admin.darah.stock.';

    public function index()
    {
        // $query =  DB::connection('mysql')
        // ->table('data_stock')
        // ->select('*')
        // ->join('master_golongan_darah', 'data_stock.stock_golongan_darah_id', '=', 'master_golongan_darah.golongan_id')
        // ->join('master_produk_darah', 'data_stock.stock_produk_darah_id', '=', 'master_produk_darah.produk_id')
        // ->get();
        $query =  DB::connection('mysql')
        ->table('data_stock')
        ->select('*')
        ->join('master_golongan_darah', 'data_stock.stock_golongan_darah_id', '=', 'master_golongan_darah.golongan_id')
        ->join('master_produk_darah', 'data_stock.stock_produk_darah_id', '=', 'master_produk_darah.produk_id')
        ->get();

        $arr = array();
        foreach ($query as $key => $value){

            $arr[$value->golongan_id][] = $value;

        }
        $output = array();
        foreach ($arr as $key => $value){
            $output[] = array('id_darah' => $key,
                            'gol_darah'  => $value
                            );
        }

        $data = [
            //bawaan jangan dihapus
            'title' => $this->title,
            'url'   => url($this->url),
            'breadcumb' => $this->breadcumb,
            'auth'      => auth::user()->name,
            'query' => $output

        ];

        // dd($data);
        return view($this->prefix_file . 'index', $data);
    }
}
