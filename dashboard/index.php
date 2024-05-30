<?php
session_start(); 
include "../countData.php";

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/dashboard.css">
  <link rel="icon" type="image/x-icon" href="../public/img/favicon_io/favicon-32x32.png">
  <title>Dashboard</title>
</head>
<body>

<!-- header -->
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <?php
      $username = $_SESSION['username'];
  ?>
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Hello, <?php echo $username?></a>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
        <form action="/logout.php" method="POST">
          <button type="submit" class="btn btn-dark">Logout <i class="bi bi-box-arrow-right ps-1"></i></button>
        </form>
    </div>
  </div>
</header>
<!-- header -->

<div class="container-fluid">
  <div class="row">
    
    <!-- sidebar -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">
              <i class="bi bi-house"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard">
              <i class="bi bi-tv"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard/courses">
              <i class="bi bi-book"></i>
              Course List
            </a>
          </li>
          <?php if ($_SESSION['rank'] == 'admin') {?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard/staff">
              <i class="bi bi-person"></i>
              Staff List
            </a>
          </li>
          <?php } ?>
        </ul>
      
      </div>
    </nav>
    <!-- sidebar -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <div class="mt-4">
          <h3 class="mb-3">These are Our Web's Brief Datas</h3>
          <hr class="border-2 border-top border-secondary mb-4">
        
        <!-- courses and staffs data -->
        <div class="row mb-4">
          <div class="col-sm-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title pb-3">Courses: <?php echo $_SESSION['count_course'];?></h5>
                <p class="card-text">How many courses do we have?</p>
                <a href="/dashboard/courses/" class="btn btn-danger float-end">Go to Course List</a>
              </div>
            </div>
          </div>
          <?php if ($_SESSION['rank'] == 'admin') {
          ?>
          <div class="col-sm-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title pb-3">Staffs: <?php echo $_SESSION['count_staff'];?></h5>
                <p class="card-text">How many staffs do we have?</p>
                <a href="/dashboard/staff" class="btn btn-danger float-end">Go to Staff List</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <!-- courses and staffs data -->

      </div>

    </main>
  </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>

</body>
</html>
