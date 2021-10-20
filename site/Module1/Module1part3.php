
  
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
            
            <h3> Learning the Basics of Javascipt:  Functions </h3>
                <h4> What is a Function in Javscript? </h4>
                    <div>
                        Simply, a Function works by taking in a set of arguments, preforming a Calculation and returning the results.<br>
                        Here the Syntax for a basic function:
                        <pre>
                            <code>
                                function function-name(0-or-more-arguments-seperated-by-commas){   // <--- Function heading
                                    statement 1;           |
                                    statement 2;       <---| Function body
                                    last-statement;        |

                                }
                            </code>
                        </pre>
                        Function statements are normally placed within the <code>&ltScript&gt</code> tags within a HTML file but they may also be referenced outside the same HTML file
                        <br>
                        <br><code> &ltscript src="foldername/main.js"&gt &lt/script&gt </code>
                        <br></br>
                        <h5> Variables </h5>
                        In a function, you can declare declare varibales  with unqiue <b title = "A formal name for a variable"> Identifiers </b> through assign statements.<br>
                        Unlike othe programming Langauges you dont formally declare a varible type such as a String, int, float etc. <br>
                        The type of a varibale is determined by the type of value the value is assigned in an assign statement. For Example: <br>
                        <pre>
                            <code>
                                var name ="Katherine";
                                var NumOfPoints = 15;
                            </code>
                        </pre>
                        <h5> Understanding Assignment Statements and Objects</h5>
                        Recall the displayHello() function from before:
                         <pre>
                        <!--Display Code -->
                            <code>
                    
                                &ltscript&gt 
                                function displayHello(){
                                var msg;     
                                msg = document.getElementById("message");     
                                msg.outerHTML = "&lth1&gtHello, world! &lt/h1&gt";
                                }
                                &lt/script&gt
                    

                             </code>
                         </pre>
                         <!--Explaining  Objects-->
                         In this function the Assignment operator (=) is used to assign the varible on the left with the value of the statement on the right.<br>
                         <code> msg = document.getElementById("message"); </code>
                         The Variable "msg" is being assigned the value of the Element with the id of "message" <br>
                         To further break down this assgin statement lets get into Objects:
                         <ul>
                             <li>
                                 Behind every webpage, each element within that webpage is represented as an Object
                             </li>
                             <li>
                                 Every object also has a set of methods and related properties attached to it.
                             </li>
                         </ul>
                         For <code>document.getElementById("message");</code> There is a document object for the whole webpage with a getElementById() method which grabs the corresponding element base by its Id Value
                         <pre>
                             <code>  msg = document.getElementById("message"); // to grab an oobject/eement's method speciy that objeccts name follwoed by a dot, 
                                    the method name, then parenthesis with valid arguments.//
                            </code>

                            
                         </pre>
                         Now About Properties:

                         <ul>
                             <li>
                                 Each Element comes with a <b> .outerHTML or .innerHTML </b> properties which stores an elements code and contents along with start and end tags for the form
                                  and just the code and content without start and end tags.
                             </li>
                         </ul>

                    </div>

                        
                


            
            <!-- Goto to the next page -->
            <form action="module1part5.php">
                <input type="button" onclick="location.href='module1part5.php';" value="Im ready to go to the Editor Sandbox!" />  
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

