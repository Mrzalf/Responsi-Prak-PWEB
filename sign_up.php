<?php 
include("config.php");

var_dump($_POST);

// Inisialisasi Variable
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Buat Query
$query = "INSERT INTO `sign_up`(`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

// Proses
if ($connect->query($query) == TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
