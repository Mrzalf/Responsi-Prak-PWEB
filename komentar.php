<?php  
	var_dump($_POST);

	include("config.php");
	$komentar = $_POST['komentar'];

	// Buat Query
	$query = "INSERT INTO `komentar`(`komentar`) VALUES ('$komentar')";

	// Proses
	if ($connect->query($query) == TRUE) {
	    header("Location: berita.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>