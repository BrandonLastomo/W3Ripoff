<?php
session_start();
include "conn.php";

$id = $_POST['id'];
$sql_course_data =  mysqli_query($conn, "SELECT * FROM courses WHERE id = '$id'");
$course_data_row = mysqli_fetch_assoc($sql_course_data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="public/img/favicon_io/favicon-32x32.png">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"> 
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <title>Course List</title>
</head>
<body class="bg-dark">

<!-- Navbar -->
<?php
  include "navbar.php";
?>
<!-- Navbar -->

<!-- Insert to History if Logged In (Update History) -->
<?php
include "updateHistory.php";

updateHistory("$course_data_row[course_name],");

?>

<!-- Main Content -->
<div class="pt-5 pb-2 mb-3 px-5 bg-light text-dark rounded" id="content">
  <h3 class="text-danger"><?php echo $course_data_row['course_name'];?></h3>
  <br>
  <p><?php echo $course_data_row['body'];?></p>
</div>
<!-- Main Content -->

<!-- Footer -->
<footer
          class="text-center text-lg-start text-light bg-dark"
          style="border-top: solid 1px lightgray"
          >
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-1 col-lg-1 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fw-bold" id="footer-brand">Asahina</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-light">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-light">Blog</a>
            </p>
            <p>
              <a href="#!" class="text-light">Career</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Guide and Help</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-light">Privacy Policy</a>
            </p>
            <p>
              <a href="#!" class="text-light">Terms and Condition</a>
            </p>
            <p>
              <a href="#!" class="text-light">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col col-xl-3 mx-auto mb-4 text-end">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i>Karawang, Indonesia</p>
            <p><i class="fas fa-envelope mr-3"></i>asahinaco@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i>(0267) 1234</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3 text-light bg-dark">
      &copy; 2022 Copyright: Brandon with
      <a class="text-light" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>