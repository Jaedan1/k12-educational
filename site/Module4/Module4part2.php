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
            
            <h3> Learning the Basics the table tag </h3>
            <div>
                    <b>Diffrent Table Tags</b>
                    <ul>
                        <li>
                           th - table header
                        </li>
                        <li>
                           td - table data
                        </li>
                        <li>
                           tr - table row
                        </li>   
                    </ul>
            <div> Lets get familiar with the basic table design with the html code below<br>

            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &lthead&gt
                    &ltstyle&gt  
                    table, th, td {
                        border: 1px solid black;
                        }
                    &lt/style&gt 
                    &lt/head&gt 
                    &ltbody&gt 
                    &lttable&gt
                        &lttr&gt
                            &ltth&gtMonth&lt/th&gt
                            &ltth&gtSavings&lt/th&gt
                        &lt/tr&gt
                    &lttr&gt
                            &lttd&gtJanuary&lt/td&gt
                            &lttd&gt$100&lt/td&gt
                        &lt/tr&gt
                        &lttr&gt
                            &lttd&gtFebruary&lt/td&gt
                            &lttd&gt$80&lt/td&gt
                    &lt/tr&gt

                    &lt/table&gt 
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The style tag we must always put in between our head tags because our style will define how we want our table designed below. As you can see above we define the border our table will have. Which is a black border and 1px(pixels length). 
                </p>
                <h4> Another table example </h4>
                <div>
                This code below allows use to center our table and gives use some insight on how to move the table to the position we would like.
                </div>
                <pre>
                    <code>
                    &lthead&gt
                    &ltstyle&gt  
                    table, th, td {
                        border: 1px solid black;
                        }
                        table.center {
                        margin-left: auto; 
                        margin-right: auto;
                        }   
                    &lt/style&gt 
                    &lt/head&gt 
                    &ltbody&gt 
                    &lttable class="center"&gt
                        &lttr&gt
                            &ltth&gtMonth&lt/th&gt
                            &ltth&gtSavings&lt/th&gt
                        &lt/tr&gt
                    &lttr&gt
                            &lttd&gtJanuary&lt/td&gt
                            &lttd&gt$100&lt/td&gt
                        &lt/tr&gt
                        &lttr&gt
                            &lttd&gtFebruary&lt/td&gt
                            &lttd&gt$80&lt/td&gt
                    &lt/tr&gt

                    &lt/table&gt 
                     &lt/body&gt
                    </code>
                </pre>
                <br>
                <img src="../images/Mod4_5.PNG" alt="if statement" width="390" height="200">
                <div>
                    <b>Importance of Tables</b>
                    <ul>
                        <li>
                            Allows us to organize the data we want to show the user into a simple easy to read table.
                        </li>
                        
                            <b>CSS usefulness in Tables</b>
                            <ul>
                                <li>
                                    Allows use to specify what kind of table we are looking for and make any changes we would like visually. 
                                </li>
                                
                    </ul>
                <div>
                    <b>Importance of Tables</b>
                    <ul>
                        <li>
                            Allows us to organize the data we want to show the user into a simple easy to read table.
                        </li>
                        
                            <b>CSS usefulness in Tables</b>
                            <ul>
                                <li>
                                    Allows use to specify what kind of table we are looking for and make any changes we would like visually. 
                                </li>
                                
                    </ul>


            
            <!-- Goto to the next page -->
            <form action="Module4part3.php">
                <input type="button" onclick="location.href='Module4part3.php';" value="Go to the next page" />  
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