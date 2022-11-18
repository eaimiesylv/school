<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Student_biodata;
use Illuminate\Http\Request;

class StudentBiodataController extends Controller
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
            'nationality'=>'required',
            'state'=>'required',
            'lga'=>'required',
            'address'=>'required',
			  'dob'=>'required',
            'challenge'=>'required',
            'pfullname'=>'required',
            'fathernumber'=>'required',
			  'mothernumber'=>'required',
            'poccupation'=>'required',
            'lastschool'=>'required',
            'departurereason'=>'required',
			'user_id'=>'required'
    
    
          ]);
            return Student_biodata::firstorcreate($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student_biodata  $student_biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Student_biodata $student_biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student_biodata  $student_biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Student_biodata $student_biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student_biodata  $student_biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student_biodata $student_biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student_biodata  $student_biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student_biodata $student_biodata)
    {
        //
    }
}
