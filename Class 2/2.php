<?php
require '0.php';

$result = mysqli_query(
	$connection,
	'SELECT * FROM users'
);

while($row = mysqli_fetch_assoc($result)) {
	echo '<pre>';
	print_r($row);
	echo '</pre>'; // optional because no more HTML
}

mysqli_close($connection); // optional