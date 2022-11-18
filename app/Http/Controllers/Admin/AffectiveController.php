<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Affective;
use Illuminate\Http\Request;

class AffectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return 'ok';
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
            'punctuality'=>'required',
            'neat'=>'required',
            'behaviour'=>'required',
            'lead'=>'required',
			'help'=>'required',
            'emotion'=>'required',
            'health'=>'required',
            'attitude'=>'required',
			'attentive'=>'required',
            'spoken'=>'required',
			'acaclass'=>'required',
			'added_by'=>''
          ]);
          return Affective::FirstOrCreate($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Affective  $affective
     * @return \Illuminate\Http\Response
     */
    public function show(Affective $affective)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Affective  $affective
     * @return \Illuminate\Http\Response
     */
    public function edit(Affective $affective)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Affective  $affective
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affective $affective)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Affective  $affective
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affective $affective)
    {
        //
    }
}
