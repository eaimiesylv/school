<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Mergeresult;
use Illuminate\Http\Request;

class MergeresultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "ok";
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
            'mergename'=>'required',
            'acaclass'=>'required',
			'added_by'=>''
          ]);
          return Merges::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mergeresult  $mergeresult
     * @return \Illuminate\Http\Response
     */
    public function show(Mergeresult $mergeresult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mergeresult  $mergeresult
     * @return \Illuminate\Http\Response
     */
    public function edit(Mergeresult $mergeresult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mergeresult  $mergeresult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mergeresult $mergeresult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mergeresult  $mergeresult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mergeresult $mergeresult)
    {
        //
    }
}
