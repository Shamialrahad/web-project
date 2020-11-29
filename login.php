<?php
session_start();

$con = mysqli_connect('localhost','root','root');

mysqli_select_db($con, 'user_registration');

$Email = $_POST['email'];
$Pass = $_POST['password'];

$s = " select * from user where Email = '$Email' && password = '$Pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	header('location:welcome.php');
}
else{
	header('location:error.php');
}
?>