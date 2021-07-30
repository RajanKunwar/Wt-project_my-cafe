<?php 

$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection successful";
}
else{
echo "No Connection";
}

mysqli_select_db($con,'database');

$user = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfo (username, email, mobile, comment) 
values ('$username', '$email', '$mobile', '$comment')";

mysqli_query($con, $query);

header('location:index.php');


?>