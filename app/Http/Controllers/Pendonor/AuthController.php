<?php
namespace App\Http\Controllers\Pendonor;
use App\Helpers\Helper_js as js;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;
use Session;
use Validator;
use Redirect;
use DB;
use Mail;
use Response;
use App\Model\Pendonor as model_pendonor;
//load eloquent

class AuthController extends Controller
{
    protected $guard = 'pendonor';
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return auth()->guard('pendonor');
    }

    protected $title = 'App | App\Http\Controllers\Pendonor'; //tag title html
    protected $url = 'App\Http\Controllers\Pendonor'; //url di route/web(ambil prefixnya)
    protected $breadcumb = 'App\Http\Controllers\Pendonor'; //breadcumb
    protected $prefix_file = 'App\Http\Controllers\Pendonor'; //nama file di resource

    public function index(Request $request)
    {
        $request->session()->forget('message_register');
        $request->session()->put('url.intended',url()->previous());
        // dd($this->middleware('guest'));
        if(session()->has('user')==false){
             return view('pendonor/login');
        }else{
            return redirect('pendonor/kegiatan');
        }

    }
    public function proses_login(Request $request)
    {
        // dd(Auth::user());
        $post = $request->all();
        unset($post['_token']);
        // dd($post);
        $path = 'api/login';
        $data = json_decode(Helper::url_api($path, $post));
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
                // 'Tgl'           => $pendonor->Tgl,
                // 'kota'          => $pendonor->kota

            ];
            // dd($credentials);
            // session('pendonor', $credentials);
            // $auth = Auth::attempt($credentials);
            $request->Session()->put('user', $credentials);

            // $guard = auth()->guard('pendonor')->login($credentials);
            // $req = Auth::attempt(['user_kode_pendonor'=>'3603DGABD000585'], true);
            // $cek = Auth::guest();
            // dd($ses, $auth);

            if(session()->has('user')){

                 return Redirect::to('/pendonor/kegiatan');

            }
        }else{
            // session()->put('error','This is for error.');
            return redirect()->back()->with(['message' => $data->response->message]);
        }

        // return response()->json($data);
    }
    public function page_register(){
        return view('pendonor/register');
    }
    public function hal_lupa_sandi(){
        return view('pendonor/lupa_kata_sandi');
    }
    public function checkEmail(Request $request){
        $email = $request->input('Email');
        $isExists = DB::connection('mysql2')
                    ->table('pendonor')
                    ->where('Email', $email)
                    ->first();
        // dd($isExists);
        // $isExists = \App\User::where('email',$email)->first();
        if($isExists){
            return response()->json(array("exists" => true));
        }else{
            return response()->json(array("exists" => false));
        }
    }
    public function register(Request $request){
        $post = $request->all();
        unset($post['_token']);
        // dd($post);
        $path = 'api/register';
        unset($post['password_confirm']);
        $data = json_decode(Helper::url_api($path, $post));

        $this->validate($request,[
                                            'Nama'      => 'required',
                                            'TempatLhr' => 'required',
                                            'TglLhr' => 'required',
                                            'JK' => 'required',
                                            'Pekerjaan' => 'required',
                                            'telp2' => 'required',
                                            'Email' => 'email',
                                            'Alamat' => 'required',
                                            'kecamatan' => 'required',
                                            'kelurahan' => 'required',
                                            'KodePos'   => 'required',
                                            'user_password' => 'required',
                                        ]

                                    );



            if($data->response->status){

                // return Response::json(array('success' => true, 'last_insert_id' => $data->id), 200);
                $kode = $data->param->Kode;
                $password = $post['user_password'];
                $path_login = 'api/login';
                $check_login = json_decode(Helper::url_api($path_login, ["user_username" => $kode, "user_password" => $password]));
                if($check_login->response->status){

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
                        // 'Tgl'           => $pendonor->Tgl,
                        // 'kota'          => $pendonor->kota


                    ];
                    // dd($credentials);
                    // session('pendonor', $credentials);
                    // $auth = Auth::attempt($credentials);
                    $request->Session()->put('user', $credentials);

                    // $guard = auth()->guard('pendonor')->login($credentials);
                    // $req = Auth::attempt(['user_kode_pendonor'=>'3603DGABD000585'], true);
                    // $cek = Auth::guest();
                    // dd($ses, $auth);

                    if(session()->has('user')){

                         return Redirect::to('/pendonor/kegiatan');

                    }
                }

               // $request->Session()->put('msg_cek_email', 'Silakan check email untuk mendapatkan Kode pendonor :*' );
               // return Redirect::to('pendonor/auth/login')->with('success', "Registrasi Berhasil, Silakan Login!")
               //                                           ->with('msg_cek_email', 'Silakan check email untuk mendapatkan Kode pendonor :*');
               // $request->session()->put('get_kode', );
                // return response()->json($data);
            }else{
                return redirect()->back()->with(['message_register' => $data->response->message]);
            }

    }


    public function send(Request $request){
        $post = $request->all();
        $path = 'api/lupa_password';
        $data = json_decode(Helper::url_api($path, $post));
        // dd($data);
        if($data->response->status){
        //     $check_email = DB::connection('mysql2')
        //                 ->table('pendonor')
        //                 ->select('*')
        //                 ->where('email', $data->param->email)
        //                 ->first();

        //     $Kode = $check_email->Kode ;

            // $request->Session()->put('user_kode_pendonor', $Kode);
            $request->Session()->put('ses_username', $request->username);
            $request->Session()->put('ses_email', $request->email);
            return Redirect::to('pendonor/auth/update_password')->with('message', $data->response->message);

        }else{

            return redirect()->back()->with('error', $data->response->message);
        }

    }

    public function konfirmasi_lupa_password(Request $request){
        $post = $request->all();
        $path = 'api/konfirmasi_lupa_password';
        $data = json_decode(Helper::url_api($path, $post));
        // dd($data->response->status);
        if($data->response->status){
            $request->session()->forget('ses_username');
            return Redirect::to('pendonor/auth/login')->with('konfirmasi', "sukses ganti password");
            // return Redirect::to('pendonor/auth/update_password')->with('message', $data->response->message);
        }else{
            return redirect()->back()->with('error', $data->response->message);
        }
    }
    public function hal_update_password(){
        return view('pendonor/kata_sandi_baru');
    }

    // public function update_password(Request $request)
    // {
    //     $DB1 = model_pendonor::select(DB::raw('Kode,user_kode_pendonor,Nama,user_password,Alamat,email'))
    //             ->join('pmi_tangerang.pendonor as ptp', 'user_kode_pendonor', '=', 'ptp.Kode')
    //             ->where('Kode', '=', $request->Kode)
    //             ->first();
    //     $get_kode = $DB1->user_kode_pendonor;
    //     // dd($get_kode);
    //     $input = $this->get_password(strtoupper($get_kode), $request->user_password);
    //     $update = DB::connection('mysql')
    //             ->table('users_mobile')
    //             ->where('user_kode_pendonor', '=', $get_kode)
    //             ->update(['user_password' => $input]);
    //                  // dd($get_kode);
    //     try {
    //         if($update){
    //             return Redirect::to('pendonor/auth/login')->with('success', "sukses ganti password");
    //         }
    //     } catch (Exception $e) {
    //             return redirect()->back()->with('message', 'gagal ganti password');
    //     }
    //     // $query = DB::connection('mysql')
    //     //         ->table('pendonor')
    //     //         ->where('email',$request->email)
    //     //         ->update([
    //     //     'password' => $request->password,

    //     // ]);


    // }
    public function logout(Request $request){
        if(session()->has('user')){

            $request->session()->flush();
            $request->session()->flash('user', 'success logout');
            $request->session()->forget('user');
            $request->session()->regenerate();
            return redirect('pendonor/auth/login');
        }

    }


}
