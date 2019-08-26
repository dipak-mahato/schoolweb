<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
use Redirect;

class eventscontroller extends Controller
{
      public function show($id)
    {
        $event=new event;
        $events=$event->find($id);
        return view('showevents',compact('events'));
    }

       public function store(Request $request)
    {
         if($request->hasFile('file')){
    $iname=$request->file->getClientOriginalName();
    $request->file->storeAs('public/upload',$iname);

        $gallery=new event;
        $gallery->iname=$iname;
        $gallery->heading=$request->heading;
    $gallery->description=$request->description;
   

     $gallery->save();
      return Redirect::back()->with('msg', 'Event Created Successfully');
    }
    }
}
