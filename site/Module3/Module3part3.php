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
            <!-- Module 1 -->
            <div class="inner">
            
            <h3> Learning for loops, external JavaScript files, and checkboxes </h3>
            <div> Below we have a for loop that will continue to run as long as the condition is true. It will only stop when the condition becomes false.  <br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt   
                    &ltp id="demo"&gt &lt/p&gt
                    &ltscript&gt 
                    var list = ["cheese", "eggs", "milk", "cereal", "pancakes", "coffee"];
                    var text = "";
                    var i;
                    for (i = 0; i < list.length; i++) {
                    text += list[i] + "&ltbr&gt";
                    }   
                    document.getElementById("demo").innerHTML = text;
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The code above allows us to loop through this block of code till it reaches the end of the list length. With it printing each item on the list and with the i++ we are incrementing i by 1 to get to the next item on the list. 
                </p>
                <h4>Output</h4>
                <p>cheese<br>
                   eggs<br>
                   milk<br>
                   cereal<br>
                   pancakes<br>
                   coffee</p>
                <p>
                <h4> External JavaScript Files </h4>
                <div>
                Below we can declare our java script source in our html and start writing our javascript in a external .js file to stay organized with our different functions.
                </div>
                <pre>
                    <code>
                    &ltbody&gt 
                    &ltscript type="text/javascript" src="main.js">&lt/script&gt
                     &lt/script&gt
                     &lt/body&gt
                    </code>
                </pre>
                <div>
                <div>
                Below is code used to create a check box interface for the user.
                </div>
                <pre>
                    <code>
                    &ltbody&gt   
                    &lth1&gt Survey &lt/h1&gt
                    &ltform action="/action_page.php"&gt
                    &ltinput type="checkbox" id="vehicle1" name="vehicle1" value="Bike"&gt
                    &ltlabel for="vehicle1"> I have a bike&lt/label&gt&ltbr&gt
                    &ltinput type="checkbox" id="vehicle2" name="vehicle2" value="Car"&gt
                    &ltlabel for="vehicle2"> I have a car&lt/label&gt&ltbr&gt
                    &ltinput type="checkbox" id="vehicle3" name="vehicle3" value="Boat"&gt
                    &ltlabel for="vehicle3"> I have a boat&lt/label&gt&ltbr&gt&ltbr&gt
                    &ltinput type="submit" value="Submit"&gt
                    &lt/form&gt
                    &lt/body&gt
                    </code>
                </pre>
                <img src="../images/Mod3pt3_1.PNG" alt="if statement" width="280" height="190">
                <div>
                    
                                <br>


            
            <!-- Goto to the next page -->
            <form action="Module3part4.php">
                <input type="button" onclick="location.href='Module3part4.php';" value="Go to the next page" />  
            </form>
                
            </div>
            
        </div>
    </div>


   

</body>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</html>