<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL TIPE DATA</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class="d-flex ">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body class="p-3 ms-4">
       <!-- Jenis-jenis tipe data php yang ada W3school adalah:
     Integer = Berisi bilangan bulat
     Float	= Berisi bilangan desimal
     Boolean = Berisi 2 nilai saja: true dan false
     String	= Berisi data teks yang diapit oleh tanda '' atau ""
     Array =  Berisi himpunan data
     Object
     NULL 
    Fungsi var_dump() mengembalikan tipe data dan nilainya -->
<div class="card border-dark mb-3 mx-auto mt-3 p-3 mg-t-5 bg-dark bg-opacity-50 h-75" style="max-width: 25rem;">
  <div class="card-header bg-secondary fs-4"><strong>Tipe data</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">1. Integer</h5>
    <p class="card-text  "> integer adalah tipe data bilangan bulat baik yang positif maupun negatif dengan range tertentu. Dengan kata lain, dalam data integer tidak ada huruf maupun bilangan desimal. Contoh data integer adalah 1, 59, 899, -20, dan sebagainya.</p>
    <strong>Contoh Integer :</strong>
    <br>
    <?php 
    # inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

# Tampilkan data dengan perintah echo
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

# mengetahui tipe data dari variabel
var_dump($e);

?>    
</div>
</div>
</div>
</body>
</html>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   

<div class="card border-dark mb-3 mx-auto p-3 mg-t-5  bg-dark bg-opacity-50" style="max-width: 25rem;">
  <div class="card-header  bg-secondary fs-4 "><strong>Tipe data</strong></div>
  <div class="card-body text-white">
    <h5 class="card-title">2. Float</h5>
    <p class="card-text">Tipe data ini adalah tipe data yang paling simpel, akan tetapi butuh logika yang kuat untuk bisa memanfaatkannya dengan benar</p>
 
    <strong>Contoh Float :</strong>
    <br>
        <!-- Untuk tipe data float, caranya sama saja dengan integer. Hanya saja, ia menerima data desimal dengan angka . sebagai pembaginya. -->
        <?php
        $nilaiMatematika = 5.1;
        $nilaiIPA = 6.7;
        $nilaiBahasaIndonesia = 9.3;
        
        # hitung nilai rata-rata
        $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
        
        # Tampilkan data
        
        echo "Matematika: {$nilaiMatematika} <br>";
        echo "IPA: {$nilaiIPA} <br>";
        echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
        echo "Rata-rata: {$rataRata} <br>";
        
        # lihat tipe data dari variabel $rataRata
        var_dump($rataRata);
        ?>
</div>
</div>        
</body>
</html>
<br>
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
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50 h-75" style="max-width: 25rem;">
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
</div>
</div>
</div>
</body>
</html>
<br>
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
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50" style="max-width: 25rem;">
  <div class="card-header bg-secondary fs-4"><strong>Tipe data</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">4. String</h5>
    <p class="card-text"> Tipe data ini bisa menampung banyak karakter sekaligus. String adalah tipe data untuk teks yang terdiri dari gabungan huruf, angka, dan berbagai karakter. Fungsi ini digunakan untuk membuat identifier string atau teks.</p>
 
    <strong>Contoh String :</strong>
    <br>
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>
<br>
 
</div>  
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<body class="p-3 ">

<!-- Jenis-jenis tipe data php yang ada W3school adalah:
     Integer = Berisi bilangan bulat
     Float	= Berisi bilangan desimal
     Boolean = Berisi 2 nilai saja: true dan false
     String	= Berisi data teks yang diapit oleh tanda '' atau ""
     Array =  Berisi himpunan data
     Object
     NULL 
-->
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50 h-100" style="max-width: 25rem;">
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
</div>
</div>     
</body>
</html>
<br>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<link rel="stylesheet" href="index.css">

<!-- IDENTITAS -->
<body class="p-3">
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50 h-100" style="max-width: 25rem;">
  <div class="card-header bg-secondary fs-4"><strong>Tipe data</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">6. Object</h5>
    <p class="card-text  "> Tipe data object adalah tipe data yang tidak sekedar menyimpan data tetapi berisikan juga informasi bagaimana untuk mengolah data tersebut.</p>
    <strong>Contoh Object :</strong>
    <br>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

</div>
</div>
</div>
</body>
</html>
<br>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<link rel="stylesheet" href="index.css">

<body class="p-3">
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50 h-100" style="max-width: 25rem;">
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
</div>
</div>
</div>
</body>
</html>

</body>
</html>
