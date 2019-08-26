<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\download;
use Redirect;
 
class downloadcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads=download::all();
        return view('download',compact('downloads'));
    }
public function download()
    {
        $downloads=download::all();
        return view('admin.admindownload',compact('downloads'));
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
         if($request->hasFile('file')){
    $iname=$request->file->getClientOriginalName();
    $request->file->storeAs('public/upload',$iname);

        $download=new download;
        $download->iname=$iname;
        $download->title=$request->title;
     
     

     $download->save();
      return Redirect::back()->with('msg', 'Student Created Successfully');
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
        //
    }
}
