	@extends('website')
	@section('home')
	<!---  <link rel="stylesheet" type="text/css" href="{{asset('/css/gallery.css')}}">  -->  

	@endsection
	@section('content')
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $( window ).on( "load", function() {
        alert('DIPAK');
    });
});
</script>
	  <marquee width="100%" direction="left" height="25px" style="background-color:rgb(6, 33, 63); color :white; "onMouseOver="this.stop()" onMouseOut="this.start()" >
	<a href="#">
      Admission open
	</a>&ensp;&ensp;&ensp;&ensp;&ensp;

		<a href="#">
      Admission open
	</a>&ensp;&ensp;&ensp;&ensp;&ensp;	<a href="#">
      Admission open
	</a>
 	</marquee>
	<div class="demo2" onload="alert('dipak')"  >
	  <div class="demo3" onload="alert('dipak')">
	  @foreach($images as $image) 
	 <a href="{{asset('storage/upload/'.$image->iname)}}" target="_blank"><div class="gallery" style="background:url({{asset('storage/upload/'.$image->iname)}}) ; background-repeat: no-repeat  ; background-size: cover; position: relative;"><div style="background-color: lightblue;position:absolute;bottom: 0px;width:100%;text-align: center">{{$image->heading}}</div></div></a> 
	@endforeach


	</div>

	</div>

	@endsection