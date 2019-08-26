  @extends('website')
  @section('home')
    <link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">

  @endsection
  @section('content')

  <div id="demo" style="padding: 0px;margin:0px; margin-top: 30px" class="carousel slide" data-ride="carousel">
    <div class="row" style="background-color: white"><div class="col-md-8">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="bmc1.jpeg" alt="bmc1.jpeg" width="100%" height="500px">
        <div class="carousel-caption">
          <h3>Birendra Multiple Campus</h3>
         </div>   
      </div>
      @foreach($sliders as $slider)
      <div class="carousel-item">
        <img src="{{asset('/storage/upload/'.$slider->iname)}}" alt="Chicago" width="100%" height="500px">
        <div class="carousel-caption">
           
          <h3>{{$slider->heading}}</h3>
        </div>   
      </div>@endforeach
      
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
    
  </div>
  <div class="col-md-4" style="border:1px solid #d1e3e9; padding: 10px; background-color: #d0d7ea;">
      <h4 style="text-align: center; background-color: #6780bc; border-radius: 15px;">About Us</h4><p style="max-height: 430px;text-align: justify; text-justify: inter-word; overflow: auto;padding-left: 11px;margin-right:  22px; font-family: 'Aclonica';font-size: 14px;"> We have the most beautiful, interesting, interested, and talented children from all over the world," Haws told Education World. They are truly here to learn, grow, and experience life in the Washington D.C., United States of America."

  Every adult and child is enriched by just being part of our school," added Haws. Every child and every teacher has the special privilege of meeting, talking to, learning with, and playing with children and families from places in the world most only see in an atlas or hear on the news.

  We are an international school that lives and learns together in our own world of Oakridge like the rest of the world should live -- with joy, understanding, and delight in what each of us offers each other."

  Principal Karen Mink expresses similar sentiments about the students of the Allen School in Aurora, Illinois. The schools demographic is 59 percent Hispanic, 22 percent Black, 16 percent White, and smaller percentages of Asians and Eastern Europeans.

  Our school is a perfect example of how different people can live together, work together, and learn together," said Mink. The Allen School community respects each other, supports each other, and helps each other to succeed."</p>
    </div>
  </div>
  </div>
  <div class="demo2" >  <div class="row">
      <div class="col-md-7" style="border-right: 1px solid lightblue;overflow-wrap: break-word;"><h3 style="text-align: center;background-color: #6780bc;border-radius: 25px;margin-top: 15px;">Latest News and Events</h3> 
   
     
    <table class="tt1">
      @foreach($events as $event)
      <tr><td class="ttt1" style="width: 66px !important;"><img src="{{asset('/storage/upload/'.$event->iname)}}" height="77px" width="77px"></td><td><h3 style="margin-left: 22px">{{$event->heading}}</h3><p style="padding-left: 22px; font-size: small;font-style:italic;">created at &ensp;:&ensp;{{$event->created_at->format('Y-m-d')}}</p><p class="block-with-text">{{$event->description}}</p><div style="margin-left: 22px; width: 100%;"><a href="/events/{{$event->id}}" >Read More</a></div></td></tr>
    @endforeach
  <tr ><td></td><td>{{$events->links()}}</td></tr>
    </table>
   

      </div>
      <div class="col-md-5" style=" border:1px solid lightblue; overflow: hidden;margin:0px;padding:0px;"><div class="container mt-3">
    <h2 style="text-align: center;background-color:#6780bc;border-radius: 20px;margin:0px; ">Campus Chief</h2> 
    <!-- Media top -->
     <p style="max-height: 733px;overflow: auto;border:1px solid #efe3e3; padding:5px; font-family: 'Aclonica';font-size: 14px;"><img src="chief.jpg" height="111px" width="111px" style="float: left; margin-right: 20px;border-radius:15px">Great schools cannot exist without great groups of kids, and the diversity of those kids is what many principals say makes their schools so great.

  Lolli Haws is principal at Oakridge Elementary School in Arlington, Virginia. Diversity is a given in a school whose location is so close to Washington, D.C. Seventy percent of Oakridges 460 students are from countries other than the United States, and 90 percent were born outside Virginia. We have the most beautiful, interesting, interested, and talented children from all over the world," Haws told Education World. They are truly here to learn, grow, and experience life in the Washington D.C., United States of America."

  Every adult and child is enriched by just being part of our school," added Haws. Every child and every teacher has the special privilege of meeting, talking to, learning with, and playing with children and families from places in the world most only see in an atlas or hear on the news.

  We are an international school that lives and learns together in our own world of Oakridge like the rest of the world should live -- with joy, understanding, and delight in what each of us offers each other."

  Principal Karen Mink expresses similar sentiments about the students of the Allen School in Aurora, Illinois. The schools demographic is 59 percent Hispanic, 22 percent Black, 16 percent White, and smaller percentages of Asians and Eastern Europeans.

  Our school is a perfect example of how different people can live together, work together, and learn together," said Mink. The Allen School community respects each other, supports each other, and helps each other to succeed."</p> 
  </div>



  </div>
    </div>
  </div>
   
  <div class="demo2">
    <h3 style="color: #6687a7;text-align: center;margin-top: 20px;margin-bottom: 0px;">Message from EX Students</h3>
    <div class="row" id="last"><div class="col-md-6"><div class="new"><p class="last1"><img src="ddd2.jpg" height="111px" width="111px" style="float: left;margin-right: 7px ;border-radius: 6px; "><h4>Damoder pandey</h4><br><h6>tu topper 2055</h6> </p>
  <p class="last2">err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af asdgahjg asdkjg asgkj asglkj aglajs ga glka gagsgfj agal galsg lajg ag ahsklgjh kahsg ahg kah gh af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf </p>
    </div></div>
  <div class="col-md-6"><div class="new"><p class="last1"><img src="ddd2.jpg" height="111px" width="111px" style="float: left;margin-right: 7px ;border-radius: 6px; "><h4>Damoder pandey</h4><br><h6>tu topper 2056 (Bsc.csit)</h6> </p>
  <p class="last2">err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af asdgahjg asdkjg asgkj asglkj aglajs ga glka gagsgfj agal galsg lajg ag ahsklgjh kahsg ahg kah gh af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf </p>
    </div></div>
  <div class="col-md-6"><div class="new"><p class="last  1"><img src="ddd2.jpg" height="111px" width="111px" style="float: left;margin-right: 7px ;border-radius: 6px; "><h4>Damoder pandey</h4><br><h6>tu topper 2055</h6> </p>
  <p class="last2">err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af asdgahjg asdkjg asgkj asglkj aglajs ga glka gagsgfj agal galsg lajg ag ahsklgjh kahsg ahg kah gh af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf </p>
    </div></div>
  <div class="col-md-6"><div class="new"><p class="last1"><img src="ddd2.jpg" height="111px" width="111px" style="float: left;margin-right: 7px ;border-radius: 6px; "><h4>Damoder pandey</h4><br><h6>tu topper 2055</h6> </p>
  <p class="last2">err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af asdgahjg asdkjg asgkj asglkj aglajs ga glka gagsgfj agal galsg lajg ag ahsklgjh kahsg ahg kah gh af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf ag ag ag a ag ag a gaewe t agre  at erwreg as traewe eraw  err tewe asg dwea tas fasfd asdf saf saf asf asfd asef as asff asf asf asf asf assf af arrf af af af af af af af af af af af  aere af assfg ga a ag ag ag ag ag ag ag a ga agf </p>
    </div></div>
   
     </div>
  </div>
  @endsection