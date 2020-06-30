<?php

namespace App\Http\Controllers\Mitra;
use Validator,Redirect,Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
use Illuminate\Support\Facades\Auth;
class Login_rs_controller extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

                return redirect()->intended('mitra/dashboard');
        }
        return redirect()->back()->with('wrong', 'username/password salah');
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
        'name'      => 'required',
        'email'     => 'required|email|unique:users_rs',
        'password'  => 'required|min:6',
        ]);

        $data =  User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),

        ]);
        if($data){
            return Redirect::to('mitra/login')->with('sukses', "Succes registrasi");
        }
        // Mail::send('isiemail', array('pesan' => 'Username: '.$request->name, 'pesan2' => 'Password: '.$request->password) , function($pesan) use($request){
        //             $pesan->to($request->email,'Verifikasi')->subject('Form Registrasi');
        //             $pesan->from(env('MAIL_USERNAME','dejavadeveloper@gmail.com'),'Registrasi dengan Email anda');

        //         });


    }

}
