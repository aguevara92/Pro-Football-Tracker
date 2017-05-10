<?php require 'functions/classes.php'; ?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8" />

		<title>Pro Football Tracker</title>

		<!-- LOAD CSS FLES -->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/slick.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css" />

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

		
		<?php session_start(); 
		// Session variable ?>
		
	</head>
	
	<body>
		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="players.php">Players</a></li>
		        <li><a href="view_tests.php">Tests</a></li>
		        <li><a href="compare.php">Compare</a></li>
		      </ul>
		      
		      <!--
		      <form method="GET" action="search.php" class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" name="search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      -->
		      <ul class="nav navbar-nav navbar-right">
		        
		        <?php if(isset($_SESSION["email"])) { ?>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi <?php echo $_SESSION["first_name"];?><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="edit_player.php?email=<?php echo $_SESSION["email"]; ?>">Edit Profile</a></li>
		            <li><a href="tests.php">Add Test Result</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="logout.php">Log Out</a></li>
		          </ul>
		        </li>
		        <?php } else { ?>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Are you a player?<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="login.php">Log In</a></li>
		            <li><a href="register_player.php">Create an Account</a></li>
		          </ul>
		        </li>
		        <?php } ?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


		<main>