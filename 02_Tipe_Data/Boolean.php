<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body class="p-3">
       <!-- Jenis-jenis tipe data php yang ada W3school adalah:
     Integer = Berisi bilangan bulat
     Float	= Berisi bilangan desimal
     Boolean = Berisi 2 nilai saja: true dan false
     String	= Berisi data teks yang diapit oleh tanda '' atau ""
     Array =  Berisi himpunan data
     Object
     NULL 
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

<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50 h-75" style="max-width: 45rem;">
  <div class="card-header bg-secondary fs-4"><strong>Tipe data</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">3. Boolean</h5>
    <p class="card-text">Tipe data ini adalah tipe data yang paling simpel, akan tetapi butuh logika yang kuat untuk bisa memanfaatkannya dengan benar</p>
    <strong>Contoh Boolean :</strong>
    <!-- Tipe data boolean hanya bisa menampung nilai true atau false. -->
    <!-- Tipe data ini adalah tipe data yang paling simpel, akan tetapi butuh logika yang kuat untuk bisa memanfaatkannya dengan benar. -->
 <br>
 <?php

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
?>

<div class="card-footer mt-3 d-flex justify-content-between">
    <form action="float.php" class="">
      <button type="submit" class="btn btn-dark">BACK</button>
    </form>
    <form action="string.php" class="">
      <button type="submit" class="btn btn-outline-primary">NEXT</button>
    </form>
     
</div>     
</body>
</html>