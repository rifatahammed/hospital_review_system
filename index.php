<!DOCTYPE html>
<html>
<head>
<!-- Head tag -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  <!-- body start -->

<!-- Adding navbar from menu.php -->
<?php include 'menu.php'; ?>

  <!-- Slidebar start -->
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slider1.jpg" alt="Talking" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Share thoughts</h3>
        <p>Share your experience with others</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/slider2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Build community</h3>
        <p>Contribute to build a community</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/slider3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Silent action</h3>
        <p>Indirectly force hospitals to be better</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <!-- Slidebar end -->
 
 
 
 
 <!-- floating 2 section text and image -->
  
 <section class="my-5">
	<!-- Heading floating 2 section text and image -->
	<div class="py-5">
		<h3 class="text-center">Why this website</h3>
	</div>
	<div class"container-fluid">	
	<div class="row">
		<!--image of floating 2 section text and image -->
		<div class="col-lg-6 col-md-6 col-12">
			 <img src="images/healthy.jpg" class="img-fluid aboutimg">
		</div>
		<!--text of floating 2 section text and image -->
		<div class="col-lg-6 col-md-6 col-12">
			 <h2 class="display-4">aagagagagagguyhfduyuhf</h2>
				<p class="py-5">uigiuiguiugiudfigudiguisdfuiugiusdfiguixduiu
				ddjdjdjddddddddddjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj
				iugioxdigusiouisdugiosgiusiugisergisyhgis</p>			 
			<a href="about.php" class="btn btn-success"> Check more </a>
		</div>
	</div>
</div>	
</section>	
<!-- floating 2 section text and image end -->
 

<!-- Api start-->
<!-- <div id="covid"> -->
        <!-- <h3>Case so far : <span id="case"></span> </h3> -->
        <!-- <h3>Todays Case : <span id="today-case"></span> </h3> -->
        <!-- <h3>Todays Death : <span id="today-death"></span> </h3> -->
        <!-- <h3>Death so far : <span id="death"></span> </h3> -->
        <!-- <h3>Recovered so far : <span id="recovered"></span> </h3> -->
    <!-- </div> -->
<!-- Api ends-->


 
 <!-- cards starts-->
 <section class="my-5">
	<!-- Heading  -->
	<div class="py-5">
		<h3 class="text-center">Bangladesh's COVID-19 Situation</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
		<!-- First card start with image and link  -->
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
							  <img class="card-img-top" src="images/covid1.jpg" alt="Card image">
							  <div class="card-body">
								<h4 class="card-title">Case so far : <span id="case"></span> </h4>
								<p class="card-text">Some example text.</p>
								<a href="https://corona.gov.bd/?gclid=Cj0KCQjw7ZL6BRCmARIsAH6XFDIekwwSaSsiN_GycYDvxulPqLI6S6Fr2bjkOUJqNlrjm8P17e_lJGoaAg0GEALw_wcB" class="btn btn-primary">See More info</a>
							  </div>
					</div>
			</div>
			<!-- First card ends with image and link  -->
			<!-- Second card start with image and link  -->
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
							  <img class="card-img-top" src="images/covid2.jpg" alt="Card image">
							  <div class="card-body">
								<h4 class="card-title">Todays Case : <span id="today-case"></span> </h4>
								<p class="card-text">Some example text.</p>
								<a href="https://corona.gov.bd/?gclid=Cj0KCQjw7ZL6BRCmARIsAH6XFDIekwwSaSsiN_GycYDvxulPqLI6S6Fr2bjkOUJqNlrjm8P17e_lJGoaAg0GEALw_wcB" class="btn btn-primary">See More info</a>
							  </div>
					</div>
			</div>
			<!-- Second card ends with image and link  -->
			<!-- Third card start with image and link  -->
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
							  <img class="card-img-top" src="images/covid3.jpg" alt="Card image">
							  <div class="card-body">
								<h4 class="card-title">Today's death : <span id="today-death"></span> </h4>
								<p class="card-text">Some example text.</p>
								<a href="https://corona.gov.bd/?gclid=Cj0KCQjw7ZL6BRCmARIsAH6XFDIekwwSaSsiN_GycYDvxulPqLI6S6Fr2bjkOUJqNlrjm8P17e_lJGoaAg0GEALw_wcB" class="btn btn-primary">See More info</a>
							  </div>
					</div>
			</div>
			<!-- Third card ends with image and link  -->
			<!-- Forth card start with image and link  -->
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
							  <img class="card-img-top" src="images/covid4.jpeg" alt="Card image">
							  <div class="card-body">
								<h4 class="card-title">Total death : <span id="death"></span> </h4>
								<p class="card-text">Some example text.</p>
								<a href="https://corona.gov.bd/?gclid=Cj0KCQjw7ZL6BRCmARIsAH6XFDIekwwSaSsiN_GycYDvxulPqLI6S6Fr2bjkOUJqNlrjm8P17e_lJGoaAg0GEALw_wcB" class="btn btn-primary">See More info</a>
							  </div>
					</div>
			</div>
			<!-- Forth card ends with image and link  -->
			<!-- Fifth card start with image and link  -->
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
							  <img class="card-img-top" src="images/covid5.jpg" alt="Card image">
							  <div class="card-body">
								<h4 class="card-title">Recovered : <span id="recovered"></span> </h4>
								<p class="card-text">Some example text.</p>
								<a href="https://corona.gov.bd/?gclid=Cj0KCQjw7ZL6BRCmARIsAH6XFDIekwwSaSsiN_GycYDvxulPqLI6S6Fr2bjkOUJqNlrjm8P17e_lJGoaAg0GEALw_wcB" class="btn btn-primary">See More info</a>
							  </div>
					</div>
			</div>
			<!-- Fifth card ends with image and link  -->
		</div>
	</div>
	
 </section>
 
 
<!-- Photo Galerry---->
 <section class="my-5">
	<!-- Heading  -->
	<div class="py-5">
		<h3 class="text-center">Gallery</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<!-- Individual Photo Start---->
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pg1.jpg" class="img-fluid pb-3">
			</div>
			<!-- Individual Photo end---->
			<!-- Individual Photo Start---->
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pg1.jpg" class="img-fluid pb-3">
			</div>
			<!-- Individual Photo end---->
			<!-- Individual Photo Start---->
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pg1.jpg" class="img-fluid pb-3">
			</div>
			<!-- Individual Photo end---->
			<!-- Individual Photo Start---->
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pg1.jpg" class="img-fluid pb-3">
			</div>
			<!-- Individual Photo end---->
			<!-- Individual Photo Start---->
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pg1.jpg" class="img-fluid pb-3">
			</div>
			<!-- Individual Photo end---->
			<!-- Individual Photo Start---->
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/pg1.jpg" class="img-fluid pb-3">
			</div>
			<!-- Individual Photo end---->
		</div>				
	</div>
	
 </section>
 <!-- Photo Galerry end---->
 
 
 
 <!-- Form---->
 <section class="my-5">
	<!-- Heading  -->
	<div class="py-5">
		<h3 class="text-center">Form</h3>
	</div>
	
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			 <!-- Fields of Forms start---->
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comment"> </textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<!-- Fields of Forms start---->
		</form>
	</div>
 </section>
  <!-- Form End---->
 

<!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?> 


 <!-- adding api file -->
 <script src="covid.js"></script>


  <!-- SOME STYLE -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  </body>
  </html>