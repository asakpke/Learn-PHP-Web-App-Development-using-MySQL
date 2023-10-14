<?php
session_start();

require '../Class 2/0.php';

echo '<pre>$_POST ';
print_r($_POST);
// exit;

$sql = '
	SELECT * 
	FROM users
	WHERE email = "'.$_POST['email'].'" AND
		password = "'.md5($_POST['password']).'"
';
print_r($sql);
// exit;

// SQL injection text " or 1 = 1 #

$result = mysqli_query(
	$connection,
	$sql
);

$row = mysqli_fetch_assoc($result);
// print_r($row);
// exit;
$msg = 'Valid email/password.';

if ($row == null) {
	$msg = 'Invalid email/password.';
	// header('Location: 5.php?msg='.$msg);
	header('Location: 11.html?msg='.$msg);
	exit();
}

// print_r($msg);
// exit;

mysqli_close($connection); // optional

// START - Maintain session
$_SESSION['user_id'] = $row['id'];
// ENDED - Maintain session

header('Location: 13.php');
exit();