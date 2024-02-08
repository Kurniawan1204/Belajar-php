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
<div class=" card border alt bg-dark bg-opacity-50 mx-auto text-white p-3 m-5" style="width: 245px;">
<p>Pengoprasian Operator Perbandingan</p>
<?php

$nilai = 90;
# membanding variabel
$lulus = $nilai > 80;

echo "{$nilai} > 80 = ";
var_dump($lulus);
echo "<br>";

# membandingkan langsung angka
echo "3 >= 3 = ";
var_dump(3 >= 3);
echo "<br>";

echo "3 < 6 = ";
var_dump(3 < 6);
echo "<br>";

echo "5 <= 3 = ";
var_dump(5 <= 3);
echo "<br>";


# anda juga bisa membandingkan antar 2 string
echo "'a' < 'b' = ";
var_dump('a' < 'b');
echo '<br>';

echo "'abc' < 'b' = ";
var_dump('abc' < 'b');
echo '<br>';
?>

</div>
</html>
</body>