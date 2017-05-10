<?php	
	require 'classes.php';
	$query = new Queries(); // $pdo,table

	if(isset($_POST['login']))
	{
		$query->LogIn($_POST["email"],$_POST["password"]);
	} 
?>