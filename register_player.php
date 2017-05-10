<?php	
require 'header.php';
$query = new Queries(); // $pdo,table
?>

<div class="container">
	<div class="row">	

		<?php
		if ($_GET){
			$query->Save("users",$_GET, "email");

			echo'<div class="alert alert-success" role="alert">';
				echo'<strong>Well done!</strong> You registered succesfully';
			echo'</div>';
		}
		?>

		<div class="col-md-6 col-md-offset-3 white">
			<h1>Fill the form to register </h1>
			<form method="GET" action="">
				<div class="form-group">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" class="form-control">
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label class="profile_picture">
						<input type="file" id="profile_picture" class="custom-file-input">
						<span class="custom-file-control"></span>
					</label>
				</div>

				<div class="form-group">
					<label for="team">Team</label>
					
					<?php /** LIST OF TEAMS --- */
					require 'inc/team_list.php';?>
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
					<input type="text" name="country" class="form-control">
				</div>

				<div class="form-group">
					<label for="county">County</label>
					<input type="text" name="county" class="form-control">
				</div>

				<div class="form-group">
					<label for="example-datetime-local-input" class="col-2 col-form-label">Date of birth</label>
					<div class="col-10">
					<input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
					</div>
				</div>

				<div class="form-group">
					<label for="height">Height</label>
					<div class="input-group">
					  	<input type="text" name="height" class="form-control" placeholder="185" aria-describedby="basic-addon1">
					  	<span class="input-group-addon" id="basic-addon1">cm</span>
					</div>
				</div>

				<div class="form-group">
					<label for="weight">Weight</label>
					<div class="input-group">
					  	<input type="text" name="weight" class="form-control" placeholder="76" aria-describedby="basic-addon2">
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
	</div>
</div>













<?php

/**************** ADD NEW ACCOUNT FORM  ****************/
/*
	$pk = 'email';
	$columns = [
		'email',
		'password',
		'first_name',
		'last_name',
		'preferred_foot',
		'country',
		'height',
		'weight',
	];


	$title = 'Register as a  Player'; // page title
	if (isset($_POST['Edit']))  { // When edit button was presses
		$GLOBALS['pk'] = $pk; // set the primary key
		$title = 'Edit Account';
	} 
	elseif (isset($_POST['Add'])) 
	//else
	{	
		$title = 'Register as a player'; // page title
		$record = [];
		
		foreach ($columns as $field) {
			$tmpArr = array($field => $_POST[$field]);
			$record += $tmpArr;
		}
		if ($_POST[$pk]!= ''){ // add primary key to query
			$tmpArr = array($pk => $_POST[$pk]);
			$record += $tmpArr;
		}
		
		$masterClass->save($record, $pk); // $record, Primary Key
		$display -> succesfull('The account was created successfully'); // alert prompt
	} 
	$display->displayForm($title,$columns); 

*/

require 'footer.php'; // layout
?>