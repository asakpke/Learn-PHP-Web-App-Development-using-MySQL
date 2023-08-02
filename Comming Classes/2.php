<?php
// echo '<pre>$_GET ';
// print_r($_GET);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="3.php">
		ID <input name="id" value="<?= $_GET['id'] ?>"><br><br>
		Name <input name="name" value="<?= $_GET['name'] ?>"><br><br>
		Desc <input name="desc" value="<?= $_GET['desc'] ?>"><br><br>
		Date <input name="date" value="<?= $_GET['dt'] ?>"><br><br>
		<button>Update</button>
	</form>
</body>
</html>