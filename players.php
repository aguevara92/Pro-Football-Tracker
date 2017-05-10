<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="col-md-12">
		<div class="col-md-12">
			<div class="title-line">
				<span>Best ranked players</span>
			</div>
		</div>
	</div>
		
	<?
	$loop = $query->GetAll("users");
	foreach ($loop as $i){ ?>
		<div class="col-md-3">
			<a href="player.php?email=<?php echo $i["email"];?>">
				<div class="players-card">

					<?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>
				
					<h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3>
					<h6><?php echo $i["team"];?></h6>
				
					<h1><?php echo $i["overall_ranking"];?></h1>
				</div>
			</a>
		</div>
	<?php } ?>
</div>




<?php
require 'footer.php'; // layout
?>