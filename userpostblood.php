<?php
include_once 'dbh.php';
$username = $_POST['username'];
$hospitalname = $_POST['hospital'];
$area = $_POST['area'];
$bg = $_POST['bg'];
$comment = $_POST['comment'];

$sql = "Insert into blood(username,hospitalname,area,bg,comment) Values('$username','$hospitalname','$area','$bg','$comment')";
mysqli_query($conn,$sql);

header("Location: bloodtimeline.php?data inserted successfully");

?>
