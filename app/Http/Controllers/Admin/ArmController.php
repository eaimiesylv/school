<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Arm;
use Illuminate\Http\Request;

class ArmController extends Controller
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
            'clas_id'=>'required',
            'armname'=>'required',
            'added_by'=>'',
           
    
    
          ]);
            return Arm::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arm  $arm
     * @return \Illuminate\Http\Response
     */
    public function show(Arm $arm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arm  $arm
     * @return \Illuminate\Http\Response
     */
    public function edit(Arm $arm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arm  $arm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arm $arm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arm  $arm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arm $arm)
    {
        //
    }
}
