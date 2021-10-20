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
            
            <h3> Learning the Basics of Javascript: While/do Loop Statement </h3>
            <div> Lets get familiar with the basic concept of a while loop in java script and how its implemented with the html code below<br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt 
                    &ltp&gt Click the button to loop through a block of code as long as i is less than 5. &lt/p&gt  
                    &ltinput type="button" value="Click Me!" onclick="myFunction();"> Try it &lt/button&gt   
                    &ltp id="demo"&gt &lt/p&gt
                    &ltscript&gt function myFunction() {
                        var text = "";
                        var i = 0;
                         while (i < 5) {
                            text += "&ltbr&gtThe number is " + i;
                            i++;
                            }
                        document.getElementById("demo").innerHTML = text;
                            }
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The while loop above loops through a block of code as long as a variable (i) is less than 5 when the user clicks the button. Once clicked it will print out the number is 0 and add 1 to it each time until it stops at 4.
                </p>
                <h4>Output</h4>
                <p>The number is 0<br>
                   The number is 1<br>
                   The number is 2<br>
                   The number is 3<br>
                   The number is 4</p>
                <p>
                    The while loop above loops through a block of code as long as a variable (i) is less than 5 when the user clicks the button. Once clicked it will print out the number is 0 and add 1 to it each time until it stops at 4.
                </p>
                <h4> Do loop </h4>
                <div>
                We will get the same output as above but we are implementing a do loop to get that output. The do loop is a loop that only executes once, but in this case because we have a while loop condition below it executes that do loop 5 times.
                </div>
                <pre>
                    <code>
                    function myFunction() {
                    var text = "";
                    var i = 0;
                    do {
                    text += "&ltbr&gtThe number is " + i;
                    i++;
                        }
                        while (i < 5);
                        document.getElementById("demo").innerHTML = text;
                        }
                    </code>
                </pre>
                <div>
                    <b>Importance of While Loops</b>
                    <ul>
                        <li>
                            Allows us to repeat as often as necessary to accomplish its goal.
                        </li>
                        
                            <b>Importance of Do loops</b>
                            
                                <li>
                                    Allows us to control the flow of the while loop.
                                </li><br>
                                
                    


            
            <!-- Goto to the next page -->
            <form action="Module3part3.php">
                <input type="button" onclick="location.href='Module3part3.php';" value="Go to the next page" />  
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