<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Resumption_close;
use Illuminate\Http\Request;

class ResumptionCloseController extends Controller
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
     * @param  \App\Models\Resumption_close  $resumption_close
     * @return \Illuminate\Http\Response
     */
    public function show(Resumption_close $resumption_close)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resumption_close  $resumption_close
     * @return \Illuminate\Http\Response
     */
    public function edit(Resumption_close $resumption_close)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resumption_close  $resumption_close
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resumption_close $resumption_close)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resumption_close  $resumption_close
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resumption_close $resumption_close)
    {
        //
    }
}
