<?php

namespace App\Http\Controllers\Auth;
use App\Helpers\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $title = 'App | Login'; //tag title html
    protected $url = 'auth/'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'pendonor'; //breadcumb
    protected $prefix_file = 'pendonor/login/';


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string

     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function index()
    {
        // dd(session()->has('message_register'));
        // dd(session()->has('user'));
        //load js yang dipakai, sebelumnya register dlu di Helper_js
        // $js = [
        //     'map'
        // ];
        // $data = [
        //     //bawaan jangan dihapus
        //     'title' => $this->title,
        //     'url'   => url($this->url),
        //     'breadcumb' => $this->breadcumb,
        //     'js' => js::use_js($js)
        // ];
        // dd($data);
    
        return redirect(route('pendonor.auth.login'));
    }
    public function proses_login(Request $request)
    {
        // dd(Auth::user());
        $post = $request->all();
        unset($post['_token']);
        // dd($post);
        $path = 'api/login';
        $data = json_decode(Helper::url_api($path, $post));
        // dd($data);
            // dd([$data, $post]);
        if($data->response->status){
            $pendonor = $data->result;
            // dd($pendonor);
            $credentials = [
                // 'user_username' => '3603DGABD000585',
                // 'user_password'     => '123456'
                'Kode'          => $pendonor->Kode,
                'NoKTP'         => $pendonor->NoKTP,
                'Nama'          => $pendonor->Nama,
                'Pekerjaan'     => $pendonor->Pekerjaan,
                'TempatLhr'     => $pendonor->TempatLhr,
                'TglLhr'        => $pendonor->TglLhr,
                'GolDarah'      => $pendonor->GolDarah,
                'Jk'            => $pendonor->Jk,
                'Rhesus'        => $pendonor->Rhesus,
                'kelurahan'     => $pendonor->kelurahan,
                'kecamatan'     => $pendonor->kecamatan,
                'wilayah'       => $pendonor->wilayah,
                'Alamat'        => $pendonor->Alamat,
                'AlamatKantor'  => $pendonor->AlamatKantor,
                'KodePos'       => $pendonor->KodePos,
                'jumDonor'      => $pendonor->jumDonor,
                'telp2'         => $pendonor->telp2,
                'htjumlahdonor' => $pendonor->htjumlahdonor,
                'username'      => $pendonor->username,
                'user_image'    => $pendonor->user_image,
                'tglkembali'    => $pendonor->tglkembali,
                'Tgl'           => $pendonor->Tgl,
                'kota'          => $pendonor->kota
                
            ];
            // session('pendonor', $credentials);
            // $auth = Auth::attempt($credentials);
            $request->Session()->put('user', $credentials);
            
            // $guard = auth()->guard('pendonor')->login($credentials);
            // $req = Auth::attempt(['user_kode_pendonor'=>'3603DGABD000585'], true);
            // $cek = Auth::guest();
            // dd($ses, $auth);

            // if(session()->has('user')){

            //     return redirect(route('pendonor.kegiatan'));

            // }
        }else{
            session()->put('error','This is for error.');
            return redirect()->back()->with(['message' => $data->response->message]);
        }
        
        // return response()->json($data);
    }

    public function register(Request $request){
        $post = $request->all();
        unset($post['_token']);
        // dd($post);
        $path = 'api/register';
        $data = json_decode(Helper::url_api($path, $post));
        request()->validate([
                                            'Nama'      => 'required',
                                            'TempatLhr' => 'required',
                                            'TglLhr' => 'required',
                                            'JK' => 'required',
                                            'Pekerjaan' => 'required',
                                            'telp2' => 'required',
                                            'Email' => 'required',
                                            'Alamat' => 'required',
                                            'kecamatan' => 'required',
                                            'kelurahan' => 'required',
                                            'KodePos'   => 'required',
                                            'user_password' => 'required',
                                        ]
                                     
                                    );

        
            return Redirect::to("pendonor/login")->withSuccess('Great! Form successfully submit with validation.');
     
            //  if($data->response->status){
            //    return redirect()->back()->with(['message_register' => $data->response->message]);
            //     // return response()->json($data);
            // }
        
    }

    public function logout(Request $request){
        if(session()->has('user')){
            $request->session()->forget('user');
            return view('pendonor/login');
        }

    }

}
