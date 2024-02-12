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
		<link href="style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr mt-5">

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


        <!-- atribut action="upload.php" artinya kita akan mengirim filenya ke upload.php;
             atribut enctype atribut ini wajib disertakan untuk form upload;
             atribut name akan menjadi nama indeks di dalam PHP. -->
<div class="card custom-card col-sm-24 col-md-4 mx-auto">
        <form action="upload.php" method="post" enctype="multipart/form-data"  >
        Pilih file: <input class="tx-primary" type="file" name="berkas" />
        <input class="tx-primary pos-absolute r-25 rounded-5" type="submit" name="upload" value="upload" />
    </form> 
</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
</div>
</div>
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