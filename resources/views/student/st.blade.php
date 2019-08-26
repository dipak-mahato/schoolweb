@extends('whole')
@section('content') <div style="height: 100%;width: 100%;overflow: auto">
 <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/class">Class</a>
          </li>
          <li class="breadcrumb-item active">All Students</li>
        </ol>
@if (\Session::has('msg'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
<button class="btn btn-primary" style="position: absolute;right: 0px;"><a href="/student/create" style="color:black">Add new student</a></button></br></br>

<table class="table table-striped">
    <thead>
      <tr>
       <th></th>
        <th>StudentName</th>
        <th>address</th>
        <th>phone</th>
        <th>Class</th>
        <th>edit</th>
        <th>delete</th>

        
       </tr>
    </thead>
    <tbody>
 @foreach($student as $st)

<tr>
	<td style="text-align: right;">

		<img src="{{asset('storage/upload/'.$st->iname)}}" style="height: 30px;width: 30px;">

	</td>

	<td>{{$st->name}}</td>

	<td>{{$st->address}}</td>

	<td>{{$st->phone}}</td>
	<td> <?php  $std=$st->standard;
	echo $std->c_name;
       	  
       	     ?></td>

	<td> 

		<a href=""><button   class="btn btn-success">edit</button></a>

	</td>

	 <td>

	 	<form action="/student/{{$st->id}}" method="post">
           
	 	@csrf
{{method_field('DELETE')}}
	 		
     <button type="submit" class="btn btn-danger">delete</button>
	 	</form> 

	 </td>

</tr>


@endforeach
    </tbody>
  </table>
 
 </div>
 
 @endsection