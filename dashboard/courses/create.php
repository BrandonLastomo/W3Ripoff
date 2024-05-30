<?php 
  session_start();
	include "../../conn.php";

  // jika tombol add diklik, masukkan data ke database
	if(isset($_POST["add"])){
		$courseName = $_POST["courseName"];
		$body = $_POST["body"];

		$addCourse = mysqli_query($conn, "INSERT INTO courses(course_name, body) VALUES('$courseName', '$body')");

		if ($addCourse) {
			echo "
			<script>
				alert('New Course Has Been Added');
				location.replace('/dashboard/courses/');
			</script>
			";
		}

		else {
			echo "
			<script>
				alert('Add failed');
			";
		}
	}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../../public/img/favicon_io/favicon-32x32.png">
    <title>Add New Course</title>
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
          <a class="nav-link active" aria-current="page" href="/dashboard/courses">
            <i class="bi bi-book"></i>
            Course List
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/dashboard/staff">
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
        <h1 class="h2">Add New Course</h1>
      </div>

      <!-- add input -->
      <form action="/dashboard/courses/create.php" method="POST" class="row g-3" enctype="multipart/form-data">
        <div class="col-md-6">
          <label for="courseName" class="form-label">Course Name</label>
          <input type="text" class="form-control" name="courseName" id="courseName" autofocus>
        </div>

        <div class="col-12">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control" name="body" id="body" rows="30"></textarea>
        </div>
        <div class="col-12 mb-3">
          <button type="submit" name="add" class="btn btn-green float-end">Add</button>
        </div>
      </form>
      <!-- add input -->
    </main>
  </div>
</div>
    
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>

</body>
</html>