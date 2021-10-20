<?php

session_start();
include("config.php");
include("functions.php");
$user_data = check_login($conn);
$NumOfPoints = $user_data['points'];
$htmlcode = '';
$jscode = '';
$SolutionError = '';
$questionsAndAnwsers = "button"; //use a multi dimensional array for questions and awnsers this is jsut a test awnser
$points = 5;
$QS = '';
                            
$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];

$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }
if ($answer2 == "A") { $totalCorrect++; }
if ($answer3 == "C") { $totalCorrect++; }
if ($answer4 == "D") { $totalCorrect++; }



?>
<!DOCTYPE html>
<html>

<head>
    <title>Editor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
    <body>

<div id="page-wrap">
    
   
</div>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
                <li><a href="index.php">Home</a></li>
                <li><a href="editor.php">Editor</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
        <div id="main">
            <div class="inner">
            <h2>Results from Quiz Below! Feel free to try the module again for a better grade!</h2>

            <?php
        echo "<div id='results'>$totalCorrect / 4 correct</div>";
    ?>
    </br>
    Too see how many points you have earned so far check your profile tab located on the top right!
</br>
</br>
    <form action="Module2part1.php">

<input type="button" onclick="location.href='module2part1.php';" value="Next Module" /> 
  <!-- go to the next module  -->
</form>

</body>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</html>
