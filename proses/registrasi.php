<?php

$nik = $_POST['nik'];
$nama = $_POST['nama'];

$data ="nik = $nik ,nama = $nama \n";

$fh = fopen ("../data/user.txt","a");
fwrite($fh,$data);

fclose($fh);

session_start();

$_SESSION['succes'] = "Berhasil membuat akun,silakan login!";

header('Location: ../login.php');