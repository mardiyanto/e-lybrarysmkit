<?php
require_once('fungsi_validasi.php');
$server = "localhost";
$username = "root";
$password = "";
$database = "db_elybsmkit";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
$val = new Lokovalidasi;
$kontak_kami=mysql_query("SELECT * FROM profil ");
$k_k=mysql_fetch_array($kontak_kami);
$denda1=1000;
?>
