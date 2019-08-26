 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

<script  type="text/JavaScript" src="{{asset('js/ajax.js')}}"></script> 
 </head>
 <body>
 <form method="post">
 	@csrf
 	Name:<input type="text" name="Name" id="name">
 	address:<input type="text" name="address" id="address">
 	<input type="submit" name="submit" onclick="add();">
 </form>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

 </body>
 </html>