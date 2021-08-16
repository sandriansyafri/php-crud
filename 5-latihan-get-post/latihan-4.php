<?php
    if(!isset($_POST["name"])){
        header('Location: latihan-3.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | Page 4</title>
    <style>
        body{
            display: flex;
            height: 100vh;
            font-family: Arial;
            color: #333;
        }

        .item{
            text-align: center;
            margin: auto;
        }
    </style>
</head>
<body>

        <div class="item">
            <h1>Hello , <?= $_POST["name"] ?></h1>
            <a href="latihan-3.php">Kembali</a>
        </div>
    
</body>
</html>