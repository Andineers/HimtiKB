<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function index(){
        return view('sharing.sharing');
    }
}
