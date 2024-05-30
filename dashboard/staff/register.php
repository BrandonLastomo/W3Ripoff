<?php 
session_start();
include "../../conn.php";

// jika tombol add diklik, masukkan data ke database
if(isset($_POST["add"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = md5($_POST["password"]);
  $rank = $_POST["rank"];

  $regist = mysqli_query($conn, "insert into users(username, email, password, rank, learn_history)
                            values('$username', '$email', '$password', '$rank', '')");

  if ($regist) {
    echo "
    <script>
      alert('Registered');
      location.replace('/dashboard/staff/');
    </script>
    ";
  }

  else {
    echo "
    <script>
      alert('Register failed');
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="../../public/css/dashboard.css">
  <link rel="icon" type="image/x-icon" href="../../public/img/favicon_io/favicon-32x32.png">
  <title>Add Staff</title>
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
            <a class="nav-link" aria-current="page" href="../index.php">
              <i class="bi bi-house"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/dashboard">
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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard/staff">
              <i class="bi bi-person"></i>
              Staff List
            </a>
          </li>
        </ul>
      
      </div>
    </nav>
    <!-- sidebar -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Staff</h1>
      </div>

      <!-- add data input -->
      <form action="/dashboard/staff/register.php" method="POST" class="row g-3" enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email Address</label>
          <div class="input-group">
              <span class="input-group-text text-light bg-dark border-dark">@</span>
              <input type="email" name="email" class="form-control" id="email">
          </div>
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="col-md-6">
          <label for="rank" class="form-label">rank</label>
          <select id="rank" class="form-select" name="rank">
                  <option value="admin" selected>admin</option>
                  <option value="staff">staff</option>
          </select>
        </div>
        <input type="hidden" name="role" value="staff">
        <div class="col-12">
          <button type="submit" name = "add" class="btn btn-success float-end">Add</button>
        </div>
      </form>
      <!-- add data input -->

    </main>
  
  </div>
</div>
  
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>

</body>
</html>