<html>
	<head>
		<title>Athelte View</title>
		<link rel="stylesheet" type="text/css" href="addrecordview.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</head>
	</head>
	<body>
		<h1>
		<h1>
	</body>
</html>

<?php

//set page roles #1
//$page_roles=array('admin', 'athlete', 'guest');
require_once 'loginDB.php';

//require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="addathlete.php">Add Athlete</a>
	<a href="logout.php">Logout</a>
	
_END;

$query="SELECT * FROM Athletes";

$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<pre>
		Athlete ID: $row[AthleteID];
		First Name: $row[FirstName];
		Last Name: $row[LastName];
		Team: $row[Team];
		Year: $row[Year];
        ContactEmail: $row[ContactEmail];
        Scholarship: $row[Scholarship];
	</pre>
	<form action="updatebasketball.php" method="post">
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