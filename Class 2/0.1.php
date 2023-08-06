<?php
$connection = mysqli_connect(
	'localhost', // servername/IP, it's comment
	'root', // username
	'', // password
	'social' // Database name, notice no ","
);

echo '<pre>';

print_r($connection);