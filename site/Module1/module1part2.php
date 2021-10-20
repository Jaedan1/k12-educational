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
            <!-- Module 1 -->
            <div class="inner">
            
            <h3> Learning the Basics of Javascipt: Buttons and Functions </h3>
            <div> Lets get familiar with the basic concepts and functions of javascript and how they interact with the 
                <b title = "The Document Object Model (DOM) models all of the parts of a web page document as nodes in a node tree. 
                    Each node represents either (1) an element, (2) a text item that appears between an element's start and end tags, 
                    or (3) an attribute within one of the elements." >  
                    DOM (Document Object Model)  
                </b> 
                below is a basic "Hello World" introductory program.<br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt 
                    &lth3 id="message"&gt  To see Hello world! click below.  &lt/h&gt  
                    &ltinput type="button" value="Click Me!" onclick="displayHello();"> 

                    &ltscript&gt function displayHello(){
                        var msg;     
                        msg = document.getElementById("message");     
                        msg.outerHTML = "&lth1&gtHello, world! &lt/h1&gt";
                     }
                     
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The <code>onclick</code> event handler calls upon the <code>displayHello()</code> function when the button is clicked it will display "hello World" in the <code>
                    &lth1&gt </code> tags <br>
                    Lets Further Break down this code to make it make more sense
                </p>
                <h4> Buttons </h4>
                <div>
                    Buttons are useful event handlers that give the users a simple inteerface to interact with scripts on your webpage. Here is the Syntax for creating a button:
                </div>
                <pre>
                    <code>
                    &ltinput type="button" value="Your-Button-Name" onclick="Event-handler-name-or-function()"&gt
                    </code>
                </pre>
                <div>
                    Lets break down the syntax:<br>
                    <b>Type attribute</b>
                    <ul>
                        <li>
                            Specifies the type of control
                        </li>
                        <li>
                            If one is not specified, the default will be set to a text control
                        </li>
                        <li>
                            Other types include but not limtied to:
                            <ul>
                                <li>
                                    username
                                </li>
                                <li>
                                    email
                                </li>
                                <li>
                                    checkbox
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <b>Value attribute</b>
                    <ul>
                        <li>
                            Specifies the name  of your button.
                        </li>
                        <li>
                            If one is not specified, your button will have no name.
                        </li>
                    </ul>
                    <b> Onclick attribute </b>
                    <ul>
                        <li>
                            Whenever the button is clicked, the JavaScript engine  executes the JavaScript code that follows <em> onclick=. </em>
                            That JavaScript code "handles" what's supposed to happen when the user clicks the button. 
                            Clicking the button is considered to be an event, so the JavaScript code is known as an  <em> event handler </em> .
                        </li>
                    </ul>

                </div>


            
            <!-- Goto to the next page -->
            <form action="module1part3.php">
                <input type="button" onclick="location.href='module1part3.php';" value="Go to the next page" />  
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