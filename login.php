<?php
    session_start();
    include "conn.php";

    if (isset ($_POST["login"])) {
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $sql_user_data =  mysqli_query($conn, "SELECT * FROM users where email = '$email' AND password = '$password'");

        // jika ada data dan email dan passwordnya cocok, kirimkan data-data yang dibutuhkan
        if (mysqli_num_rows($sql_user_data) === 1) {
            $user_data_row = mysqli_fetch_assoc($sql_user_data);
            if ($user_data_row['email'] === $email && $user_data_row['password'] === $password) {
                $_SESSION['email'] = $user_data_row['email'];
                $_SESSION['id'] = $user_data_row['id'];
                $_SESSION['username'] = $user_data_row['username'];
                $_SESSION['rank'] = $user_data_row['rank'];

                if ($_SESSION['rank'] == 'admin' || $_SESSION['rank'] == 'staff') {
                    echo "
                    <script>
                        alert('Login succeded');
                        location.replace('dashboard/index.php');
                    </script>
                    ";
                } else {
                    $_SESSION['learn_history'] = $user_data_row['learn_history'];
                    echo "
                    <script>
                        alert('Login succeded');
                        location.replace('index.php');
                    </script>
                    ";
                }
                exit();
            }
        }

        else {
            echo "
            <script>
                alert('Wrong email or password!');
            </script>
            ";
        }
    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="public/img/favicon_io/favicon-32x32.png">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Login</title>
</head>
<body class="bg-dark">
    
<div class="row justify-content-start border border-dark my-4 mx-5 text-light">
    <div class="col-sm-5 ms-5 ps-5">
        <img src="public/img/loginImg.jpg" class="rounded float-start" style="width: 500px; height: 500px">
    </div>
    <div class="col-md-5" style="margin-top: 120px; margin-left: 100px">

        <main class="form-signin">
            <h1 class="h3 mb-5 fw-normal text-center"><b>W<span class="text-danger">3</span>Ripoff</b></h1>

            <!-- login input -->
            <form action="/login.php" method="POST">
                <center>
                <div class="form-floating col-md-8 pb-1">
                    <input type="email" name="email" class="form-control border border-dark @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" autofocus required>
                    <label for="email" class="text-secondary">Email address</label>
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="form-floating col-md-8 pb-3">
                    <input type="password" name="password" class="form-control border border-dark" id="password" placeholder="Password" required>
                    <label for="password" class="text-secondary">Password</label>
                </div>

                <button class="w-25 btn btn-lg btn-primary mb-1" type="submit" name="login">Login</button>
                
                </center>
            </form>
            <!-- login input -->
            <small class="d-block text-center mt-3">
                Not registered? <a href="/register.php" class="text-decoration-none text-primary">Register</a>
            </small>
        </main>
    </div>
</div>
        

<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>