<?php
	session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: Admin/");
        exit;
    }

	require 'functions.php';

	//pagination
	//konfigurasi
	$dataPerHalaman = 3;
	$jumlahData =count(query("SELECT * FROM redirectlink"));
	$jumlahHalaman = ceil($jumlahData / $dataPerHalaman);
	
	$currentHalaman = (isset($_GET["hal"])) ? $_GET["hal"] : 1;

	$indexAwal = ($currentHalaman - 1)	* $dataPerHalaman;
	

	$shortlink = query("SELECT * FROM redirectlink ORDER BY id DESC LIMIT $indexAwal, $dataPerHalaman");

	if(isset($_POST["generate"]))
	{
		if(tambah($_POST) > 0)
		{
			echo "<script>
				alert('Sukses Generate Link!');
				document.location.href = 'index.php';
			</script>	
			";
		}else
		{
			echo "
			<script>
				alert('Link Salah atau Link Sudah Ada');
				document.location.href = 'index.php';
			</script>	
			";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate My Link</title>
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
    <h1 align="center">Generate My Link</h1>
<div class="table-container">
	<table align="center">
		<tr>
			<td><input type="text" name="asli" placeholder="Masukan Link Asli..." 
			size="30" autofocus autocomplete = "off" class="txtcari" id="asli"></td>	    
			<td><button type="submit" name="generate" class="carilink">Generate Link</button></td>
		</tr>
	</table>
</div>
<br>
</form>
<br>
<div class="table-container">
	<table cellpadding="3" cellspacing="0" align = "center">
		<tr>
        	<th>No</th>
        	<th>Link Asli</th>
        	<th>Link Generate</th>
        	<th>Id Link</th>
        	<th>Aksi</th>
        </tr>

        <?php $i = (($currentHalaman - 1) * $dataPerHalaman) + 1; ?>
        <?php foreach ($shortlink as $sl) : ?>
		
        <tr>
        	<td><?= $i; ?></td>
        	<td>
        		<textarea type="text" class="txtpb" readonly><?= $sl["asli"]; ?></textarea>
        	</td>
        	<td>
        		<textarea type="text" id="<?= $sl["publish"]; ?>" class="txtpb" readonly><?= $sl["publish"]; ?></textarea>
        	</td>
        	<td>
        		<textarea type="text" class="txtpb" readonly><?= $sl["idlink"]; ?></textarea>
        	</td>
        	<td>
        		<button type="button" onclick="copy_link('<?= $sl["publish"]; ?>')" class="btn">Copy</button> |
        		<a href="edit.php?id=<?= $sl["id"]; ?>"><button class="btn">Edit</button></a> | 
        		<a href="hapus.php?id=<?= $sl["id"]; ?>"><button class="btn" type="button" 
        			onclick="return confirm('Yakin ingin menghapus ?');">Delete</button></a>
        	</td>
        </tr>

        <?php $i++; ?>
    	<?php endforeach; ?>
	</table>
</div>
<br>

<div class="navi">
	<!-- Navigasi -->
	<?php if($currentHalaman > 1) : ?>
		<a href="?hal=1">&laquo;</a>
	<?php endif; ?>
	<?php if($currentHalaman > 1) : ?>
		<a href="?hal=<?= $currentHalaman - 1 ?>">&lt;</a>
	<?php endif; ?>

	<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
		<?php if($i == $currentHalaman) : ?>
			<a href="?hal=<?= $i; ?>" style="font-style: bold; color: red;"><?= $i; ?></a>
		<?php else : ?>
			<a href="?hal=<?= $i; ?>"><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<?php if($currentHalaman < $jumlahHalaman) : ?>
		<a href="?hal=<?= $currentHalaman + 1 ?>">&gt;</a>
	<?php endif; ?>
	<?php if($currentHalaman < $jumlahHalaman) : ?>
		<a href="?hal=<?= $jumlahHalaman ?>">&raquo;</a>
	<?php endif; ?>
</div>

<br><br>
<div style="padding-left:16px">
	<i><p align="center">By : Delpaster</p></i>
</div>
</body>
	<script type="text/javascript">
	    function copy_link(id) {
	        document.getElementById(id).select();
	        document.execCommand("copy");
	    }
	</script>
</html>