<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
$NumOfPoints = $user_data['points'];
$htmlcode = '';
$jscode = '';
$SolutionError = '';
$SolutionError2 = '';
$questionsAndAnwsers = "submit"; //use a multi dimensional array for questions and awnsers this is jsut a test awnser
$quest2 = "label";
$points = 5;
$QS = '';
                            
    if(isset($_POST['submitAns'])){
        $QS=$_POST['one'];
        if($QS == $questionsAndAnwsers){
            
            // answer was correct, increment your question-counter for the next question
           if( $st = $conn -> prepare( "UPDATE users SET points= points + $points WHERE user_name='".$user_data['user_name']."' ")){

                // Bind parameters (i for integer value, s for string)
               
                $st->execute();
                // print success message and  bring user to completation page where their total score is displayed WORK IN PROGRESS! Just bring to index page for now until its complete
                $SolutionError = "correct";

                
            
                
            }
            
            
          } else {
            // question was wrong, counter stays as it is
            // print failure message
            $SolutionError = "incorrect";
          }
   }
   if(isset($_POST['submitAns2'])){
    $QS=$_POST['two'];
    if($QS == $quest2){
        
        // answer was correct, increment your question-counter for the next question
       if( $st = $conn -> prepare( "UPDATE users SET points= points + $points WHERE user_name='".$user_data['user_name']."' ")){

            // Bind parameters (i for integer value, s for string)
           
            $st->execute();
            // print success message and  bring user to completation page where their total score is displayed WORK IN PROGRESS! Just bring to index page for now until its complete
            $SolutionError2 = "correct";

            
        
            
        }
        
        
      } else {
        // question was wrong, counter stays as it is
        // print failure message
        $SolutionError2 = "incorrect";
      }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 3</title>
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
            <div class="inner">

                <h3> Welcome to Your third assignment!  </h3>
                <Form method = "POST" action = "">
                    <div> 
                        You will be tested on the knowlege you learned in this module! With a coding excersice below. Feel free to go back to the introduction of the third module if your confused. Do not insert script tags they are already implemented.
                    </div>
                    <br>
                    <div class = "codearea">

                    <textarea id = "htmlcode" name = "htmlinput" placeholder = "Insert your html code here! You will implement a survey using checkboxes to find out someone's favorite snacks" oninput="showPreview()"></textarea>
                    <textarea id = "jscode" name = "jsinput" placeholder = "Insert your javascript code here! " oninput="showPreview()"></textarea>
                    
                 </div>
                    
                 <p></p>
                    <div class = "preview-area">

                        <iframe id = "preview-window"></iframe>
                    </div>
                    </br>
                    <h5>What input type did u use so the user can send his answer? </h5>
                    <input type="text" id="prac1" name="one"><br><br>
                    <td> <button type="submit" name="submitAns" value="submit" id="submit">Submit </button></td><br>
                    <br>
                    <p> Your Answer is:  <?php echo $SolutionError; ?> </p>
                    <h5>What tag was used for the snack names? </h5>
                    <input type="text" id="prac2" name="two"><br><br>
                    <td> <button type="submit" name="submitAns2" value="submit" id="submit2">Submit </button></td><br>
                    <br>
                    <p> Your Answer is:  <?php echo $SolutionError2; ?> </p>
                </Form>
                <form action="Module3part5.php">

                <input type="button" onclick="location.href='Module3part5.php';" value="Im ready to go to Quiz!" /> 
                  <!-- goto the multiple/ choice quiz/other questions maybe? or maybe keep the quiz on same page?  -->
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
