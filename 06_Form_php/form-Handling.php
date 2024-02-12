<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="d-flex p-3 mt-3">
     <div class="card bg-info bg-opacity-75 w-25">
        <div class="card-body">
            <form action="welcome.php" class="p-3 m-3" method="post">
            <label>Name:</label> <input class="m-2 p-2" type="text" name="name" value="Kurniawan"><br>
            <label>E-mail:</label> <input class="m-2 p-2" type="text" name="email"><br>
            <input class="mt-3 bg-primary text-white" type="submit">
            </form>
        </div>
    </div>
    <!-- <div class="card bg-info bg-opacity-75 w-25">
        <div class="card-body"
            <form action="welcome.php" class="p-3 m-3" method="post">
            Name: <input type="text" name="name" value="Kurniawan"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
            </form>
        </div>
    </div> -->
</div>    
</body>
</html>
