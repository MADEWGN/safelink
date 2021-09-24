<?php 
	require '../functions.php';

	$id = $_POST["link"];
	
	$link = query("SELECT * FROM redirectlink WHERE idlink = '$id'")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delpaster</title>
	<link rel="stylesheet" type="text/css" href="link.css">
	<style>
		
		}
	</style>
</head>
<body>
	<div class="login-box">
		<h1>Delpaster</h1>
			
		<div id="wrapper">
			<div id="myTimer"></div>
			<button type="button" id="myBtn" class="btnDisable" disabled onclick="window.location.href='<?= $link['asli']; ?>'">Please wait...</button>
		</div>
	</div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	var sec = 6; //delay
	var myTimer = document.getElementById('myTimer');
	var myBtn = document.getElementById('myBtn');
	window.onload = countDown;

	function countDown() {
	  	if (sec < 10) {
	    	myTimer.innerHTML = "0" + sec;
	  	} else {
	    	myTimer.innerHTML = sec;
	  	}
		if (sec <= 0) {
		    $("#myBtn").removeAttr("disabled");
		    $("#myBtn").removeClass().addClass("btnEnable");
		    $("#myTimer").fadeTo(1500, 0);
		    myBtn.innerHTML = "Menuju Link";
	    	return;
	  	}
		sec -= 1;
		window.setTimeout(countDown, 1000);
	}
</script>
</html>