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
<section class="my-5">
 <!-- Heading  -->
 <div class="py-5">
   <h3 class="text-center">Write A Review</h3>
 </div>

 <div class="w-50 m-auto">
   <form action="userpost.php" method="post">
      <!-- Fields of Forms start---->
     <div class="form-group">
       <label>Username</label>
       <input type="text" name="user" autocomplete="off" class="form-control">
     </div>
     <div class="form-group">
       <label>Hospital Name</label>
       <input type="text" name="hospital" autocomplete="off" class="form-control">
     </div>
     <div class="form-group">
       <label>Divison</label>
       <select name="divison">
         <option value="">Chose an area</option>
         <option value="Dhaka">Dhaka</option>
         <option value="Chittagong">Chittagong</option>
         <option value="Shylet">Shylet</option>
         <option value="khulna">Khulna</option>
         <option value="Rajshahi">Rajshahi</option>
         <option value="Rangpur">Rangpur</option>
         <option value="Barisal">Barisal</option>
         <option value="Maymansingh">Maymansing</option>
       </select>

     </div>
     <div class="form-group">
       <label>Experience</label>
       <textarea class="form-control"  name="comment"> </textarea>
     </div>
     <button type="submit" class="btn btn-primary">Post</button>
     <!-- Fields of Forms start---->
   </form>
 </div>
</section>
<!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?>



</body>
</html>
