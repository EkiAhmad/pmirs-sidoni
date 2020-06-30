<?php

namespace App\Http\Controllers\Pendonor;

use Illuminate\Http\Request;
use App\Helper\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Validator;

use App\Helper\Helper;
//load eloquent

class ProfileController extends Controller
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

    protected $title = 'App | Profile'; //tag title html
    protected $url = 'pendonor.profile'; //url di route/web(ambil prefixnya)
    protected $breadcumb = ''; //breadcumb
    protected $prefix_file = 'pendonor/profile/'; //nama file di resource

    public function index()
    {
        if(session()->has('user')==false){
             return redirect('pendonor/auth/login')
            ->withError('error');
        }
        //load js yang dipakai, sebelumnya register dlu di Helper_js
        $js = []; //load jsmu
        $data = [
            //bawaan jangan dihapus
            'title'      => $this->title,
            'url'        => url($this->url),
            'breadcumb'  => $this->breadcumb,
            'js'         => js::use_js($js),
            //load
            'data'       => $this->data()->original,
            'riwayat'    => $this->get_riwayat()->original
        ];
        // dd($data);
        return view($this->prefix_file.'index', $data);
    }

    public function data()
    {
        $get_session = session('user');
        $path = 'api/v1/user_mobile/get_profile/'.$get_session['Kode'];
        // $path = 'api/v1/user_mobile/get_profile/3603DGLUK000151';
        // $path = 'api/v1/user_mobile/get_profile/3603DGDEN000359';
        $data = json_decode(Helper::url_api($path));

        // $TerakhirDonor = date_create($data->result->profile->Tgl);
        // $data->result->profile->TDHari    = date_format($TerakhirDonor,"l");
        // $data->result->profile->TDTanggal = date_format($TerakhirDonor,"d F Y");

        // $DonorSelanjutnya = date_create($data->result->profile->tglkembali);
        // $data->result->profile->DSHari    = date_format($DonorSelanjutnya,"l");
        // $data->result->profile->DSTanggal = date_format($DonorSelanjutnya,"d F Y");

        $data->result->profile->Tgl        = Helper::get_date_indonesia($data->result->profile->Tgl);
        $data->result->profile->tglkembali = Helper::get_date_indonesia($data->result->profile->tglkembali);

        // dd($data);

        return response()->json($data);
    }
    
    public function get_riwayat(){
        // $post = $request->all();
        // dd($datanya);
        $kode = session('user')['Kode'];
        if($kode){ 
            $path = 'api/riwayat_pendonor/'.$kode;
            $data = json_decode(Helper::url_api($path));
            return response()->json($data);
        }
        
    }

    public function ganti_password(Request $request)
    {
        $post = $request->all();
        // dd($post);
        // $insert = [];
        foreach ($post['data'] as $key => $value) {
            // dd($key, $value);
            $insert[$value['name']] = $value['value']; 
        }
        // $data = session('user');
        // dd($insert);
        // unset($insert['user_passwordc']);
        $insert['user_username'] = session('user')['Kode'];
        $path = 'api/ganti_password';
        // dd($insert);
        $data = json_decode(Helper::url_api($path, $insert));
        return response()->json($data);
    }

    public function ganti_profil(Request $request)
    {
        $post = $request->all();

        foreach ($post['data'] as $key => $value) {
            // dd($key, $value);
            $insert[$value['name']] = $value['value']; 
        }
        // dd($insert);
        $id = session('user')['Kode'];
        $path = 'api/update_profile/'.$id;
        $data = json_decode(Helper::url_api($path, $insert));
        return response()->json($data);
    }
}