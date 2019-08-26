<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;
 use Redirect;

class gallerycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img=new gallery;
        $images=$img->all();
        return view('gallery',compact('images'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
   
        $img=new gallery;
        $images=$img->all();
        return view('creategallery',compact('images'));
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

        $gallery=new gallery;
        $gallery->iname=$iname;
        $gallery->heading=$request->heading;
    $gallery->description=$request->description;
   

     $gallery->save();
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
     $image=new gallery;
     $img=   $image->find($id);
        $img->delete();
        return Redirect()->back();
    }
}
