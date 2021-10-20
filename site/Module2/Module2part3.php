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
            
            <h3> Learning the Basics of Javascript: Strings & alert/confirm methods </h3>
            <div> Lets Famillarize you with the way to use strings and alert/confirm methods<br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt 
                    &ltp&gt Strings are written inside quotes. You can use single or double quotes: &lt/p&gt     
                    &ltp id="demo"&gt &lt/p&gt
                    &ltscript&gt function myFunction(){
                           var carName1 = "Volvo XC60";  // Double quotes
                            var carName2 = 'Volvo XC60';  // Single quotes

                            document.getElementById("demo").innerHTML =
                            carName1 + " " + carName2;
                     
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The code above allows us to declare a variable and equal it to the string we want. You can use single or double quotes for strings. After typing in the content we want our variables to say we find the demo id, so we can print out our strings and have our innerhtml equal to the variables we declared before so we can print them out. 
                </p>
                <h4> Alert/Confirm Methods </h4>
                <div>
                This function will display text in a dialog box that pops up on the screen when button is clicked.
                </div>
                <pre>
                    <code>
                    &ltbody&gt 
                    &ltp&gt Click the button to display a time-based greeting: &lt/p&gt  
                    &ltinput type="button" value="Click Me!" onclick="myFunction();"> Try it &lt/button&gt   
                    &ltscript&gt 
                    function myFunction(){
                        function myFunction() {
                        alert("I am an alert box!");
                        }
                     
                     &lt/script&gt
                     &lt/body&gt
                    </code>
                </pre>
                <div>
                <div>
                A confirm box is often used if you want the user to verify or accept something. When a confirm box pops up, the user will have to click either "OK" or "Cancel" to proceed. If the user clicks "OK", the box returns true. If the user clicks "Cancel", the box returns false.
                </div>
                <pre>
                    <code>
                    &ltbody&gt 
                    &ltp&gt Click the button to display a time-based greeting: &lt/p&gt  
                    &ltinput type="button" value="Click Me!" onclick="myFunction();"> Try it &lt/button&gt   
                    &ltp id="demo"&gt &lt/p&gt
                    &ltscript&gt 
                    var txt;
                    if (confirm("Press a button!")) {
                        txt = "You pressed OK!";
                             } else {
                                txt = "You pressed Cancel!";
                                    }
                            document.getElementById("demo").innerHTML = txt;
                                    }
                     &lt/script&gt
                     &lt/body&gt
                    </code>
                </pre>
                <div>
                    <b>Importance of Strings</b>
                    <ul>
                        <li>
                            Allows us to store and manipulate text
                        </li>
                        <li>
                            You will see below how we can manipulate strings and use sequences to our advantage.
                        </li>
                        <br>
                        <img src="../images/Mod2pt3_1.PNG" alt="if statement" width="450" height="270">
                            <img src="../images/Mod2pt3_2.PNG" alt="if statement" width="450" height="270">
                        
                            <ul>
                        
                            <b>Alert/Confirm Methods Useful For</b>
                            <ul>
                                <li>
                                Mostly used to give a warning message to the users
                                </li>
                                <li>
                                Be used for friendlier messages
                                </li>
                                <li>
                                Alert box gives only one button "OK" to select and proceed
                                </li>
                                <br>


            
            <!-- Goto to the next page -->
            <form action="Module2part4.php">
                <input type="button" onclick="location.href='Module2part4.php';" value="Go to the next page" />  
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