<?php
include("app/model/config.php");

$deleteid = $_POST['deleteid']; 

$ResEmployee = $conn->query("SELECT signature,profile FROM user_details WHERE id='$deleteid'");
$ResultsEmployee=$ResEmployee->fetch_object();
unlink($ResultsEmployee->signature);
unlink($ResultsEmployee->profile);
$deltuser=$conn->prepare("DELETE FROM user_details WHERE id='$deleteid'");
$deltuser->execute();
// Close the database connection
$conn->close();
?>