<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Scratchcard_detail;
use Illuminate\Http\Request;

class ScratchcardDetailController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scratchcard_detail  $scratchcard_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Scratchcard_detail $scratchcard_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scratchcard_detail  $scratchcard_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Scratchcard_detail $scratchcard_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scratchcard_detail  $scratchcard_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scratchcard_detail $scratchcard_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scratchcard_detail  $scratchcard_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scratchcard_detail $scratchcard_detail)
    {
        //
    }
}
