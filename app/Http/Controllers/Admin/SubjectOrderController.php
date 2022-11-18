<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Subject_order;
use Illuminate\Http\Request;

class SubjectOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'subject_id'=>'required',
            'clas_id'=>'required',
            'arm_id'=>'',
            'session_id'=>'required',
            'order'=>'required',
			'added_by'=>''
    
    
          ]);
            return Subject_order::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject_order  $subject_order
     * @return \Illuminate\Http\Response
     */
    public function show(Subject_order $subject_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject_order  $subject_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject_order $subject_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject_order  $subject_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject_order $subject_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject_order  $subject_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject_order $subject_order)
    {
        //
    }
}
