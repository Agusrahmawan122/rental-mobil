<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "rental";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
	die("Koneksi kedatabase error : ".mysqli_connect_error());
}

date_default_timezone_set('Asia/Jakarta');

?>