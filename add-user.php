<?php
include("app/model/config.php");
$edited=$_GET['edited'];
if($edited !='')
{
	$ResEmployee = $conn->query("SELECT * FROM user_details WHERE id='".$edited."'");
	$ResultsEmployee=$ResEmployee->fetch_object();
}

include("app/view/user/add-user.html");
?>