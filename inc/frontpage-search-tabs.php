<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#byname">By name</a></li>
	<!--<li><a data-toggle="tab" href="#byteam">By team</a></li>-->
	<li><a data-toggle="tab" href="#byposition">By Position</a></li>
</ul>

<div class="tab-content search-tab clearfix">
	<div id="byname" class="tab-pane fade in active">
		<form method="GET" action="search.php">
			<input type="text" name="search" placeholder="Search...">

			<input type="submit" value="Submit" class="hide">
		</form>
	</div>
	<!--
	<div id="byteam" class="tab-pane fade">
		<h3>By Team</h3>
		<?php /** LIST OF TEAMS --- */
		require 'team_list.php';?>
	</div>

	-->
	<div id="byposition" class="tab-pane fade">
		<h3>By position</h3>
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
	</div>
</div>