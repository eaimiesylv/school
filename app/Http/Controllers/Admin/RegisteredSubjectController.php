<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Registered_subject;
use Illuminate\Http\Request;

class RegisteredSubjectController extends Controller
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
			'added_by'=>''
    
    
          ]);
            return Registered_subject::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registered_subject  $registered_subject
     * @return \Illuminate\Http\Response
     */
    public function show(Registered_subject $registered_subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registered_subject  $registered_subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Registered_subject $registered_subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registered_subject  $registered_subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registered_subject $registered_subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registered_subject  $registered_subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registered_subject $registered_subject)
    {
        //
    }
}
