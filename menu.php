  <!-- Nav bar from bootstrap -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">HOSPITAL REVIEW SYSTEM</a>
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
          <a class="dropdown-item" href="post.php">Post a review</a>
          <a class="dropdown-item" href="timeline.php">See review timeline</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admindashboard.php">Admin Dashboard</a>
        </div>
      </li>
	  
	  <!-- drop down menu end -->
      <li class="nav-item">
        <a class="nav-link" href="profile.php">profile</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
	<li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
    </ul>
	<!-- sEARCH BUTTON -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- Nav bar from bootstrap end -->
