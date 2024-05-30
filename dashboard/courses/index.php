<?php
session_start();
include "../../conn.php";

// cek apakah ada data atau tidak
$sql_course_data =  mysqli_query($conn, "SELECT * FROM courses");
$dataExist = mysqli_num_rows($sql_course_data) > 0;
// endof cek

// jika tombol delete diklik, hapus data
if (isset($_POST["delete"])) {
  $id = $_POST["id"];
  $sql_delete = mysqli_query($conn, "DELETE FROM courses WHERE id = $id");

  if ($sql_delete) {
    echo "
    <script>
      alert('The data has been deleted');
      location.replace('/dashboard/courses/');
    </script>
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
            <a class="nav-link" aria-current="page" href="../../index.php">
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
          <?php if ($_SESSION['rank'] == 'admin') {
          ?>
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
        <h3 class="mb-3">Courses List</h3>
        <hr class="border-2 border-top border-secondary mb-4">
      
        <div class="rounded shadow p-3 mb-3">
          
          <a href="create.php" class="btn btn-green mb-3">Add new course</a>

            <!-- Course List -->
            <div class="table-responsive col-lg-12">
              <table class="table table-striped table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                      $i = 1;
                      while ($course_data_row = mysqli_fetch_assoc($sql_course_data)) {
                        echo "
                        <tr>
                          <td> {$i}</td>
                          <td> {$course_data_row['course_name']} </td>
                          <td>
                            <form action='/dashboard/courses/course_edit.php' method='POST' class='d-inline'>
                                <input type='hidden' name='id' value='{$course_data_row['id']}'>
                                <button name='edit' class='btn btn-warning'>Edit</button>
                            </form>";
                        if ($course_data_row['id'] > 4) {
                          echo "
                            <form action='/dashboard/courses/' method='POST' class='d-inline'>
                                <input type='hidden' name='id' value='{$course_data_row['id']}'>
                                <button name='delete' class='btn btn-danger'>Delete</button>
                            </form>
                          </td>";
                        } else {
                          echo "
                            <button name='delete' class='btn btn-disabled btn-outline-danger'>Delete</button>
                          </td>";
                        }
                        echo "</tr>";
                        $i++;
                      }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- Course List -->

        </div>
      </div>
    
    </main>

  </div>
</div>
    
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>

</body>
</html>