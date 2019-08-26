@extends('website')
@section('content')

<div  class="container">
 	
<div style="background-color: white; min-height:444px; margin-top: 15px;border-radius: 5px;"> 

	<h2 style="color:white; text-align: center;">{{$events->heading}}</h2>
	<a href="{{asset('/storage/upload/'.$events->iname)}}" style="float: left;margin-right: 30px">
       <img src="{{asset('/storage/upload/'.$events->iname)}}" height="333px"; width="333px">
    </a>
<p> {{$events->description}} </p>
</div>
<form><input type="text" name="name"><br><input type="text" name="name"></form>
</div>

@endsection