<?php	
require 'header.php';
?>

<div class="container">
	<div class="row">	

		<div class="col-md-6 col-md-offset-3 white">
			<h1>Log In</h1>
			<form >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="last_name" id="password" class="form-control">
				</div>

				<button id="login">Login</button>

				<div class="alert alert-danger hide" id="incorrect-password">
					Oops, looks like your password is incorrect.
				</div>
				<div class="alert alert-danger hide" id="no-account">
					Oops, looks like there is no account with that email.
				</div>
			</form>
		</div>
	</div>
</div>

<?php
require 'footer.php'; // layout
?>