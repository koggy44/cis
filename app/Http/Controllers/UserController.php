<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Report;

class UserController extends Controller
{
    public function show($id)
    {
        $user= User::findOrFail($id);
        return view('incidents.reporter')->with('user', $user);
       
    }
}
