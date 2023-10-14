<?php
session_start();

// START - Redirect to login page if user is not logged-in
// print_r($_SESSION);

if (empty($_SESSION['user_id'])) {
	$msg = 'Please login to view this page.';
	header('Location: 5.php?msg='.$msg);
}
// ENDED - Redirect to login page if user is not logged-in
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
</head>
<body>
<h1>Dashboard</h1>
<p>Dashboard.</p>
</body>
</html>