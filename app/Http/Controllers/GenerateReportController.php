<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Report;

class GenerateReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function generate(){
        
        $users=User::all();
        $categories=Category::all();
        $incidents=Report::all();

        return view('generated')
        ->with('users',$users)
        ->with('categories', $categories)
        ->with('incidents', $incidents);
    }
}
