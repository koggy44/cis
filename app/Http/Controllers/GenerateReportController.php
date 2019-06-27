<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Report;
use App\Place;

class MyPlace {
    public function __construct($name, $total) {
        $this->name = $name;
        $this->total = $total;
    }
}

class GenerateReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function generate(){
        $response = array();
        $places_arr = array();
        $places=Place::all();
        $report = new Report;

        foreach($places as $place){
            $id = $place->id;
            $arr = array();
            $arr['name'] = $place->place;
            $count = $report->where('inct_place', '=', $place->place)->count();
            $arr['count'] = $count;
            // $places_arr[$id] = $arr;
            $_place = new MyPlace($place->place, $count);
            $places_arr[$id] = $_place;
        }
            $response['places'] = array_values($places_arr);
            $places_arr = array_values($places_arr);
        
        $users=User::all();
        $categories=Category::all();
        $incidents=Report::all();

        return view('generated')
        ->with('users',$users)
        ->with('categories', $categories)
        ->with('incidents', $incidents)
        ->with('places', $places_arr);
    }
}
