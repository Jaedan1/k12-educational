<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 5</title>
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
                <h3>Welcome to the your fifth module!
                    <?php echo $user_data['user_name'];?>
                </h3>
                <p> In this module you will learn more Javascript programming functionality, such as Classes, New operator, Methods, and Arrays  <br>
                <p> First we will go over what is Object-Oriented Programming which is the foundation for this module. OOP is about creating objects that contain both data and functions. The reason we use OOP is because it allows you to break down your software into bite-sized problems that you then can solve one object at a time. 
                    <ul>
                        <li>
                        A class is a description or blueprint for an object’s characteristics. When you define a class, you specify the properties and methods that an object will use.<br>
                        <img src="../images/Mod5_1.PNG" alt="if statement" width="450" height="250"> 
                        </li>
                        <li>
                        The new operator calls the specified class’s constructor and passes its arguments to the constructor’s associated parameters. <br>
                         <img src="../images/Mod5_2.PNG" alt="if statement" width="600" height="50">
                        </li>
                        <li>
                        A method is a programmed procedure that is defined as part of a class and included in any object of that class.                        </li>
                        <li>
                        A array is a collection is a group of items with a common name. With both collections and arrays, you access an individual element using the name, []'s, and an index variable: - name-of-collection-or-array[index-variable]


                        </li>
                    </ul>
                </p>

            <form action="Module5part2.php">
                <input type="button" onclick="location.href='Module5part2.php';" value="Go to the next page" />  
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