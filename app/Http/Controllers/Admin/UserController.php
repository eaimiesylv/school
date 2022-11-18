<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Response;
use DateTime;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'all user';
    }

    /**serp\Response
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

        $validator = Validator::make($request->all(), [
        'surname'=>['required', 'string', 'max:255', 'min:2'],
        'middlename'=>['required', 'string', 'max:255', 'min:2'],,
        'firstname'=>['required', 'string', 'max:255', 'min:2'],
		'role'=>'required',
        'sex'=>'required',
        'regno'=>'',
        'status'=>'required',
		'uuid'=>'',
		'passport'=>['required', 'string', 'min:8', 'confirmed'],
		'session_id'=>'',
		'clas_id'=>'',
        'email'=>'required|unqiue:users',
        'password'=>'required'
          ]);
          $uuid=Str::uuid();

          //$dob=$request->dob;
          //$dob=str_replace("/","-",$dob);
        //  $dob=strtotime($dob);

          $alluser=array_merge($request->all(),array('uuid'=>$uuid),array('dob'=>$dob));

          if ($validator->fails()) {
              $errorString = implode(",",$validator->messages()->all());
              return Response::json($errorString);
          }
          try {
               $user=User::create($alluser);
                 return Response::json('201');
            } catch (\Illuminate\Database\QueryException $e) {
              //return $dob;
              return Response::json($e->errorInfo);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $user=User::find($id);
          $request->validate([
          'surname'=>'required',
          'middlename'=>'required',
          'firstname'=>'required',
          'sex'=>'required',
          'username'=>'required',
          'regno'=>'required',
          'nationality'=>'required',
          'state'=>'required',
          'lga'=>'required',
          'address'=>'required',
          'dob'=>'required',
          'email'=>'required',
          'password'=>'required'

        ]);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search($username)
    {

      $username=User::where('username',$username)->get();
      $find=count($username);
      return Response::json($find);
    }
}
