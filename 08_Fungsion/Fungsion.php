<!DOCTYPE html>
<html>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fungsion</title>
  <link rel="stylesheet" href="../asset/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="p-3">

<!-- Fungsi adalah sekumpulan pernyataan yang dapat digunakan berulang kali dalam suatu program.
Suatu fungsi tidak akan dijalankan secara otomatis saat halaman dimuat.
Suatu fungsi akan dieksekusi dengan panggilan ke fungsi tersebut. -->

<!-- Deklarasi fungsi yang ditentukan pengguna dimulai dengan kata kunci "function" , diikuti dengan nama fungsi: -->

<!-- Contoh berikut memiliki fungsi dengan satu argumen ($fname). Saat familyName()fungsi dipanggil, kita juga meneruskan sebuah nama, misalnya ("Jani"), dan nama tersebut digunakan di dalam fungsi, yang menghasilkan beberapa nama depan berbeda, namun nama belakang sama: -->
<!-- IDENTITAS -->
<div class="card mb-3 mx-auto p-3 bg-info mt-3" style="max-width: 345px;">
  <div class="row g-0">
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
<div class="card bg-dark bg-opacity-50 border alt text-white mb-3 mx-auto p-3 mg-t-5 d-flex" style="max-width: 45rem;">
  <div class="card-header bg-secondary">FUNGSION</div>
  <div class="card-body">
    <h5 class="card-title">Fungsion</h5>
    <p class="card-text">Fungsi adalah sekumpulan pernyataan yang dapat digunakan berulang kali dalam suatu program.
Suatu fungsi tidak akan dijalankan secara otomatis saat halaman dimuat.
Suatu fungsi akan dieksekusi dengan panggilan ke fungsi tersebut.</p>
<strong>Contoh hasil pengoprasian FUNGSION :</strong><br>
<?php
// Dalam contoh kita, kita membuat sebuah fungsi bernama myMessage().
// Kurung kurawal pembuka {menunjukkan awal kode fungsi, dan kurung kurawal penutup }menunjukkan akhir fungsi.

// Fungsi ini menghasilkan "Halo dunia!".
function myMessage() {
  echo "Hello world!". "<br>";
}

myMessage();

// Contoh berikut memiliki fungsi dengan satu argumen ($fname)

// function familyName($fname) {
//     echo "$fname Refsnes.<br>";
//   }
  
//   familyName("Jani"); Saat familyName()fungsi dipanggil, kita juga meneruskan sebuah nama, misalnya ("Jani"), dan nama tersebut digunakan di dalam fungsi, yang menghasilkan beberapa nama depan berbeda, namun nama belakang sama:
//   familyName("Hege");
//   familyName("Stale");
//   familyName("Kai Jim");
//   familyName("Borge");
  

//   Contoh berikut memiliki fungsi dengan dua argumen ($fname, $year):
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege","1975");
  familyName("Stale","1978");
  familyName("Kai Jim","1983");

//   Nilai Argumen Default PHP 
// Contoh berikut menunjukkan cara menggunakan parameter default. 
// Jika kita memanggil fungsi setHeight()tanpa argumen maka nilai default akan diambil sebagai argumen:
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight();
  setHeight(135);
  setHeight(80);

// PHP - Mengembalikan nilai
// Untuk membiarkan suatu fungsi mengembalikan nilai, gunakan 'return' pernyataan:
// function sum($x, $y) {
//     $z = $x + $y;
//     return $z;
//   }
  
//   echo "5 + 10 = " . sum(5,10) . "<br>";
//   echo "7 + 13 = " . sum(7,13) . "<br>";
//   echo "2 + 4 = " . sum(2,4);

//  Passing Arguments by Reference
// function add_five(&$value) {
//     $value += 5;
//   }
  
//   $num = 2;
//   add_five($num);
//   echo $num;

//   Variabel Jumlah Argumen
// Dengan menggunakan ...operator di depan parameter fungsi, fungsi tersebut menerima argumen dalam jumlah yang tidak diketahui. Ini juga disebut fungsi variadik.
// Argumen fungsi variadik menjadi array.
function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a ."<br>";
// Anda hanya boleh memiliki satu argumen dengan panjang variabel, dan argumen tersebut harus menjadi argumen terakhir.
// Argumen variadik harus menjadi argumen terakhir:

function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;


?>
</div>
</div>
</div>
</body>
</html>
