<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Teacherdetail;
use Illuminate\Http\Request;

class TeacherdetailController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacherdetail  $teacherdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Teacherdetail $teacherdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacherdetail  $teacherdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacherdetail $teacherdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacherdetail  $teacherdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacherdetail $teacherdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacherdetail  $teacherdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacherdetail $teacherdetail)
    {
        //
    }
}
