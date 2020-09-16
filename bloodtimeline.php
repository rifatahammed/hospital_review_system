<!DOCTYPE html>
<html>
<head>
<!-- Head tag -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<style type="text/css">
      h2
      {
        font-family: sans-serif;
        color: Green;
        text-align: left;

      }
  		h6
  		{
  			color: green;
  			text-align: center;
  		}
  		h5
  		{
  			color:black;
  			text-align: center;
  		}
</style>
<body>
<!-- body start -->
<!-- Adding navbar from menu.php -->

<?php include 'menu.php'; ?>

  <center>
    <br>
    <h1>BLOOD posts Timeline</h1>
    <br>
    <p>=================================================================================================================================</p>


  <?php
  include_once 'dbh.php';

  $sql = "select* from blood;";
  $result = mysqli_query($conn,$sql);
  $resultcheck = mysqli_num_rows($result);

  if ($resultcheck > 0) {
  	while ($row = mysqli_fetch_assoc($result)) {

      echo "<h6>Name:</h6><h5>".$row['username']."</h5>";

  		echo "<h6>Hospital Name:</h6><h5>".$row['hospitalname']."</h5>";

  		echo "<h6>Devison:</h6><h5>".$row['area']."</h5>";

      echo "<h6>BLOOD GROUP:</h6><h5>".$row['bg']."</h5>";

  		echo "<h6>Details:</h6><h5>".$row['comment']."</h5>";

      echo "=================================================================================================================================";

      echo "<br>";
      echo "<br>";

  	}
  }

  ?>
  <h4><marquee>Share your Experience & Stay With Us</marquee></h4>

<!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?>
</body>
</html>
