@extends('whole')
@section('content') 
 
  <ol class="breadcrumb">
         <li class="breadcrumb-item active">Class</li>
          
        </ol>
	  
@if (\Session::has('msg'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif 
<form id="form" action="/class" method="post" style="text-align: center;" class="form">
	{{csrf_field()}}
Create Class:	<input type="text" name="c_name" placeholder="classname">
	<input class="btn btn-success" type="submit" name="submit" value="create">


</form>
<a style="right: 0px; position: absolute;" class="btn btn-primary" href="/student">All students</a>
 <table class="table table-striped">
    <thead>
      <tr>
        <th style="text-align: center;"> Class </th>
        <th style="text-align: center;">Student</th>
       </tr>
    </thead>
    <tbody>
@foreach($standards as $standard)
       <tr><td style="text-align: center;"><a href="/class/{{$standard->c_id}}"><div style="height: 100%; width:100%;"> {{$standard->c_name}}</div></a></td><td style="text-align: center;">


 <a href="/class/{{$standard->c_id}}" > <button type="button" class="btn btn-primary ml-auto">Students<span class="badge">
       	   <?php  $student=$standard->student;
       	   $sd=count($student); 
           echo $sd;
       	     ?></span></button> </a>



       </td><td><a href="#"><button class="btn-primary">edit</button></a>
       <form action="/class/{{$standard->c_id}}" method="post">
         @csrf
         {{method_field('DELETE')}}

       	<button type="submit" class="btn-danger">delete</button></form></td></tr>
 @endforeach

    </tbody>
  </table>
 
 @endsection