<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index(){
        return view('berkas.berkas');
    }
}
