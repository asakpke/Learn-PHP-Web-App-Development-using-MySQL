<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo '<pre>';
print_r($_POST);
// echo '</pre>';

require '../Class 2/0.php';

$sql = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}'";
print_r($sql);

$result = mysqli_query(
	$connection,
	$sql
);

$row = mysqli_fetch_assoc($result);
print_r($row);
// var_dump($row);

if (empty($row)) {
    echo '<h1>Invalid email/password</h1>';
    exit;
}

echo '<h1>Valid email/password</h1>';

mysqli_close($connection); // optional