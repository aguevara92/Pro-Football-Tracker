<!DOCTYPE html>

<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/jquery.js"></script>
		<script src="js/cookies.js"></script>
	    <script src="js/foundation.min.js"></script>
	    <script src="js/scripts.js"></script>
	    <script>
		  $(document).foundation();
		</script>
	</head>
	
	<body>

		<div class="top-bar">
			<div class="top-bar-left">
				<ul class="menu">
					<?php if (isset($_SESSION['loggedin']) AND $_SESSION['loggedin'] == true) {?>
					<li><a href="index.php">Home</a></li>
					<li><a href="add_article.php">Add</a></li>
					<li><a href="articles.php">Articles</a></li>
					<li><a href="categories.php">Categories</a></li>
					<li><a href="comments.php">Comments</a></li>
					<li><a href="accounts.php">Accounts</a></li>
					<li class="right"><form action="log_out.php" method="POST"><input type="submit" value="Logout" name="logout" /></form></li>
					<?php } else { ?>
					<li><a href="log_in.php">Log in</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>

		<main>
    		<div class="row">
    			<div class="large-4 large-offset-4 columns">
    				<?php echo $content; ?>
    			</div>
			</div>         
    	</main> 
	</body>
</html>