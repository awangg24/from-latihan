<?php
include '../auth/config.php';
$id         =$_GET['id'];
$nama       =$_POST['nama'];
$nim        =$_POST['nim'];
$semester   =$_POST['semester'];
$username   =$_POST['username'];
$password   =$_POST['password'];

$query = mysqli_query($mysqli, "UPDATE tb_mahasiswa SET nama='$nama',nim='$nim',semester='$semester',username='$username',password='$password' WHERE id='$id'");

header('location:home.php');


?>