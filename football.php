<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Utah Basketball</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album-rtl/">

<link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
    body {
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        text-align: center;
        background-color: rgb(169, 28, 28);
        padding-top: .1in;
    }

    h5 {
      text-align: center;
      font-size: 50pt;
    }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn {
        background-color: rgb(199, 195, 190);
        border-radius: 0px;
      }

      footer {
        text-align: center;
        padding-top: 1pt;
      }
    </style>
  </head>

<body>
  <h1>
      <img src="download.png" href="homepage.html" width="150" height="100">
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
        <br><br>
      </body>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h5 class="fw-light">Utah Football</h5>
        <p class="lead text-muted"> Welcome to Utah Football's Page! You can view events and purchase tickets to any upcoming events below</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <a href="homepage.html"> <img src="download.png" width="100%" height="225%"> </img></a>
            <div class="card-body">
              <p class="card-text">2022 MUSS Premium</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="get" action="https://am.ticketmaster.com/utahutes/">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">View Details</button>
                </form>
                <form method="get" action="https://am.ticketmaster.com/utahutes/">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Buy Tickets</button>
                </form>
                </div>
                <small class="text-muted">Rice Eccles</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <a href="homepage.html"> <img src="download.png" width="100%" height="225%"> </img></a>

            <div class="card-body">
              <p class="card-text">2022 MUSS</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="get" action="https://am.ticketmaster.com/utahutes/">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">View Details</button>
                </form>
                <form method="get" action="https://am.ticketmaster.com/utahutes/">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Buy Tickets</button>
                </form>
                </div>
                <small class="text-muted">Rice Eccles</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <a href="homepage.html"> <img src="download.png" width="100%" height="225%"> </img></a>
            <div class="card-body">
              <p class="card-text">2022 General Admission</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <form method="get" action="https://am.ticketmaster.com/utahutes/">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">View Details</button>
                </form>
                <form method="get" action="https://am.ticketmaster.com/utahutes/">
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Buy Tickets</button>
                </form>
                </div>
                <small class="text-muted">Rice Eccles</small>
              </div>
            </div>
          </div>
        </div>


</main>
   <!--<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>-->
   <hr class="featurette-divider">
  </body>

  <footer>
    <img src="download.png" href="homepage.html" width="150" height="100">
    <hr class="line" size="10" width="100%" color=black>
</footer>

</html>