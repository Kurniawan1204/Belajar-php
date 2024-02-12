<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
</head>
<style>
  body {
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(178,106,214,1) 0%, rgba(243,0,255,1) 30%, rgba(112,200,217,1) 100%, rgba(57,240,81,1) 100%, rgba(136,198,209,1) 100%);
  }
  </style>
<body class="d-flex me-5">  

<div class="card h-75 mb-3 mx-auto p-3 bg-info mt-3" style="max-width: 345px;">
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
<?php
// define variables and set to empty values
$name = $email =$sekolah  = $alamat = $gender = "";  //Mwnyambungkan atau menghubungkan variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $sekolah = test_input($_POST["sekolah"]);
  $alamat = test_input($_POST["alamat"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="card  border-primary mb-3 mx-auto p-2 mt-3" style="max-width: 24rem;"> 
  <div class="card-body"> 
    <h2 class="text-primary"> PHP Form Validation</h2><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
<!--Text Fields  -->
  Name: <input type="text" name="name" value="Kurniawan">
  <br><br>
  E-mail: <input type="text" name="email" value="2223601.kurniawan@smkn-2sbg.sch.id">
  <br><br>
  Sekolah <input type="text" name="sekolah" value="Smk Negri 2 Subng">
  <br><br>
  Alamat: <textarea name="alamat" rows="3" cols="20"></textarea>
  <br><br>

  <!-- RADIO BUTTONS -->
  Gender:
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="other"> Other
  <br><br>
  <input class="bg-primary text-white" type="submit" name="submit" value="Submit">  
</form>
  </div>
</div>


<div class="card h-75 mt-3 ms-5 bg-dark bg-opacity-50 text-white" style="max-width: 24rem;">
<?php
echo "<h2>Your Input :</h2>";
echo  $name;
echo "<br>";
echo  $email;
echo "<br>";
echo   $sekolah;
echo "<br>";
echo   $alamat;
echo "<br>";
echo   $gender;
?>
</div>
</body>
</html>
