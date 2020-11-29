<?php

$conn = new mysqli('localhost','root','root','user_registration');


$Name = $_POST['username'];
$Email = $_POST['email'];
$Pass = $_POST['password'];

$sql = "INSERT INTO user (username,email,password) VALUES('$Name','$Email','$Pass')";

if($conn->query($sql)===TRUE){
	echo include('welcome.php');
}
else{
	echo "Data not Inserted!";
}
?>