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

  <center>
    <h1>Reviews Timeline</h1>
    <div class="container">
      <form action="rtimeline.php" method="post">
        <label>Search</label>
        <input type="text" name="search">
        <input type="submit" name="submit">
      </form>
  </center>

<!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?>






</body>
</html>
