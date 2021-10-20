<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
$NumOfPoints = $user_data['points'];
$SolutionError = '';
$pointsPerQ = 5;
$CorrectAns = 0;
$EarnedPoints = 0;
$questionsAndAnwsers = array( //use a multi dimensional array for questions and awnsers
    1 => array(
        'Question' => 'CSS allows us to',
        'Answers' => array(
            'A' => 'Import images',
            'B' => 'Customize our presentation',
            'C' => 'Link other pages',
            'D' => 'None of the above'
        ),
        'CorrectAnswer' => 'B'
    ),
    2 => array(
        'Question' => 'How do we import our specific pictures in our webpage',
        'Answers' => array(
            'A' => 'a href',
            'B' => 'img=',
            'C' => 'img src =',
            'D' => 'Script tags'
        ),
        'CorrectAnswer' => 'C'
    ),
    3 => array(
        'Question' => 'Where should our style tags be located',
        'Answers' => array(
            'A' => 'In our java script',
            'B' => 'In a different file',
            'C' => 'Before the body tags',
            'D' => 'In our head tags'
        ),
        'CorrectAnswer' => 'D'
    ),
    4 => array(
        'Question' => 'How do align our table',
        'Answers' => array(
            'A' => 'Using margin',
            'B' => 'Java script',
            'C' => 'In body tags',
            'D' => 'Form tags'
        ),
        'CorrectAnswer' => 'A'
    )
);

if (isset($_POST['answers'])){
    echo'<head>
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
                <div id="page-wrap">';
    $Answers = $_POST['answers']; // Get submitted answers.

    //Check Awnsers, add points

    foreach ($questionsAndAnwsers as $QuestionNo => $Value){
        // Echo the question
        
        echo $Value['Question'].'<br />';
        //Indicate to user Question was Correct or not
        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span style="color: salmon;"> Your Answer Was: '.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 
            echo '<span> The Correct Answer was: '.$Value['CorrectAnswer'].'</span>';
        } else {

            echo '<span style="color: green;"> Your Answer Was: '.$Value['Answers'][$Answers[$QuestionNo]].
            '</span>'; 
            
            $CorrectAns++;
            $st = $conn -> prepare( "UPDATE users SET points= points + $pointsPerQ WHERE user_name='".$user_data['user_name']."' ");
            $st->execute();
        }
        echo '<br /><hr>';
        
    }
    echo '<h4> Congrats! you got '.$CorrectAns.' out of 4 Questions Correct and Earned '.$EarnedPoints=$pointsPerQ*$CorrectAns.' Points!</h4>';
    echo '<br/>';
    echo '<h5> Be sure to check the total amount of points you earned in the profile page on the top right and click on home to move on to your next module! <h5>';
} else {
                            
 

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
                <li><a href="../Leaderbaord.php"> Leaderbaord</a></li>
            </ul>
        </nav>



        <div id="main">
            <div class="inner">
                <div id="page-wrap">

		        <h1>Final Quiz for Module 4</h1>
            <ol>
		
		        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="quiz">
		        <?php foreach ($questionsAndAnwsers as $QuestionNo => $Value){?>
            
            
                <li>
                
                    <h3><?php echo $Value['Question']; ?></h3>
                    <?php 
                         foreach ($Value['Answers'] as $Letter => $Answer){ 
                        $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
                    ?>
                    <!-- Automatically print Questions and Choices -->
                    <div>
                        <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                        <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                        
                    </div>
                    <?php } ?>
                    
                </li>
                
            
                            
            <?php } ?>
            </ol>
            
            
            <input type="submit" value="Submit Quiz" name = "submitquiz" id = "submitquiz" />
		
		</form>
        </div>
            </div>
    
            <?php } ?>
	
	    </div>
    </div>
	
	<script type="text/javascript">
    
	
	</script>

</body>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>

</html>
