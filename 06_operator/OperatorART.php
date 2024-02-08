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
   <!-- Fungsi var_dump() mengembalikan tipe data dan nilainya -->
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
<p>Pengoprasian Artimatika</p>
<?php
$a = 5; // integer
$b = 10; // String

# operator aritmatika standar

# Additon
echo "{$a} + {$b} =" . ($a + $b) . "<br>";  
# Subtraction
echo "{$a} - {$b} =" . ($a - $b) . "<br>"; 
# Multiplication
echo "{$a} * {$b} =" . ($a * $b) . "<br>";
# Division 
echo "{$a} / {$b} =" . ($a / $b) . "<br>";  
# Modulus
echo "{$a} % {$b} =" . ($a % $b) . "<br>";
# Eksponsia
echo "{$a} ** {$b} =" . ($a ** $b) . "<br>";
#negasi
echo "-a=". (-$a) . "<br>";
?>
</div>

</hmtl>
</body>