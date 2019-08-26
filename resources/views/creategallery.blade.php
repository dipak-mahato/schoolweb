
   @extends('whole')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Gallery</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
           <!-- /#wrapper -->
 <h3 style="background-color: lightblue;text-align: center;">Add on Gallery</h3>
  <form action="/gallery/store" method="post" enctype="multipart/form-data" class="form">
  {{csrf_field()}}
<table class="table" style="background-color: lightblue">
  <tr><td>Select an Image :</td><td><input type="file" name="file"></td></tr>
 <tr><td>Heading:</td><td><input type="text" name="heading"></td></tr>
    <tr><td>Description:</td><td> <textarea name="description"></textarea></td></tr>
 
 
<tr><td>Select an Image</td><td><input type="submit" name="submit"></td></tr>
</table>
 
  
<table class="table">
  
 
<h2 style="background-color: lightblue; text-align: center;">School Gallery</h2>
 
 
</form>

</div>




<table class="table table-stripted table-responsive"  id="table2" style="white-space: nowrap;width: 100%;position: relative; overflow: auto">
    <thead>
      <tr>
         <th>Image</th>
         <th>Heading</th>
     
     <th>edit</th>    

        
       </tr>
    </thead>
    <tbody>
 @foreach($images as $image)

<tr>
  <td >

    <img src="{{asset('storage/upload/'.$image->iname)}}" style="height: 30px;width: 30px;">
  </td>
  <td>{{$image->heading}}</td>
   
  <td> 
 
 <form class="ee" action="/gallery/{{$image->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button type="submit" style="border:0px;background:none;">    <i class="fa fa-eye" style="color: green" ></i></button>   

    </form>
     <form class="ee" action="/gallery/{{$image->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button  type="submit" style="border:0px;background:none;">    <i class="fa fa-edit" style="color: blue" ></i></button>   

    </form>
    <form class="ee" action="/gallery/{{$image->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button   type="submit" style="border:0px;background:none;">    <i class="fa fa-trash" style="color: red" ></i></button>   

    </form>
  </td>
</tr>


@endforeach
    </tbody>
  </table>
 @endsection