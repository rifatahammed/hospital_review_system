<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Map at a specified location</title>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <link rel="stylesheet" type="text/css" href="demo.css" />
    <link rel="stylesheet" type="text/css" href="css/map.css" />
    <link rel="stylesheet" type="text/css" href="../template.css" />
    <script type="text/javascript" src='../test-credentials.js'></script>    
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  <script type="text/javascript" >window.ENV_VARIABLE = 'https://developer.here.com'</script><script src='https://developer.here.com/javascript/src/iframeheight.js'></script></head>
  <body id="markers-on-the-map">
    <!-- Adding navbar from menu.php -->
    <?php include 'menu.php'; ?>
    <div class="page-header">
        <h1>FIND HOSPITALS NEARBY YOU</h1>
        <p>Find out the hospitals in your are</p>
    </div>
    <p>Here is a movable map for<b>Dhaka</b> in the centre of Bangladesh <i>(23.8103° N, 90.4125° E)</i></p>
    <div id="map"></div>


    <!-- Adding footer from menu.php -->
<?php include 'footer.php'; ?> 
    <script type="text/javascript" src='map.js'></script>
  </body>
</html>