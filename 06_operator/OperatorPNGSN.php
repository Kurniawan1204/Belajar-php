
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body class="p-3 bg-warning bg-opacity-50">
       <!--
    Fungsi var_dump() mengembalikan tipe data dan nilainya -->
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
<div class=" card border alt text-white bg-dark bg-opacity-50 mx-auto p-3 m-5" style="width: 245px;">
<p>Pengoprasian operator penugasan</p>
<!-- Penugasan -->
<?php
$nilaiMatematika = 8;
$rataRata = (10 + 7 + $nilaiMatematika) / 3;

$namaDepan = "Nurul";
$namaLengkap = "{$namaDepan} Huda";

$a = 5;
$a += 10; # sama dengan $a = $a + 10;
echo var_dump($a) . "<br>";

$a -= 20; # sama dengan $a = $a - 20;
echo var_dump($a) . "<br>";

$a *= 100; # sama dengan $a = $a * 100;
echo var_dump($a) . "<br>";

$a /= 10; # sama dengan $a = $a / 10;
echo var_dump($a) . "<br>";
?>
</div>
</html>
</body>