<?php
session_start();
include("config.php");
include("functions.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
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
                <li><a href="Leaderbaord.php"> Leaderboard</a></li>
                
            </ul>
        </nav>



        <div id="main">
            <div class="inner">
                <title>Welcome to your profile, <?php echo $_SESSION["name"]; ?></title>
                <b><p> Hello, <?php echo $user_data['user_name'];?> you have earned <?php echo $user_data['points'];?> points. </p> </b>
                <?php
                $userid = $user_data['user_id'];
                $sql="SELECT * FROM  certificate  WHERE user_id = $userid";
                $data = mysqli_query($conn,$sql);
                ?>
                <div>
                <?php
                if(mysqli_num_rows($data) == 0){
                    echo '<b> <p> You have Not Earned Any Certificates </p>';
                }else{
                
                   
                  ?>
                </div>
                 
                
                
                <div>
                
                <?php 
                
                     while($row = mysqli_fetch_array($data,MYSQLI_ASSOC)){
                        $CertImg = $row['file_name'];
                       }
                        echo '<b> <p> Below are your Certificates!
                     <img src="Certificates/'.$CertImg.'" alt="Certificates"';
                 } 
                 ?>
                </div>
                
                
                
                <p>
                    <a href = "logout.php" class ="btn btn-secondary btn-lg active" role = "button"> logout</a>
                </p>
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