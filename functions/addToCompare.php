<?php

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	// Attempt insert query execution
	if (!isset($_SESSION["CompareList"])){
		$_SESSION["CompareList"] = array();
	}

	// if there are less than 2 players in the list
	if (count($_SESSION["CompareList"]) < 2){
		if(isset($_SESSION["CompareList"][$_POST["email"]])){
			echo "Already in compare list";
		} else {
			$_SESSION["CompareList"][$_POST["email"]] = $_POST["email"];
			echo "You added a player to compare";
		}
	} else {
		echo "You already have 2 players to compare.";
	}

?>