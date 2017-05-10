<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 white test-description">

			<h1>Sprint test</h1>
			<iframe width="770" height="430" src="https://www.youtube.com/embed/a3NMBTz79wg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

			<p>The sprint test is designed to measure acceleration and maximum running speed. It is a good measure of explosive power and can help to determine training loads for different sports. It is also a good indicator of performance in many intermittent based sports. <p>
			 
			<h2>Essential equipment </h2>
			<ul>
				<li>Measuring tape or marked athletics track</li>
				<li>Stopwatch </li>
				<li>Cones or markers</li>
				<li>Coach / Physical Trainer / Assistant</li>
				<li>Sprint app (Optional: need two devices e.g. Smart devices / phones to act as timing gates)</li>
				<li>Timing gates (Optional: if you have access to this equipment)</li>
			</ul>

			<h2>Procedure</h2>
			<p>The performer should first mark out a 20 meter area (start point as marker A and the end point as marker B) with a tape measure and cones or the use of an athletics track. The performer should then warm up ready to conduct the test. The performer should stand at marker A and should be in a standing stationary position with foot behind the marker (no movement, no swaying or rocking motions). The coach / assistant should stand at marker B with one arm/hand in the air with a stop watch. On the coach/assistants vocal command (‘’Go’’) and the following arm/hand coming down their side quickly (visual cue) the performer should sprint to marker B. </p>

			<h2>Break down of procedure</h2>
			<ol>
				<li>The performer should warm up for between 5 to 10 minutes</li>
				<li>The performer then marks point A and B (with the help from a coach or assistant) </li>
				<li>The performer should stand in the ready standing stationary position at marker A</li>
				<li>On the command of the coach of assistant the performer sprints as fast as they can to marker B</li>
				<li>The assistant or coach should measure the time in seconds and record </li>
				<li>The performer should then repeat the test 3 times (taking the average and the best score).   </li>
			</ol>

			<h2>Different tests (optional)</h2>
			<p>The following procedure can be achieved with timing gates or with the use of sprinting apps. The performer will have to set up the equipment carefully (e.g. Smart phone or device at marker A and at marker B). The devices then will record your time once you run past the phones line of sight. The same principle applies for timing gates.   </p>


			<div class="form-separator">
				<form method="GET" action="add_test.php" class="add-result">
					<div class="form-group">
						<input type="text" name="email" value="<?php echo $_GET['email']?>" class="hidden">
						<input type="text" name="test" value="sprint_tests" class="hidden">
						
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
				<li>Lovell, R., Towlson, C., Parkin, G., Portas, M., Vaeyens, R. and Cobley, S., (2015). Soccer player characteristics in English lower-league development programmes: The relationships between relative age, maturation, anthropometry and physical fitness. PloS one, 10(9), p.e0137238.</li>
				<li>Kumar, A. and Kathayat, L. B. (2014) A Study of Speed, Power & Fatigue Index of Cricket Players. Journal of Exercise Science and Physiotherapy, 10 (1), p. 21-24</li>
				<li>Andrade, M. et al. (n.d.) Training and Testing II. In WORLD CONFERENCE ON SCIENCE AND SOCCER 4.0, p. 93
				Paradisis, G. P. et al. (2013) Changes in Leg Strength and Kinematics with Uphill-Downhill Sprint Training. International Journal of Sports Science and Coaching, 8 (3), p. 543-556</li>
				<li>Wisløff, U., Castagna, C., Helgerud, J., Jones, R. and Hoff, J., (2004). Strong correlation of maximal squat strength with sprint performance and vertical jump height in elite soccer players. British journal of sports medicine, 38(3), pp.285-288.</li>
			</ul>
		</div>

	</div>
</div>




<?php
require 'footer.php'; // layout
?>