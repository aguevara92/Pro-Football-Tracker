<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-offset-4 col-md-4 white">
			<?
			if ($_GET){
			$loop = $query->addTestResult($_GET["test"],$_GET["value"], $_GET["email"]);
			?>

			
			<div>
				<h1>Congratulations</h1>
				<p>Your new test result has been saved</p>
			</div>
			
			<?php } ?>
		</div>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>