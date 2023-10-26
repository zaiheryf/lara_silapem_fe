<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\MasterTempatWisataModel;

class Login extends Controller
{
    public function index(){
        $pages='web.login.index';
        return view('template_front.content', ['konten' => $pages]);
    }
}
