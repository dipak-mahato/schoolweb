@extends('whole')
@section('content')

  <ol class="breadcrumb">
         
          <li class="breadcrumb-item active">Download</li>
        </ol>
<div class="container"><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add To Download</button></div>

 

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="/download" method="post" enctype="multipart/form-data" class="form">
	{{csrf_field()}}
  <div class="form-group">
    <label for="file">Select File:</label>
    <input type="file"  id="file" name="file">
  </div>
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="title" class="form-control" id="title" name="title">
  </div>
      <div class="modal-footer">
  <button type="submit" class="btn btn-primary">Submit</button>

       </div>
 
</form> 
      </div>

      <!-- Modal footer -->
 
    </div>
  </div>
</div>

<div class="jumbotron" >

	<table class="table">
  
 
<h2 style="background-color: lightblue; text-align: center;">SDownloads</h2>
 
 
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
 @foreach($downloads as $download)

<tr>
  
  <td>{{$download->title}}</td>
   
  <td> 
 

<a href="{{asset('storage/upload/'.$download->iname)}}" target="_blank"><button type="submit" style="border:0px;background:none;">    <i class="fa fa-eye" style="color: green" ></i></button></a>   

     
     <form class="ee" action="/download/{{$download->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button  type="submit" style="border:0px;background:none;">    <i class="fa fa-edit" style="color: blue" ></i></button>   

    </form>
    <form class="ee" action="/download/{{$download->id}}" method="post">@csrf
    {{method_field('DELETE')}} 
 

<button   type="submit" style="border:0px;background:none;">    <i class="fa fa-trash" style="color: red" ></i></button>   

    </form>
  </td>
</tr>


@endforeach
    </tbody>
  </table>


 
</div>

@endsection