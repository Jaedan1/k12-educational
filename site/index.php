<?php

session_start();
include("config.php");
include("functions.php");
$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>K12</title>
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
                <a href="index.php" class="logo">
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
                <li><a href="editor.php">Editor</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="Leaderbaord.php"> Leaderboard</a></li>
                <li> <a href="logout.php"> Logout</a></li>
                
            </ul>
        </nav>


        <div id="main">
            <div class="inner">
                <h4>CS for Beginners</h4>
                <p>Welcome to CS for Beginners, an interactive program designed to teach the fundamentals of computer science to new learners or semi-experienced coders!</p>
                <p>The software is set up in different blocks, or paths, each being beginner friendly and targeted towards educating the user in a single field and language at a time.</p>
                <p>The paths will contain a short preface, followed by interactive exercises, projects, and short quizzes. The quizzes are designed to measure your retention of the material.</p>
             <b><p> Hello, <?php echo $user_data['user_name'];?> </p> </b>
                <p>To get started, please select a path!</p>
                <section class="tiles">
                    <article class="style1">
                        <span class="image">
                                <img src="images/pic01.jpg" alt="" />
                            </span>
                            <a href="Module1/Module1.php">
                            <h2>Module 1</h2>
                            <div class="content">


                                <p>Module 1 introduction: Re-visit the basics of html and how to create a working function in javascript</p>

                            </div>
                        </a>
                    </article>
                    <article class="style2">
                        <span class="image">
                                <img src="images/pic02.jpg" alt="" />
                            </span>
                        <a href="Module2/Module2.php">
                            <h2>Module 2</h2>
                            <div class="content">
                                <p>Module 2: More Javascript basics </p>
                            </div>
                        </a>
                    </article>
                    <article class="style3">
                        <span class="image">
                                <img src="images/pic03.jpg" alt="" />
                            </span>
                        <a href="Module3/Module3.php">
                            <h2>Module 3</h2>
                            <div class="content">
                                <p>Module 3: Additional Controls for Java Script</p>
                            </div>
                        </a>
                    </article>
                    <article class="style4">
                        <span class="image">
                                <img src="images/pic04.jpg" alt="" />
                            </span>
                        <a href="Module4/Module4.php">
                            <h2>Module 4</h2>
                            <div class="content">
                                <p>Module 4: CSS, Tables, Import pics</p>
                            </div>
                        </a>
                    </article>
                    <article class="style5">
                        <span class="image">
                                <img src="images/pic05.jpg" alt="" />
                            </span>
                        <a href="Module5/Module5.php">
                            <h2>Module 5</h2>
                            <div class="content">
                                <p>Module 5: Classes, new Operator, Methods, Arrays  </p>
                            </div>
                        </a>
                    </article>
                    <article class="style6">
                        <span class="image">
                                <img src="images/pic06.jpg" alt="" />
                            </span>
                        <a href="Module6/Module6.php">
                            <h2>Module 6</h2>
                            <div class="content">
                                <p>Module 6: Final Project</p>
                            </div>
                        </a>
                    </article>

                </section>
            </div>
        </div>

    </div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>