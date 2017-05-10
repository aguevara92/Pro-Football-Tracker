<?php
	function selectAll($pdo, $table, $columns)  {
		$query = 'SELECT * FROM '. $table;
		$criteria = [];
		$stmt = $pdo->prepare($query);
		$stmt->execute();
		$results = $stmt->fetchAll();

		//print_r(array_values($results));

		$keys = array_keys($results);
		$columns_key = array_keys($columns);
	}
?>
