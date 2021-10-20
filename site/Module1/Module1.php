<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
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
                <h3>Welcome to the your first module!
                    <?php echo $user_data['user_name'];?>
                </h3>
                <p> In this module you will learn the basics of Javascipt programming, but first lets familiarize yourself with the basics of HTML Elements and Tags <br>
                    <ul>
                        <li>
                            In html there are Elements which are essential to the way websites function and their design, We use tags such as <code> &lth1&gt </code> is used for headings 
                            <code> &lta&gt </code> which is used  to creating links and <code> &ltp&gt </code> for creating text and Paragaphs <br>

                        </li>
                        <li>
                            Most elements come  in pairs of start and end tags  and these are called <em>container elements,<br> </em> Examples include <code> &ltp&gt , &lth1&gt, &lth2&gt, &ltli&gt, &ltdiv&gt, 
                                &ltspan&gt </code> etc.
                        </li>
                        <li>
                            Void elements are elements that do not require a pair of tags and content is stored within the tag such as the <code> &ltmeta&gt </code> tag

                        </li>
                    </ul>
                </p>

            <form action="module1part2.php">
                <input type="button" onclick="location.href='module1part2.php';" value="Go to the next page" />  
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