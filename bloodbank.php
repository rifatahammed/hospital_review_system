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


<div class="jumbotron">
	<img src="images/blood.jpg">
  <h1>Lists of Blood Banks of BANGLADESH</h1> 
</div>

<div>
  <h1>Lists of Blood Donors</h1>
  <!-- <p><iframe src="http://www.blooddonorsbd.com/alldonorslist.php">
</iframe></p>-->
<embed type="text/html" src="http://www.blooddonorsbd.com/alldonorslist.php"  width="500" height="200"> 
	
</div>




 <!-- floating 2 section text and image -->
  
 <section class="my-5">
	<div class "container-fluid">	
	<div class="row">
		<!--image of floating 2 section text and image -->
		<div class="col-lg-6 col-md-6 col-12">
			 <img src="images/bloodgiving.jpg" class="img-fluid aboutimg">
		</div>
		<!--text of floating 2 section text and image -->
		<div class="col-lg-6 col-md-6 col-12">
			 <h2 class="display-4">Give blood and save life </h2>
				<p class="py-5"> Safe blood saves lives and improves health. Blood transfusion is needed for:

women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth;
children with severe anaemia often resulting from malaria or malnutrition;
people with severe trauma following man-made and natural disasters; and
many complex medical and surgical procedures and cancer patients.
It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia.

There is a constant need for regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be available whenever and wherever it is needed.

Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions.</p>
		</div>
	</div>
</div>	
</section>	
<!-- floating 2 section text and image end -->


<!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?> 

</body>
</html>