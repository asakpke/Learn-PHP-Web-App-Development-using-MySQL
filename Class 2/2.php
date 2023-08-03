<?php
require '0.php';

$result = mysqli_query(
	$connection,
	'SELECT * FROM users'
);

echo '<pre><h1>Database Records List in raw form</h1>';

while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
}

mysqli_close($connection); // optional