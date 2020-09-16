<?php
  require_once 'assets/php/session.php';
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="author" content="Hospital Review System">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')); ?> | HRS</title>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>
     <style type="text/css">
     @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap');
     *{
       font-family: 'Maven Pro', sans-serif;
     }
     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><i class="fas fa-code fa-lg"></i>&nbsp;&nbsp;Hospital Review System</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "index.php")? "active":""; ?>" href="index.php" ><i class="fas fa-home"></i>&nbsp;Home</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "profile.php")? "active":""; ?>" href="profile.php" ><i class="fas fa-user-circle"></i>&nbsp;Profile</a> -->
        
        <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
          <i class="fas fa-user-cog"></i>&nbsp;Hello <?= $fname; ?>
        </a>
        <div class="dropdown-menu">
          <!-- <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Setting</a> -->
          <a href="assets/php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>