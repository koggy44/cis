<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news= News::latest()->limit(3)->get();

        return view('home')->with('news', $news);
    }
    public function show($id)
    {
        $news= News::find($id);
        return view('news')->with('news', $news);
    }
}
