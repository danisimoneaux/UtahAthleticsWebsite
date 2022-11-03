<?php

require_once  'loginDB.php';
//require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if(isset($_POST['FirstName']))
{
	$Team = $_POST['Team'];

	$query = "DELETE FROM Athletes WHERE FirstName ='$FirstName' ";
	echo $query;

	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: viewbasketball.php");
	exit();
}




?>