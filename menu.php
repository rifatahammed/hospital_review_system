  <!-- Nav bar from bootstrap -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">HOSPITAL REVIEW SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  
        <!-- Drop down menu start  -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REVIEW
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register.php">Post a review</a>
          <a class="dropdown-item" href="reviewtimeline.php">Timeline</a>
      </li>
    <!-- drop down menu end -->


	  <!-- Drop down menu start  -->
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Emergency Blood Post
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="postblood.php">Post a blood post</a>
          <a class="dropdown-item" href="bloodtimeline.php">See all blood post</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="bloodbank.php">ALL BLOOD BANKs info</a>
        </div>
      </li>
	  <!-- drop down menu end -->

    <!-- REPAIR THISSSSSSSSSSSSSSSSSSSSSSSSSS -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="profile.php">profile</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="map.php">MAP</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      
      <!-- REPAIR THISSSSSSSSSSSSSSSSSSSSSSSSSS -->
	<!-- <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li> -->
    </ul>
	<!-- sEARCH BUTTON -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- Nav bar from bootstrap end -->
