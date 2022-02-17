<?php
session_start();
if($_SESSION["status"] != "liberado") {
	
	
	header("Location: index.php");
}

?>