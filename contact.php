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
                    <a class="nav-link active" href="contact.php">Contact Info</a>
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
        <form id="contact" method="get" action="contactrecord.php">
            <label>
                <b>
                    Name
                </b>
            </label>
            <input type="text" name="name" id="name" placeholder="Full Name">
            <br><br>
            <label>
                <b>
                    Email
                </b>
            </label>
            <input type="email" name="email" id="email" placeholder="Email">
            <br><br>
            <label>
                <b>
                    Your Message
                </b>
            </label>
            <textarea id="message" class="input" name="message" placeholder="Your Message Here" rows="7" cols="20"></textarea><br/>
            <br><br>
            <input type="submit" name="submit" id="submit" value="Submit">
            <br><br>
        </form>
    </div>
    <hr class="featurette-divider">
</body>
  <footer>
    <img src="download.png" href="homepage.html" width="150" height="100">
    <hr class="line" size="10" width="100%" color=black>
  </footer>
</html>
</footer>
</html>