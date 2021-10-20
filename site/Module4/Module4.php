<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 4</title>
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
                <h3>Welcome to the your fourth module!
                    <?php echo $user_data['user_name'];?>
                </h3>
                <p> In this module we will be learning about the diffrent ways we can design our webpages and linking other html pages we create. We will be using CSS(Cascading Style Sheets) which allows use to use different styles for web pages such as design, layout, and variations in display <br>
                    <ul>
                        <li>
                       A table element to display our data in rows and columns for a nice presentation <br>
                        <img src="../images/Mod4_1.PNG" alt="if statement" width="390" height="200"> 
                        </li> 
                        <li>
                        CSS styles we can use to give our pages some personality and the use of importing images  <br>
                         <img src="../images/Mod4_2.PNG" alt="if statement" width="400" height="300"> <img src="../images/Mod4_3.PNG" alt="if statement" width="400" height="300">
                        </li>
                        <li>
                        href attribute to jump to the multiple webpages we create in html <br>
                        <img src="../images/Mod4_4.PNG" alt="if statement" width="710" height="120">
                        </li>
                    
                    </ul>
                </p>

            <form action="Module4part2.php">
                <input type="button" onclick="location.href='Module4part2.php';" value="Go to the next page" />  
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