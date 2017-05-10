<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 white test-description">

			<h1>Agility test </h1>

			<iframe width="770" height="430" src="https://www.youtube.com/embed/w3XttpDoLHk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

			<p>This test is designed to assess the performer’s ability to change direction quickly and efficiently and in the fastest time possible. The test includes a variation of forward lateral and backwards running which mimics a lot of sporting actions.</p>

			<h2>Equipment </h2>
			<ul>
				<li>Tape measure</li>
				<li>Cones</li>
				<li>Stopwatch</li>
				<li>Timing gates (optional)</li>
			</ul>

			<h2>Procedure</h2>
			<p>Before the test can start the performer needs to arrange four cones into a T shape position (points A, B, C and D: 5 yards = 4.57 m, 10 yards = 9.14 m). Point A is the start position, then point B, then lateral movement to point C and D, then back to point B and finally from point B to point A running backwards. Once the performer is back at point A the timer is stopped. The whole time the performer should be able to touch each cone with their hand/hands closest to the cone. The performer should really perform the test a total of 3 times and take their best score/time. The test is invalid if the performer does any of the following: </p>

			<ul>
				<li>If the performer crosses one foot in front of the other (during lateral movements)</li>
				<li>Does not touch one of the points</li>
				<li>Does not face forward throughout the test </li>
			</ul>

			<h2>Different tests </h2>
			<p>There are a number of different agility tests such the Illinois agility test, zig zag test, the quadrant jump test and the 505 agility test. However, normative data is not always available for all these tests and thus is hard to make potential comparisons. </p>

			<h2>Diagram </h2>



			<div class="form-separator">
				<form method="GET" action="add_test.php" class="add-result">
					<div class="form-group">
						<input type="text" name="email" value="<?php echo $_GET['email']?>" class="hidden">
						<input type="text" name="test" value="agility_tests" class="hidden">
						
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
				<li>Lockie, R. G. et al. (2014) The Effects of Traditional and Enforced Stopping Speed and Agility Training on Multidirectional Speed and Athletic Function. The Journal of Strength & Conditioning Research, 28 (6), p. 1538-1551</li>
				<li>Little, T. and Williams, A.G., (2005). Specificity of acceleration, maximum speed, and agility in professional soccer players. The Journal of Strength & Conditioning Research, 19(1), pp.76-78.</li>
				<li>Pauole, K., Madole, K., Garhammer, J., Lacourse, M. and Rozenek, R., (2000). Reliability and validity of the T-test as a measure of agility, leg power, and leg speed in college-aged men and women. The Journal of Strength & Conditioning Research, 14(4), pp.443-450.</li>
				<li>Sporis, G., Jukic, I., Milanovic, L. and Vucetic, V., (2010). Reliability and factorial validity of agility tests for soccer players. The Journal of Strength & Conditioning Research, 24(3), pp.679-686
				</li>
			</ul>
		</div>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>