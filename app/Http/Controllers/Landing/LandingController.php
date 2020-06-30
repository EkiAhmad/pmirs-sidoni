<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sidoni | App - Landing'
        ];
        return view('landing/content', $data);
    }
}
