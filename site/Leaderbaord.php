<?php

session_start();
include("config.php");
include("functions.php");
$user_data = check_login($conn);



 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Leaderboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="inner">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <span class="symbol"><img src="images/logo.svg" alt="logo" /></span><span class="title">K12</span>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="editor.php">Editor</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="Leaderbaord.php"> Leaderboard</a></li>
            </ul>
        </nav>



        <div id="main">
            <div class="inner">
            <h3> Welcome to the Leaderboard! </h3>
        
            <caption> The top 25 Users are displayed </caption>
            <form method="get">
            <table>
                <tr>
                    <td title = "Sort by Least number of  points"><a href="?sort=rank">Rank</a></td>
                    <td title = "Sort by Name Alphabetically"><a href="?sort=name">User</a></td>
                    <td title = "Sort by Most Number of points"><a href="?sort=points">Score</a></td>
                </tr>
            
            <?php 
            //allow the user to be able to sort the table by clicking on the table header
            $sort = "points";
            $orderby = " ORDER BY ".$sort." DESC LIMIT 25"; //DEFAULT CASE
            if (isset($_GET["sort"])) {
                switch ($_GET["sort"]){
                    case "name":
                        $sort = "user_name";
                        $orderby = " ORDER BY ".$sort." ASC LIMIT 25";
                        break;
                    case "rank":
                        $sort = "points";
                        $orderby = " ORDER BY ".$sort." ASC LIMIT 25";
                        break;
                        
                    default: 
                        $sort = "points";
                        $orderby = " ORDER BY ".$sort." DESC LIMIT 25";
                        break;
                
                }
                
            }
            
             
             $result = mysqli_query($conn,"SELECT user_name, points FROM users".$orderby);
             //Select username and points from the database in desending order, top 25 results
             
             $row_count=mysqli_num_rows($result);
              $rank = 1;
      
              if (mysqli_num_rows($result)) {
                    while($row = mysqli_fetch_assoc($result)){
                    
            ?>

            
                        <tr>
                         <?php // Print out User's name score and points on leaderboard increment rank by 1
                             echo "
                            </tr>
                            <td>{$rank}</td>
                             <td>{$row['user_name']}</td>
                             <td>{$row['points']}</td>";
                             $rank++;
                            } 
                         }
                         ?>
                        </tr> 
                </table>
            </form>
            </div>

        </div>
    </div>


   

</body>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</html>