<div class="carrousel">
	<div>
		<?
		$loop = $query->GetOrdered("users","overall_ranking","DESC",7);
		foreach ($loop as $i){ ?>
			<a href="player.php?email=<?php echo $i["email"];?>">
				<div class="">

					<?php /** PROFILE PIC --- */
					require 'inc/print-profile-pic.php';?>
				
					<h3><?php echo $i["first_name"];?> <?php echo $i["last_name"];?></h3>
					<h6><?php echo $i["team"];?></h6>
				
					<h1><?php echo $i["overall_ranking"];?></h1>
				
				</div>
			</a>
		<?php } ?>
	</div>
    <span id="prev" class="flaticon-arrow-left"></span>
    <span id="next" class="flaticon-arrow-right"></span>
</div>
<a href="players.php" class="btn btn-centered btn-primary">View all the players</a>

<script src="js/slick.js"></script>