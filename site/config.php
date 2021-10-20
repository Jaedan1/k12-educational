<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "educational";

// connecting to database//
if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!!!!");
}




?>
