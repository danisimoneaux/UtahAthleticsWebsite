<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css" />
    <link rel="stylesheet" href="loginstyle.php" media="screen">
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
                    </ul>
                  </li>
                </ul>
                </form>
              </div>
            </div>
          </nav>
    <h2>Login</h2><br>
    <div class="login">
        <form id="login" method="POST" action="coachlogin.php">
            <label>
                <b>
                    Username
                </b>
            </label>
            <input type="text" name="username" id="Uname" placeholder="Username">
            <br><br>
            <label>
                <b>
                    Password
                </b>
            </label>
            <input type="password" name="password" id="Pass" placeholder="Password">
            <br><br>
            <input type="submit" name="login" id="log" value="Log In">
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span>
            <br><br>
        </form>
    </div>
    <hr class="featurette-divider">
</body>
<footer>
<?php

require_once 'loginDB.php'; // This is the same
require_once 'User.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if (isset($_POST['username']) && isset($_POST['password'])) {

      //Get values from login screen
      $tmp_username = mysql_entities_fix_string($conn, $_POST['username']);
      $tmp_password = mysql_entities_fix_string($conn, $_POST['password']);
  
      //get password from DB w/ SQL
      $query = "SELECT * FROM user WHERE username = '$tmp_username'";
  
      $result = $conn->query($query); 
      if(!$result) die($conn->error);
  
      $rows = $result->num_rows;
      $passwordFromDB="";
      for($j=0; $j<$rows; $j++)
      {
          $result->data_seek($j);
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $passwordFromDB = $row['password'];
  
      }

      //Compare passwords
    if(password_verify($tmp_password, $passwordFromDB))
    {
      session_start();
      $user = new User($tmp_username);
      $_SESSION['user'] = $user;
      //header("Location: addrecordview.php");
      echo "<a href='addrecordview.php'> Log In!</a>";
    }
    else {
      echo "login error<br>";
    }

}
$conn->close();


//sanitization functions
function mysql_entities_fix_string($conn, $string){
    return htmlentities(mysql_fix_string($conn, $string));
}

function mysql_fix_string($conn, $string){
    $string = stripslashes($string);
    return $conn->real_escape_string($string);
}

?>
    <img src="download.png" href="homepage.php" width="150" height="100">
    <hr class="line" size="10" width="100%" color=black>
</footer>
</html>