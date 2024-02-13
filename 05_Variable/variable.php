<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../asset/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="card mb-3 mx-auto p-3 bg-info mt-3" style="max-width: 345px;">
  <div class="row g-0  ">
    <div class="col-md-4">
      <img src="FOTO KURNIAWAN.jpeg" class=" img-fluid img-thumbnail bg-primary rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-white">IDENTITAS</h5>
        <p class="card-text">Kurniawan XI RPL</p>
        <p class="card-text"><small class="text-body-secondary">Tanggal pengumpulan : 06/02/2024</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50" style="max-width: 25rem;">
  <div class="card-header bg-secondary fs-4"><strong>Variable</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">Variable</h5>
      <p class="card-text"> Tipe data ini bisa menampung banyak karakter sekaligus. String adalah tipe data untuk teks yang terdiri dari gabungan huruf, angka, dan berbagai karakter. Fungsi ini digunakan untuk membuat identifier string atau teks.</p>

    <strong>Contoh :</strong>
    <br>

<!-- 1. Variabel Local
Variabel local adalah variabel yang di definisikan di dalam sebuah fungsi dan hanya dapat di gunakan 
di dalam fungsi tersebut. Seperti contoh di bawah: -->
<?php
  
  function namepegawai(){
  
  	$name = "KURNIAWAN rpl";
  	echo $name; // Menampilkan nilai dari variabel local "Mandan Koding"
  
  }

  ?>
  <!-- 2. Variabel Global
Variabel global adalah variabel yang di definisikan di luar fungsi, ketika kita ingin menggunakan fungsi tersebut kita tinggal mendeklarasikan 
di dalam fungsi yang kita buat dan menambahkan kata “global” di depan variabel saat di deklarasikan. Seperti contoh di dibawah: -->
<?php
  
  $nama_peserta = "Halo";

  function Variabel_global() {
    
    global $nama_peserta;
    echo $nama_peserta;
    
  }

	Variabel_global();
    // akan menampilkan hasil dari function yang telah di echo kan dari variavel $nama_pegawai
  
    echo $nama_peserta;
	// akan menampilkan nilai dari deklarasi variabel $nama_pegawai
?>
</div>
</div>
</body>
</html>