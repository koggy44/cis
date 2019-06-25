<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function user(){
        return view('help.user');
    }

    public function admin(){
        return view('help.admin');
    }
}
