<?php
    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "formpw9";

    $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

    //Jika tombol simpan di klik
    if(isset($_POST['simpan']))
    {
      $simpan=mysqli_query($koneksi, "INSERT INTO cheklisthsc (nama_kapal, pemilik_kapal, surat_permohonan, sertifikat_hsc, jumlah_trip, sertifikat_brevet, sertifikat_ltk, sertifikat_klaskapal, surat_ukurkapal, surat_laut, laporan_fitness, pemeriksaan)
        VALUES ('$_POST[nk]',  '$_POST[pk]', '$_POST[sp]', '$_POST[hsc]', '$_POST[trip]', '$_POST[brevet]', '$_POST[ltk]', '$_POST[skp]', '$_POST[spkp]', '$_POST[suk]', '$_POST[sl]', '$_POST[dg]', '$_POST[hsc]')
      ");
      if(simpan) //jika simpan 
      {
        echo " <script>
          alert('simpan data sukses!');
          document.location='indeks.php':
        </script>";
      }
      else 
      {
        echo " <script>
        alert('simpan data gagal!');
        document.location='indeks.php':
      </script>";
      }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <br><br>

    <!--Header -->
    <div class = "container">
    <img src="https://hubla.dephub.go.id/hubla/img/logo.png"  alt="hubla" width="500x"> 
    <ul class="nav justify-content-end">
  <li class="nav-item">
   <a class="nav-link active" aria-current="page" href="#">Kementrian Perhubungan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Hublapedia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Peta Situs</a>
  </li>
</ul>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style = "background-color:#00008B;">
<div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pelayanan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Publikasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PPID(SI DOEL)
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button type="button" class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
    </div>
</nav>
<!-- Akhir navbar -->
</head>

  <body>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jfif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Akhir carousel -->
<br><br>

<!-- Form -->
<form name="proses_post.php"action="proses_get.php" method="get">
<div class="container"> 
<div class="card">
  <div class="card-header" style="background-color: #00008B">
    <h5 align = "center" style="color: white"> FORMULIR CHECKLIST PERMOHONAN SERTIFIKAT KAPAL KECEPATAN TINGGI (HIGH SPEED CRAFT/HSC) </h5>  
</div>
    <div class="card-body">
    <div class="nav justify-content-end">
    <input type="datetime-local"/> 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Kapal</label>
  <input type="identitas" class="form-control" id="exampleFormControlInput1" placeholder="Nama Kapal" name="nk">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Pemilik Kapal</label>
  <input type="identitas" class="form-control" id="exampleFormControlInput1" placeholder="Nama Saudara/i" name="pk">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Surat Permohonan</label>
  <input type="isi" class="form-control" id="exampleFormControlInput1" placeholder="Pengaduan/Perijinan/Daftar ulang..." name="sp">
</div>
<label for="exampleFormControlInput1" class="form-label" name="hsc">Sertifikat High Speed Craft (HSC)</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="hsc" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="hsc" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
<label for="exampleFormControlInput1" class="form-label">Jumlah Penangkapan Bulan Lalu</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Text input with dropdown button" name="trip">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Berat</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item"name="trip">Ton</a></li>
    <li><a class="dropdown-item"name="trip">Kuintal</a></li>
    <li><a class="dropdown-item"name="trip">Kg</a></li>
  </ul>
</div>
  <label for="exampleFormControlInput1" class="form-label" name="brevet">Sertifikat Brevet A dan B</label>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="brevet">
  <label class="form-check-label" for="flexCheckDefault">
    Sertifikat Brevet A
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="brevet" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Sertifikat Brevet B
  </label>
</div>
<br>
  <label for="exampleFormControlInput1" class="form-label" name="ltk">Sertifikat Lambung Timbul Kapal </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="ltk" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="ltk" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
<br>
<label for="exampleFormControlInput1" class="form-label" name="skp">Sertifikat Klasifikasi Kapal</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="skp" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="skp" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
<br>
<label for="exampleFormControlInput1" class="form-label" name="spkp">Surat Pernyataan / Keterangan Kapal (Non Klas)</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="spkp" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="spkp" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
<br>
<label for="exampleFormControlInput1" class="form-label" name="suk">Surat Ukur Kapal</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="suk" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="suk" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
<br>
<label for="exampleFormControlInput1" class="form-label" name="sl">Surat Laut / Grosse Akte Kapal</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sl" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Ada
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sl" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Tidak
  </label>
</div>
<br>
<label for="exampleFormControlInput1" class="form-label" name="dg">Laporan Pemeriksaan Dangerous Goods / Fitness</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="dg" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Sudah
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="dg" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Belum
  </label>
</div>
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"name="hsc">Pemeriksaan Oleh Marine Inspector Dari Syahbandar / KSOP Kelas</label>
  <input type="identitas" class="form-control" id="exampleFormControlInput1" placeholder="Kelas KSOP - Nama Pemeriksa" name="hsc">
</div>
<br>
<p>Pernyataan permohonan: Data-data dan dokumen yang disampaikan adalah benar sesuai dnegan dokumen aslinya. 
Apabila ketidakbenaran/pemalsuan terhadap data dan dokumen yang disampaikan, pemohon bersedia dituntut dan diberikan sanksi sesuai ketentuan yang berlaku</p>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button" name="simpan">Simpan</button>
  <button class="btn btn-primary" type="button" style="background-color:green;">Kosongkan</button>
</div>
</div>
</div>
</div>
</div>
</form>
<!-- Akhir Form -->

  <!-- Awal Tabel -->
  <br>
<div class="card">
  <div class="card-header">
  <h5> DAFTAR FORMULIR CHECKLIST PERMOHONAN SERTIFIKAT KAPAL KECEPATAN TINGGI (HIGH SPEED CRAFT/HSC) </h5>
</div>
    
    <table class="table table-bordered table-stripped">
        <tr>
            <th> DD/MM/YYY </th>
            <th> No. </th>
            <th> Nama Kapal </th>
            <th> Pemilik Kapal </th>
            <th> Surat Permohonan </th>
            <th> Sertifikat High Speed Craft (HSC) </th>
            <th> Jumlah Trip Penangkapan Bulan lalu</th>
            <th> Sertifikat Brevet A & B </th>
            <th> Sertifikat Lambung Timbul Kapal </th>
            <th> Sertifikat Klasifikasi Kapal </th>
            <th> Surat Pernyataan / Keterangan Kapal (Non Klas) </th>
            <th> Surat Ukur Kapal</th>
            <th> Surat Laut / Grosse Akte Kapal </th>
            <th> Laporan Pemeriksaan Dangerous Goods / Fitness </th>
            <th> Pemeriksaan Oleh Marine Inspector Dari Syahbandar / KSOP Kelas (...) </th>
            <th> Aksi </th>
        </tr>
        <?php
            $tampil = mysqli_query($koneksi, "SELECT * from checklisthsc order by id_pengaju desc");
            while($data = mysqli_fetch_array($tampil));
         ?>

            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['id_pengaju']?></td>
                <td><?=$data['nama_kapal']?></td>
                <td><?=$data['pemilik_kapal']?></td>
                <td><?=$data['surat_permohonan']?></td>
                <td><?=$data['sertifikat_hsc']?></td>
                <td><?=$data['jumlah_trip']?></td>
                <td><?=$data['sertifikat_brevet']?></td>
                <td><?=$data['sertifikat_ltk']?></td>
                <td><?=$data['sertifikasi_klaskapal']?></td>
                <td><?=$data['surat_ukurkapal']?></td>
                <td><?=$data['surat_laut']?></td>
                <td><?=$data['laporan_fitness']?></td>
                <td><?=$data['pemeriksaan']?></td>
                <td> 
                    <a href="#" class="btn btn-warning"> Edit </a>
                    <a href="#" class="btn btn-danger"> Hapus </a>
        </tr>
       <?php  endif:?>
            <?php endwhile; ?> 
    </table>
</div>
</div>
</div>
</div>

<br>
<footer style = "background-color:#00008B; color: white">
 © 2021 Nabila Tufailah (2003155)
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

</html>