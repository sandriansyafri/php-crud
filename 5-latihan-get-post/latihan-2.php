<?php
    if(!isset($_GET["name"]) ||
       !isset($_GET["nrp"]) ||
       !isset($_GET["email"]) ||
       !isset($_GET["direction"])) {
           /** Redirect */
           header('Location: latihan-1.php');
           exit;
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST | Page 2</title>
    <style>

        body{
            width: 90%;
            margin: 20px auto;
        }
        table{
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th,td{
            padding: 15px;
        }
    </style>
</head>
<body>

    <h1>Detail Mahasiswa</h1>

    <table border="1px">
        <tbody>
            <tr>
                <td>Name</td>
                <td><?= $_GET["name"] ?></td>
            </tr>
            <tr>
                <td>Nrp</td>
                <td><?= $_GET["nrp"] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $_GET["email"] ?></td>
            </tr>
            <tr>
                <td>Direction</td>
                <td><?= $_GET["direction"] ?></td>
            </tr>
        </tbody>
    </table>

    <a href="latihan-1.php">Kembali ke daftar mahasiswa</a>
        
</body>
</html>