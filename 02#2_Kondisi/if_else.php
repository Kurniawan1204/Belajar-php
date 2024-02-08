<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONDISI</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="Stylesheet" href="style.css">
</head>
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
<div class="card border-dark mb-3 mx-auto p-3 mg-t-5 bg-dark bg-opacity-50" style="max-width: 18rem;">
  <div class="card-header fs-4"><strong>Kondisi</strong></div>
  <div class="card-body text-light">
    <h5 class="card-title">Kondisi else,if dan elseif</h5>
    <strong>Contoh :</strong>
    <br>
    <!-- IF adalah salah satu pernyataan penyeleksian yang memungkinkan kita memanipulasi aliran jalannya program berdasarkan conditional expression.  -->
    <!-- else adalah pilihan terakhir yang akan dijalankan jika semua pilihan tidak memiliki nilai benar (true) pada kondisi yang ada. else merupakan pernyataan opsional untuk digunakan berdasarkan kebutuhan, jika tidak menggunakan pernyataan else maka keseluruhan dari pernyataan if akan diabaikan. -->
    <!-- else if adalah pilihan alternative dari penyeleksian untuk mencari kondisi yang diinginkan, else if memiliki fungsi yang sama seperti pernyataan if dan diletakan setelah pernyataan if. -->
<?php 
//if ,else dan elseif
$teman = "andi";
if($teman == "budi"){
	echo "dia adalah teman saya";     //jika kondisi terpenuhi
}elseif($teman == "andi"){       // Elseif digunakan untuk memeriksa jika kondisi pertama(if) tidak terpenuhi
	echo "Andi adalah teman saya";
}else{
	echo "saya tidak punya teman";     //jika kondisi tidak terpenuhi

}
?>
</div>
</div>
</div>
</body>
</html>