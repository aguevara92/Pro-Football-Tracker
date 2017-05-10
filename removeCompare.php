<?php	

session_start(); 
unset($_SESSION["CompareList"][$_GET["email"]]);
header('Location: '."compare.php");

?>




