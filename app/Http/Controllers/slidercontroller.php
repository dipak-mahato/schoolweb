<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use Redirect;
use App\event;
class slidercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=new event;
        $events=$event->all();
        $img=new slider;
        $images=$img->all();
        return view('adminhome', compact('images','events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create ()
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

        $gallery=new slider;
        $gallery->iname=$iname;
        $gallery->heading=$request->heading;
    $gallery->description=$request->description;
   

     $gallery->save();
      return Redirect::back()->with('msg', '  Created Successfully');
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
    $post=slider::where('id',$id)->firstOrFail();
        $post->delete();
      return Redirect::back()->with('msg', 'deleted');
    }

   public function delgallery($id)
    {
       
    }

}
