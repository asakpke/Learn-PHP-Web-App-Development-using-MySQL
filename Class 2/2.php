<?php
require '0.php';

$result = mysqli_query(
	$connection,
	'SELECT * FROM users'
);

echo '<pre>';

while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
}

mysqli_close($connection); // optional