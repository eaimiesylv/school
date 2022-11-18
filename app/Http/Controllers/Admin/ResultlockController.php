<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Resultlock;
use Illuminate\Http\Request;

class ResultlockController extends Controller
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
            'lock'=>'required',
            'session_id'=>'required',
            'added_by'=>'required'
          
          ]);
          return Resultlock::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resultlock  $resultlock
     * @return \Illuminate\Http\Response
     */
    public function show(Resultlock $resultlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resultlock  $resultlock
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultlock $resultlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resultlock  $resultlock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultlock $resultlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resultlock  $resultlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultlock $resultlock)
    {
        //
    }
}
