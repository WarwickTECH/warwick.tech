<?php
session_start();

if (is_numeric($_POST["articles"]) && $_POST["articles"] > 0 && $_POST["articles"] < 9){
	$_SESSION["articleno"] = $_POST["articles"];
}
else {
	$_SESSION["articleno"] = 1;
}
header('Location: creator.php');
?>