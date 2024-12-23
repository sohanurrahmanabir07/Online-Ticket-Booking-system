<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ticket</title>
    <link href="{{asset('/csss/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/csss/global.css')}}" rel="stylesheet">
	<link href="{{asset('/csss/index.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('/csss/font-awesome.min.css')}}" />
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="{{asset('/csss/animate.css')}}" rel="stylesheet" type="text/csss" media="all">
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body>
<section id="header_main" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="col-sm-6 space_all">
     <div class="header_main_1">
       <ul>
	        <li><i class="fa fa-phone"></i><a href="#">01851527085</a></li>
			<li><i class="fa fa-envelope"></i><a href="#">ticketbooking@gmail.com</a></li>
	   </ul>
     </div>
    </div>
    <div class="col-sm-6 space_all">
     <div class="header_main_3">
      <ul>
           <li><a href="#"><i class="fa fa-facbook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		   <li><a href="#"><i class="fa fa-youtube"></i></a></li>
		   <li><a href="#"><i class="fa fa-google"></i></a></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="header" class="cd-secondary-nav">
 <div class="container">
  <div class="row">
   <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="index.html"><span class="well_2">ONLINE TICKET</span>BOOKING SYSTEM <span class="well_1"><i class="fa fa-dribbble"></i></span></a>
    </div>
    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home" class="hvr-underline-from-center">HOME</a></li>
		<li><a href="{{route('search_flight')}}" class="hvr-underline-from-center">AIR</a></li>
		{{-- <li><a href="/train" class="hvr-underline-from-center">TRAIN</a></li> --}}
		<li><a href="/bus" class="hvr-underline-from-center">BUS</a></li>
		<li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
        <li><a href="{{route('logout')}}" class="hvr-underline-from-center">LOGOUT</a></li>



      </ul>
    </div>
</nav>
  </div>
 </div>
</section>
<section id="center">
  <div class="center">
   <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <div class="overlay"></div>
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
    <li data-target="#bs-carousel" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item slides">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Welcome <br> To <br>  Online Ticket System <br> </h1>

        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>Efficient Rail Network</h1>
			 <h3>Online Train Ticket Purchase</h3>
			 <h4><a href="#">Time-Saving Convenience</a></h4>
        </hgroup>
      </div>
    </div>
    <div class="item slides active">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>Efficient Bus Network</h1>
			 <h3>Online Bus Ticket Purchase</h3>
			 <h4><a href="#">Time-Saving Convenience</a></h4>
        </hgroup>
      </div>
    </div>
  </div>
  </div>
  </div>
 </section>
<section id="middle">
 <div class="container">
  <div class="row">
   <div class="middle_1">
    <h2>10 Million+</h2>
	<hr class="hr_1">
	<h4>Happy USers</h4>
   </div>
   <div class="middle_2 clearfix">
    <div class="col-sm-3">
	 <div class="middle_3">
	  <h3><a href="#">250 Million+</a></h3>
	  <hr class="hr_2">
	  <h4>Ticket Sold</h4>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="middle_4">
	  <a href="#"><img src="{{asset('csss/img/middle.jpg')}}" alt="abc" class="img_responsive"></a>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="middle_5">
	  <h3><a href="#">30000+</a></h3>
	  <hr class="hr_3">
	  <h4>Routes</h4>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<section id="our">
 <div class="container">
  <div class="row">
   <div class="our_1 clearfix">
    <div class="col-sm-4">
	 <div class="our_2 clearfix">
	  <h4>Bus </h4>
	 </div>
	 <div class="our_3 clearfix">
	  <div class="col-sm-3 space_all">
	   <div class="our_4 clearfix">
	    <h4>HANIF</h4>
		<h6>Paribahan</h6>
	   </div>
	  </div>
	  <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h4>GREEN </h4>
		<h6>LINE</h6>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h4>ENA</h4>
		<h6>Paribahan</h6>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h4>TR</h4>
		<h6>Travels</h6>
	   </div>
	  </div>
	 </div>
     <div class="our_5 clearfix">
	  <div class="col-sm-5 space_all">
	   <div class="our_6">
	    <a href="#"><img src="csss/img/bus2.png" height="120px" width="150px"></a>
		<p>ENA</p>
	   </div>
	  </div>
	  <div class="col-sm-2 space_all">
	   <div class="our_7">
	    <h3>    </h3>
	   </div>
	  </div>
	  <div class="col-sm-5 space_all">
	   <div class="our_8">
	    <a href="#"><img src="csss/img/greenline.png" height="120px" width="150px"></a>
		<p>GREEN LINE</p>
	   </div>
	  </div>
	 </div>
	 <div class="our_9">
	 <a href="#"><h6>Buy Bus Tickets <br/>Online</h6> </a>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="our_10">
	  <h4>Bangladesh Railway</h4>
	  <ul>
	      <li><a href="#">Inter-city Trains</a></li>
		  <li></li>
		  <li><a href="#"></a></li>
	  </ul>
	 </div>
	 <div class="our_11">
	  <h6>Bangladesh Railway History</h6>
	 </div>
	 <div class="our_12">
	   <ul>
	      <li><a href="#"></a></li>
		  <li>Railway Travel Experience</li>
		 
	  </ul>
	 </div>
	 <div class="our_13">
	  <h6>Railway Policy and Planning</h6>
	 </div>
	</div>
	<div class="col-sm-4">
	 <div class="our_2 clearfix">
	  <h4>Air</h4>
	 </div>
	 <div class="our_3 clearfix">
	  <div class="col-sm-3 space_all">
	   <div class="our_4 clearfix">
	    <h3></h3>
		<h6>EMIRATES</h6>
		<h6>|......|</h6>
		
	   </div>
	  </div>
	  <div class="col-sm-3 space_all">
	   <div class="our_4">
	    <h5>Qatar</h5>
		<h6>Airlines</h6>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	   <h5>Qatar</h5>
		<h6>Airlines</h6>
	   </div>
	  </div>
     <div class="col-sm-3 space_all">
	   <div class="our_4">
	   <h5>Eithad</h5>
		<h6>Airlines</h6>
	   </div>
	  </div>
	 </div>
     <div class="our_5 clearfix">
	  <div class="col-sm-5 space_all">
	   <div class="our_6">
	    <a href="#"><img src="csss/img/plane1.png" height="120" width="150"></a>
		<p>Bangladesh Airlines</p>
	   </div>
	  </div>
	  <div class="col-sm-2 space_all">
	   <div class="our_7">
	    <h3>   </h3>
	   </div>
	  </div>
	  <div class="col-sm-5 space_all">
	   <div class="our_8">
	    <a href="#"><img src="csss/img/plane2.png" height="120" width="150"></a>
		<p>Turkish Airlines </p>
	   </div>
	  </div>
	 </div>
	 <div class="our_9">
	  <h6>Buy Air Ticket <br/>Online</h6>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>


</script>
</body>
</html>
