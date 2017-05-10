<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 white test-description">

			<h1>Balance test (standing stork test)</h1>

			<iframe width="770" height="430" src="https://www.youtube.com/embed/6GpsYTNc1cs?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

			<p>This test is designed to assess whole body and lower body stability, strength and predominantly balance; assessing the ability to balance on the ball of the foot with either dominant or non-dominant legs or ideally testing both. Balance has a lot of implications with strength, functional movement patterns and indeed injury risk and rehabilitation.</p>

			<h2>Equipment</h2>
			<ul>
			<li>Flat non-slip surface </li>
			<li>Stopwatch </li>
			<li>Paper and pencil</li>
			</ul>


			<h2>Procedure</h2>
			<p>Prior to starting the test the performer should be warmed up and ready. The performer should remove their footwear and place their hands on their hips. The performer should then position the rested foot (non-supported) against the inside of the support leg near the knee. Once this has been achieved the performer is allowed a practice attempt to familiarise themselves with the test. The performer then attempts the test by raising their heel and placing their non-supported foot to the inside of the opposing and supporting leg. All the time with hands on their hips trying to hold the position for as long as possible. 
			The timer (stopwatch) is started when the heel is raised from the floor and is stopped if:</p>
			<ol>
				<li>The hands come away from the hips</li>
				<li>The supporting foot swivels or hops off of the original position </li>
				<li>The rested foot comes away from the inside of the knee (of the supported leg)</li>
				<li>The heel touches the floor. </li>
			</ol>


			<h2>Different tests </h2>
			<p>There are other variations of this test such as different apps or variations of how you stand or indeed balance and move while in a stationary position while being timed. </p>



			<div class="form-separator">
				<form method="GET" action="add_test.php" class="add-result">
					<div class="form-group">
						<input type="text" name="email" value="<?php echo $_GET['email']?>" class="hidden">
						<input type="text" name="test" value="balance_tests" class="hidden">
						
						<label for="value">Insert new result</label>
						<div class="input-group small">
						  	<input type="text" name="value" class="form-control" placeholder="" aria-describedby="basic-addon2">
						  	<span class="input-group-addon" id="basic-addon2">secs</span>
						</div>

					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>

		<div class="col-md-12 references">
			<ul>
				<li>Daneshjoo, A., Mokhtar, A. H., Rahnama, N., & Yusof, A. (2012). The effects of comprehensive warm-up programs on proprioception, static and dynamic balance on male soccer players. PloS one, 7(12), e51568.</li>
				<li>Johnson, B. L., & Nelson, J. K. (1969). Practical measurements for evaluation in physical education.</li>
			</ul>
		</div>

	</div>
</div>




<?php
require 'footer.php'; // layout
?>