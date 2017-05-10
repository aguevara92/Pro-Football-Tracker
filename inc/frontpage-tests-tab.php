<h1>Ranking of tests</h1>


<div id="jump" class="col-md-4">
	<h3>Jump Test</h3>
	<table class="table table-striped">
	    <tbody>
		<?
		$loop = $query->BestTestResults("jump_tests");
		foreach ($loop as $i){ ?>
			<tr>
				<td> <?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>						
				</td>
				<td> 
					<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
					<h6><?php echo $i["team"];?></h6>
				</td>
				<td>
					<h1><?php echo $i["result"];?></h1>
				</td>
			</tr>
			
		<?php } ?>
		</tbody>
	</table>
</div>
<!-- ** -->
<div id="aerobic" class="col-md-4">
	<h3>Aerobic Test</h3>
	<table class="table table-striped">
	    <tbody>
		<?
		$loop = $query->BestTestResults("aerobic_tests");
		foreach ($loop as $i){ ?>
			<tr>
				<td> <?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>						
				</td>
				<td> 
					<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
					<h6><?php echo $i["team"];?></h6>
				</td>
				<td>
					<h1><?php echo $i["result"];?></h1>
				</td>
			</tr>
			
		<?php } ?>
		</tbody>
	</table>
</div>
<!---- ** -->
<div id="sprint" class="col-md-4">
	<h3>Sprint Test</h3>
	<table class="table table-striped">
	    <tbody>
		<?
		$loop = $query->BestTestResults("sprint_tests");
		foreach ($loop as $i){ ?>
			<tr>
				<td> <?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>						
				</td>
				<td> 
					<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
					<h6><?php echo $i["team"];?></h6>
				</td>
				<td>
					<h1><?php echo $i["result"];?></h1>
				</td>
			</tr>
			
		<?php } ?>
		</tbody>
	</table>
</div>
<!---- ** -->
<div id="psychology" class="col-md-4">
	<h3>Psychology Test</h3>
	<table class="table table-striped">
	    <tbody>
		<?
		$loop = $query->BestTestResults("psychology_tests");
		foreach ($loop as $i){ ?>
			<tr>
				<td> <?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>						
				</td>
				<td> 
					<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
					<h6><?php echo $i["team"];?></h6>
				</td>
				<td>
					<h1><?php echo $i["result"];?></h1>
				</td>
			</tr>
			
		<?php } ?>
		</tbody>
	</table>
</div>
<!---- ** -->
<div id="agility" class="col-md-4">
	<h3>Agility Test</h3>
	<table class="table table-striped">
	    <tbody>
		<?
		$loop = $query->BestTestResults("agility_tests");
		foreach ($loop as $i){ ?>
			<tr>
				<td> <?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>						
				</td>
				<td> 
					<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
					<h6><?php echo $i["team"];?></h6>
				</td>
				<td>
					<h1><?php echo $i["result"];?></h1>
				</td>
			</tr>
			
		<?php } ?>
		</tbody>
	</table>
</div>
<!---- ** -->
<div id="balance" class="col-md-4">
	<h3>Balance Test</h3>
	<table class="table table-striped">
	    <tbody>
		<?
		$loop = $query->BestTestResults("balance_tests");
		foreach ($loop as $i){ ?>
			<tr>
				<td> <?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>						
				</td>
				<td> 
					<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
					<h6><?php echo $i["team"];?></h6>
				</td>
				<td>
					<h1><?php echo $i["result"];?></h1>
				</td>
			</tr>
			
		<?php } ?>
		</tbody>
	</table>
</div>
