<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 white test-description">

			<h1>Maximal Aerobic Speed test (30-15 test)</h1>

			<iframe width="770" height="430" src="https://www.youtube.com/embed/e-2dH8EWPqs?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

			<p>30 by 15 test is designed to measure or replicate the demands of intermittent based sports, and therefore has rest periods incorporated into the incremental nature of the test. Thus, it assesses the performer’s ability to run then recover and repeat to measure the performer’s final running speed and to gain estimations of VO2max. </p>

			<h2>Equipment </h2>
			<ul>
				<li>Grass area up to 40 metres in distance</li>
				<li>Cones or markers</li>
				<li>Audio equipment (with audio available at: </li>
				<li>Coach / Physical Trainer / Assistant</li>
				<li>Treadmill (optional)</li>
			</ul>

			<h2>Procedure</h2>
			<h4>Treadmill option </h4>
			<p>The same test can be used when running on a treadmill. The performer starts at 8 km/hr, runs for 30 seconds, rests for 15 seconds (with their feet off the treadmill to the side, holding onto the rails to ensure you don’t fall off). While resting for 15 seconds increase the speed on the treadmill by 0.5 km/hr ready to start the next stage at a higher speed after the 15 seconds rest has finished. Total test time should take you around 20-30 minutes.</p>

			<h4>Field based option</h4>
			<p>Find a large area and mark out a 40m area with markers at either end (marker A and C) and at the midpoint (20m Marker B). Additionally, add markers 3 meters before each end point marker (e.g. marker A and C) and also either side of the mid-line (marker B). The test requires the performer to run for 30 seconds alternated with 15 seconds of walking (active recovery). Performers begin behind the line (marker A), when an audible beep occurs the performer begins to run towards the midline (marker B) pacing their run to be there at the second beep continuing on to the end line to the next beep (marker C). The performer continues to run until they hear a double beep which indicates that 30 seconds of running has been achieved and they can stop or active rest (walk to the next marker). In some cases, as you get faster, the double beep will occur before you reach the line, this indicates that you need to walk to the next line. The performer walks to the next line to wait for the next beep to indicate the start of the next level (approximately 15 seconds rest or walking recovery). The initial speed will start at 8.0 km/hr and increases by 0.5 km/hr every 45 second stage. The test ends when the performer cannot fails to make it to the line three times (within the tolerance zones) at any respective line. </p>

			<h2>Break down of procedure</h2>
			<ol>
				<li>The performer should warm up for between 5 to 10 minutes</li>
				<li>The performer then marks point A, B and C (with the help from a coach or assistant) </li>
				<li>The performer should stand in the ready standing stationary position at marker A</li>
				<li>On the command of the audio tape / cd / track (with the help of a coach / assistant) the performer runs at a steady pace towards marker B waiting for the beep, continuing on to marker C. </li>
				<li>After 30 seconds of running the performer will hear an audible double beep which will signify to stop and rest for 15 seconds (or at later stages walk to the closest marker) </li>
				<li>The test will start at 8 km/hr and will increase by 0.5 km/hr every 45 second stage completed</li>
				<li>The performer then runs until they fail to make it to the tolerance zones three times</li>
				<li>The performer / assistant / coach should then record the final speed achieved </li>
			</ol>




			<div class="form-separator">
				<form method="GET" action="add_test.php" class="add-result">
					<div class="form-group">
						<input type="text" name="email" value="<?php echo $_GET['email']?>" class="hidden">
						<input type="text" name="test" value="aerobic_tests" class="hidden">
						
						<label for="value">Insert new result</label>
						<div class="input-group small">
						  	<input type="text" name="value" class="form-control" placeholder="" aria-describedby="basic-addon2">
						  	<span class="input-group-addon" id="basic-addon2">k/ph</span>
						</div>

					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
			
		</div>

		<div class="col-md-12 references">
			<ul>
				<li>Branch, N. and Buchheit, M., (2013). 30-15 Intermittent Fitness Test vs. Yo-Yo Intermittent Recovery Test Level 1: relationship and sensitivity to training.</li>
				<li>Buchheit, M., Simpson, B.M. and Mendez-Villanueva, A., (2013). Repeated high-speed activities during youth soccer games in relation to changes in maximal sprinting and aerobic speeds. International journal of sports medicine, 34(01), pp.40-48.</li>
				<li>Buchheit, M., (2008). The 30-15 intermittent fitness test: accuracy for individualizing interval training of young intermittent sport players. The Journal of Strength & Conditioning Research, 22(2), pp.365-374.</li>
			</ul>
		</div>
	</div>
</div>




<?php
require 'footer.php'; // layout
?>