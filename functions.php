<?php
//error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "mylink");

if (!$conn) {
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

//menampilkan data
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;
	}

	return $rows;
}

function cari($pb)
{
	$query = "SELECT * FROM redirectlink 
				WHERE 
			publish = '$pb'";

	return query($query);

}

function carilink($pb, $link)
{
	$query = "SELECT * FROM redirectlink 
				WHERE 
			$link = '$pb'";

	return query($query);

}

function tambah($data)
{
	global $conn;

	$asli = $data["asli"];

	if(filter_var($asli, FILTER_VALIDATE_URL))
	{
		$str = bin2hex($asli); //enkripsi 
		$publish = "https://localhost/mylink/link/?id=" . $str;

		$query = "INSERT INTO redirectlink VALUES
					('', '$asli', '$publish', '$str')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);	
	}
	else
	{
		return false;
	}	
}

function hapus($id)
{
	global $conn;

	mysqli_query($conn, "DELETE FROM redirectlink WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function edit($data)
{
	global $conn;

	$id = $data["id"];
	$asli = $data["asli"];

	if(filter_var($asli, FILTER_VALIDATE_URL))
	{
		$query = "UPDATE redirectlink SET
					asli = '$asli'
				 WHERE id = $id";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
	else{
		return false;
	}
}

?>