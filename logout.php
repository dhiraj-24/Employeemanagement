<?php
ob_start();
include("app/model/config.php");

session_destroy();
header("location:".$ProjectPath);

?>



