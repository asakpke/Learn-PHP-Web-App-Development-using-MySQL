<?php
// mysqli_query(
// 	$connection,
// 	'INSERT INTO users (name, email, password) VALUES ("Aamir Shahzad", "Aamir@eSite.pk", "Hmmm, Why I told you?")'
// );

// $result = mysqli_query(
// 	$connection,
// 	'INSERT INTO users (name, email, password) VALUES ("'.$_GET['name'].'", "'.$_GET['email'].'", "'.$_GET['password'].'")'
// );

$name = 'Aamir Shahzad';
$email = 'Aamir@eSite.pk';
$password = 'Hmmm, Why I told you?';
$sql = 'INSERT INTO users (name, email, password) VALUES ("'.$name.'", "'.$email.'", "'.$password.'")';
echo $sql;
