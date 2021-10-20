<?php
session_start();
    include("config.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        $email = $_POST['email'];
		$password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

		if(!empty($user_name) && !empty($email) && !empty($password)  && !is_numeric($user_name))
		{
            
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$hashed_password')";

			mysqli_query($conn, $query);

		
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="inner">
                <!-- Logo -->
                <a class="logo">
                    <span class="symbol"><img src="images/logo.svg" alt="logo" /></span><span class="title">K12</span>
                </a>
                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>



        <div id="main">
            <div class="inner">
                <h2>Register</h2>

                <form method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input id="text" type="text" name="user_name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id="text" type="text" name="email">
                    </div>
                   <div class="form-group">
                        <label>Password</label>
                        <input id="text" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <input id="button" type="submit" value="Signup">
                    </div>
                    <p> Already have an account?
                        <a href="login.php"> Login Here</a><br>
                        If you would like to find out more information about this software click on the three lines located at the top right and select about.
                    </p>
                </form>
            </div>
        </div>

</body>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</html>