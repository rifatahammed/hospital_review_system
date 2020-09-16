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
   <h3 class="text-center">Write A Blood Post</h3>
 </div>

 <div class="w-50 m-auto">
   <form action="userpostblood.php" method="post">
      <!-- Fields of Forms start---->
     <div class="form-group">
       <label>Name</label>
       <input type="text" name="username" autocomplete="off" class="form-control" required>
     </div>
     <div class="form-group">
       <label>Hospital Name</label>
       <input type="text" name="hospital" autocomplete="off" class="form-control" required>
     </div>
     <div class="form-group">
       <label>Divison</label>
       <select name="area" required>
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
       <label>BLOOD GROUP</label>
       <select name="bg" required>
         <option value="">bg</option>
         <option value="A+">A+</option>
         <option value="B+">B+</option>
         <option value="AB+">AB+</option>
         <option value="O+">O+</option>
         <option value="Negative">Negative group</option>
       </select>

     </div>
     <div class="form-group">
       <label>Tell in details</label>
       <textarea class="form-control" name="comment" autocomplete="off" class="form-control" required> </textarea>
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
