<?php
$con = mysqli_connect('localhost','root',);

if($con){
	echo "Connection successful";
} else {
	echo "No connection";
}

mysqli_select_db($con,'hrsdb');

$user = $_POST['user'];
$hospital =$_POST['hospital'];
$divison =$_POST['divison'];
$comment =$_POST['comment'];

$query = "insert into postdata (user,hospital,divison,comment)
values ('$user','$hospital','$divison','$comment')";

mysqli_query($con,$query);

header('location: index.php');

?>
