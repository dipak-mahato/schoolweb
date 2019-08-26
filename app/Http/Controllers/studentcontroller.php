<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\standard;
use App\student;
use Redirect;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $student=student::all();
      


     return view('student.st',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $standard=new standard;
        $students=$standard->all();
        return view('student.createstudent',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
if($request->hasFile('file')){
    $iname=$request->file->getClientOriginalName();
    $request->file->storeAs('public/upload',$iname);

        $student=new student;
        $student->iname=$iname;
        $student->name=$request->name;
    $student->address=$request->address;
    $student->pname=$request->pname;
    $student->phone=$request->phone;
    $student->c_id=$request->class;
     

     $student->save();
      return Redirect::back()->with('msg', 'Student Created Successfully with name :'.$request->name);
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
        $student=student::find($id);
         return view("student.profile",compact('student'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=student::where('id',$id)->firstOrFail();
        $post->delete();
      return Redirect::back()->with('msg', 'deleted');
    }
}
