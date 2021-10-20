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
                <li><a href="../Leaderbaord.php"> Leaderboard</a></li>
            </ul>
        </nav>



        <div id="main">
            <!-- Module 1 -->
            <div class="inner">
            
            <h3> Learning the Basics of Javascript: If Statement </h3>
            <div> Lets get familiar with the basic concepts and functions of javascript and how they interact with html code,
                below is a basic html program using a java script function<br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt 
                    &ltp&gt Click the button to display a time-based greeting: &lt/p&gt  
                    &ltinput type="button" value="Click Me!" onclick="myFunction();"> Try it &lt/button&gt   
                    &ltp id="demo"&gt &lt/p&gt
                    &ltscript&gt function myFunction(){
                        var hour = new Date().getHours();
                        var greeting;

                        if (hour < 18) {
                        greeting = "Good day";
                        } else {
                        greeting = "Good evening";
                            }
                        document.getElementById("demo").innerHTML = greeting;
                        }
                     }
                     
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The <code>onclick</code> event handler calls upon the <code>myFunction()</code> function when the button is clicked it will display "Good day" if the time is less than 18 or "Good evening" when its not
                </p>
                <h4> Else If Statement </h4>
                <div>
                Use the else if statement to specify a new condition if the first condition is false.
                </div>
                <pre>
                    <code>
                    if (condition1) {
                                    //  block of code to be executed if condition1 is true
                    } else if (condition2) {
                                    //  block of code to be executed if the condition1 is false and condition2 is true
                    } else {
                                    //  block of code to be executed if the condition1 is false and condition2 is false
                           }
                    </code>
                </pre>
                <div>
                    <b>Importance of If Statments</b>
                    <ul>
                        <li>
                            Allows us to specify the type of condtions we want to satisfy
                        </li>
                        <li>
                            If one is not satisfied, we move to the next condition till eventually our function gives us the conditon we are looking for
                        </li>
                        
                            <b>If statments are useful for</b>
                            <ul>
                                <li>
                                    True or false logic
                                </li>
                                <li>
                                To ensure that all required fields in forms are filled appropriately before submission.
                                </li>
                                <li>
                                To adjust the language based on the location information of a user.
                                </li>
                                <li>
                                To allow access to a webpage based on conditions such as age, location or language.
                                </li>
                                <li>
                                To allow certain onlick functions to perform actions that are limited to the conditions that are required
                                </li>
                            </ul>
                        </li>
                    </ul>


            
            <!-- Goto to the next page -->
            <form action="Module2part3.php">
                <input type="button" onclick="location.href='Module2part3.php';" value="Go to the next page" />  
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