<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../asset/bootstrap.min.css">
<link rel="stylesheet" href="index.css">

<!-- IDENTITAS -->
<body class="p-3 bg-warning bg-opacity-75">
  
<div class="card mb-3 mx-auto p-3 shadow bg-body-tertiary bg-info mt-3" style="max-width: 345px;">
  <div class="row g-0  ">
    <div class="col-md-4">
      <img src="FOTO KURNIAWAN.jpeg" class=" img-fluid img-thumbnail bg-primary rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body ">
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
<div class="card-footer mt-3 d-flex justify-content-between">
    <form action="array.php" class="">
      <button type="submit" class="btn btn-dark">BACK</button>
    </form>
    <form action="null.php" class="">
      <button type="submit" class="btn btn-outline-primary">NEXT</button>
    </form>
</div>
</div>
</div>
</div>
</body>
</html>
