<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Session_record;
use Illuminate\Http\Request;

class SessionRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return 'oko';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'status'=>'required',
			'session_id'=>'required',
            'user_id'=>'required',
			'clas_id'=>'required',
			 'arm_id'=>'',
			 'added_by'=>''
          
           
           
           
           
  
          ]);
          return Students::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Session_record  $session_record
     * @return \Illuminate\Http\Response
     */
    public function show(Session_record $session_record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Session_record  $session_record
     * @return \Illuminate\Http\Response
     */
    public function edit(Session_record $session_record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Session_record  $session_record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Session_record $session_record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Session_record  $session_record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Session_record $session_record)
    {
        //
    }
}
