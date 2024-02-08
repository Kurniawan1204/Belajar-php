<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<link rel="stylesheet" href="index.css">

<body class="p-3">

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
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50 h-75" style="max-width: 45rem;">
  <div class="card-header bg-secondary fs-4"><strong>Tipe data</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">7. NULL</h5>
    <p class="card-text  "> Tipe data null adalah sebuah tipe data spesial yang menunjukkan sebuah variabel belum memiliki nilai/data.</p>
    <strong>Contoh Null :</strong>
    <br>
<?php
// Deklarasi variabel tanpa memberikan nilai
$variabel1 = NULL;

// Cek apakah variabel memiliki nilai NULL
if (is_null($variabel1)) {
    echo "Variabel1 memiliki nilai NULL";
} else {
    echo "Variabel1 tidak memiliki nilai NULL";
}

// Menghapus variabel
// unset($variabel1);

// Cek lagi setelah variabel dihapus
if (is_null($variabel1)) {
    echo "<br>Variabel1 memiliki nilai NULL setelah dihapus";
} else {
    echo "<br>Variabel1 tidak memiliki nilai NULL setelah dihapus";
}
?>
<div class="card-footer mt-3 d-flex justify-content-between">
    <form action="object.php" class="">
      <button type="submit" class="btn btn-dark">BACK</button>
    </form>
    <form action="integer.php" class="">
      <button type="submit" class="btn btn-outline-primary">NEXT</button>
    </form>
</div>
</div>
</div>
</div>
</body>
</html>
