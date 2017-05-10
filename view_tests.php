<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="title-line">
				<span>Tests</span>
			</div>
		</div>
		<?php /** TESTS RANKING TAB --- */
		require 'inc/frontpage-tests-buttons.php';?>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>