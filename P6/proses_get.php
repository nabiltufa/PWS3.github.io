<?php

$nk = $_GET['nk'];
$pk = $_GET['pk'];
$sp = $_GET['sp'];
$hsc = $_GET['hsc'];
$trip = $_GET['trip'];
$brevet = $_GET['brevet'];
$ltk = $_GET['ltk'];
$skp = $_GET['skp'];
$spkp = $_GET['spkp'];
$suk = $_GET['suk'];
$sl = $_GET['sl'];
$dg = $_GET['dg'];
$hsc = $_GET['hsc'];

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