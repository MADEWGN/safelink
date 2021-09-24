<?php

	require 'functions.php';

	$id = $_GET["id"];

	$link = query("SELECT * FROM redirectlink WHERE id = $id")[0];

	if(isset($_POST["edit"]))
	{
		if(edit($_POST) > 0){
			echo "
			<script>
				alert('Link berhasil diperbaharui!');
				document.location.href = 'index.php';
			</script>	
			";
		}else{
			echo "
			<script>
				alert('Gagal, Link salah!');
				document.location.href = 'index.php';
			</script>	
			";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
	<a class="active" href="index.php">My Link</a>
	<a href="carilink.php">Cari Link</a>
	<a href="Admin/logout.php">Logout</a>
</div>
<form action="" method="POST">
    <h1 align="center">Edit Link Asli</h1>
    <input type="hidden" name="id" value="<?= $link["id"]; ?>"> 	
<div class="table-container">
	<table align="center">
		<tr>
			<td><label for="asli">Link Asli</label></td>
			<td><textarea type="text" name="asli" size="30" autofocus autocomplete="off" class="txtcari" id="asli"><?= $link["asli"]; ?></textarea></td>
		</tr>
		<tr>
			<td><label for="publish">Link Generate</label></td>
			<td><textarea type="text" name="publish" size="30" disabled class="txtcari" id="publish"><?= $link["publish"]; ?></textarea></td>
		</tr>
		<tr>
			<td><label for="idlink">ID Link</label></td>
			<td><textarea type="text" name="idlink" size="30" disabled class="txtcari" id="idlink"><?= $link["idlink"]; ?></textarea></td>
		</tr>
		<td colspan="2"><button type="submit" name="edit" class="carilink">Perbaharui Link</button></td>
	</table>
</div>
</form>
<br><br>
<div style="padding-left:16px">
 	<i><p align="center">By : Delpaster</p></i>
</div>
</body>
</html>