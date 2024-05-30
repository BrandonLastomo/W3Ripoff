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
  <title>Array</title>
</head>
<body class="bg-dark">

<!-- Navbar -->
<?php
  include "navbar.php";
?>

<!-- Insert to History if Logged In (Update History) -->
<?php
include "updateHistory.php";

updateHistory("Array,");

?>

<!-- Prolog -->
<div class="pt-5 pb-2 mb-3 px-5 bg-light text-dark rounded" id="content">
        <h3 class="text-danger">Array</h3>
        <br>    
        <p>An array is a special data type, which can hold more than one value at a time. 
        <br>There are three types of arrays in PHP:</p>
        <ul>
            <li>Indexed arrays</li>
            <li>Associative array</li>
            <li>Multidimensional Array</li>
        </ul>
        <br>
        <hr>

<!-- Lesson -->

    <!-- Indexed -->    
    <p id="reminder"><span class="text-danger">*</span>Just a kindly reminder that the statements in the examples here are the most basic one, so don't get too attached to it. Thank you!</p>
    <div class="mt-3 pt-3" id="ind">
        <h3 class="text-danger">1. Indexed Array</h3>
          <br>
        <p>Indexed array is an array with a numeric index and the most basic array.</p>
        
        <h5>Example: </h5>
          <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
              <span id="variable">$arr</span> = <span id="echo">array</span> <span id="kurung1">(</span> 
              <span id="string">"bento"</span>, <span id="string">"pizza"</span>, <span id="string">"ramen"</span>
              <span id="kurung1">)</span>;
                <br>
              <span id="echo">echo</span> <span id="variable">$arr</span> <span id="kurung1">[<span id="number">1</span>]</span>;
                <br>
                <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php
                  
                  $arr = array("bento", "pizza", "ramen");
                  
                  echo $arr [1];

                  ?>
              </p>
            </p>
        </div>
        <br>

        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
          <p id="program">
              <form action="" method="POST" id="program">
                <span id="variable">$</span> <input type="text" name="arrindVar1">  = 
                <span id="echo">array</span> <span id="kurung1">(</span>
                <span id="string">" <input type="text" name="arrindVal1"> "</span>, 
                <span id="string">" <input type="text" name="arrindVal2"> "</span>, 
                <span id="string">" <input type="text" name="arrindVal3"> "</span> 
                <span id="kurung1">)</span>;
                  <br><br>
                <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="arrindVar2"> 
                <span id="kurung1">[ <input type="text" name="arrindInd1"> ]</span>;
                  <br><br>
                <button type = "submit" class="btn btn-danger" name="arrindBut">Show Output</button>
              </form>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["arrindBut"])) {
                        $arr = [$_POST["arrindVal1"], $_POST["arrindVal2"], $_POST["arrindVal3"]];
                          if ($_POST["arrindVar1"] == $_POST["arrindVar2"]) {
                                  echo $arr [$_POST["arrindInd1"]];
                          }

                          else {
                              echo "Your variable doesn't match!";
                          }
                      }

                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div><br><hr>

    <!-- Associative -->
    <div class="mt-3 pt-3" id="asso">
            <h3 class="text-danger">2. Associative Array</h3>
            <br>
            <p>Associative array is an array with named keys.</p>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$ar</span> = <span id="kurung1">[</span> 
                <span id="string">"eat"</span> => <span id="string">"chicken"</span>, 
                <span id="string">"drink"</span> => <span id="string">"milk"</span>, 
                <span id="string">"dessert"</span> => <span id="string">"cheesecake"</span>
                <span id="kurung1">]</span>;
                  <br><br>
                <span id="echo">echo</span> <span id="variable">$ar</span> 
                <span id="kurung1">[ <span id="string">"eat"</span> ]</span> . <span id="string">"< br >"</span>;<br>
                <span id="echo">echo</span> <span id="variable">$ar</span> 
                <span id="kurung1">[ <span id="string">"drink"</span> ]</span> . <span id="string">"< br >"</span>;<br>
                <span id="echo">echo</span> <span id="variable">$ar</span> 
                <span id="kurung1">[ <span id="string">"dessert"</span> ]</span> . <span id="string">"< br >"</span>;
                  <br>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php

                  $ar = ["eat"=>"chicken", "drink"=>"milk", "dessert"=>"cheesecake"];
                  
                  echo $ar ["eat"] . "<br>";
                  echo $ar ["drink"] . "<br>";
                  echo $ar ["dessert"] . "<br>";

                  ?>
              </p>
            </p>
        </div>
        <br>

        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
          <p id="program">
            <form action="" method="POST" id="program">
              <span id="variable">$</span> <input type="text" name="assoVar1">  = <span id="kurung1">[</span>
              <span id="string">" <input type="text" name="assoKey1"> "</span> => <span id="string">" <input type="text" name="assoVal1"> "</span>,
              <span id="string">" <input type="text" name="assoKey2"> "</span> => <span id="string">" <input type="text" name="assoVal2"> "</span>, 
                <br><br>
              <span id="string">" <input type="text" name="assoKey3"> "</span> => <span id="string">" <input type="text" name="assoVal3"> "</span> 
              <span id="kurung1">]</span>;
                <br><br><br>  
              <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="assoVar2"> <span id="kurung1">[ <span id="string">" <input type="text" name="assoKeyValid1"> "</span> ]</span> . <span id="string">"< br >"</span>;
                <br><br>
              <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="assoVar3"> <span id="kurung1">[ <span id="string">" <input type="text" name="assoKeyValid2"> "</span> ]</span> . <span id="string">"< br >"</span>;
                <br><br>
              <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="assoVar4"> <span id="kurung1">[ <span id="string">" <input type="text" name="assoKeyValid3"> "</span> ]</span> . <span id="string">"< br >"</span>;
                <br><br>
              <button type = "submit" class="btn btn-danger" name="assoBut">Show Output</button>
            </form>
                <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["assoBut"])) {
                        $arr = [$_POST["assoKey1"] => $_POST["assoVal1"], 
                                $_POST["assoKey2"] => $_POST["assoVal2"], 
                                $_POST["assoKey3"] => $_POST["assoVal3"]];
                          if ($_POST["assoVar1"] == $_POST["assoVar1"] && $_POST["assoVar1"] == $_POST["assoVar2"]
                              && $_POST["assoVar1"] == $_POST["assoVar3"] && $_POST["assoVar1"] == $_POST["assoVar4"]) {
                                  echo $arr [$_POST["assoKeyValid1"]] . "<br>";
                                  echo $arr [$_POST["assoKeyValid2"]] . "<br>";
                                  echo $arr [$_POST["assoKeyValid3"]];
                          }

                          else {
                              echo "Your variable doesn't match!";
                          }
                      }

                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div><br><hr>

    <!-- Multidimensional -->
    <div class="mt-3 pt-3" id="mul">
            <h3 class="text-danger">3. Multidimensional Array</h3>
            <br>
            <p>Multidimensional array is an array containing one or more array.</p>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-1  rounded">
            <p id="program">
                <span id="variable">$data</span> = <span id="echo">array</span> <span id="kurung1">(</span>
                    <br>
                <span id="echo">array</span><span id="kurung1">(</span><span id="number">001</span>, 
                <span id="string">"Roman"</span>, <span id="string">"Reading"</span><span id="kurung1">)</span>,
                    <br>
                <span id="echo">array</span><span id="kurung1">(</span><span id="number">002</span>, 
                <span id="string">"Dika"</span>, <span id="string">"Playing games"</span><span id="kurung1">)</span>,
                    <br>
                <span id="echo">array</span><span id="kurung1">(</span><span id="number">003</span>, 
                <span id="string">"Winona"</span>, <span id="string">"Cooking"</span><span id="kurung1">)</span>,
                    <br>
                <span id="echo">array</span><span id="kurung1">(</span><span id="number">004</span>, 
                <span id="string">"John"</span>, <span id="string">"Workout"</span><span id="kurung1">)</span>
                    <br>
                    <span id="kurung1">)</span>;
                <br><br>
                <span id="echo">echo</span> <span id="string">"ID: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">0</span>][<span id="number">0</span>]</span> .
                <span id="string">", name: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">0</span>][<span id="number">1</span>]</span> . 
                <span id="string">", hobby: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">0</span>][<span id="number">2</span>]</span> . <span id="string">"< br >"</span>;
                    <br>
                <span id="echo">echo</span> <span id="string">"ID: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">1</span>][<span id="number">0</span>]</span> .
                <span id="string">", name: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">1</span>][<span id="number">1</span>]</span> . 
                <span id="string">", hobby: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">1</span>][<span id="number">2</span>]</span> . <span id="string">"< br >"</span>;
                    <br>
                <span id="echo">echo</span> <span id="string">"ID: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">2</span>][<span id="number">0</span>]</span> .
                <span id="string">", name: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">2</span>][<span id="number">1</span>]</span> . 
                <span id="string">", hobby: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">2</span>][<span id="number">2</span>]</span> . <span id="string">"< br >"</span>;
                    <br>
                <span id="echo">echo</span> <span id="string">"ID: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">3</span>][<span id="number">0</span>]</span> .
                <span id="string">", name: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">3</span>][<span id="number">1</span>]</span> . 
                <span id="string">", hobby: "</span> . <span id="variable">$data</span><span id="kurung1">[<span id="number">3</span>][<span id="number">2</span>]</span> . <span id="string">"< br >"</span>;
                    <br>
                    <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php

                  $data = array (
                            array(001, "Roman", "Reading"), 
                            array(002, "Dika", "Playing games"),
                            array(003, "Winona", "Cooking"), 
                            array(004, "John", "Workout")
                          );
                  
                  echo "ID: " . $data[0][0] . ", name: " . $data[0][1] . ", hobby: " . $data[0][2] . "<br>";
                  echo "ID: " . $data[1][0] . ", name: " . $data[1][1] . ", hobby: " . $data[1][2] . "<br>";
                  echo "ID: " . $data[2][0] . ", name: " . $data[2][1] . ", hobby: " . $data[2][2] . "<br>";
                  echo "ID: " . $data[3][0] . ", name: " . $data[3][1] . ", hobby: " . $data[3][2] . "<br>";
                  
                  ?>
              </p>
            </p>
        </div>
        <br>

        <h5>Try It Yourself!</h5>
        <br>
        <div class="bg-dark text-light py-3 px-5 mx-5 rounded">
          <p id="program">
            <form action="" method="POST" id="program">
              <span id="variable">$</span> <input type="text" name="mulVar1">  = <span id="echo">array</span><span id="kurung1">(</span> 
                <br><br>
              <span id="echo">array</span> <span id="kurung1">(</span> <span id="string">" <input type="text" name="mulVal01"> "</span>, 
              <span id="string">" <input type="text" name="mulVal02"> "</span>, 
              <span id="string">" <input type="text" name="mulVal03"> "</span>
              <span id="kurung1">)</span>, 
                <br><br>
              <span id="echo">array</span> <span id="kurung1">(</span> <span id="string">" <input type="text" name="mulVal11"> "</span>,
              <span id="string">" <input type="text" name="mulVal12"> "</span>, 
              <span id="string">" <input type="text" name="mulVal13"> "</span>
              <span id="kurung1">)</span>, 
                <br><br>
              <span id="echo">array</span> <span id="kurung1">(</span> <span id="string">" <input type="text" name="mulVal21"> "</span>,
              <span id="string">" <input type="text" name="mulVal22"> "</span>, 
              <span id="string">" <input type="text" name="mulVal23"> "</span>
              <span id="kurung1">) 
                <br><br>
              )</span>;
                <br><br><br>  
              <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="mulVar2"> <span id="kurung1">[ <input type="text" name="mulInd11"> ] 
              [ <input type="text" name="mulInd21"> ]</span>. <span id="string">"< br >"</span>;<br><br>
              <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="mulVar2"> <span id="kurung1">[ <input type="text" name="mulInd12"> ] 
              [ <input type="text" name="mulInd22"> ]</span>. <span id="string">"< br >"</span>;<br><br>
              <span id="echo">echo</span> <span id="variable">$</span> <input type="text" name="mulVar3"> <span id="kurung1">[ <input type="text" name="mulInd13"> ] 
              [ <input type="text" name="mulInd23"> ]</span>;
                <br><br>
              <button type = "submit" class="btn btn-danger" name="mulBut">Show Output</button>
            </form>
                <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["mulBut"])) {
                        $arr = [
                          [$_POST["mulVal01"], $_POST["mulVal02"], $_POST["mulVal03"]], 
                          [$_POST["mulVal11"], $_POST["mulVal12"], $_POST["mulVal13"]], 
                          [$_POST["mulVal21"], $_POST["mulVal22"], $_POST["mulVal23"]]
                        ];

                          if ($_POST["mulVar1"] == $_POST["mulVar2"] && $_POST["mulVar1"] == $_POST["mulVar3"]) {
                                  echo $arr [$_POST["mulInd11"]] [$_POST["mulInd21"]] . "<br>";
                                  echo $arr [$_POST["mulInd12"]] [$_POST["mulInd22"]] . "<br>";
                                  echo $arr [$_POST["mulInd13"]] [$_POST["mulInd23"]];
                          }

                          else {
                              echo "Your variable doesn't match!";
                          }
                      }

                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div>
</div>

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

</body>
</html>