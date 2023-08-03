<?php
$connection = mysqli_connect(
	'localhost', // servername/IP, it's comment
	'root', // username
	'', // password
	'social' // Database name, notice no ","
);

$result = mysqli_query(
	$connection,
	'SELECT id, name FROM users'
);

while($row = mysqli_fetch_column($result,1)) {
	echo '<pre>';
	print_r($row);
}

mysqli_close($connection); // optional
