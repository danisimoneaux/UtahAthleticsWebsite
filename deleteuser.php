<?php

require_once  'loginDB.php';
//require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['delete']))
{
	$username = $_POST['username'];

	$query = "DELETE FROM user WHERE username='$username' ";
	echo $query;

	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: addrecordview.php");
	exit();
}


?>