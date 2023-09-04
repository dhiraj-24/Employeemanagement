<?php
include("app/model/config.php");
if($_SESSION['userid'] !='')
{
	$ResEmployee = $conn->query("SELECT * FROM user_details WHERE id='".$_SESSION['userid']."'");
	$ResultsEmployee=$ResEmployee->fetch_object();
	$edited=$_SESSION['userid'];
}
include("app/view/user/user-profile.html");
?>