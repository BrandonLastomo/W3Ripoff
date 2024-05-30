<?php 
	include "conn.php";

    // Jika tombol register sudah diklik, masukkan data ke database
	if(isset($_POST["register"])){
		$username = $_POST["username"];
		$email = $_POST["email"];
        $password = md5($_POST["password"]);

		$regist = mysqli_query($conn, "insert into users(username, email, password, rank, learn_history)
                             values('$username', '$email', '$password', 'member', '')");

		if ($regist) {
			echo "
			<script>
				alert('Registered');
				location.replace('login.php');
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="public/img/favicon_io/favicon-32x32.png">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Register</title>
</head>
<body class="bg-dark">

    
    <div class="row justify-content-start border border-dark mx-5 text-light">
        <div class="col-sm-5 my-4 ms-5 ps-5">
            <img src="public/img/loginImg.jpg" class="rounded float-start" style="width: 500px; height: 500px">
        </div>
        <div class="col-md-5" style="margin-top: 120px; margin-left: 100px">

                <main class="form-signin">
                    <h1 class="h3 mb-5 fw-normal text-center"><b>W<span class="text-danger">3</span>Ripoff</b></h1>

                    <form action="/register.php" method="POST">
                        <center>
                    <div class="form-floating col-md-8 pb-1">
                        <input type="text" name="username" class="form-control border border-dark"
                        id="username" placeholder="username" autofocus required>
                        <label for="username" class="text-secondary">Username</label>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-floating col-md-8 pb-1">
                        <input type="email" name="email" class="form-control border border-dark"
                        id="email" placeholder="name@example.com" required>
                        <label for="email" class="text-secondary">Email address</label>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-floating col-md-8 pb-3">
                        <input type="password" name="password" class="form-control border border-dark" id="password" placeholder="Password" required>
                        <label for="password" class="text-secondary">Password</label>
                    </div>

                    <button class="w-25 btn btn-lg btn-primary mb-1" type="submit" name="register">Register</button>
                    
                    </center>
                    </form>
                    <small class="d-block text-center mt-3">
                        Already have an account? <a href="/login.php" class="text-decoration-none text-primary">Login</a>
                    </small>
                </main>
            </div>
        </div>
        

<script type="text/javascript" src="/js/bootstrap.js"></script>

</body>
</html>