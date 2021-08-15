<?php
    $numbers = [1,2,3,4,5];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: 'Arial';
            color: #333;
        }

        .frame{
            display: flex;
            column-gap: 5px;
            width: 80%;
            margin: 40px auto;
        }

        .box{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            background: #333;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: .3s ease;
        }

        .box:hover{
            border-radius: 50%;
            background: #222;
        }

    </style>
</head>
<body>

        <div class="frame">
            <?php foreach($numbers as $number) : ?>
                <div class="box"><?= $number ?></div>
            <?php endforeach ?>
        </div>
    
</body>
</html>