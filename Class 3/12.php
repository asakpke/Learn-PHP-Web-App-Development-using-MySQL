<?php
require '../Class 2/0.php';

echo '<pre>$_GET ';
print_r($_GET);

$result = mysqli_query(
	$connection,
	'INSERT INTO users (name, email, password) VALUES ("'.$_GET['name'].'", "'.$_GET['email'].'", "'.$_GET['password'].'")'
);

if ($result === TRUE) {
  echo "<h1>Database record created.</h1>";  // optional
}
else {
	echo '<h1>Error in executing query:</h1>' . mysqli_error($connection);
}

mysqli_close($connection); // optional
?>