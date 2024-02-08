<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<body class="p-3">

<!-- Jenis-jenis tipe data php yang ada W3school adalah:
     Integer = Berisi bilangan bulat
     Float	= Berisi bilangan desimal
     Boolean = Berisi 2 nilai saja: true dan false
     String	= Berisi data teks yang diapit oleh tanda '' atau ""
     Array =  Berisi himpunan data
     Object
     NULL 
-->
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
    <h5 class="card-title">5. Array</h5>
    <p class="card-text"> Array sering juga dikenal sebagai larik. Array adalah sekumpulan variabel yang mempunyai tipe data yang sama dan diidentifikasikan dengan memakai satu nama saja.</p>
    <strong>Contoh  Array :</strong>
    <br>
<?php
// Deklarasi array
$cars = array("Volvo", "BMW", "Toyota");

// Akses elemen array menggunakan indeks
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// Menambah elemen baru ke dalam array
$cars[] = "Honda";

// Loop melalui array
echo "<ul>";
foreach ($cars as $car) {
    echo "<li>$car</li>";
}
echo "</ul>";

// Jumlah elemen dalam array
echo "Jumlah mobil dalam array: " . count($cars);
?>

<div class="card-footer d-flex justify-content-between">
    <form action="string.php" class="">
      <button type="submit" class="btn btn-dark">BACK</button>
    </form>
    <form action="object.php" class="">
      <button type="submit" class="btn btn-outline-primary">NEXT</button>
    </form>
</div>
</div>
</div>     
</body>
</html>