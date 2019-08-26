 @extends('whole')
@section('content') 
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/class">Class</a>
          </li>
          <li class="breadcrumb-item active">ClassOverview</li>
        </ol>
@if (\Session::has('msg'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
<button class="btn btn-primary" style="margin-left: 300px;"><a href="/student/create" style="color:black">Add new student</a></button>

<table class="table table-striped">
    <thead>
      <tr>
       <th></th>
        <th>StudentName</th>
        <th>address</th>
        <th>phone</th>
        <th>edit</th>
        <th>delete</th>
        
       </tr>
    </thead>
    <tbody>
 @foreach($student as $st)

<tr>
	<td style="text-align: right;">

		<form action="#" method="post">
    @csrf
 
    </form><img src="{{asset('storage/upload/'.$st->iname)}}" style="height: 30px;width: 30px;">

	</td>

	<td><a href="/student/{{$st->id}}">{{$st->name}}</a></td>

	<td>{{$st->address}}</td>

	<td>{{$st->phone}}</td>

	<td> 

		<a href=""><button style="width: 50%;height: 100%;" class="btn btn-success">edit</button></a>

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
 
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


 @endsection