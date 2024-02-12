<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<style>
.error {color: #FF0000;}
body {
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(178,106,214,1) 0%, rgba(243,0,255,1) 30%, rgba(112,200,217,1) 100%, rgba(57,240,81,1) 100%, rgba(136,198,209,1) 100%);
  }
</style>
</head>
<body class="d-flex flex-row me-5">  
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
$nameErr = $emailErr = $genderErr = $sekolahErr = "";
$name = $email = $gender = $alamat = $sekolah = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["sekolah"])) {
    $sekolahErr = "";
  } else {
    $sekolah = test_input($_POST["sekolah"]);
  }

  if (empty($_POST["alamat"])) {
    $alamatErr  = "";
  } else {
    $alamat = test_input($_POST["alamat"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="card  border-primary border border-5 mb-5 mx-auto p-2 mt-3" style="max-width: 30rem;"> 
  <div class="card-body"> 
<h2 class="text-dark">PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
   <!-- TEXT FIELDS -->
   Name: <input class="from-control border-success"   type="text" name="name" value="Kurniawan">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input class="from-control border-success"  type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Sekolah : <input class="from-control border-success" type="text" name="sekolah">
  <span class="error"><?php echo $sekolahErr;?></span>
  <br><br>
  Alamat <textarea class="from-control border-success"   name="alamat" rows="5" cols="40"></textarea>
  <br><br>

  <!-- RADIO BUTTONS -->
  Gender: <br>
  <input type="radio" name="gender" value="female">Female <br>
  <input type="radio" name="gender" value="male">Male <br>
  <input type="radio" name="gender" value="other">Other 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input class="bg-light" type="submit" name="submit" value="Submit">  
</form>
</div>
</div>
<div class="card ms-5 bg-dark bg-opacity-50 text-white p-3 me-5 h-75 mt-5" style="max-width: 25rem;">
<?php
echo "<h2>Your Input:</h2>";
echo   $name;
echo "<br>";
echo   $email;
echo "<br>";
echo   $sekolah;
echo "<br>";
echo   $alamat;
echo "<br>";
echo  $gender;
?>
</div>
</body>
</html>