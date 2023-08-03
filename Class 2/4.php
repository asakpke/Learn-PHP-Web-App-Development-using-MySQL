<?php
require '0.php';

mysqli_query(
	$connection,
	'DELETE FROM users WHERE id = 1'
);

echo "<h1>Database record deleted.</h1>";  // optional

mysqli_close($connection); // optional