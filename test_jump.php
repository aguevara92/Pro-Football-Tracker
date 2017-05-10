<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 white test-description">

			<h1>Jumping Test</h1>

			<iframe width="770" height="430" src="https://www.youtube.com/embed/v_PZoQ2uVOE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

			<p>The jump test is designed to measure your explosive leg power and elastic strength which can translate to a lot of other movements within different sports. </p>

			<h2>Essential equipment</h2>
			<ul>
				<li>Wall (with a flat and even surface adjacent to the wall)</li>
				<li>Tape measure</li>
				<li>Step Ladder</li>
				<li>Chalk</li>
				<li>Coach / Physical Trainer / Assistant</li>
			<li>My Jump App (optional) </li>
			</ul>

			<h2>Procedure</h2>
			<p>The performer should stand side on to a wall (feet flat on the ground) and reach up and mark the wall with chalk (or marker) with the hand closest to the wall. You should then record this value from the base of the wall to the point where you marked the wall. The performer should then stand away from the wall, and then jumps vertically as high as possible marking the wall at the highest point possible. The performer should use their arms to help assist in the upward momentum of the jump.  The difference between standing height and jump height should be recorded. The best of three attempts is recorded.</p>

			<h2>Break down of procedure: </h2>
			<ol>
				<li>The performer should warm up for between 5 to 10 minutes</li>
				<li>The performer then marks with chalks the highest point at which his fingertips reach on the wall (point 1)  </li>
				<li>The performer stands adjacent to the wall, feet flat on the ground, and prepares to jump. </li>
				<li>The performer from this ready position vertically jumps as high as possible marking on the wall (point 2)</li>
				<li>The assistant or performer can the measure the difference between point 1 and 2. </li>
				<li>The performer should then repeat the test 3 times (taking the average and the best score). </li>
			</ol>

			<h2>Different tests (optional)</h2>
			<p>The vertical jump test can also be performed using a specialized apps (my jump app) and also using different variations of jump mats. The method when using my jump app is very similar to the description above. The performer will require an assistant who will essentially film the feet from a low angle (close to the floor) of the performer. The app then measures the time the performer was off the ground and calculates jump height along with other measures (e.g. it calculates power, force and time off the ground). </p>

			<p>In order to be as accurate as you can, you must ensure you are standardised and use the same environment or place every time for the jump. Also, the same position of when using your device (smart phone with app installed).  The participant should also do the same type of jump every time (E.g. the vertical jump is usually performed as a counter movement jump, this is where there is bending of the knees immediately prior to the jump). There are many other variants but in the interest of collecting accurate data you should perform the same type of jump each time you conduct the test.  </p>


			<div class="form-separator">
				<form method="GET" action="add_test.php" class="add-result">
					<div class="form-group">
						<input type="text" name="email" value="<?php echo $_GET['email']?>" class="hidden">
						<input type="text" name="test" value="jump_tests" class="hidden">
						
						<label for="value">Insert new result</label>
						<div class="input-group small">
						  	<input type="text" name="value" class="form-control" placeholder="" aria-describedby="basic-addon2">
						  	<span class="input-group-addon" id="basic-addon2">cm</span>
						</div>

					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
			
		</div>
		<div class="col-md-12 references">
			<ul>
				<li>Cometti, G., Maffiuletti, N.A., Pousson, M., Chatard, J.C. and Maffulli, N., (2001). Isokinetic strength and anaerobic power of elite, subelite and amateur French soccer players. International journal of sports medicine, 22(01), pp.45-51.</li>
				<li>Castagna, C. and Castellini, E., (2013). Vertical jump performance in Italian male and female national team soccer players. The Journal of Strength & Conditioning Research, 27(4), pp.1156-1161.</li>		
				<li>Balsalobre-Fernández, C., Glaister, M. and Lockey, R.A., (2015). The validity and reliability of an iPhone app for measuring vertical jump performance. Journal of sports sciences, 33(15), pp.1574-1579.</li>
				<li>Gallardo-Fuentes, F., Gallardo-Fuentes, J., Ramírez-Campillo, R., Balsalobre-Fernández, C., Martínez, C., Caniuqueo, A., Cañas, R., Banzer, W., Loturco, I., Nakamura, F. and Izquierdo, M., (2016). Inter And Intra-Session Reliability And Validity Of The My Jump App For Measuring Different Jump Actions In Trained Male And Female Athletes. The Journal of Strength & Conditioning Research.</li>
			</ul>
		</div>


	</div>
</div>




<?php
require 'footer.php'; // layout
?>