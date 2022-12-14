<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Psychomotor;
use Illuminate\Http\Request;

class PsychomotorController extends Controller
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
            'user_id'=>'required',
            'verbal'=>'required',
            'sports'=>'required',
            'tools'=>'required',
			'drawing'=>'required',
            'music'=>'required',
			 'acaclass'=>'required',
			 'added_by'=>''
          ]);
          return Lock::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Psychomotor  $psychomotor
     * @return \Illuminate\Http\Response
     */
    public function show(Psychomotor $psychomotor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psychomotor  $psychomotor
     * @return \Illuminate\Http\Response
     */
    public function edit(Psychomotor $psychomotor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psychomotor  $psychomotor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psychomotor $psychomotor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psychomotor  $psychomotor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psychomotor $psychomotor)
    {
        //
    }
}
