<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Classteacher;
use Illuminate\Http\Request;

class ClassteacherController extends Controller
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
            'teacher_id'=>'required',
            'session_id'=>'required',
            'clas_id'=>'required',
            'arm_id'=>'required',
            'state'=>'required',
			'added_by'=>''
  
          ]);
          return Classteacher::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classteacher  $classteacher
     * @return \Illuminate\Http\Response
     */
    public function show(Classteacher $classteacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classteacher  $classteacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Classteacher $classteacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classteacher  $classteacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classteacher $classteacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classteacher  $classteacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classteacher $classteacher)
    {
        //
    }
}
