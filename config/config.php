<?php
error_reporting(0);
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "youtube_web";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>