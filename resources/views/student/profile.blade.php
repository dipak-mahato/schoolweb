<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	table,td,tr,h3,h4{

		margin:0px;
		padding: 0px;
	}
	td,td{
		width:50%;
	}

</style>
</head>
<body>
 <div class="container" style="border: 1px solid green; margin-top: 40px;">
 
<h2 style="text-align: center;">Profile</h2>
 

<div class="row">
	
	<div class="col-md-5"><img src="{{asset('storage/upload/'.$student->iname)}}" style="height: 230px;width: 230px;margin-top: 10px; margin-left: 10px"></div>
	<div class="col-md-7"> <table class="table">
 	 <tr><td><h3>Name:</h3></td><td><h4>{{$student->name}}</h4></td></tr>
<tr><td><h3>Parent Name:</h3></td><td><h4>{{$student->pname}}</h4></td></tr>
<tr><td><h3>Adress:</h3></td><td><h4>{{$student->address}}</h4></td></tr>
<tr><td><h3>Class:</h3></td><td><h4>{{$student->name}}</h4></td></tr>
 	<tr> <td><h3>Phone:</h3></td><td><h4>{{$student->phone}}</h4></td></tr>
 	 <tr><td><h3>Email:</h3></td><td><h4>{{$student->name}}</h4></td>
 	 </tr>
 </table></div>

</div>

 
<div style="color:white; background-color: blue; margin-bottom: 20px ;text-align: center;"> <h2>Contact Informatioin</h2></div>
<div class="jumbotron">
<table style="margin-left: 50px" class="table">
	
<tr><td><h3>Residence Address:</h3></td><h4></h4><td></td></tr>
<tr><td><h3>Nationality:</h3></td><h4></h4><td></td></tr>
<tr><td><h3>Phone:</h3></td><h4></h4><td></td></tr>
<tr><td><h3>Email:</h3></td><h4></h4><td></td></tr>

</table>
 </div></div>
</body>
</html>