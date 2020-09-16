<?php
include_once 'dbh.php';
$username = $_POST['username'];
$hospitalname = $_POST['hospital'];
$area = $_POST['area'];
$rate = $_POST['rate'];
$comment = $_POST['comment'];

$sql = "Insert into profiles(username,hospitalname,area,rate,comment) Values('$username','$hospitalname','$area','$rate','$comment')";
mysqli_query($conn,$sql);

header("Location: timeline.php?data inserted successfully");

?>
