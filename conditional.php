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
  <title>Conditional Statement</title>
</head>
<body class="bg-dark">

<!-- Navbar -->
<?php
  include "navbar.php";
?>

<!-- Insert to History if Logged In (Update History) -->
<?php
include "updateHistory.php";

updateHistory("Conditional,");

?>

<!-- Prolog -->
<div class="pt-5 pb-2 mb-3 px-5 bg-light text-dark rounded" id="content">
        <h3 class="text-danger">Conditional Statement</h3>
        <br>    
        <p>a conditional statement is a set of rules performed if a certain condition is met. 
        <br>There are four conditional statement in PHP:</p>
        <ul>
            <li>If</li>
            <li>If else</li>
            <li>If elseif else</li>
            <li>Switch</li>
        </ul>
        <br>
        <hr>

<!-- Lesson -->

    <!-- If -->
    <p id="reminder"><span class="text-danger">*</span>Just a kindly reminder that the statements in the examples here are the most basic one, so don't get too attached to it. Thank you!</p>
    <div class="mt-3 pt-3" id="ifst">
        <h3 class="text-danger">1. If</h3>
            <br>
            <p>if statement executes some code if one condition is true.</p>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$i</span> = <span id="string">"yes"</span>;
                  <br><br>
                <span id="if">if</span> 
                <span id="kurung1">(</span>
                <span id="variable">$i</span> == <span id="string">"yes"</span>
                <span id="kurung1">) {</span>
                  <br>        
                <span id="echo">echo</span> <span id="string">"Hello!"</span>;
                  <br>
                <span id="kurung1">}</span>
                  <br>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php
                  
                  $i = "yes";

                  if ($i == "yes") {
                    echo "Hello!";
                  }
                  
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
                    <span id="variable">$</span> <input type="text" name="ifVar1">  = 
                    <input type="text" name="ifVal1" id="ifVal1"> ;
                      <br><br>
                    <span id="if">if</span> <span id="kurung1">(</span>
                    <span id="variable">$</span> <input type="text" name="ifVar2"> == <input type="text" name="ifVal2">
                    <span id="kurung1">) {</span><br><br>
                    <span id="echo">echo</span> 
                    <span id="string">" <input type="text" name="ifVal3"> "</span> ;<br><br>
                    <span id="kurung1">}</span>
                      <br><br>
                    <button type = "submit" class="btn btn-danger" name="ifBut">Show Output</button>
                  </form>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php
                      if (isset ($_POST["ifBut"])) {
                          if ($_POST["ifVar1"] == $_POST["ifVar2"]) {
                              if ($_POST["ifVal1"] == $_POST["ifVal2"]) {
                                  echo $_POST["ifVal3"];
                              }
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

    <!-- If else -->
    <div class="mt-3 pt-3" id="ifelse">
            <h3 class="text-danger">2. If else</h3>
            <br>
            <p>if else statement executes some code if a condition is true and another code if that condition is false.</p>

            <h3>Example: </h3>
            <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$i</span> = <span id="string">"no"</span>;
                  <br><br>
                <span id="if">if</span> <span id="kurung1">(</span>
                <span id="variable">$i</span> == <span id="string">"yes"</span>
                <span id="kurung1">)</span> <span id="kurung1">{</span>
                  <br>        
                <span id="echo">echo</span> <span id="string">"Hello!"</span>;
                  <br>
                <span id="kurung1">}</span>
                <span id="if">else</span> <span id="kurung1">{</span>
                  <br>
                <span id="echo">echo</span> <span id="string">"Hi!"</span>;
                  <br>
                <span id="kurung1">}</span>
                  <br>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php 
                  
                  $i = "no";

                  if ($i == "yes") {
                      echo "Hello!";
                  } else {
                    echo "Hi!";
                  }
                  
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
                  <span id="variable">$</span> <input type="text" name="ifelseVar1">  = 
                  <input type="text" name="ifelseVal1" id="ifelseVal1"> ;
                    <br><br>
                  <span id="if">if</span> <span id="kurung1">(</span>
                  <span id="variable">$</span> <input type="text" name="ifelseVar2"> == <input type="text" name="ifelseVal2">
                  <span id="kurung1">) {</span><br><br>
                  <span id="echo">echo</span> <span id="string">" <input type="text" name="ifelseVal3"> "</span>;<br><br>
                  <span id="kurung1">}</span> <span id="if">else</span> <span id="kurung1">{</span><br><br>
                  <span id="echo">echo</span> <span id="string">" <input type="text" name="ifelseVal4"> "</span> ;<br><br>
                  <span id="kurung1">}</span>
                    <br><br>
                  <button type = "submit" class="btn btn-danger" name="ifelseBut">Show Output</button>
                  </form>
                    <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php

                      if (isset ($_POST["ifelseBut"])) {
                          if ($_POST["ifelseVar1"] == $_POST["ifelseVar2"]) {
                              if ($_POST["ifelseVal1"] == $_POST["ifelseVal2"]) {
                                  echo $_POST["ifelseVal3"];
                              }

                              else {
                                echo $_POST["ifelseVal4"];
                              }
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

    <!-- If elseif else-->
    <div class="mt-3 pt-3" id="ifelseif">
            <h3 class="text-danger">3. If elseif else</h3>
            <br>
            <p>if elseif else statement executes different codes for more than two conditions.</p>

            <h3>Example: </h3>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$i</span> = <span id="string">"maybe"</span>;
                  <br><br>
                <span id="if">if</span> <span id="kurung1">(</span> 
                <span id="variable">$i</span> == <span id="string">"yes"</span>
                <span id="kurung1">) {</span>
                  <br>        
                <span id="echo">echo</span> <span id="string">"Hello!"</span>;
                  <br>
                <span id="kurung1">}</span> <span id="if">elseif</span> <span id="kurung1">(</span> 
                <span id="variable">$i</span> == <span id="string">"no"</span>
                <span id="kurung1">) {</span>
                  <br>
                <span id="echo">echo</span> <span id="string">"Hi!"</span>;
                  <br>
                <span id="kurung1">}</span> <span id="if">else</span> 
                <span id="kurung1">{</span>
                  <br>
                <span id="echo">echo</span> <span id="string">"Bye!"</span>;
                  <br>
                <span id="kurung1">}</span>
                  <br>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php
                  
                  $i = "maybe";

                  if ($i == "yes") {
                    echo "Hello!";
                  } elseif ($i == "no") {
                    echo "Hi!";
                  } else {
                    echo "Bye!";
                  }

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
                    <span id="variable">$</span> <input type="text" name="ifelseifVar1">  = 
                    <input type="text" name="ifelseifVal1" id="ifelseifVal1"> ;
                      <br><br><br>
                    <span id="if">if</span> <span id="kurung1">(</span> 
                    <span id="variable">$</span> <input type="text" name="ifelseifVar2"> == <input type="text" name="ifelseifCon1">
                    <span id="kurung1">) {</span>
                      <br><br>
                    <span id="echo">echo</span> 
                    <span id="string">" <input type="text" name="ifelseifOut1"> "</span>;
                      <br><br>
                    <span id="kurung1">}</span> 
                    <span id="if">elseif</span> <span id="kurung1">(</span> 
                    <span id="variable">$</span> <input type="text" name="ifelseifVar3"> == <input type="text" name="ifelseifCon2">
                    <span id="kurung1">) {</span>
                      <br><br>
                    <span id="echo">echo</span> 
                    <span id="string">" <input type="text" name="ifelseifOut2"> "</span>;
                      <br><br>
                    <span id="kurung1">}</span>
                    <span id="if">else</span> <span id="kurung1">{</span>
                      <br><br>
                    <span id="echo">echo</span>
                    <span id="string">" <input type="text" name="ifelseifOut3"> "</span>;
                      <br><br>
                    <span id="kurung1">}</span>
                      <br><br>
                    <button type = "submit" class="btn btn-danger" name="ifelseifBut">Show Output</button>
                  </form>
                      <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php
                      
                      if (isset ($_POST["ifelseifBut"])) {
                          if ($_POST["ifelseifVar1"] == $_POST["ifelseifVar2"] && $_POST["ifelseifVar1"] == $_POST["ifelseifVar3"]) {
                              if ($_POST["ifelseifVal1"] == $_POST["ifelseifCon1"]) {
                                  echo $_POST["ifelseifOut1"];
                              }

                              elseif ($_POST["ifelseifVal1"] == $_POST["ifelseifCon2"]) {
                                echo $_POST["ifelseifOut2"];
                              }

                              else {
                                echo $_POST["ifelseifOut3"];
                              }
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

    <!-- Switch -->
    <div class="mt-3 pt-3" id="switch">
            <h3 class="text-danger">4. Switch</h3>
            <br>
            <p>switch statement switchs the value of a variable and executes one of many blocks of code depends on the value.</p>
            <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$i</span> = <span id="string">"no"</span>;
                  <br><br>
                <span id="if">switch</span> <span id="kurung1">(</span> 
                <span id="variable">$i</span> 
                <span id="kurung1">) {</span>
                  <br>        
                <span id="if">case</span> <span id="string">"yes"</span>:
                  <br>
                <span id="echo">echo</span> <span id="string">"Hello!"</span>;
                  <br>
                <span id="if">break</span>;
                  <br><br>
                <span id="if">case</span> <span id="string">"no"</span>:
                  <br>
                <span id="echo">echo</span> <span id="string">"Hi!"</span>;
                  <br>
                <span id="if">break</span>;
                  <br><br>  
                <span id="if">default</span>:
                  <br>
                <span id="echo">echo</span> <span id="string">"Bye!"</span>;
                  <br>
                <span id="if">break</span>;
                  <br>
                <span id="kurung1">}</span>
                  <br>
                  <hr>
              <p id="program">
                  Output:
                  <br>
                  <?php

                  $i = "no";

                  switch ($i) {
                    case "yes":
                      echo "Hello!";
                    break;
                    case "no":
                      echo "Hi!";
                    break;
                    default:
                      echo "Bye!";
                    break;
                  }

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
                  <span id="variable">$</span> <input type="text" name="switchVar1">  = 
                  <input type="text" name="switchVal1" id="switchVal1"> ;
                    <br><br><br>
                  <span id="if">switch</span> <span id="kurung1">(</span>
                  <span id="variable">$</span> <input type="text" name="switchVar2"> 
                  <span id="kurung1">) {</span>
                    <br><br>
                  <span id="if">case</span> <input type="text" name="switchCon1"> : 
                    <br><br>
                  <span id="echo">echo</span> 
                  <span id="string">" <input type="text" name="switchOut1"> " </span>;
                    <br><br>
                  <span id="if">break</span>;
                    <br><br><br>
                  <span id="if">case</span> <input type="text" name="switchCon2"> : 
                    <br><br>
                  <span id="echo">echo</span> 
                  <span id="string">" <input type="text" name="switchOut2"> "</span>;
                    <br><br>
                  <span id="if">break</span>;
                    <br><br><br>
                  <span id="if">default</span>: 
                    <br><br>
                  <span id="echo">echo</span>
                  <span id="string">" <input type="text" name="switchOut3"> "</span>;
                    <br><br>
                  <span id="if">break</span>; 
                    <br><br>
                  <span id="kurung1">}</span>
                    <br><br>
                  <button type = "submit" class="btn btn-danger" name="switchBut">Show Output</button>
                  </form>
                    <hr>
              <p id="program">
                  Output:
                  <br>
                  <p id="program">
                      <?php
                      if (isset ($_POST["switchBut"])) {
                          if ($_POST["switchVar1"] == $_POST["switchVar2"]) {
                            $switchMaterial = $_POST["switchVal1"];
                            $con1 = $_POST["switchCon1"];
                            $con2 = $_POST["switchCon2"];

                            switch ($switchMaterial) {
                              case $con1:
                                echo $_POST["switchOut1"];
                                break;
                                
                              case $con2:
                                echo $_POST["switchOut2"];
                                break;
                              
                              default:
                                echo $_POST["switchOut3"];
                                break;
                            }
                        } else {
                              echo "Your variable doesn't match!";
                          }
                        }
                      ?>
                  </p>
              </p>    
          </p>
        </div>
    </div><br><hr>
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
