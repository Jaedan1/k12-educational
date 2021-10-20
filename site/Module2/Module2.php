<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css?v=<?php echo time(); ?>" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="inner">
                <!-- Logo -->
                <a href="../index.php" class="logo">
                    <span class="symbol"><img src="../images/logo.svg" alt="logo" /></span><span class="title">K12</span>
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="../editor.php">Editor</a></li>
                <li><a href="../about.html">About</a></li>
                <li><a href="../profile.php">Profile</a></li>
                <li><a href="../Leaderbaord.php">Leaderboard</a></li>
            </ul>
        </nav>



        <div id="main">
            <div class="inner">
                <h3>Welcome to the your second module!
                    <?php echo $user_data['user_name'];?>
                </h3>
                <p> In this module you will learn more basic Javascript programming, such as if statements/else if, strings, alert & confirm methods <br>
                    <ul>
                        <li>
                        An if statement is a programming conditional statement that, if proved true, performs a function or displays information. We use else to specify a block of code to be executed, if the same condition is false. Use else if to specify a new condition to test, if the first condition is false.
                        <img src="../images/Mod2_1.PNG" alt="if statement" width="290" height="150">
                        </li>
                        <li>
                        JavaScript strings are used for storing and manipulating text.
                        </li>
                        <li>
                        An alert box is often used if you want to make sure information comes through to the user. The confirm() method displays a dialog box with a specified message, along with an OK and a Cancel button. A confirm box is often used if you want the user to verify or accept something.

                        </li>
                    </ul>
                </p>

            <form action="Module2part2.php">
                <input type="button" onclick="location.href='Module2part2.php';" value="Go to the next page" />  
            </form>
                
            </div>
        </div>
    </div>


    <script>
    
    </script>

</body>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</html>