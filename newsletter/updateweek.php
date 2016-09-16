<?php
session_start();

if (is_numeric($_POST["week"]) && $_POST["week"] > 0 && $_POST["week"] < 60){
	$_SESSION["weekno"] = $_POST["week"];
}
else {
	$_SESSION["weekno"] = 1;
}
header('Location: creator.php');
?>