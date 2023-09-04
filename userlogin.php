<?php
include("app/model/config.php");
$rescnt = $conn->query("SELECT * FROM user_type WHERE username='".$_POST['username']."' AND pasword='".md5($_POST['password'])."'");
$rescntuser = $conn->query("SELECT * FROM user_details WHERE email='".$_POST['username']."' AND pasword='".$_POST['password']."'");

if($rescnt->num_rows > 0)
{
	$result_cnt=$rescnt->fetch_object();
	$_SESSION['adminid']=$result_cnt->username;
	echo 1;
}
else if($rescntuser->num_rows > 0)
{
	$resultuser=$rescntuser->fetch_object();
	$_SESSION['userid']=$resultuser->id;
	echo 2;
}
else
{
	echo 3;
}
?>