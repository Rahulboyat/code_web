<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "youtubeuser";

$conn = new mysqli($servername,$username,$password,$db_name);
if($conn->connect_error)
{
    die("connection failer".$conn->connect_error);
}


?>                                               s