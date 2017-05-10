<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php /** SEARCH TABS --- */
			require 'inc/frontpage-btn-all-players.php';?>
		</div>

		<div class="col-md-6">
			<?php /** SEARCH TABS --- */
			require 'inc/frontpage-search-tabs.php';?>
		</div>

		<div class="col-md-6">
			<?php /** LOGIN --- */
			require 'inc/frontpage-login.php';?>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<div class="title-line">
				<span>Best ranked players</span>
			</div>
		</div>
		<div class="col-md-12">
			<?php /** BEST PLAYER carrousel --- */
			require 'inc/frontpage-best-players.php';?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="title-line">
				<span>Tests</span>
			</div>
		</div>
		<?php /** TESTS RANKING TAB --- */
		//require 'inc/frontpage-tests-tab.php';
		require 'inc/frontpage-tests-buttons.php';?>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>