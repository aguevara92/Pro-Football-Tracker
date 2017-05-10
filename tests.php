<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			<div class="title-line">
				<span>Select a Test</span>
			</div>
		</div>
		

		<div class="tests-buttons">

			<div class="col-md-4">
				<a href="test_jump.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r1_c1.png">
						<h2>Jump Test</h2>
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<a href="test_aerobic.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r1_c1.png">
						<h2>Aerobic Test</h2>
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<a href="test_sprint.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r1_c5.png">
						<h2>Sprint Test</h2>
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<a href="test_psychology.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r2_c1.png">
						<h2><span>Psychology</span> Test</h2>
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<a href="test_agility.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r2_c3.png">
						<h2>Agility Test</h2>
					</div>
				</a>
			</div>

			<div class="col-md-4">
				<a href="test_balance.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r2_c5.png">
						<h2>Balance Test</h2>
					</div>
				</a>
			</div>



		</div>


	</div>
</div>




<?php
require 'footer.php'; // layout
?>