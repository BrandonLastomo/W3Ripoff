<?php session_start(); ?>
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

  <title>Welcome Page</title>
</head>
<body>

<!-- Navbar -->
<?php
  include "navbar.php";
?>

<!-- Header -->
<header class="px-3 my-0 bg-dark text-light">
    <?php
        include "conn.php";
        
        if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
        $username = $_SESSION['username'];
    ?>
    <h1 class="pb-3">Hello, <span class="text-danger"><?php echo $username;?> !</span></h1>
    <?php
        } else {
    ?>
    <h1 class="pb-3">Hello<span class="text-danger">!</span></h1>
    <?php }; ?>
    <h5 class="ps-2">This is a web for you to learn the big picture of <a href="dataType.php" class="text-danger">data type</a>, 
    <a href="conditional.php" class="text-danger">conditional statement</a>, <a href="looping.php" class="text-danger">looping</a>,
    <a href="array.php" class="text-danger">array</a>, and <a href="courseList.php" class="text-danger">more</a> in php.</h5>
</header>

<!-- Footer -->
<footer class="text-center text-lg-start text-dark bg-light">
  <!-- Copyright -->
  <div class="text-center py-3 px-3 text-dark bg-light">
    &copy; 2022 Copyright: Brandon with
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>