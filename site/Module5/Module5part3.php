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
            <!-- Module 1 -->
            <div class="inner">
            
            <h3> Methods & Arrays </h3>
            <div> Lets get familiar with these concepts <br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt  
                    &ltp id="demo"&gt &lt/p&gt

                 &ltscript&gt 
                 var person = {
                firstName: "Jake",
                lastName : "Oliver",
                id     : 236,
                fullName : function() {
                     return this.firstName + " " + this.lastName;
                    }
                    };

            // Display data from the object:
                    document.getElementById("demo").innerHTML = person.fullName();
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The code above displys the basics of setting up simple method that can be performed on objects. A JavaScript method is a property containing a function definition.
                </p>
                <h4> Arrays </h4>
                <ul>
                        <li>
                            Allows us to create a new object
                        </li>
                        <li>
                           Sets this new object's internal
                        </li>
                        <li>
                            It makes the "this" variable point to the newly created object
                        </li>
                        <li>
                        It executes the constructor function, using the newly created object whenever this is mentioned.
                        </li>
                        <li>
                        It returns the newly created object, unless the constructor function returns a non-null object reference. In this case, that object reference is returned instead
                        </li>
                <div>
                
                </div>
                <pre>
                    <code>
                    var cars = ["Ford", "Volvo", "BMW"];
                    document.getElementById("demo").innerHTML = cars;
                    </code>
                </pre>
                <p>
                The code above displays an array which can hold more than one value at a time.
                </p>
                <div>
                    <b> Understanding Methods & Arrays</b>
                    <ul>
                    <li>
                    A JavaScript method is a property containing a function definition. Methods are functions stored as object properties.
                        </li>
                        <li>
                        An array can hold many values under a single name, and you can access the values by referring to an index number.

                        </li>
                        
                        
                            <br></br>

            
            <!-- Goto to the next page -->
            <form action="Module5part4.php">
                <input type="button" onclick="location.href='Module5part4.php';" value="Go to the next page" />  
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