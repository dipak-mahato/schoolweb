  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/costume.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  @section('home')
  @show
  
  </head>


  <body style="width: 98% !Important;">


  <div class="wrapper1"> 

  	<div class="row">
  		<div class="col-md-4"><p style="text-align: center;color: yellow;" class="p">Tu afficilated</p><h2 class="h">Birendra Multiple Campus</h2>
         <h6 style="text-align: center;">Bharatpur-10, Chitwan</h6>
  		</div>
  		<div class="col-md-4"></div>
  		<div class="col-md-4"><ul style="list-style: none;"><li><i class='fas fa-phone'></i>&ensp;:&ensp;0564980237</li><li><i class='fas fa-phone'></i>&ensp;:&ensp;056998879</li><li><i class='fas fa-envelope'></i>&ensp;:&ensp;bmc30@gmail.com</li></ul></div>

  	</div>

  </div>
   <nav id="second" class="navbar navbar-expand-lg navbar-dark">
    <!-- Brand -->

     <a class="navbar-brand" href="#">

      <img src="logo.png" alt="logo" style="width:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!-- Links -->
    <ul class="navbar-nav">

      <li class="nav-item home" >
        <a class="nav-link "    href="/">Home</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Facilities</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">Result</a>
      </li>
          <li class="nav-item gal">
        <a class="nav-link" href="/gallery" onclick="title();">Gallery</a>
      </li>
          <li class="nav-item download">
        <a class="nav-link" href="/download">Download</a>
      </li>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>     <!-- Dropdown -->
             <li class="nav-item">
        <a class="nav-link" href="#">Acadimic Programs</a>
      </li> 
              <li class="nav-item about">
        <a class="nav-link" href="/aboutus">About Us</a>
      </li> 
    </ul>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <form class="form-inline form-left" action="/action_page.php">
      <input  type="text" placeholder="Search" style="border-radius: 10px; height: 25px;">
     </form></li>
  </ul>

  </div>
    
  </nav>
   

    <div style=" margin-right: 8%;margin-left: 8%; width:83%; position: relative; min-height: 700px; ">
   @section('content') 
   @show
   </div>
   <div class="wrapper2">
        <div class="foot">
  	         <div class="row">
  		             <div class="col-md-4">
                       <h2>My School</h2> 
                    </div>
                    <div class="col-md-4"> 
                       <table> 
                        <tr>
                          <th>Important Links</th>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">Results</a>
                          </td>
                        </tr>
                        <tr>
                        <td>
                          <a href="/gallery">Photo Gallery</a>
                        </td>
                      </tr>
                      <tr>
                      <td>
                        <a href="/download">Downloads</a>
                      </td>
                    </tr>
                  </table>
                </div>
                 <div class="col-md-4">
                  <table>
                    <tr>
                      <th>Contact Us</th>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa fa-angle-double-right"></i>
                         Address:Bharatpur-10, Chitwan
                       </td>
                     </tr>
                     <tr>
                      <td><i class="fa fa-angle-double-right">
                        
                      </i>email: bmc30@gmail.com
                    </td>
                  </tr>
                  <tr>
                    <td>
                     <i class="fa fa-angle-double-right">
                 
               </i>Phone:9845555555</td>
                      </tr>
                </table>
         </div>
  	</div>


  </div>
  </div>
     <div style="background-color: rgb(5, 37, 72); margin-top: 140px;text-align:center; color: white">Copyright (c) Reserved by: Birendra Multiple Campus, Bharatpur, Chitwan
     </div> 
  </body>
  </html>