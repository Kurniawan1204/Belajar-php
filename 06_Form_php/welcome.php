<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="p-2 mt-3 text-20">
     <div class="card bg-success text-white border alt w-25">
        <div class="card-body">
Welcome <?php echo $_POST["name"]; ?><br> <!--$_GET dan $_POST digunakan untuk mengumpulkan data formulir.-->
Your email address is: <?php echo $_POST["email"]; ?>
</div>
</div>
</div>
</body>
</html>