<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
</head>
<body class="p-3 m-3 mx-auto">
    <div class="card col-sm-12 col-md-4 p-3 mx-auto bg-black bg-opacity-10  border border-primary ">
<h1><strong>Hasil penyimpanan</strong></h1>
<div class="card-body bg-dark bg-opacity-25 text-white border border-primary">
<?php
// Kode PHP untuk Upload File
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// Artinya: file yang kita upload akan ditampung dalam variabel $_FILES. Variabel ini merupakan sebuah array yang menampung data tentang file-nya.
// Di sana ada beberapa indeks:
// name adalah nama file yang di-upload;
// type adalah jenis file yang di-upload;
// tmp_name adalah nama file yang berada di dalam direktori temporer server;
// error menyatakan apakah ada error atau tidak;
// size adalah ukuran file-nya.


// Memindahkan File yang sudah di-upload
// Untuk memindahkan file ini ke dalam direktori aplikasi kita, maka kita membutuhkan sebuah fungsi bernama: move_uploaded_file().

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "gambar/";

// pindahkan file
$gambar = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($gambar) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}
?>
</div>
</div>
</body>
</html>