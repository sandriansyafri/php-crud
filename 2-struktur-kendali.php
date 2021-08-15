<?php

    //* ===================================
    //* PERULANGAN ========================
    //* ===================================

    //* FOR 
    //TODO disable comment for run script
    // for($i = 0; $i< 5; $i++){
    //     echo "Hello World";
    //     echo "<br>";

    // }

    //* WHILE 
    //TODO disable comment for run script
    // $i = 0;
    // // while($i < 5){
    // //     echo "Hello ke-" . $i+1;
    // //     echo "<br>";
        
    // //     $i++;
    // // }

    //* DO WHILE 
    //TODO disable comment for run script
    
    // $i = 0;
    // do{
    //     echo "Hello ke - " . $i+1;
    //     echo "<br>";

    //     $i++;
    // } while($i < 3);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuktur Kendali</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            flex-direction: column;
            height: 100vh;
            font-family: Arial;
            color: #222;
            letter-spacing: 1px;
        }
        table{
            margin: auto;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            padding: 15px;
        }
    </style>
</head>
<body>
    <!-- Syntax HTML in PHP -->
        <!-- <?php 
            for($i = 0; $i<5; $i++) {
                echo "<h1>Hello</h1>";
            }
        ?> -->

    <!-- Syntax PHP and HTML -->
        <!-- <?php for($i = 1; $i<=3; $i++ ) : ?>
            <h1>Hello <?= $i; ?> </h1>
        <?php endfor ?> -->

    <!-- Latihan For -->
    <table border="1px">
            <tbody>
               <?php for($i = 0; $i < 3; $i++) : ?>
                <tr>
                        <?php for($j = 0; $j < 3; $j++) : ?>
                            <td><?= $i+1 . "," . $j+1 ?></td>
                        <?php endfor ?>
                </tr>
               <?php endfor ?>
            </tbody>
    </table>


</body>
</html>