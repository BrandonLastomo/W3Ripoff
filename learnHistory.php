<?php
  session_start();
  include "conn.php";
  
  if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];

    $sql =  mysqli_query($conn, "SELECT learn_history FROM users WHERE id = '$id'");

    if (mysqli_num_rows($sql) === 1) {
        $row = mysqli_fetch_assoc($sql);
        $learn_history = $row['learn_history'];
    }
  }
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
  <title><?php echo "{$username}'s Learn History";?></title>
</head>
<body class="bg-dark">

<!-- Navbar -->
<?php
  include "navbar.php";
?>

<!-- History -->
<div class="py-5 mb-3 px-5 bg-light text-dark rounded" id="content">
  <center>
      <h1>
          Your Learn History
      </h1>
  </center>
  <hr>
  <?php
  if ($learn_history == "") {
      echo "
      <center><h5 class = text-danger>Let's learn something, shall we?</h5 class = text-danger></center>
      ";
  } else {
  ?>
  <h3 class="text-danger"><?php
  
      $i = 0;
      echo "<br>";
      while ($i < strlen($learn_history)) {
          echo "• ";
          while ($learn_history[$i] != ',') {
              echo "{$learn_history[$i]}";
              $i++;
          }
          $i++;
          echo "<br>";
      }
  }
  ?></h3>
</div>

<!-- Footer -->
<footer class="text-center text-lg-start text-light bg-dark" style="border-top: solid 1px lightgray">
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

</body>
</html>