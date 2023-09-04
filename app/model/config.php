<?php
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}

session_start();

//Project path
$ProjectPath ='http://localhost/Employeedetails/';

?>