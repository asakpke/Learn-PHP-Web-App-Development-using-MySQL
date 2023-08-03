<?php
require '0.php';

mysqli_query(
	$connection,
	'INSERT INTO users (name, email, password) VALUES ("Aamir Shahzad", "Aamir@eSite.pk", "Hmmm, Why I told you?")'
);

echo "<h1>Database record created.</h1>";  // optional

mysqli_close($connection); // optional