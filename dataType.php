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
    <title>Data Type</title>
</head>
<body class="bg-dark">

<!-- Navbar -->
<?php
  include "navbar.php";
?>

<!-- Insert to History if Logged In (Update History) -->
<?php
include "updateHistory.php";

updateHistory("Data Type,");

?>

<!-- Prolog -->
<div class="pt-5 pb-2 mb-3 px-5 bg-light text-dark rounded" id="content">
    <h3 class="text-danger">Data Type</h3>
    <br>    
    <p>A data type, in programming, is a classification that specifies which type of value 
        a variable has and what type of mathematical, relational or logical operations can be applied to
        it without causing an error.</p>
    <p>PHP supports the following data types:</p>
    <ul>
        <li>String</li>
        <li>Integer</li>
        <li>Float (also called double)</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resource</li>
    </ul>
    <p>But in this page, we're learning only four of it (integer, float, char, and string). </p>
    <br>
    <hr>


<!-- Lesson -->

<!-- Int -->
    <p id="reminder"><span class="text-danger">*</span>Just a kindly reminder that the statements in the examples here are the most basic one, so don't get too attached to it. Thank you!</p>
    <div class="mt-3 pt-3" id="int">
        <h3 class="text-danger">1. Integer</h3>
        <br>
        <p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
            <br>
            Rules for integers:
        </p>
        <ul>
            <li>An integer must have at least one digit.</li>
            <li>An integer must not have a decimal point.</li>
            <li>An integer can be either positive or negative.</li>
            <li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), 
                octal (base 8), or binary (base 2) notation.</p></li>
        </ul>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
                <span id="variable">$a</span> = <span id="number">5</span>;
                <br>
                <span id="echo">echo</span> <span id="variable">$a</span>;
                <br>
                <hr>
                <p id="program">
                    Output:
                    <br>
                    <?php 

                    $a = 5;
                    echo $a;
                    
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
                        <span id="variable">$ <input type="text" name="intVar1"></span>
                        = 
                        <input type="text" name="intVal"> ;
                            <br><br>
                        <span id="echo">echo</span>
                        <span id="variable">$</span> <input type="text" name="intVar2"> ;
                            <br><br>
                        <button type = "submit" class="btn btn-danger" name="intBut">Show Output</button>
                    </form>
                    <hr>
                <p id="program">
                    Output:
                    <br>
                    <p id="program">
                        <?php
                        if (isset ($_POST["intBut"])) {
                            if ($_POST["intVar1"] == $_POST["intVar2"]) {
                                echo $_POST["intVal"];
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

<!-- Float -->
    <div class="mt-3 pt-3" id="float">
        <h3 class="text-danger">2. Float</h3>
        <br>
        <p>A float (floating point number) is a number with a decimal point or a number in exponential form.
            <br><br>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
            <span id="variable">$pi</span> = <span id="number">3.14159</span>;
                <br>
                <span id="echo">echo</span> <span id="variable">$pi</span>;
                <br>
                <hr>
                <p id="program">
                    Output:
                    <br>
                    <?php 
                    
                    $pi = 3.14159;
                    echo $pi;
                    
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
                        <span id="variable">$</span> <input type="text" name="floVar1">  = 
                            <input type="text" name="floVal" id="floVal"> ;
                            <br><br>
                        <span id="echo">echo</span> 
                        <span id="variable">$</span> <input type="text" name="floVar2"> ; 
                            <br><br>
                        <button type = "submit" class="btn btn-danger" name="floBut">Show Output</button>
                    </form>
                    <hr>
                <p id="program">
                    Output:
                    <br>
                    <p id="program">
                        <?php
                        if (isset ($_POST["floBut"])) {
                            if ($_POST["floVar1"] == $_POST["floVar2"]) {
                                echo $_POST["floVal"];
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
    
<!-- String -->
    <div class="mt-3 pt-3" id="stringst">
        <h3 class="text-danger">3. String</h3>
        <br>
        <p>A string is a sequence of characters, for example, the sentence "Hello world!".
            <br>
            A string can be any text inside quotes. You can use single or double quotes.
            <br><br>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
            <span id="variable">$s</span> = <span id="string">"Hello World!"</span>;
                <br>
                <span id="echo">echo</span> <span id="variable">$s</span>;
                <br>
                <hr>
                <p id="program">
                    Output:
                    <br>
                    <?php 
                    
                    $s = "Hello World!";
                    echo $s;
                    
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
                        <span id="variable">$</span> <input type="text" name="strVar1">  = 
                        <span id="string">" <input type="text" name="strVal" id="strVal"> "</span> ;
                            <br><br>
                        <span id="echo">echo</span>
                        <span id="variable"> $ </span><input type="text" name="strVar2"> ;
                            <br><br>
                        <button type = "submit" class="btn btn-danger" name="strBut">Show Output</button>
                    </form>
                    <hr>
                <p id="program">
                    Output:
                    <br>
                    <p id="program">
                        <?php
                        if (isset ($_POST["strBut"])) {
                            if ($_POST["strVar1"] == $_POST["strVar2"]) {
                                echo $_POST["strVal"];
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
    
<!-- Char -->
    <div class="mt-3 pt-3" id="char">
        <h3 class="text-danger">4. Char</h3>
        <br>
        <p>Unfortunately, PHP doesn't support the char data type, but we can use the string data type, 
            assign just one letter into it, and use single quote to make it look more "char".
            <br><br>

        <h5>Example: </h5>
        <br>
        <div class="bg-dark text-light p-3 mx-5 rounded">
            <p id="program">
            <span id="variable">$c</span> = <span id="string">'a'</span>;
                    <br>
                <span id="echo">echo</span> <span id="variable">$c</span>;
                    <br>
                <hr>
                <p id="program">
                    Output:
                        <br>
                    <?php 

                    $c = 'a';
                    echo $c;
                    
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
                        <span id="variable">$</span> <input type="text" name="charVar1">  = 
                        <span id="string">' <input type="text" name="charVal" id="charVal"> '</span> ;
                            <br><br>
                        <span id="echo">echo</span> 
                        <span id="variable">$ <input type="text" name="charVar2"> </span>;
                            <br><br>
                        <button type = "submit" class="btn btn-danger" name="charBut">Show Output</button>
                    </form>
                    <hr>
                <p id="program">
                    Output:
                    <br>
                    <p id="program">
                        <?php
                        if (isset ($_POST["charBut"])) {
                            if ($_POST["charVar1"] == $_POST["charVar2"]) {
                                echo $_POST["charVal"];
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