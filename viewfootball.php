<?php

//set page roles #1
$page_roles=array('admin', 'athlete', 'guest');
require_once 'loginDB.php';

//require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="addathlete.php">Add Athlete</a>
	<a href="logout.php">Logout</a>
	
_END;

$query="SELECT * FROM Athletes where Team='football' ";
$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<pre>
		Athlete ID:  $row[AthleteID];
		First Name:  $row[FirstName];
		Last Name:  $row[LastName];
		Team:  $row[Team];
		Year:  $row[Year];
        ContactEmail:  $row[ContactEmail];
        Scholarship:  $row[Scholarship];
	</pre>
	<form action="updateathlete.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="TeamID" value="$row[TeamID]">
	<input type="submit" value="UpdateAthlete">
	</form>
_END;
}

$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>