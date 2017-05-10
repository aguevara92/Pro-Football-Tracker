
<?php
class Queries {

	public function __construct() {
		// CONNECTION TO THE DATABASE ---/
		$this->server = 'localhost';
		$this->username = 'root';
		$this->database = 'football';
		$this->password = '';

		$this->db_handle = mysqli_connect($this->server, $this->username, $this->password );
		$this->db_found = mysqli_select_db($this->db_handle, $this->database);

		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}
	}

	public function LogIn($email, $pw) {
		if ($this->db_found) {
			// Check if is admin
			$SQL = "SELECT * FROM users WHERE email= '".$email."' and password = '".$pw."'";
			$result = mysqli_query($this->db_handle, $SQL);
			

			// Check if there is an account
			if(mysqli_num_rows($result) != 0){
				// There is an account
				echo 'success';
				// Save the session
				$row = $result->fetch_array();
				$_SESSION["email"] = $row["email"];
				$_SESSION["first_name"] = $row["first_name"];
				$_SESSION["last_name"] = $row["last_name"];
			} else {
				// Check if account exists
				$SQL2 = "SELECT * FROM users WHERE email= '".$email."'";
				$result2 = mysqli_num_rows(mysqli_query($this->db_handle, $SQL2));
				if($result2 != 0){
					// The password is incorrect
					echo 'password-incorrect';
				} else {
					// The account doesn't exists
					echo 'no-exists';
				}
			}					
		} else {
			//echo "There is NO connection with the db <br>";
		}
	}


	public function GetAll($table) {
		$return = [];
		if ($this->db_found) {
			$SQL = "SELECT * FROM ".$table;
			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				array_push($return,$db_field);
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->$db_handle);
	}

	public function GetAllOrdered($table,$field,$sort) {
		$return = [];
		if ($this->db_found) {
			$SQL = "SELECT * from ".$table." ORDER BY ".$field." ".$sort;
			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				array_push($return,$db_field);
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->$db_handle);
	}

	public function GetOrdered($table,$field,$sort,$limit) {
		$return = [];
		if ($this->db_found) {
			$SQL = "SELECT * from ".$table." ORDER BY ".$field." ".$sort. " LIMIT 0 , ".$limit;
			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				array_push($return,$db_field);
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->$db_handle);
	}

	public function Find($table,$field, $value) {
		$return = [];
		if ($this->db_found) {
			$SQL = "SELECT * from ".$table." WHERE ".$field." = '".$value. "'";
			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				array_push($return,$db_field);
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->db_handle);
	}

	public function BestTestResults($table) {
		$return = [];
		if ($this->db_found) {
			$SQL = "SELECT DISTINCT ".$table.".result, users.email, users.first_name, users.profile_picture, users.last_name, users.team ".
					"FROM ".$table." ".
					"INNER JOIN users ".
					"ON ".$table.".user_email=users.email ".
					"ORDER BY ".$table.".result DESC ".
					"LIMIT 7";

			//echo $SQL;
			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				array_push($return,$db_field);
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->db_handle);
	}

	public function BestTestResultsofPlayer($table, $email) {
		//Returns the highest value of the test
		//$return = [];
		$return = 0;
		if ($this->db_found) {
			$SQL = "SELECT ".$table.".result ".
					"FROM ".$table." ".
					"INNER JOIN users ".
					"ON ".$table.".user_email='".$email."' ".
					"ORDER BY ".$table.".result DESC ".
					"LIMIT 1;";

			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				//array_push($return,$db_field);
				$return = $db_field["result"];
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->db_handle);
	}


	public function AddOverallRanking ($email, $ranking){
		// Save the ranking in the Database
		$SQL = "UPDATE users ";
		$SQL .= "SET overall_ranking = '" .$ranking ."' ";
		$SQL .= "WHERE email = '" .$email ."'";
		$result = mysqli_query($this->db_handle, $SQL);
		//mysqli_close($this->db_handle);
	}


	public function Delete($table,$field, $value) {
		
		$SQL = "DELETE FROM " . $table . " WHERE " . $field . " = ".$value;
		$result = mysqli_query($this->db_handle, $SQL);
		
		mysqli_close($db_handle);
	}

	public function Search($table, $value) {
		$return = [];
		if ($this->db_found) {
			$SQL = "SELECT * FROM " . $table . " WHERE first_name = '".$value."' OR last_name = '".$value."' OR email = '".$value."'";
			$result = mysqli_query($this->db_handle, $SQL);
			while ( $db_field = mysqli_fetch_assoc($result) ) {
				array_push($return,$db_field);
			}
			return $return;
		}
		else {
			print "Database NOT Found ";
		}
		mysqli_close($this->db_handle);
	}

	public function Save($table, $record, $pk) {
		function insert($table, $record,$pk,$db_handle) {
			unset($record["image"]);
			$keys = array_keys($record);
			$fields = implode(', ', $keys);
			$values = implode(', ', $record);
			
			// Attempt insert query execution
			$SQL = "INSERT INTO " . $table .  " (".
			$fields . ") VALUES ('".
			implode("','",$record).
			"')";
			if(mysqli_query($db_handle, $SQL)){
			    //echo "Records added successfully.";
			} else{
			    //echo "ERROR: Could not able to execute sql. " . mysqli_error($db_handle);
			    update($table, $record, $pk, $db_handle);
			}
		}
		function update($table, $record, $pk, $db_handle) {		
			unset($record["image"]);
			$keys = array_keys($record);
			$fields = implode(', ', $keys);
			$values = implode(', ', $record);
		
	
			$SQL = "UPDATE " . $table .  " SET ";
			$i = 0;
			$len = count($record);
			foreach($record as $key => $value){
				$SQL .= $key . "= '" . $value . "' ";
				if ($i == $len - 1) {
			        // last
			    } else {
			    	$SQL .= ","	;
			    }
				$i++;
			}
			$SQL .= "WHERE ". $pk. " = '" .$record[$pk] ."'";
			
			if(mysqli_query($db_handle, $SQL)){
			    //echo "Records updated successfully.";
			} else{
			    echo "ERROR: Could not able to execute sql. " . mysqli_error($db_handle);
			}
		}
		$success = insert($table, $record, $pk, $this->db_handle);


		// There is an image
		if(isset($_FILES['image']) && ($_FILES['image']['name'] != "")){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_name = str_replace(" ","_",$file_name);
			$file_name = str_replace(",","_",$file_name);
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];   
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
			
			$expensions= array("jpeg","jpg","png"); 		
			if(in_array($file_ext,$expensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}
			if($file_size > 2097152){
			$errors[]='File size must be excately 2 MB';
			}				
			if(empty($errors)==true){
				move_uploaded_file($file_tmp,"images/profiles/".$file_name);
				echo "Success";
			}else{
				print_r($errors);
			}

			$profilePicture = [
			    "profile_picture" => "images/profiles/".$file_name,
			    "email" => $record["email"]
			];

			update('users', $profilePicture, "email", $this->db_handle);
		}


		
		// Close connection
		//mysqli_close($this->db_handle);
	}

	public function addTestResult($table, $value, $email) {
		// Attempt insert query execution
		$SQL = "INSERT INTO " . $table .  " (".
		"user_email, result) VALUES (".
		"'".$email."','".$value."')";

		//echo $SQL;
		if(mysqli_query($this->db_handle, $SQL)){
		    //echo "Records added successfully.";
		} 
		mysqli_close($this->db_handle);
	}

	public function addToCompare($email) {
		

	}

	public function GetAge($dob){
		$date = new DateTime($dob);
		$now = new DateTime();
		$interval = $now->diff($date);
		echo $interval->y;
	}

	public function GetRanking($email){
		$aerobic = $this->BestTestResultsofPlayer("aerobic_tests", $email);
		$agility = $this->BestTestResultsofPlayer("agility_tests", $email);
		$balance = $this->BestTestResultsofPlayer("balance_tests", $email);
		$jump = $this->BestTestResultsofPlayer("jump_tests", $email);
		$psychology = $this->BestTestResultsofPlayer("psychology_tests", $email);
		$sprint = $this->BestTestResultsofPlayer("sprint_tests", $email);

		// --------------------------------------
		// Aerobic Ranking Calculation
		/*
		if ($aerobic <= 10)
		{
			$aerobic_ranking = 0;
			$aerobic_rankingText = "Poor";
		} 
		elseif ( ($aerobic > 10) && ($aerobic <= 20) )
		{
			$aerobic_ranking = 10;
			$aerobic_rankingText = "Poor";
		} 
		elseif ( ($aerobic > 20) && ($aerobic <= 31) )
		{
			$aerobic_ranking = 30;
			$aerobic_rankingText = "Below Average";
		} 
		elseif ( ($aerobic > 31) && ($aerobic <= 40) )
		{
			$aerobic_ranking = 40;
			$aerobic_rankingText = "Average";
		}
		elseif ( ($aerobic > 40) && ($aerobic <= 41) )
		{
			$aerobic_ranking = 50;
			$aerobic_rankingText = "Average to good";
		}
		elseif ( ($aerobic > 41) && ($aerobic <= 55) )
		{
			$aerobic_ranking = 60;
			$aerobic_rankingText = "Good Above Average";
		} 
		elseif ( ($aerobic > 55) && ($aerobic <= 56) )
		{
			$aerobic_ranking = 70;
			$aerobic_rankingText = "Very Good";
		}
		elseif ( ($aerobic > 56) && ($aerobic <= 65) )
		{
			$aerobic_ranking = 80;
			$aerobic_rankingText = "Very Good to Excelent";
		}
		elseif ( ($aerobic > 65) && ($aerobic <= 70) )
		{
			$aerobic_ranking = 90;
			$aerobic_rankingText = "Excelent";
		}
		elseif ( ($aerobic > 70) )
		{
			$aerobic_ranking = 100;
			$aerobic_rankingText = "Elite (Validation required)";
		}
		*/

		if ($aerobic < 12)
		{
			$aerobic_ranking = 10;
			$aerobic_rankingText = "Poor";
		} 
		elseif ( ($aerobic >= 12) && ($aerobic < 14) )
		{
			$aerobic_ranking = 20;
			$aerobic_rankingText = "Needs Improvement";
		}  
		elseif ( ($aerobic >= 14) && ($aerobic < 15) )
		{
			$aerobic_ranking = 40;
			$aerobic_rankingText = "Below Average";
		}
		elseif ( ($aerobic >= 15) && ($aerobic < 16) )
		{
			$aerobic_ranking = 50;
			$aerobic_rankingText = "Average";
		}
		elseif ( ($aerobic >= 16) && ($aerobic < 18) )
		{
			$aerobic_ranking = 60;
			$aerobic_rankingText = "Above Average";
		}
		elseif ( ($aerobic >= 18) && ($aerobic < 19) )
		{
			$aerobic_ranking = 60;
			$aerobic_rankingText = "Good";
		}
		elseif ( ($aerobic >= 19) && ($aerobic < 21) )
		{
			$aerobic_ranking = 70;
			$aerobic_rankingText = "Very Good";
		}
		elseif ( ($aerobic >= 21) && ($aerobic < 22) )
		{
			$aerobic_ranking = 90;
			$aerobic_rankingText = "Excellent";
		}
		elseif ($aerobic >= 22)
		{
			$aerobic_ranking = 100;
			$aerobic_rankingText = "Elite (Validation required)";
		} 


		// --------------------------------------
		// Agility Ranking Calculation
		if ($agility <= 6)
		{
			$agility_ranking = 100;
		}
		elseif ($agility >= 15)
		{
			$agility_ranking = 10;
		} 
		else 
		{
			$agility_ranking = 100 - (($agility - 6) * 10);
		}


		if ($agility < 9)
		{
			$agility_rankingText = "Excellent (Elite validation required)";
		}
		elseif ( ($agility >= 9) && ($agility < 9.6) )
		{
			$agility_rankingText = "Excellent";
		}
		elseif ( ($agility >= 9.6) && ($agility < 10) )
		{
			$agility_rankingText = "Good to excellent";
		}
		elseif ( ($agility >= 10) && ($agility < 10.6) )
		{
			$agility_rankingText = "Good";
		}
		elseif ( ($agility >= 10.6) && ($agility < 10.8) )
		{
			$agility_rankingText = "Average to Good";
		}
		elseif ( ($agility >= 10.8) && ($agility < 11.6) )
		{
			$agility_rankingText = "Average";
		}
		elseif ($agility >= 11.6) 
		{
			$agility_rankingText = "Below average needs development";
		}



		// --------------------------------------
		// Balance Ranking Calculation
		if ($balance > 55)
		{
			$balance_ranking = 100;
		}
		else 
		{
			$balance_ranking = ($balance * 2) - 20;
		}

		if ($balance < 10)
		{
			$balance_rankingText = "Needs development";
		}
		elseif ( ($balance >= 10) && ($balance < 20) )
		{
			$balance_rankingText = "Fair result but needs some development";
		}
		elseif ( ($balance >= 20) && ($balance < 25) )
		{
			$balance_rankingText = "Fair to average result but needs some development";
		}
		elseif ( ($balance >= 25) && ($balance < 35) )
		{
			$balance_rankingText = "Average";
		}
		elseif ( ($balance >= 35) && ($balance < 40) )
		{
			$balance_rankingText = "Average to good";
		}
		elseif ( ($balance >= 40) && ($balance < 49) )
		{
			$balance_rankingText = "Good";
		}
		elseif ( ($balance >= 49) && ($balance < 51) )
		{
			$balance_rankingText = "Very good";
		}
		elseif ( ($balance >= 51) && ($balance < 56) )
		{
			$balance_rankingText = "Excellent";
		}
		elseif ($balance >= 56)
		{
			$balance_rankingText = "Excellent (Validation required)";
		}


		// --------------------------------------
		// Jump Ranking Calculation
		if ($jump <= 10)
		{
			$jump_ranking = 0;
			$jump_rankingText = "Poor";
		}
		elseif ( ($jump > 10) && ($jump <= 20) )
		{
			$jump_ranking = 10;
			$jump_rankingText = "Poor";
		}
		elseif ( ($jump > 20) && ($jump <= 31) )
		{
			$jump_ranking = 30;
			$jump_rankingText = "Below average";
		}
		elseif ( ($jump > 31) && ($jump <= 40) )
		{
			$jump_ranking = 40;
			$jump_rankingText = "Average";
		}
		elseif ( ($jump > 40) && ($jump <= 41) )
		{
			$jump_ranking = 50;
			$jump_rankingText = "Average to good";
		}
		elseif ( ($jump > 41) && ($jump <= 55) )
		{
			$jump_ranking = 60;
			$jump_rankingText = "Good Above Average";
		}
		elseif ( ($jump > 55) && ($jump <= 56) )
		{
			$jump_ranking = 70;
			$jump_rankingText = "Very Good";
		}
		elseif ( ($jump > 56) && ($jump <= 65) )
		{
			$jump_ranking = 80;
			$jump_rankingText = "Very Good to Excellent";
		}
		elseif ( ($jump > 65) && ($jump <= 70) )
		{
			$jump_ranking = 90;
			$jump_rankingText = "Excelent";
		}
		elseif ($jump > 70)
		{
			$jump_ranking = 100;
			$jump_rankingText = "Elite (Validation required)";
		}


		// --------------------------------------
		// Psychology Ranking Calculation
		if ($psychology < 20)
		{
			$psychology_ranking = 5;
			$psychology_rankingText = "Psychological skill development may be needed ";
		}
		elseif ( ($psychology >= 20) && ($psychology < 32) )
		{
			$psychology_ranking = 10;
			$psychology_rankingText = "Psychological skill development may be needed ";
		}
		elseif ( ($psychology >= 32) && ($psychology < 52) )
		{
			$psychology_ranking = 20;
			$psychology_rankingText = "Psychological skill development may be needed ";
		}
		elseif ( ($psychology >= 52) && ($psychology < 54) )
		{
			$psychology_ranking = 30;
			$psychology_rankingText = "Average to fair psychological skills ";
		}
		elseif ( ($psychology >= 54) && ($psychology < 58) )
		{
			$psychology_ranking = 40;
			$psychology_rankingText = "Close to average psychological skills ";
		}
		elseif ( ($psychology >= 58) && ($psychology < 64) )
		{
			$psychology_ranking = 50;
			$psychology_rankingText = "Average psychological skills";
		}
		elseif ( ($psychology >= 64) && ($psychology < 74) )
		{
			$psychology_ranking = 55;
			$psychology_rankingText = "Above average psychological skills";
		}
		elseif ( ($psychology >= 74) && ($psychology < 82) )
		{
			$psychology_ranking = 60;
			$psychology_rankingText = "Above average psychological skills";
		}
		elseif ( ($psychology >= 82) && ($psychology < 90) )
		{
			$psychology_ranking = 70;
			$psychology_rankingText = "Good psychological skills";
		}
		elseif ( ($psychology >= 90) && ($psychology < 112) )
		{
			$psychology_ranking = 90;
			$psychology_rankingText = "Excellent psychological skills";
		}
		elseif ($psychology >= 112)
		{
			$psychology_ranking = 100;
			$psychology_rankingText = "Elite psychological skills ";
		}



		// --------------------------------------
		// Sprint Ranking Calculation
		if ($sprint >= 3.7)
		{
			$sprint_ranking = (6.7 - $sprint) * 10;
		} 
		else 
		{
			$sprint_ranking = (3.6 - $sprint) * 100 + 30;
			if ($sprint_ranking > 100)
			{
				$sprint_ranking = 100;
			}
		}

		if ($sprint < 3.1)
		{
			$sprint_rankingText = "Excellent (validation required)";
		}
		elseif ( ($sprint >= 3.1) && ($sprint < 3.2) )
		{
			$sprint_rankingText = "Excellent / Good";
		}
		elseif ( ($sprint >= 3.2) && ($sprint < 3.3) )
		{
			$sprint_rankingText = "Good";
		}
		elseif ( ($sprint >= 3.3) && ($sprint < 3.4) )
		{
			$sprint_rankingText = "Good/Average";
		}
		elseif ( ($sprint >= 3.4) && ($sprint < 3.5) )
		{
			$sprint_rankingText = "Average";
		}
		elseif ( ($sprint >= 3.5) && ($sprint < 3.6) )
		{
			$sprint_rankingText = "Fair /Average";
		}
		elseif ( ($sprint >= 3.6) && ($sprint < 4) )
		{
			$sprint_rankingText = "Fair";
		}
		elseif ( ($sprint >= 4) && ($sprint < 4.6) )
		{
			$sprint_rankingText = "Need development";
		}
		elseif ($sprint >= 4.6)
		{
			$sprint_rankingText = "Below threshold standards";
		}
		


		// Calculate the Overall Ranking 
		$sumOfEverything = $aerobic_ranking + $agility_ranking + $balance_ranking + $jump_ranking + $psychology_ranking + $sprint_ranking;
		$ranking = round( $sumOfEverything / 600 * 100, 1, PHP_ROUND_HALF_UP);

		$this->AddOverallRanking($email, $ranking);


		return $ranking;

	}



}

require 'displayClass.php'; // Display Classes

?>
