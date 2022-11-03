<html>
	<head>
		<title>Nutrition View</title>
		<link rel="stylesheet" type="text/css" href="../addrecordview.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</head>
	<body>
	<h1>
            <img src="../download.png" href="../homepage.php" width="150" height="100">
            <hr class="line" size="5" width="100%" color=black>
	</h1>
	<nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../homepage.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../sports.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sports
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="../football.php">Football</a></li>
                      <li><a class="dropdown-item" href="../basketball.php">Basketball</a></li>
                      <li><a class="dropdown-item" href="../volleyball.php">Volleyball</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../events.html">Events</a>
                  </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../athletelogin.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="../coachlogin.php">Coach Login</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../contact.php">Contact Info</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../more.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Scholarships
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="../scholarships.php">Scholarship Homepage</a></li>
                      <li><a class="dropdown-item" href="../campbell.php">Campbell Scholarship</a></li>
                      <li><a class="dropdown-item" href="../paulbernotmemorial.php">Paul Bernot Memorial</a></li>
                      <li><a class="dropdown-item" href="../youcannotfail.php">You Can Not Fail!</a></li>
                      <!--<li><a class="dropdown-item" href="income.php">Income</a></li>-->
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="more.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="../sponsors.php">Sponsors</a></li>
                      <li><a class="dropdown-item" href="../treatment.php">Treatment</a></li>
                      <li><a class="dropdown-item" href="adminhomepage.php">Portal</a></li>
                      <li><a class="dropdown-item" href="../equipmentcosts.php">Equiptment Costs</a></li>
                      <li><a class="dropdown-item" href="../income.php">Income</a></li>
                      <li><a class="dropdown-item" href="../athleteview.php">View Athletes</a></li>
                      <li><a class="dropdown-item" href="../viewvolleyball.php">View Volleyball Athletes</a></li>
                      <li><a class="dropdown-item" href="../viewfootball.php">View Football Athletes</a></li>
                    </ul>
                  </li>
                </ul>
                </form>
              </div>
            </div>
          </nav>
        <br><br>
        <?php

require_once 'loginDB.php';
//require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
	<pre>
	<a href="../AthletePages/athletenutrition.php">Add Record</a>
	<a href="Logout.php">Logout</a>
	
_END;

$query="SELECT * FROM nutritioninput";
$result=$conn->query($query);
if(!$result) die ($conn->error);

$rows=$result->num_rows;
for($j=0; $j<$rows; $j++) {
	$result->data_seek($j);
	$row=$result->fetch_array(MYSQLI_BOTH);
	
	echo <<<_END
	<pre>
		Name $row[playername];
		Item $row[item];
		Calories $row[calories];
        Date $row[date]
	</pre>
	<form action="../deleteEntry.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="playername" value="$row[playername]">
	<input type="submit" value="DELETE RECORD">
	</form>
_END;
}

$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}



?>
	</body>
</html>