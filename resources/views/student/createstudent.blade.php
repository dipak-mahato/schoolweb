  @extends('whole')
  @section('content')
   <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/class">Class</a></li>
         <li class="breadcrumb-item"><a href="/student">All Students</a></li>
         <li class="breadcrumb-item active">Add New Student</li>
         
          
        </ol>
 <h2 style="background-color: blue; color:white;text-align: center">Add students</h2>


<div class="row">
<div class="col-md-3"><a class="btn btn-primary pull-right" href="/student">View All Student</a>
</div>

	<div class="col-md-6">
@if (\Session::has('msg'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('msg') !!}</li>
        </ul>
    </div>
@endif
    <form action="/student" method="post" enctype="multipart/form-data" class="form">
	{{csrf_field()}}
<table class="table" style="background-color: lightblue">
	<tr><td>Select an Image :</td><td><input type="file" name="file" required="required"></td></tr>
    <tr><td>Full name :</td><td> <input type="text" name="name" placeholder="name" required></td></tr>
<tr><td>Permanaent Address :</td><td><input type="text" name="address" placeholder="address" required></td></tr>
<tr><td>Parent Name :</td><td><input type="text" name="pname" placeholder="parentname" required></td></tr>
<tr><td>Phone Number</td><td><input type="integer" name="phone" required></td></tr>
<tr><td>Select Class</td><td><select name="class">
@foreach($students as $student)

	<option value="{{$student->c_id}}">{{$student->c_name}}
</option>
@endforeach

</select></td></tr>
<tr><td>Select an Image</td><td><input type="submit" name=""></td></tr>
</table>
 
	

 
</form>
 
</div>

<div class="col-md-3"></div>
</div>
@endsection
  