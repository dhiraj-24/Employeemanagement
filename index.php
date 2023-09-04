<?php
include("app/model/config.php");
if($_SESSION['adminid'] =='')
{
	header("location:login");
}
include("app/view/user/index.html");
?>