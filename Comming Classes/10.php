<?php
require '../Class 2/0.php';

echo '<pre>$_POST ';
print_r($_POST);
// exit;

$result = mysqli_query(
	$connection,
	'INSERT INTO users (name, email, password) VALUES ("'.$_POST['name'].'", "'.$_POST['email'].'", "'.md5($_POST['password']).'")'
);

if ($result === TRUE) {
  echo "<h1>Database record created.</h1>";  // optional
}
else {
	echo '<h1>Error in executing query:</h1>' . mysqli_error($connection);
}

mysqli_close($connection); // optional
?>