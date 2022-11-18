<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Allhmcomment;
use Illuminate\Http\Request;

class AllhmcommentController extends Controller
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
            'hcomment'=>'required',
            'hcriteria'=>'required',
            'third_term'=>'required',
            'added_by'=>'',
           
          ]);
          return Allocation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allhmcomment  $allhmcomment
     * @return \Illuminate\Http\Response
     */
    public function show(Allhmcomment $allhmcomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allhmcomment  $allhmcomment
     * @return \Illuminate\Http\Response
     */
    public function edit(Allhmcomment $allhmcomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allhmcomment  $allhmcomment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allhmcomment $allhmcomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allhmcomment  $allhmcomment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allhmcomment $allhmcomment)
    {
        //
    }
}
