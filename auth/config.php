<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_kampus";
 
$mysqli = mysqli_connect($server, $user, $pass, $database);
 
if (!$mysqli) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

// "berhasil"
 
?>