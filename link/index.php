<?php 
	require '../functions.php';

	$id = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delpaster</title>
	<link rel="stylesheet" href="link.css">
</head>
<body>
	<div class="login-box">
		<h1>Delpaster</h1>
		<form action="article.php" method="POST">
			<input type="hidden" name="link" value="<?= $id ?>">
			<button class="btn" type="submit" name="submit">Submit</button>
		</form>
		<div class="text-box">
			<p align="center">I'm Human</p>
		</div>
	</div>

</body>
</html>