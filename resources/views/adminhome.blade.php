@extends('whole')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
           <!-- /#wrapper -->
 <h3 style="background-color: lightblue;text-align: center;">Select img for Slider in home </h3>
  <form   action="/slider" method="post" enctype="multipart/form-data" class="form">
  {{csrf_field()}}
<table class="table" style="background-color: lightblue">
  <tr><td>Select an Image :</td><td><input type="file" name="file"  required></td></tr>
 <tr><td>Heading:</td><td><input type="text" name="heading" required></td></tr>
    <tr><td>Description:</td><td> <textarea name="description" required></textarea></td></tr>
 
 
<tr><td> </td><td><input type="submit" name="upload" id="upload"></td></tr>
</table>
 
  
 
  
 

 
 
</form>

</div>

<h2 style="background-color: lightblue; text-align: center;">Images of Slider</h2>



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
    <form class="ee" action="/slider/{{$image->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button   type="submit" style="border:0px;background:none;">    <i class="fa fa-trash" style="color: red" ></i></button>   

    </form>
  </td>
</tr>


@endforeach
    </tbody>
  </table>
  <h3 style="background-color: lightblue;text-align: center;">News And Events </h3>
  <form action="/events" method="post" enctype="multipart/form-data" class="form">
  {{csrf_field()}}
<table class="table" style="background-color: lightblue">
  <tr><td>Select an Image :</td><td><input type="file" name="file" required></td></tr>
 <tr><td>Heading:</td><td><input type="text" name="heading" required></td></tr>
    <tr><td>Description:</td><td style="color: white"> <pre><textarea name="description" required></textarea></pre></td></tr>
 
 
<tr><td> </td><td><input type="submit" name="submit"></td></tr>
</table></form>
 
  
 




 <h2 style="background-color: lightblue; text-align: center;">News And Events</h2>



<table class="table table-stripted table-responsive"  id="table2" style="white-space: nowrap;width: 100%;position: relative; overflow: auto">
    <thead>
      <tr>
         <th>Image</th>
         <th>Heading</th>
     
     <th>edit</th>    

        
       </tr>
    </thead>
    <tbody>
 @foreach($events as $event)

<tr>
  <td >

    <img src="{{asset('storage/upload/'.$event->iname)}}" style="height: 30px;width: 30px;">
  </td>
  <td>{{$event->heading}}</td>
   
  <td> 
 
 <form class="ee" action="/gallery/{{$event->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button type="submit" style="border:0px;background:none;">    <i class="fa fa-eye" style="color: green" ></i></button>   

    </form>
     <form class="ee" action="/gallery/{{$event->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button  type="submit" style="border:0px;background:none;">    <i class="fa fa-edit" style="color: blue" ></i></button>   

    </form>
    <form class="ee" action="/staff/{{$event->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button   type="submit" style="border:0px;background:none;">    <i class="fa fa-trash" style="color: red" ></i></button>   

    </form>
  </td>
</tr>


@endforeach
    </tbody>
  </table>
   
 @endsection