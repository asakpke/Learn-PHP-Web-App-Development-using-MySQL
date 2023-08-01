<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo '<h1>START</h1>';

$servername = "localhost";
// $servername = "192.168.10.2";
$username = "root";
$password = "";
$dbname = "awais";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl1";

$stmt = $conn->prepare($sql);
// $stmt->bind_param("i", $_GET['id']);

if ($stmt->execute() === true) {
	$result = $stmt->get_result();

	while ($row = $result->fetch_assoc()) {
		// echo '<pre>$row ';
		// print_r($row);
		// echo '</pre>';

		echo "<h1>$row[name]</h1>";
		echo "<p>$row[description]</p>";
		echo "<h2>$row[date]</h2>";
		echo '<a href="2.php?id='.$row['id'].'">Link</a>';

		echo '<hr>';
	} // while ($row = $result->fetch_assoc())
} // if ($stmt->execute() === true)

$conn->close();

echo '<h1>ENDED</h1>';