<?php 
//arquivo valida.php

session_start();
$_SESSION["status"] = "negado";
session_destroy();
header("Location: index.php");




?>