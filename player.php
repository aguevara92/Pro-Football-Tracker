<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container single-player">
	<div class="row">
	
		<?
		if ($_GET){
		$loop = $query->Find("users","email",$_GET["email"]);
		foreach ($loop as $i){
		?>


		<div class="col-md-8 white">
			<div class="col-md-6">
				<h1><?php echo $i["first_name"] . " ". $i["last_name"];?></h1>
				<h4><?php echo $i["team"];?></h4>
				<?php /** PROFILE PIC --- */
				require 'inc/print-profile-pic.php';?>
			</div>

			<div class="col-md-6">
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
		</div>
		<div class="col-md-4">
			<div class="position-player">
				<img src="images/positions/<?php echo $i["preferred_position"];?>.png">
			</div>
		</div>

		<div class="col-md-12">
			<div class="title-line">
				<span>Result of tests</span>
			</div>
		</div>

		<div class="col-md-12 whiteish stats">
			<div class="col-md-4">
				
				<?php displayProgressionRing($query->GetRanking($i["email"]));?>

			</div>
			<div class="col-md-8 stats-tests">
				<div class="col-md-4">
					<div class="card text-center">
						<div class="card-block">
							<h5 class="card-title">Jump</h5>
							<?php displayProgressionRing($query->BestTestResultsofPlayer("jump_tests",$i["email"]));?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<div class="card-block">
							<h5 class="card-title">Aerobic</h5>
							<?php displayProgressionRing($query->BestTestResultsofPlayer("aerobic_tests",$i["email"]));?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<div class="card-block">
							<h5 class="card-title">Sprint</h5>
							<?php displayProgressionRing($query->BestTestResultsofPlayer("sprint_tests",$i["email"]));?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<div class="card-block">
							<h5 class="card-title">Psychology</h5>
							<?php displayProgressionRing($query->BestTestResultsofPlayer("psychology_tests",$i["email"]));?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<div class="card-block">
							<h5 class="card-title">Agility</h5>
							<?php displayProgressionRing($query->BestTestResultsofPlayer("agility_tests",$i["email"]));?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<div class="card-block">
							<h5 class="card-title">Balance</h5>
							<?php displayProgressionRing($query->BestTestResultsofPlayer("balance_tests",$i["email"]));?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="actions-player">
			<div id="addToCompare">
				<h3>Add to compare list</h3>
			</div>
			<a href="mailto:<?php echo $i['email'];?>" target="_top">
				<div class="contact-player" >
					<h3>Contact Player</h3>
				</div>
			</a>
		</div>


		<?php }} ?>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>