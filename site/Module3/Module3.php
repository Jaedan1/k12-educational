<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 3</title>
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
                <li><a href="../Leaderbaord.php"> Leaderboard</a></li>
            </ul>
        </nav>



        <div id="main">
            <div class="inner">
                <h3>Welcome to the your third module!
                    <?php echo $user_data['user_name'];?>
                </h3>
                <p> In this module you will learn more Javascript programming functionality, such as while/do loops, for loops, external JavaScript files, and Checkboxes  <br>
                    <ul>
                        <li>
                        A while loop is a statement if u need to do the same thing repeatedly.  We use a do loop statement when we are sure that the loop body should be executed at least one time.<br>
                        <img src="../images/Mod3_1.PNG" alt="if statement" width="400" height="200"> <img src="../images/Mod3_2.PNG" alt="if statement" width="400" height="200">
                        </li>
                        <li>
                        A for loop is a statement that loops through a block of code a number of times <br>
                         <img src="../images/Mod3_3.PNG" alt="if statement" width="400" height="150">
                        </li>
                        <li>
                        External JavaScript Files are implemented to give ur html code a cleaner look and too stay organized by having the java script on another file. Instead of it being mixed with html code.
                        </li>
                        <li>
                        A checkbox is implemented as a input type and can be used for various forms on your website and surveys.

                        </li>
                    </ul>
                </p>

            <form action="Module3part2.php">
                <input type="button" onclick="location.href='Module3part2.php';" value="Go to the next page" />  
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