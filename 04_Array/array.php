<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title>PHP Upload file</title>

		<!--- Favicon --->
		<link rel="icon" href="icon.log.png" />

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr mt-5 p-3">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div>

		<!-- row -->
      <div class="row">
					<div class="col-sm-12 col-md-4 mx-auto ">
						<div class="card custom-card bd-primary bd-5 mx-auto ">
							<div class="card-body text-center bg-danger-transparent">
								<div class="user-lock text-center">
									<img alt="avatar" class="rounded-50" src="FOTO MUKA.jpg">
								</div>
								<h5 class="mb-1 mt-3 card-title tx-16 tx-bold">KURNIAWAN</h5>
								<p class="mb-2 mt-1 tx-inverse">SOFWARE ANGENEERING</p>
								<p class="mb-1"><i class="fe fe-phone me-2"></i>+62 813-9474-0078</p>
						
								<p class="text-muted text-center mt-1">Lorem Ipsum is not simply random text to popular belief Contrary.</p>
								<div class="justify-content-center text-center mt-3 d-flex">
									<a   href="https://www.facebook.com/kurniawan.soleh.56?mibextid=ZbWKwL" class="btn ripple btn-primary btn-icon me-3">
                  					<i class="fab fa-facebook-f"></i>
									</a>
									<a   href="https://instagram.com/wanxyzt?igshid=MzNlNGNkZWQ4Mg" class="btn ripple btn-danger btn-opacity-50 btn-icon me-3">
										 <i class="fab fa-instagram"></i>
                					</a>
									<a   href="https://github.com/Kurniawan1204/Belajar-php.git" class="btn ripple btn-dark btn-icon me-3">
                  					<i class="fab fa-github"></i>
              						 </a>
								</div>
							</div>
						</div>
					</div>
				</div>


       <!-- array adalah salah satu struktur data yang berisi sekumpulan data dan memiliki indeks. Indeks digunakan untuk mengakses nilai array.
        Indeks array selalu dimulai dari nol (0). -->
        <!-- Array di PHP dapat kita buat dengan fungsi array() dan tanda kurung kotak []. -->

				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
</div>
</div>
<?php
// // membuat array kosong
// $buah = array();
// $hobi = [];

// // membuat array sekaligus mengisinya
// $minuman = array("Kopi", "Teh", "Jus Jeruk");
// $makanan = ["Nasi Goreng", "Soto", "Bubur"];

// // membuat array dengan mengisi indeks tertentu
// $anggota[1] = "Dian";
// $anggota[2] = "Muhar";
// $anggota[0] = "Petani Kode"
// membuat array
// $barang = ["Buku Tulis", "Penghapus", "Spidol"];

// // menampilkan isi array
// echo $barang[0]."<br>";
// echo $barang[1]."<br>";
// echo $barang[2]."<br>"; //Tapi cara ini kurang efektif, karen akita mencetak satu per satu. Nanti kalau datanya ada 1000, berarti harus ngetik peritnah echo sebanyak 1000.
// Biasanya kita menggunakan perulangan.
// membuat array
// $barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array dengan perulangan for
// for($i=0; $i < count($barang); $i++){
//     echo $barang[$i]."<br>";
// }
// Kita bisa menggunakan fungsi count() untuk menghitung banyaknya isi array. Pada contoh di atas isi array sebanyak 3, maka perulangan akan dilakukan sebanyak 3x.
// echo "<hr>";

// menampilkan isi array dengan perulangan while
// $i = 0;
// while($i < count($barang)){
//     echo $barang[$i]."<br>";
//     $i++;
// }
// Untuk menghapus isi array, kita bisa menggunakan fungsi unset(). Fungsi ini juga dapat digunakan untuk menghapus variabel.
// / membuat array
// $hewan = [
//     "Burung",
//     "Kucing",
//     "Ikan"
// ];

// menghapus kucing
// unset($hewan[1]);

// echo $hewan[0]."<br>";
// echo $hewan[1]."<br>";
// echo $hewan[2]."<br>";

// echo "<hr>";

// echo "<pre>";
// print_r($hewan);
// echo "</pre>";
// Pada contoh di atas, Kita menggunakan fungsi print_r() untuk menampilkan array secara mentah (raw). Biasanya fungsi ini digunakan untuk debugging.
// Ada dua cara yang bisa dilakukan untuk menambah isi array:
// Mengisi langsung ke nomer indeks yang ingin ditambahkan
// Mengisi langsung ke indeks terakhir

// membuat array
// $hobi = [
//     "Membaca",
//     "Menulis",
//     "Ngeblog"
// ];

// // menambahkan isi pada idenks ke-3
// $hobi[3] = "Coding";

// // menambahkan isi pada indeks terakhir
// $hobi[] = "Olahraga";

// // cetak array dengan perulangan
// foreach($hobi as $hobiku){
//     echo $hobiku."<br>";
// }

#Array Asosiatif
// Array asosiatif adalah array yang indeksnya tidak menggunakan nomer atau angka. Indeks array asosiatif berbentuk kata kunci.

// membuat array asosiatif
// $artikel = [
//     "judul" => "Belajar Pemrograman PHP",
//     "penulis" => "kurniawan",
//     "view" => 128
// ];

// // mencetak isi array assosiatif
// echo "<h2>".$artikel["judul"]."</h2>";
// echo "<p>oleh: ".$artikel["penulis"]."</p>";
// echo "<p>View: ".$artikel["view"]."</p>";
// Pada array asosiatif, kita menggunakan tanda => untuk mengasosiasikan sebuah kata kunci dengan isi array. Selain menggunakan tanda =>, kita juga bisa membuat array aosiatif seperti ini:
    // $email["subjek"] = "Apa Kabar?";
    // $email["pengirim"] = "dian@dabenjana.com";
    // $email["isi"] = "Apa kabar? sudah lama tidak berjumpa";
    
    // echo "<pre>";
    // print_r($email);
    // echo "</pre>";

    #Array Multi Dimensi
// Array multi dimensi adalah array yang memiliki dimensi lebih dari satu. Biasanya digunakan untuk membuat matrik, graph, dan stuktur data rumit lainnya.
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "petanikode"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}
?>
		<!--page closed -->
		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="../assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Select2 js --->
		<script src="../assets/plugins/select2/js/select2.min.js"></script>

		<!--- P-scroll js --->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>



		<!--- Sidebar js --->
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="../assets/js/sticky.js"></script>

		<!--- Right-sidebar js --->
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Index js --->
		<script src="../assets/js/script.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="../assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>