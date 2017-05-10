<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 white test-description">

			<h1>Psychology Test</h1>

			<div class="">
				<form method="GET" action="add_test.php">
					<div class="form-group">
						<p>Using self talk to motivate yourself? </p>
						<input type="radio" name="motivate" value="1" checked> 1
  						<input type="radio" name="motivate" value="2"> 2
  						<input type="radio" name="motivate" value="3"> 3
  						<input type="radio" name="motivate" value="4"> 4
  						<input type="radio" name="motivate" value="5"> 5
  						<input type="radio" name="motivate" value="6"> 6
  						<input type="radio" name="motivate" value="7"> 7
  						<input type="radio" name="motivate" value="8"> 8
  						<input type="radio" name="motivate" value="9"> 9
  						<input type="radio" name="motivate" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Being able to perform skills without conciously thinking? </p>
						<input type="radio" name="conciously" value="1" checked> 1
  						<input type="radio" name="conciously" value="2"> 2
  						<input type="radio" name="conciously" value="3"> 3
  						<input type="radio" name="conciously" value="4"> 4
  						<input type="radio" name="conciously" value="5"> 5
  						<input type="radio" name="conciously" value="6"> 6
  						<input type="radio" name="conciously" value="7"> 7
  						<input type="radio" name="conciously" value="8"> 8
  						<input type="radio" name="conciously" value="9"> 9
  						<input type="radio" name="conciously" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Setting your own goals? </p>
						<input type="radio" name="own_goals" value="1" checked> 1
  						<input type="radio" name="own_goals" value="2"> 2
  						<input type="radio" name="own_goals" value="3"> 3
  						<input type="radio" name="own_goals" value="4"> 4
  						<input type="radio" name="own_goals" value="5"> 5
  						<input type="radio" name="own_goals" value="6"> 6
  						<input type="radio" name="own_goals" value="7"> 7
  						<input type="radio" name="own_goals" value="8"> 8
  						<input type="radio" name="own_goals" value="9"> 9
  						<input type="radio" name="own_goals" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Visualise your own performance? </p>
						<input type="radio" name="visualise" value="1" checked> 1
  						<input type="radio" name="visualise" value="2"> 2
  						<input type="radio" name="visualise" value="3"> 3
  						<input type="radio" name="visualise" value="4"> 4
  						<input type="radio" name="visualise" value="5"> 5
  						<input type="radio" name="visualise" value="6"> 6
  						<input type="radio" name="visualise" value="7"> 7
  						<input type="radio" name="visualise" value="8"> 8
  						<input type="radio" name="visualise" value="9"> 9
  						<input type="radio" name="visualise" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Cannot psych yourself up to perform well? </p>
						<input type="radio" name="psych_perform" value="10" checked> 1
  						<input type="radio" name="psych_perform" value="9"> 2
  						<input type="radio" name="psych_perform" value="8"> 3
  						<input type="radio" name="psych_perform" value="7"> 4
  						<input type="radio" name="psych_perform" value="6"> 5
  						<input type="radio" name="psych_perform" value="5"> 6
  						<input type="radio" name="psych_perform" value="4"> 7
  						<input type="radio" name="psych_perform" value="3"> 8
  						<input type="radio" name="psych_perform" value="2"> 9
  						<input type="radio" name="psych_perform" value="1"> 10
  					</div>

  					<div class="form-group">
						<p>Allow movements to happen naturally? </p>
						<input type="radio" name="movements" value="1" checked> 1
  						<input type="radio" name="movements" value="2"> 2
  						<input type="radio" name="movements" value="3"> 3
  						<input type="radio" name="movements" value="4"> 4
  						<input type="radio" name="movements" value="5"> 5
  						<input type="radio" name="movements" value="6"> 6
  						<input type="radio" name="movements" value="7"> 7
  						<input type="radio" name="movements" value="8"> 8
  						<input type="radio" name="movements" value="9"> 9
  						<input type="radio" name="movements" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Cannot control your emotions? </p>
						<input type="radio" name="emotions" value="10" checked> 1
  						<input type="radio" name="emotions" value="9"> 2
  						<input type="radio" name="emotions" value="8"> 3
  						<input type="radio" name="emotions" value="7"> 4
  						<input type="radio" name="emotions" value="6"> 5
  						<input type="radio" name="emotions" value="5"> 6
  						<input type="radio" name="emotions" value="4"> 7
  						<input type="radio" name="emotions" value="3"> 8
  						<input type="radio" name="emotions" value="2"> 9
  						<input type="radio" name="emotions" value="1"> 10
  					</div>

  					<div class="form-group">
						<p>Rehearse your performance in your mind? </p>
						<input type="radio" name="rehearse" value="1" checked> 1
  						<input type="radio" name="rehearse" value="2"> 2
  						<input type="radio" name="rehearse" value="3"> 3
  						<input type="radio" name="rehearse" value="4"> 4
  						<input type="radio" name="rehearse" value="5"> 5
  						<input type="radio" name="rehearse" value="6"> 6
  						<input type="radio" name="rehearse" value="7"> 7
  						<input type="radio" name="rehearse" value="8"> 8
  						<input type="radio" name="rehearse" value="9"> 9
  						<input type="radio" name="rehearse" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Can't easily get into an ideal performance state? </p>
						<input type="radio" name="performance_state" value="10" checked> 1
  						<input type="radio" name="performance_state" value="9"> 2
  						<input type="radio" name="performance_state" value="8"> 3
  						<input type="radio" name="performance_state" value="7"> 4
  						<input type="radio" name="performance_state" value="6"> 5
  						<input type="radio" name="performance_state" value="5"> 6
  						<input type="radio" name="performance_state" value="4"> 7
  						<input type="radio" name="performance_state" value="3"> 8
  						<input type="radio" name="performance_state" value="2"> 9
  						<input type="radio" name="performance_state" value="1"> 10
  					</div>

  					<div class="form-group">
						<p>Able to control distractions when training? </p>
						<input type="radio" name="distractions" value="1" checked> 1
  						<input type="radio" name="distractions" value="2"> 2
  						<input type="radio" name="distractions" value="3"> 3
  						<input type="radio" name="distractions" value="4"> 4
  						<input type="radio" name="distractions" value="5"> 5
  						<input type="radio" name="distractions" value="6"> 6
  						<input type="radio" name="distractions" value="7"> 7
  						<input type="radio" name="distractions" value="8"> 8
  						<input type="radio" name="distractions" value="9"> 9
  						<input type="radio" name="distractions" value="10"> 10
  					</div>

  					<div class="form-group">
						<p>Can't control negative thinking? </p>
						<input type="radio" name="negative" value="10" checked> 1
  						<input type="radio" name="negative" value="9"> 2
  						<input type="radio" name="negative" value="8"> 3
  						<input type="radio" name="negative" value="7"> 4
  						<input type="radio" name="negative" value="6"> 5
  						<input type="radio" name="negative" value="5"> 6
  						<input type="radio" name="negative" value="4"> 7
  						<input type="radio" name="negative" value="3"> 8
  						<input type="radio" name="negative" value="2"> 9
  						<input type="radio" name="negative" value="1"> 10
  					</div>

  					<div class="form-group">
						<p>Using relaxation to improve performance? </p>
						<input type="radio" name="relaxation" value="1" checked> 1
  						<input type="radio" name="relaxation" value="2"> 2
  						<input type="radio" name="relaxation" value="3"> 3
  						<input type="radio" name="relaxation" value="4"> 4
  						<input type="radio" name="relaxation" value="5"> 5
  						<input type="radio" name="relaxation" value="6"> 6
  						<input type="radio" name="relaxation" value="7"> 7
  						<input type="radio" name="relaxation" value="8"> 8
  						<input type="radio" name="relaxation" value="9"> 9
  						<input type="radio" name="relaxation" value="10"> 10
  					</div>

  					


  					


					<div class="form-group add-result">
						<input type="text" name="email" value="<?php echo $_GET['email']?>" class="hidden">
						<input type="text" name="test" value="psychology_tests" class="hidden">
						
						<label for="value">Insert new result</label>
						<div class="input-group small">
						  	<input id="psychology_result" type="text" name="value" class="form-control" placeholder="" aria-describedby="basic-addon2" value="0">
						</div>

						<input type="submit" value="Submit">

					</div>

					<script type="text/javascript">
						
						jQuery(document).ready(function($) {
							$('.form-group input[type=radio]').change(function() {
								var total = 0;
								$('.form-group input:radio:checked').each(function(){
								   total += parseFloat($(this).val());
								});

							    return $('#psychology_result').val(total);
							});
						});

					</script>

				</form>
			</div>
		</div>

		<div class="col-md-12 references">
			<ul>
				<li>Hardy, L., Roberts, R., Thomas, P. R., & Murphy, S. M. (2010). Test of Performance Strategies (TOPS): Instrument refinement using confirmatory factor analysis. Psychology of Sport and Exercise, 11(1), 27-35.</li>
				<li>Hardy, L., Jones, J. G., & Gould, D. (1996). Understanding psychological preparation for sport: Theory and practice of elite performers. John Wiley & Sons Inc.</li>
			</ul>
		</div>

	</div>
</div>




<?php
require 'footer.php'; // layout
?>