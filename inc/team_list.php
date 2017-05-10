
<?php 
	
	$queryTeams = new Queries(); // $pdo,table

	$loopTeams = $queryTeams->GetAll("teams");
	echo "<select id='team' name='team'>";
	foreach ($loopTeams as $t){ 
		echo "<option value".$t["team_name"].">";
			echo $t["team_name"];
		echo "</option>";
	}
	echo "</select>";
?>