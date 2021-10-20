<?php

session_start();
include("../config.php");
include("../functions.php");
$user_data = check_login($conn);
$NumOfPoints = $user_data['points'];


?>
<!DOCTYPE html>
<html>

<head>
    <title>Module 6</title>
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

            <h3>Congrats on getting to the last module!
                <?php echo $user_data['user_name'];?> </h3>
                <Form method = "POST" action = "" enctype="multipart/form-data">
                    <div> 
                        You will be tested on the knowlege you learned in this capstone project! With a coding excersice below. Feel free to go back to other modules if your confused. Do not insert script tags they are already implemented. Type up your code below to make sure it works correctly and when your done copy and paste your code into a text file by openining up notepad on your computer. Once you have pasted it, save it and upload that file below. Once we recieve the file and the code is correct you will recieve email with a certificate of completion.
                    </div><br>
                    
                        <h3>For your final project you will build a tip calulator as shown below</h3><br>
                        <p>Feel free to get creative with your project it does not have to look exactly the same just has to have the same functionality! Once your project is submitted below give us 3-5 days to grade your project and reward you with a certificate in your profile page. We will email you once your certificate is uploaded! </p>
                        <img src="../images/Mod6.PNG" alt="final" width="450" height="500">
                    
                  
                    <div class = "codearea">

                    <textarea id = "htmlcode" name = "htmlinput" placeholder = "Insert your html code here! " oninput="showPreview()"></textarea>
                    <textarea id = "jscode" name = "jsinput" placeholder = "Insert your javascript code here! " oninput="showPreview()"></textarea>
                    
                 </div>
                    
                 <p></p>
                    <div class = "preview-area">

                        <iframe id = "preview-window"></iframe>
                    </div>
                    </br>
                    
                        
                        
                        <input type="file" name="file" />
                        <button type="submit" name="upload">upload</button>
                </Form>
                
                
                



            </div>

        </div>
    </div>
<?php


if(isset($_POST['upload']))
{   
     
        $file = $_FILES['file']['name'];
        $filetmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];
        $userid = $user_data['user_id'];
        $folder="../Projects/";
 
    /* new file size in KB */
    $new_size = $filesize/1024;  
    
 
    /* make file name in lower case */
    $new_file_name = strtolower($file);
    
    /* Replace spaces with hypens */
    $final_file=str_replace(' ','-',$new_file_name);
    if(isset($new_file_name)){
        if(!empty($new_file_name)){
            if(move_uploaded_file($filetmp,$folder.$final_file))
            {
                $sql="INSERT INTO projects (user_id, file_name, file_type, file_size) VALUES('$userid','$final_file','$filetype','$new_size')";
                mysqli_query($conn,$sql);
                echo "<h4 style='color: green;'>File uploaded successfully! Check your Profile for your Certificate!</h4>";
            } 
        } 
    }
    else
    {
        echo "File upload Failed";
    }
    $Dest = "../Certificates/";

   // Create Image From Existing File
   $jpg_image = imagecreatefromjpeg('../images/certificate.jpg');

   // Allocate A Color For The Text
   $violet = imagecolorallocate($jpg_image, 50, 15, 110);
   //creating file name
   $output = $user_data['user_name']."Certificate.jpg";
   // replace space with hyphens
   $finalfile=str_replace(' ','-',$output);
   // Set Path to Font File
   $font_path = '/xampp/htdocs/site/font.ttf'; 
   $name_text = $user_data['user_name'];
   $date_text = date('jS F,Y');
   $txt = "Completing All the Modules and Final Project!";
   

    //creating text
   imagettftext($jpg_image, 26, 0, 480, 400,  $violet, $font_path, $name_text);

   imagettftext($jpg_image, 20, 0, 360, 520, $violet, $font_path, $txt);

   imagettftext($jpg_image, 20, 0, 220, 670, $violet, $font_path, $date_text);

   // Send Image to folder and databse
   if(isset($jpg_image)){
    if(!empty($jpg_image)){
            imagejpeg($jpg_image,$Dest.$finalfile);
            $sql="INSERT INTO certificate (user_id, file_name) VALUES('$userid','$finalfile')";
            mysqli_query($conn,$sql);
    }
   }

}


?>
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
