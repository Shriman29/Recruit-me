<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','recruitme');

// get the post records
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$birthday= $_POST['birthday'];
$gender = $_POST['gender'];
$number= $_POST['phno'];
$avatar=$_POST['avatar'];
$address= $_POST['address'];
$state= $_POST['state'];


// database insert SQL code
$sql = "INSERT INTO 'profile' ('fname', 'lname', 'email', 'birthday', 'gender', 'number', 'avatar', 'address', 'state') VALUES ( '$fname','$lname' ,'$email', '$birthday', '$gender',  '$number', '$avatar', '$address', '$state')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
