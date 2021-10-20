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
            <div class="inner">

                <h3> Welcome to the Editor's Sandbox! </h3>
                <Form method = "POST" action = "">
                    <div> 
                        This is where you can test out your knowledge and skill! Simply imput HTML code within the top box and javascript in the bottom text area to get started!
                        You Can also Access this page by going to "Editor" on your Browser Menu in the top Right! Practice a bit and implement what you have learned so far below!
                        Code is Automatically Interpeted as you type!
                        <br>
                        <b>Do not insert script tags they are already implemented.</b>
                    </div>
                    <br>
                    <div class = "codearea">

                        <textarea id = "htmlcode" name = "htmlinput" placeholder = "Insert your html code here!" oninput="showPreview()"></textarea>
                        <textarea id = "jscode" placeholder = "Insert your javascript code here!" oninput="showPreview()"></textarea>
                    
                 </div>
                    
                 <p></p>
                    <div class = "preview-area">

                        <iframe id = "preview-window"></iframe>
                    </div>
                   
                    
                </Form>
                <form action="Module1part6.php">
                <input type="button" onclick="location.href='module1part6.php';" value="Im ready for the programming activity" />  
                </form>
                



            </div>

        </div>
    </div>


    <script type = "text/javascript">
        // make the user able to edit the text area and show it frame
        function showPreview() {
            var htmlcode = document.getElementById("htmlcode").value;
            var jscode = "<scri" + "pt>" + document.getElementById("jscode").value +"</scri" + "pt>";
            var frame = document.getElementById("preview-window").contentWindow.document;
            frame.open();
            frame.write(htmlcode + jscode);
            frame.close();

        }


    </script>

</body>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</html>
