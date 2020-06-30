<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(Session('user'));
        // return "oe";
        // dd($request->user());
        if(Session::has('users')){
            return Redirect::to('/pendonor/kegiatan');
        }else{
            return $next($request);
        }
    }
}
