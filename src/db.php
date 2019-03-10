<html>
	<head>
		<title>PHP DB</title>
	</head>
	<body>
		<?php
		$password = getenv('DB_PASSWORD') ?: 'null';
		// Connecting, selecting database
		$dbconn = pg_connect("host=localhost port=5432 dbname=benchmark user=postgres password=$password")
   			or die('Could not connect: ' . pg_last_error());

		$queries = array();
        parse_str($_SERVER['QUERY_STRING'],$queries);

		$query = 'SELECT * FROM bench.events WHERE user_id=$1';
		$result = pg_query_params($dbconn,$query,array($queries['userid'])) or die('Query failed: ' . pg_last_error());
		$result = array();

		while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
   			foreach ($line as $col_value) {
       			array_push($result,$col_value);
   			}
		}

		pg_free_result($result);

		pg_close($dbconn);
		?>
	</body>
</html>