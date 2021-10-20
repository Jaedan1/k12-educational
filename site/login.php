<?php
session_start();
include("config.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if(password_verify($password, $user_data['password']))
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        
        echo "Wrong Username or Password!";
    }else
    {
        echo "Wrong Username or Password!";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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
                <h2>Log In</h2>

                <form action="" method="POST">
                   
                    <div class ="form-group">
                        <label>UserName</label>
                        <input id="text" type="text" name="user_name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="text" type="password" name="password">
                    </div>
                    
                    <div class="form-group">
                    <input id="button" type="submit" value="Log in">
                    </div>
                    <p> Don't have an account?
                        <a href="Regisster.php"> Register Here</a><br>
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