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
    <div class="card bg-dark bg-opacity-50 text-white border alt mx-auto p-3 m-5" style="width: 245px;">
        <p>Pengoperasian operator Logika</p>
        <?php
        print(true and true); // "and" Mengembalikan True jika dua statement sama-sama benar
        print(1 + 2 == 3 and true);
        print('----');
        print(false or 1 > 5); // "or" Mengembalikan True jika salah satu statement bernilai benar
        print(false or 5 > 2);
        print('----');
        print(! (1 > 5)); // "not" Menegasikan hasil. True menjadi False dan sebaliknya
        print(! (1 < 5));
        ?>
    </div>
</body>
</html>