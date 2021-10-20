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
            
            <h3> Classes & new Operator </h3>
            <div> Lets get familiar with these concepts <br>
            <div>
                <pre>
                    <!--Display Code -->
                 <code id = run>
                    &ltbody&gt  
                    &ltp id="demo"&gt &lt/p&gt
                    &ltscript&gt function myFunction() {
                        class Semester {
                    constructor(name, year) {
                        this.name = name;
                        this.year = year;
                        }
                    }

                    mySemeseter = new Semester("Fall Semester", 2020);
                    document.getElementById("demo").innerHTML =
                    mySemeseter.name + " " + mySemeseter.year;
                     &lt/script&gt
                     &lt/body&gt

                    </code>
                </pre>
                <p>
                    The code above displys the basics of setting up a class in javascript and how we call our class in our body tags.
                </p>
                <h4> new Operator </h4>
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
                    function Car(make, model, year) {
                    this.make = make;
                    this.model = model;
                    this.year = year;
                    }
                    var myCar = new Car('Ford', 'Focus', 2005);
                    </code>
                </pre>
                <div>
                    <b> Understanding Classes</b>
                    <ul>
                        <li>
                        To implement a class, you need a class heading and a class body 

                        </li>
                        <li>
                        Within the class body you need a constructor and at least one method.
                        </li>
                        
                            <br></br>

            
            <!-- Goto to the next page -->
            <form action="Module5part3.php">
                <input type="button" onclick="location.href='Module5part3.php';" value="Go to the next page" />  
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