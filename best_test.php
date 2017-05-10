<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<?
		if ($_GET){
			$loop = $query->BestTestResults($_GET["test"]);
		?>
		<div class="col-md-12">
			<div class="col-md-12">
				<div class="title-line">
					<span>Best <?php echo $_GET["test"]?> players</span>
				</div>
			</div>
		</div>
				<?
				foreach ($loop as $i){ ?>
					<div class="col-md-3">
						
						<a href="player.php?email=<?php echo $i["email"];?>">
							<div class="players-card">

								<?php /** PROFILE PIC --- */
								require 'inc/print-profile-pic.php';?>
							
								<h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3>
								<h6><?php echo $i["team"];?></h6>
							
								<h1><?php echo $i["result"];?></h1>

							</div>
						</a>
					</div>
				<?php } ?>
		<?php } ?>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>