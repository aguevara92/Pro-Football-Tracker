<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">

		<?
		if ($_GET){
		$loop = $query->Search("users",$_GET["search"]);
		?>

		<div class="col-md-12">
			<h1 class="break-title">Search results for: <?php echo $_GET["search"]?></h1>
		</div>
		
			
		<?
			foreach ($loop as $i){ ?>
				<div class="col-md-3">
					<div class="players-card">

						<?php /** PROFILE PIC --- */
						require 'inc/print-profile-pic.php';?>
					
						<a href='player.php?email=<?php echo $i["email"];?>'><h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3></a>
						<h6><?php echo $i["team"];?></h6>
					
						<h1><?php echo $i["overall_ranking"];?></h1>
					</div>
				</div>
			<?php }
		} ?>


	</div>
</div>





<?php
require 'footer.php'; // layout
?>