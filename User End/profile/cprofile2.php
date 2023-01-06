<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','recruitme');

$deg=$_['deg'];
$dept=$_['dept'];
$cgpa=$_['cgpa'];
$x=$_['x'];
$xii=$_['xii'];
$skill=$_['skill'];
$domain=$_['domain'];

// database insert SQL code
$sql = "INSERT INTO 'profile' ('deg', 'dept', 'cgpa', 'x', 'xii', 'skill', 'domain') VALUES ('$deg', '$dept', '$cgpa', '$x', '$xii', '$skill', '$domain')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
