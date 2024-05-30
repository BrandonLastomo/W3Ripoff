<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">W<span class = text-danger>3</span>Ripoff</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="dataType.php">Data Type</a></li>
            <li><a class="dropdown-item" href="conditional.php">Conditional Statement</a></li>
            <li><a class="dropdown-item" href="looping.php">Looping</a></li>
            <li><a class="dropdown-item" href="array.php">Array</a></li>
            <li class="bg-danger"><a class="dropdown-item text-light" href="courseList.php">More Courses</a></li>
          </ul>
        </li>
        <?php if (isset($_SESSION['id']) && isset($_SESSION['email']) && $_SESSION['rank'] != 'member') {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard/index.php">Dashboard</a>
          </li>
          <?php
        }

        if (isset($_SESSION['id']) && isset($_SESSION['email']) && $_SESSION['rank'] == 'member') {
        ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="learnHistory.php">Your Learn History</a>
        </li>
        </ul>
        <form class="d-flex" action="/logout.php">
          <button class="btn btn-danger" type="submit">Logout</button>
        </form>
        <?php
        } else {
        ?>
      </ul>
      <form class="d-flex" action="/login.php">
        <button class="btn btn-danger" type="submit">Login</button>
      </form>
      <?php } ?>
    </div>
  </div>
</nav>