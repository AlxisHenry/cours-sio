<?php

session_start();

if (!isset($_SESSION["email"])) {
	header("Location: /");
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page secrète</title>
</head>
<body>
	<h1>Cette page devrait être inacessible !</h1>
	<?= var_dump($_SESSION) ?>
</body>
</html>