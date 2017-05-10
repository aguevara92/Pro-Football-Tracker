<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">	

		<?php
		if (isset($_POST["first_name"])){
			$query->Save("users",$_POST, "email");
			
			echo'<div class="alert alert-success" role="alert">';
				echo'<strong>Well done!</strong> You registered succesfully';
			echo'</div>';
			
			$loop = $query->Find("users","email",$_POST["email"]);
		} elseif (isset($_GET["email"]) && isset($_SESSION["email"])){
			if ($_GET["email"] == $_SESSION["email"]){
				$loop = $query->Find("users","email",$_GET["email"]);
			}
		} else {
			echo'<div class="alert alert-danger" role="alert">';
				echo'<strong>This page is protected!</strong> You cannot access this page';
			echo'</div>';
		}

		if (isset($loop)){
			foreach ($loop as $i){

		?>

		<div class="col-md-6 whiteish">
			<h1>Edit your personal information </h1>
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" class="form-control" value='<?php echo $i["first_name"]?>'>
				</div>
				
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" class="form-control" value='<?php echo $i["last_name"]?>'>
				</div>

				<fieldset disabled>
					<div class="form-group">
						<label for="disabled-email">Email</label>
						<input type="text" name="disabled-email" class="form-control" value='<?php echo $i["email"]?>'>
					</div>
				</fieldset>
				<input type="text" name="email" class="form-control hidden" value='<?php echo $i["email"]?>'>

				<div class="form-group">
					<label class="profile_picture">
						Upload for Picture
						<input type="file" id="profile_picture" class="custom-file-input" name="image">
						<span class="custom-file-control"></span>
					</label>
				</div>

				<div class="form-group">
					<label for="team">Team</label>
					<input type="text" name="team" class="form-control" value='<?php echo $i["team"]?>'>
				</div>

				<div class="form-group">
					<label for="preferred_foot">Preferred Foot</label>
					<select name="preferred_foot" class="form-control custom-select">
						<option value="right">Right</option> 
						<option value="left">Left</option>
						<option value="both">Both</option>
					</select>
				</div>

				<div class="form-group">
					<label for="country">Country</label>
					<input type="text" name="country" class="form-control" value='<?php echo $i["country"]?>'>
				</div>

				<div class="form-group">
					<label for="county">County</label>
					<input type="text" name="county" class="form-control" value='<?php echo $i["county"]?>'>
				</div>


	            <div class="form-group">
	                <label for="dob" class="col-2 col-form-label">Date of birth</label>
	                <div class="input-group">
	                    <input type='text' class="form-control" name="dob" id="dob" value="<?php echo $i["dob"]?>"/>
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                </div>
	            </div>
	        
		        <script type="text/javascript">
		            $( function() {
					    $( "#dob" ).datepicker({
					      changeMonth: true,
					      changeYear: true,
					      dateFormat: "yy-mm-dd",
					      yearRange: "-40:+0"
					    });
					  } );
		        </script>
		    

				<div class="form-group">
					<label for="height">Height</label>
					<div class="input-group">
					  	<input type="text" name="height" class="form-control" placeholder="185" aria-describedby="basic-addon1"  value='<?php echo $i["height"]?>'>
					  	<span class="input-group-addon" id="basic-addon1">cm</span>
					</div>
				</div>

				<div class="form-group">
					<label for="weight">Weight</label>
					<div class="input-group">
					  	<input type="text" name="weight" class="form-control" placeholder="76" aria-describedby="basic-addon2"  value='<?php echo $i["weight"]?>'>
					  	<span class="input-group-addon" id="basic-addon2">kg</span>
					</div>
				</div>


				<div class="form-group">
					<label for="preferred_position">Preferred Position</label>
					<select name="preferred_position" class="form-control custom-select">
						<option value="gk">Goal keeper </option> 
						<option value="cb">Centre-back</option>
						<option value="fb">Full-back</option>
						<option value="wb">Wing-back</option>
						<option value="m">Midfield</option>
						<option value="md">Defending midfielder</option>
						<option value="mc">Central midfielder</option>
						<option value="ma">Attacking midfielder</option>
						<option value="w">Winger</option>
						<option value="fw">Forward</option>
						<option value="st">Centre-forward</option>
						<option value="at">Withdrawn striker</option>
					</select>
				</div>

				

				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="col-md-6">
			<h2 class="text-white margin-bottom">Register your new tests results</h2>
			
			<div class="tests-buttons current-results">
				<a href="test_jump.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r1_c1.png">
						<h2>Jump Test</h2>
						<?php displayProgressionRing($query->BestTestResultsofPlayer("jump_tests",$i["email"]));?>
					</div>
				</a>
			

			
				<a href="test_aerobic.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r1_c1.png">
						<h2>Aerobic Test</h2>
						<?php displayProgressionRing($query->BestTestResultsofPlayer("aerobic_tests",$i["email"]));?>
					</div>
				</a>
			

			
				<a href="test_sprint.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r1_c5.png">
						<h2>Sprint Test</h2>
						<?php displayProgressionRing($query->BestTestResultsofPlayer("sprint_tests",$i["email"]));?>
					</div>
				</a>
			

			
				<a href="test_psychology.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r2_c1.png">
						<h2><span>Psychology</span> Test</h2>
						<?php displayProgressionRing($query->BestTestResultsofPlayer("psychology_tests",$i["email"]));?>
					</div>
				</a>
			

			
				<a href="test_agility.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r2_c3.png">
						<h2>Agility Test</h2>
						<?php displayProgressionRing($query->BestTestResultsofPlayer("agility_tests",$i["email"]));?>
					</div>
				</a>
			

			
				<a href="test_balance.php?email=<?php echo $_SESSION["email"]?>">
					<div class="clearfix">
						<img src="images/icons/tests-icons_r2_c5.png">
						<h2>Balance Test</h2>
						<?php displayProgressionRing($query->BestTestResultsofPlayer("balance_tests",$i["email"]));?>
					</div>
				</a>
			

		</div>


		<?php };
			}; ?>
	</div>
</div>


<?php
require 'footer.php'; // layout
?>