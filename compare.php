<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container compare">
	<div class="row">
		
		<?
		// Attempt insert query execution
		if (!isset($_SESSION["CompareList"])){
			$_SESSION["CompareList"] = array();
		}
		foreach($_SESSION["CompareList"] as $key => $value) {		

		$loop = $query->Find("users","email",$key);

		foreach ($loop as $i){
		?>


		<div class="col-md-6 compare-single">
			<div class="clearfix whiteish">
				<a href="removeCompare.php?email=<?php echo $key?>">
					<span id="removeCompareList">x</span>
				</a>
				<?php /** PROFILE PIC --- */
				require 'inc/print-profile-pic.php';?>
				<div class="">
					<h1><?php echo $i["first_name"] . " ". $i["last_name"];?></h1>
					<h4><?php echo $i["team"];?></h4>
				</div>

				<div class="personal-info">
					<h3>Personal Information</h3>
					<table>
						<tr>
							<td>Age :</td>
							<td><?php $query->GetAge($i["dob"]);?></td>
						</tr>
						<tr>
							<td>Preferred Foot:</td>
							<td><?php echo $i["preferred_foot"];?></td>
						</tr>
						<tr>
							<td>Height:</td>
							<td><?php echo $i["height"];?></td>
						</tr>
						<tr>
							<td>Weight:</td>
							<td><?php echo $i["weight"];?></td>
						</tr>
						<tr>
							<td>Date of Birth:</td>
							<td><?php echo $i["dob"];?></td>
						</tr>
						<tr>
							<td>Country of birth:</td>
							<td><?php echo $i["country"];?></td>
						</tr>
						<tr>
							<td>County:</td>
							<td><?php echo $i["county"];?></td>
						</tr>
					</table>
				</div>
			
				<div class="position">
					<img src="images/positions/horizontal/<?php echo $i["preferred_position"];?>.png">
				</div>

				<div class="compare-stats">
					<?php displayProgressionRing($i["overall_ranking"]);?>
					

					<h4>Stats</h4>

					<div>
						<table>
							<tr>
									<td>Jump</td>
									<td><?php echo ($query->BestTestResultsofPlayer("jump_tests",$i["email"]));?></td>
							</tr>
							<tr>
									<td>Aerobic</td>
									<td><?php echo ($query->BestTestResultsofPlayer("aerobic_tests",$i["email"]));?></td>
							</tr>
							<tr>
									<td>Sprint</td>
									<td><?php echo ($query->BestTestResultsofPlayer("sprint_tests",$i["email"]));?></td>
							</tr>
							<tr>
									<td>Psychology</td>
									<td><?php echo ($query->BestTestResultsofPlayer("psychology_tests",$i["email"]));?></td>
							</tr>
							<tr>
									<td>Agility</td>
									<td><?php echo ($query->BestTestResultsofPlayer("agility_tests",$i["email"]));?></td>
							</tr>
							<tr>
									<td>Balance</td>
									<td><?php echo ($query->BestTestResultsofPlayer("balance_tests",$i["email"]));?></td>
							</tr>

						</table>
					</div>
				</div>
			</div>

			<div class="cont-button-compare">
					<a href="mailto:<?php echo $i['email'];?>" target="_top" class="btn btn-centered btn-primary yellow">Contact Player</a>
			</div>

		</div>


		<?php }} ?>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>