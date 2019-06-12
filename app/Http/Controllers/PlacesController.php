<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
   
    public function show($category)
    {
        $places = new Place;
        $myPlaces = $places->where('category', '=', $category)->get();
  
        return response()->json($myPlaces);
    }
}
