<?php

$nk = $_POST['nk'];
$pk = $_POST['pk'];
$sp = $_POST['sp'];
$hsc = $_POST['hsc'];
$trip = $_POST['trip'];
$brevet = $_POST['brevet'];
$ltk = $_POST['ltk'];
$skp = $_POST['skp'];
$spkp = $_POST['spkp'];
$suk = $_POST['suk'];
$sl = $_POST['sl'];
$dg = $_POST['dg'];
$hsc = $_POST['hsc'];

$button = $_GET['button'];

echo "<h1>DATA</h1>";
echo "Nama Kapal : ".$nk."<br>";
echo "Pemilik Kapal : ".$pk."<br>";
echo "Surat Permohonan : ".$sp."<br>";
echo "Sertifikat High Speed Craft (HSC) : ".$hsc."<br>";
echo "Jumlah Trip Penangkapan Bulan Lalu : ".$trip."<br>";
echo "Sertifikat Brevet A&B : ".$brevet."<br>";
echo "Sertifikat Lambung Timbul Kapal : ".$ltk."<br>";
echo "Sertifikat Klasifikasi Kapal : ".$skp."<br>";
echo "Surat Pernyataan/Keterangan Kapal (non klas) : ".$spkp."<br>";
echo "Surat Laut / Grosse Akte Kapal: ".$sl."<br>";
echo "Laporan Pemeriksaan Dangerous Goods / Fitness : ".$dg."<br>";
echo "Pemeriksaan Oleh Marine Inspector Dari Syahbandar / KSOP Kelas (...) : ".$hsc."<br>";

?>