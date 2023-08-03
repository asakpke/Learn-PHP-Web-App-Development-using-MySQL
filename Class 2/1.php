<?php
$connection = mysqli_connect(
	'localhost', // servername/IP, it's comment
	'root', // username
	'', // password
	'social' // Database name, notice no ","
);

mysqli_query(
	$connection,
	'INSERT INTO users (name, email, password) VALUES ("Aamir Shahzad", "Aamir@eSite.pk", "Hmmm, Why I told you?")'
);

echo "<h1>Database record created successfully.</h1>";  // optional

mysqli_close($connection); // optional
