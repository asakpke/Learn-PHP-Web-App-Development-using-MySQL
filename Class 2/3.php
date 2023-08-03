<?php
require '0.php';

mysqli_query(
	$connection,
	'UPDATE users SET name = "Sheikh Aamir Shahzad", email = "aamir@example.com" WHERE id = 1'
);

echo "<h1>Database record updated.</h1>";  // optional

mysqli_close($connection); // optional