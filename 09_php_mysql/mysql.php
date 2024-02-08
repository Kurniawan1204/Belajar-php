<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "data_taruna";
        // MySQL adalah perangkat lunak server database.
$db = mysqli_connect($host,$user,$pass,$db); // Mengkoneksikan atau menghubungkan ke database
if(!$db){
    die("tidak bisa terkoneksi ke database");
}
$NIT     =  "";
$NAMA    =  "";
$KELAS   =  "";     
$JURUSAN =  "";
$sukses  = "";
$error   = "";

if(isset($_POST['simpan'])){
    $NIT     =  $_POST['NIT'];
    $NAMA    =  $_POST['NAMA'];
    $KELAS =  $_POST['KELAS'];
    $JURUSAN  =  $_POST['JURUSAN'];
    // MENGINPUT DATA KE TABLE DATABASE
if($NIT && $NAMA && $KELAS && $JURUSAN){
        $sql1 =  "insert into nama_taruna(NIT,NAMA,KELAS,JURUSAN) values ('$NIT','$NAMA', '$KELAS', '$JURUSAN')";
        $q1  = mysqli_query ($db, $sql1);
        if($q1){
            $sukses   =  "Data berhasil dimasukkan"; // kondisi if else diperlukan untuk melakukan suatu aksi.
        }else{
            $error    =  "Data gagal dimasukkan";
        }
    }else{
        $error = "Silahkan masukan data terlebih dahulu";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Taruna</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body class="d-block">
<div class="card mb-3 h-25 mx-auto p-3 bg-info mt-5" style="max-width: 345px;">
  <div class="row g-0 ">
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
    <div class="p-3">
        <!-- untuk memasukan data -->
<div class="card mt-5 me-3 bg-primary bg-opacity-50 text-white border alt" style="width: 650px;" >
     <div class="card-header bg-warning bg-opacity-75">
     <a href="">Edit Data</a></span> / Form input
       </div> 
    <div class="card-body">
       <?php
       if($error){
        ?>
        <div class="alert alert-danger" role="alert" style="width: 20rem;">
            <?php
                echo $error ?>
        </div>
        <?php        
       } 
       ?>
       <?php
       if($sukses){
            ?>
            <div class="alert alert-success" role="alert" style="width: 20rem;">
                <?php
                    echo $sukses ?>
            </div>
            <?php  
       }
       ?>
       <!-- FORM DATABASE -->
       <form action="" method="POST">
          <div class="mb-3 row">
                <label for="NIT" class="col-sm-2 col-form-label">NIT :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NIT" name="NIT" value="<?php echo $NIT ?>">
            </div>    
         </div>
         <div class="mb-3 row">
                <label for="NAMA" class="col-sm-2 col-form-label">NAMA :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NAMA" name="NAMA" value="<?php echo $NAMA ?>">
            </div>    
         </div>
        <div class="mb-3 row">
                <label for="KELAS" class="col-sm-2 col-form-label">KELAS :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="KELAS" name="KELAS" value="<?php echo $KELAS ?>">
            </div>
          </div>
            <div class="mb-3 row">
                <label for="JURUSAN" class="col-sm-2 col-form-label">JURUSAN :</label>
            <div class="col-sm-10  ">
               <select class="form-control" name="JURUSAN" id="JURUSAN" class="text-white">
                        <option value="" class="text-primary"> JURUSAN </option>
                        <option value="RPL"
                         <?php
                            if($JURUSAN == "RPL") echo "selected"
                        ?>>RPL</option>
                        <option value="TITL"
                         <?php
                            if($JURUSAN == "TITL") echo "selected"
                        ?>>TITL</option>
                        <option value="NKPI"
                         <?php
                            if($JURUSAN == "NKPI") echo "selected"
                        ?>>NKPI</option>
                        <option value="ATPH"
                         <?php
                            if($JURUSAN == "ATPH") echo "selected"
                        ?>>ATPH</option>
                     </select>
               </div>           
           </div>  
         <div class="col-12">
            <input type="submit" name="simpan" class="btn btn-primary">
        </div>
            </form> 
            <!-- END FORM DATA -->
    </div>       
    </div>
</div>
</body>
</html>