<?php

     function salam($waktu ="Datang", $nama="user"){
       return "Hello, $nama selamat $waktu!" ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User defined function</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Arial';
            color: #222;
            display: flex;
            height: 100vh;
        }

        h1{
            margin: auto;
        }
    </style>
</head>
<body>
    <h1><?= salam('Pagi','Rian') ?></h1>
</body>
</html>