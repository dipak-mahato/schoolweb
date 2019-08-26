<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\event;
class welcomecontroller extends Controller
{
 public  function index()
 { 
 $events=event::orderBy('created_at','desc')->paginate(5);
 $slider=new slider;
 $sliders=$slider->all();
return view('welcome',compact('sliders','events'));

  }
}
