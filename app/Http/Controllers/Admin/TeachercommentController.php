<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Teachercomment;
use Illuminate\Http\Request;

class TeachercommentController extends Controller
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
            'comment_id'=>'required',
            'acaclass'=>'required',
            'added_by'=>''
          ]);
          return Teachercomment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teachercomment  $teachercomment
     * @return \Illuminate\Http\Response
     */
    public function show(Teachercomment $teachercomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teachercomment  $teachercomment
     * @return \Illuminate\Http\Response
     */
    public function edit(Teachercomment $teachercomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teachercomment  $teachercomment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teachercomment $teachercomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teachercomment  $teachercomment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teachercomment $teachercomment)
    {
        //
    }
}
