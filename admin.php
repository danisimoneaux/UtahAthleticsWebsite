<?php

// importing DB configs
require_once "loginDB.php";

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

//example 10-3
$query = "Select * from user"; //this is the query 
$result = $conn->query($query); //this will run the query
if(!$result) die($conn->error); //if result is false, pull up the error

$rows = $result->num_rows;

for($j=0; $j<$rows; $j++)
{
	//$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_ASSOC); 

echo <<<_END
	<pre>
	ID: $row[id]
	Username: $row[username]
	Password: $row[password]
	First Name: $row[firstName]
	Last Name: $row[lastName]
	Sport: $row[sport]
    Role: $row[role]
	</pre>
	
_END;

}

$conn->close();


?>
