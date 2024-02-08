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


<div class=" card border alt bg-dark mx-auto  bg-opacity-50 text-white p-3 m-5" style="width: 245px;">
<p>Pengoprasian COMPRASION :</p>
<?php
# Equal
var_dump(10 == "10");
echo "<br>";
# Identical
var_dump(10 === "10");
echo "<br>";

#Identical
var_dump(10 === 10);
echo "<br>";

# Not equel
var_dump(10 != "10");
echo "<br>";

#Not Equel
var_dump(10 <> "10");
echo "<br>";

#Not identical
var_dump(10 !== "10");
echo "<br>";

# Greater than
var_dump(10 > "10");
echo "<br>";

# Less Than
var_dump(10 < "10");
echo "<br>";
# 	Less than or equal to
var_dump(10 <= "10");
echo "<br>";
# Greater than or equal to
var_dump(10 >= "10");
echo "<br>";
# Spaceship
var_dump(10 <=> "10");
echo "<br>";
?>