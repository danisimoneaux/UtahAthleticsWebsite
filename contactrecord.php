<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contact.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <h1>
        <img src="download.png" href="homepage.php" width="150" height="100">
        <hr class="line" size="10" width="100%" color=black>
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
                    <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="sports.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sports
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="football.php">Football</a></li>
                      <li><a class="dropdown-item" href="basketball.php">Basketball</a></li>
                      <li><a class="dropdown-item" href="volleyball.php">Volleyball</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="events.php">Events</a>
                  </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="athletelogin.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="coachlogin.php">Coach Login</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contactrecord.php">Contact Info</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="more.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Scholarships
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="scholarships.php">Scholarship Homepage</a></li>
                      <li><a class="dropdown-item" href="campbell.php">Campbell Scholarship</a></li>
                      <li><a class="dropdown-item" href="paulbernotmemorial.php">Paul Bernot Memorial</a></li>
                      <li><a class="dropdown-item" href="youcannotfail.php">You Can Not Fail!</a></li>
                      <!--<li><a class="dropdown-item" href="income.php">Income</a></li>-->
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="more.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="sponsors.php">Sponsors</a></li>
                      <li><a class="dropdown-item" href="treatment.php">Treatment</a></li>
                      <!--li><a class="dropdown-item" href="equipmentcosts.php">Equiptment Costs</a></li>-->
                      <!--<li><a class="dropdown-item" href="income.php">Income</a></li>-->
                    </ul>
                  </li>
                </ul>
                </form>
              </div>
            </div>
          </nav>
    <h2>Contact Us</h2><br>
    <div class="contact">
    <?php

require_once 'loginDB.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

echo <<<_END
<form action="contactrecord.php" method="post"
<pre>
	Name <input type="text" name="name"></br></br>
	Email <input type="text" name="email"></br></br>
	Message <input type="text" name="message"></br></br>
	<input type="submit" name="ADD RECORD">
	</br></br>
</pre>
</form>
_END;


if(isset($_POST['name']) &&
	isset($_POST['email']) &&
	isset($_POST['message'])) {
		$name=get_post($conn, 'name');
		$email=get_post($conn, 'email');
		$message=get_post($conn, 'message');
		
		$query="INSERT INTO contact ( name, email, message) VALUES ".
			"('$name','$email','$message')";
		
            $result=$conn->query($query);

		if(!$result) echo "INSERT failed: $query <br>" .
			$conn->error . "<br><br>";
	
		//header("Location: contactrecordview.php");
		exit();
}

$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}

?>
    </div>
    <hr class="featurette-divider">
</body>
  <footer>
    <img src="download.png" href="homepage.html" width="150" height="100">
    <hr class="line" size="10" width="100%" color=black>
  </footer>
</footer>
</html>