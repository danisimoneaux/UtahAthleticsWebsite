<html>
    <head>
        <title>Admin Homepage</title>
        <link rel="stylesheet" href="adminhomepage.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>
            <img src="../download.png" href="../homepage.php" width="150" height="100">
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
                    <a class="nav-link active" href="../events.php">Events</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../login.php" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="../coachlogin.php">Coach Login</a></li>
                      <li><a class="dropdown-item" href="adminhomepage.php">Portal</a></li>
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
          <br>
        <h2><div class="card">
            <h5 class="card-header">Nutrition Dashboard</h5>
            <div class="card-body">
              <h5 class="card-title">Recent Entries</h5>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Calories</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Apple</td>
                    <td>95</td>
                    <td> 7/8/22 </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Grilled Chicken Breast</td>
                    <td>125</td>
                    <td> 7/8/22 </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Orange Juice</td>
                    <td>100</td>
                    <td> 7/8/22 </td>
                  </tr>
                </tbody>
              </table>
              <a href="athletenutrition.php" class="btn btn-primary">Go to Nutrition Page</a>
            </div>
          </div>
        </h2>
        <br>
        <h2><div class="card">
            <h5 class="card-header">PR Dashboard</h5>
            <div class="card-body">
              <h5 class="card-title">Recent Entries</h5>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Activity</th>
                    <th scope="col">PR Weight</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Squat</td>
                    <td>215kg</td>
                    <td>9/17/22</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Deadlift</td>
                    <td>200kg</td>
                    <td>4/1/22</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Bench Press</td>
                    <td>150kg</td>
                    <td>6/8/22</td>
                  </tr>
                </tbody>
              </table>
              <a href="adminpr.php" class="btn btn-primary">Go to Progress Page</a>
            </div>
          </div>
        </h2>
        <br>
        <h2><div class="card">
            <h5 class="card-header">Team Portal</h5>
            <div class="card-body">
              <h5 class="card-title">Notifications</h5>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event</th>
                    <th scope="col">Information</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Utah vs. Arizona</td>
                    <td> Tuesday @12pm </td>
                    <td>7/12/22</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Mary's Birthday!</td>
                    <td>Happy Birthday Mary!</td>
                    <td>7/8/22</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Practice</td>
                    <td>Monday @6pm</td>
                    <td>7/11/22</td>
                  </tr>
                </tbody>
              </table>
              <a href="adminviewteampage.php" class="btn btn-primary">Go to Team Page</a>
            </div>
          </div>
        </h2>
    </body>
    <footer>
        <img src="download.png" href="homepage.php" width="150" height="100">
        <hr class="line" size="10" width="100%" color=black>
    </footer>










</html>