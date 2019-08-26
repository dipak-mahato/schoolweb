@extends('website')
@section('home')
  <link rel="stylesheet" type="text/css" href="{{asset('/css/download.css')}}">

@endsection
@section('content')
<div style="background-color: white;margin-top: 55px;border-radius: 25px;min-height: 600px;padding: 60px;">

<div class="row"><div class="col-md-2">
 <ol id="list" style=" list-style-type: lower-alpha;">
 	
<a class="sem" href="#"><li>1st Sem</li></a>
<a class="sem" href="#"><li>2nd Sem</li></a>
<a class="sem" href="#"><li>3nd Sem</li></a>
<a class="sem" href="#"><li>4th Sem</li></a>
<a class="sem" href="#"><li>5th Sem</li></a>
<a class="sem" href="#"><li>6th Sem</li></a>
<a id="7th" href="#"><li>7th Sem</li></a>
<a  class="sem" href="#"><li>8th Sem</li></a>

 </ol></div><div class="col-md-10" id="display" style="display: none;background-color: lightblue;">
 	<h4>Notes of 7th semester</h4>
 	<ul>

 		<li><a href="7th.pdf">Advance DBMS</a></li>
 		<li><a href="7th.pdf">Java</a></li>
 		<li><a href="7th.pdf">Internet Technology</a></li>
 		<li><a href="7th.pdf">project Management System</a></li>
 		
 	





 	</ul>
 	
 </div>
 </div>
 	</div>
<script type="text/javascript">
$("#7th").click(function(){
  $("#display").show();
});
$(".sem").click(function(){
  $("#display").hide();
});

</script>


 @endsection