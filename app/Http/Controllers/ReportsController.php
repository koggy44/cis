<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\IncidentType;
use App\Place;
use DB;
use Auth;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $reports=Report::where('user_id',Auth::id())->get();
        return view('reports.index')->with('reports',$reports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places= Place::all();
        $inct_type= IncidentType::all();
        return view('reports.create')->with('inct_type', $inct_type)->with('places', $places);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'type'=>'required',
            'place'=>'required',
            'time_slot'=>'required',
            'description'=>'required'
            
        ]);

        //add to database
        $report =new Report;
        $report->user_id = Auth::id();
        $report->regno = auth()->user()->reg_number;
        $report->inct_type = $request->input('type');
        $report->inct_place = $request->input('place');
        $report->time_slot =$request->input('time_slot');
        $report->description = $request->input('description');

        $report->save();

        return redirect('/reports')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
