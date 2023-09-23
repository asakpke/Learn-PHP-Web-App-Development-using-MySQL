<?php
require '../Class 2/0.php';

echo '<pre><h1>$_GET ';
print_r($_GET);

$sql = '';
print_r("<br><br>$sql");

$stmt = mysqli_prepare(
	$connection,
	'INSERT INTO emails VALUES (null, ?);'
);

mysqli_stmt_bind_param(
	$stmt,
	"s", // i	int, d	float, s string
	$_GET['email'],
);

mysqli_stmt_execute($stmt);

$stmt = mysqli_prepare(
	$connection,
	'INSERT INTO users VALUES (null, ?, ?, ?);'
);

mysqli_stmt_bind_param(
	$stmt,
	"sss", // i	int, d	float, s string
	$_GET['name'],
	$_GET['email'],
	$_GET['password'],
);

mysqli_stmt_execute($stmt);

echo "<br><br>Query executed.";  // optional
echo mysqli_error($connection);

mysqli_close($connection); // optional
?>