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
            <!-- Module 4 -->
            <div class="inner">
            
            <h3> CSS creativity and options </h3>
            <div> Below we have code in betweeen our style tags that allow use to pick which kind of color we want our background to be for our webpage, font for our p tags, and color for our h1 tag<br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                 &lthead&gt
                    &ltstyle&gt  
                    body {
                        background-color: lightblue;
                        }

                    h1 {
                        color: white;
                        text-align: center;
                        }

                    p {
                        font-family: verdana;
                        font-size: 20px;
                       }
                    &lt/style&gt 
                    &lt/head&gt 
                    &ltbody&gt 
                    &lth1&gtMy First CSS Example &lt/h1&gt
                    &ltp&gtThis is a paragraph. &lt/p&gt
                     &lt/body&gt

                    </code>
                </pre>
                <h4>Output</h4>
                <img src="../images/Mod4_2.PNG" alt="if statement" width="280" height="190">

                <br>
                <br>
                <h4> Another CSS Example </h4>
                <div>
                Below is a different way to use our style tag for different lines of code. This will make the text in each line the color you wanted.
                </div>
                <pre>
                    <code>
                    &ltbody&gt 
                    &lth1 style="color:blue;text-align:center;">This is a heading &lt/h1&gt 
                    &ltp style="color:blue;text-align:center;">This is a heading &lt/p&gt 
                     &lt/body&gt
                    </code>
                </pre>
                <div>
                <div>
                Below is our output.
                </div>
                <img src="../images/Mod4_6.PNG" alt="if statement" width="600" height="190">
                <div>
                    
                                <br>
                                <br>
                <h3> href tag </h3>
                <div>
                <b>Below is two ways we use our HREF tag used to get to the next page we desire.</b>
                </div>
                <pre>
                    <code>
                    &ltform action="secondpage.html">
                        &ltinput type="button" onclick="location.href='secondpage.html';" value="Go to the next page" />  
                    &lt/form&gt
                    </code>
                </pre>
                <p>This code above allows use to create a button when pressed it will send us to the next page we desire</p>
                <pre>
                    <code>
                    &ltp An absolute URL: &lta href="https://www.mysecondpage.com">NextPage&lt/a&gt &lt/p&gt
                    </code>
                </pre>
                <p>This code above allows use link the page we desire with the text thats typed up</p>
                <div>
                <div>
                <b>Below is the code that allows us to import our own images we take and post them on our webpage. We can pick the ratio we want for our picture and using img src pic for the exact picture we need.</b>
                </div>
                <pre>
                    <code>
                    &ltimg src="vacation.PNG" alt="vacation picture" width="400" height="190"&gt
                    </code>
                </pre>


            
            <!-- Goto to the next page -->
            <form action="Module4part4.php">
                <input type="button" onclick="location.href='Module4part4.php';" value="Go to the next page" />  
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